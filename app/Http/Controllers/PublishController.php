<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Site;
use App\User;
use App\Menu;
use App\Siteinfo;
use App\Post;
use App\Ad;
use App\Featuredpost;
use App\Pic;
use Storage;


class PublishController extends Controller
{
    private $activeMenu;
    private $destination;
    
	public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('allowOnly:Admin~Editor'); //restrict all except super suer
        $this->activeMenu = "Dashboard";
    }
    
    private function writeData($data, $filename)
    {
        $language = session('currentLanguage');
        file_put_contents($this->destination . '/' . $filename . '_' . $language . '.json', json_encode($data));
    }

    
    public function publish()
    {
        $site_id = auth()->user()->site_id;
        $site = Site::find($site_id);
        $language = session('currentLanguage');
        
        Storage::makeDirectory('public/' . auth()->user()->site->siteUrl . '/data');
        $this->destination = storage_path('app/public/' . auth()->user()->site->siteUrl .'/data');
        
        
        
        $data = $this->getViewComposer($site, $language);
        $this->writeData($data, 'general');
        
        $data = $this->getWelcome($site, $language);
        $this->writeData($data, 'welcome');
        
        $data = $this->getMessages($site, $language);
        $this->writeData($data, 'messages');
        
        $data = $this->getAds($site, $language);
        $this->writeData($data, 'ads');
        
        $data = $this->getFeaturedPosts($site, $language);
        $this->writeData($data, 'featuredposts');
        
        $data = $this->getNotifications($site, $language);
        $this->writeData($data, 'notifications');
        
        return back();
        
    }

    public function getViewComposer(Site $site, $language)
    {
        $menus = array(); 
        $menusText = $site->menus;
        $menusArray = explode(",", $menusText);
        for($i=0; $i<sizeof($menusArray); $i++)
        {
            $menuIndex = trim($menusArray[$i]);
            
            $menus[$menuIndex] = Menu::with(array(
                    'children' => function ($query) {
                    $query->orderBy('display_order', 'asc');
                    }
                    ))->where('menu', $menuIndex)->whereNull('parent_id')
                    ->where( 'site_id' , $site->id)
                    ->where('language', $language)
                    ->orderBy('display_order', 'asc')->get();
        }
        
        $siteinfo = Siteinfo::where('site_id', $site->id)->where('language', $language)->get();
        
        return array('menus' => $menus, 'site' => $site, 'siteinfo' => $siteinfo);
        
        
    }
    
    public function getWelcome(Site $site, $language)
    {   

        $siteinfo = Siteinfo::where('site_id', $site->id)->where('language', $language)->first();

        $id = $siteinfo->welcome;
        $welcome = Post::where('id', $id)->get();
        return array('welcome' => $welcome);
    }
    
    public function getMessages(Site $site, $language)
    {
        $siteinfo = Siteinfo::where('site_id', $site->id)->where('language', $language)->first();
        $id1 = $siteinfo->message1;
        $id2 = $siteinfo->message2;
        
        $messages = Post::where('id', $id1)->orWhere('id', $id2)->get();
        return array('messages' => $messages);
    }
    
    public function getAds(Site $site, $language)
    {
        $ads = Ad::where('site_id' , $site->id)->where('language', $language)->orderBy('display_order')->get();
        return array('ads' => $ads);
    }
    
    public function getFeaturedPosts(Site $site, $language)
    {
        $featuredposts = Featuredpost::where('language', $language)->where('site_id', $site->id)->orderBy('display_order')->get();
        
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
        
        return array('featuredposts' => $featuredposts);
    }
    
    public function getNotifications(Site $site, $language)
    {
        $siteinfo = Siteinfo::where('site_id', $site->id)->where('language', $language)->first();
        $id = $siteinfo->notificationcategory;
        $category = Category::where('id', $id)->first();
        $notifications = [];
        if($category) {
            $notifications = $category->posts()->where('language', $language)->where('site_id', $site->id)->where('post_status', 'Published')->orderBy('display_order')->get();
        }
        
        return array('notifications' => $notifications);
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
