<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Site;
use App\Siteinfo;
use App\Category;
use App\Post;
use App\Ad;
use App\Menu;
use App\Featuredpost;
use App\Pic;

class ApiController extends Controller
{
    protected $requestingsite;
    public function __construct()
    {
        
    }

   
    public function getSiteId($siteUrl)
    {
        $site = Site::where('siteUrl', $siteUrl)->first();
        return $site->id;
    }
    
    
    public function getViewComposer($lang, Site $site)
    {
        $menus = array();
        
        $menusText = $site->menus;
        $menusArray = explode(",", $menusText);
        for($i=0; $i<sizeof($menusArray); $i++)
        {
            $menuIndex = trim($menusArray[$i]);
            
            $menus[$menuIndex] = Menu ::with(array(
    				'children' => function ($query) {
        			$query->orderBy('display_order', 'asc');
   		 			}
					))->where('menu', $menuIndex)->whereNull('parent_id')
					->where( 'site_id' , $site->id)
					->where('language', $lang)
					->orderBy('display_order', 'asc')->get();
        }
        
        $siteinfo = Siteinfo::where('site_id', $site->id)->where('language', $lang)->get();
        
        return array('menus' => $menus, 'site' => $site, 'siteinfo' => $siteinfo);
        
        
    }
    
    public function getHomeData($w, $m, $n, $lang, Site $site)
    {
        $homeSliders = Ad::where('site_id' , $site->id)->where('language', $lang)->where('position', 1)->orderBy('display_order')->get();
        
        $category = Category::where('slug', $n)->first();
        
        $notifications = [];
        if($category) {
            $notifications = $category->posts()->where('language', $lang)->where('site_id', $site->id)->where('post_status', 'Published')->orderBy('display_order')->get();
        }
        
        $featuredposts = Featuredpost::where('language', $lang)->where('site_id', $site->id)->orderBy('display_order')->get();
        
        foreach($featuredposts as $featuredpost)
        {
            $postcategories = "";
            
            $post = $featuredpost->post;
            if($post->featured_pic_id) {
                $post->featured_pic = Pic::find($post->featured_pic_id)->picpath;
            }
            else
            {
                $post->featured_pic = "dummy.jpg";
            }
            
            $post->categories = $post->categories;
            
            $featurepost["post"] = $post;
            
        }
        
        $welcome = Post::where('slug', $w)->where('language', $lang)->where('site_id', $site->id)->first();
        if($welcome)
        {
            $welcome->featured_pic = Pic::find($welcome->featured_pic_id) ? Pic::find($welcome->featured_pic_id)->picpath:'';
        }
        
        $message = Post::where('slug', $m)->where('language', $lang)->where('site_id', $site->id)->first();
        if($message)
        {
            $message->featured_pic = Pic::find($message->featured_pic_id) ? Pic::find($message->featured_pic_id)->picpath:'';
        }
        
        return array('homeSliders' => $homeSliders, 'notifications' => $notifications, 'featuredposts' => $featuredposts, 'welcome' => $welcome, 'message' => $message);
    }

    public function getNavlinks($lang, $siteId, $menuname)
    {

		return Menu::with(array(
    				'children' => function ($query) {
        			$query->orderBy('display_order', 'asc');
   		 			}
					))->where('menu', $menuname)->whereNull('parent_id')
					->where( 'site_id' , $siteId)
					->where('language', $lang)
					->orderBy('display_order', 'asc')->get();
    }
    

    
    public function getCategoryPosts($slug, $lang, $siteId)
    {
        $category = Category::where('slug', $slug)->where('language', $lang)->where('site_id', $siteId)->first();
        //dd($category);
        $posts = [];
        if($category) {
            $posts = $category->posts()->with('categories')->where('language', $lang)->where('site_id', $siteId)->where('post_status', 'Published')->orderBy('display_order')->get();
        }
        
        if($posts)
        {
            foreach($posts as $post)
            {
                $post->featured_pic = Pic::find($post->featured_pic_id) ? Pic::find($post->featured_pic_id)->picpath:'';
            }
        }
        
        return $posts;
    }
    
    public function getPostByslug($slug, $lang, $siteId)
    {
        $post = Post::where('slug', $slug)->where('language', $lang)->where('site_id', $siteId)->first();
        $post->featured_pic = Pic::find($post->featured_pic_id) ? Pic::find($post->featured_pic_id)->picpath:'';
        

                $post->categoryname = $post->categories()->first()->name;
                $post->categoryslug = $post->categories()->first()->slug;

        
        return $post;
    }
}