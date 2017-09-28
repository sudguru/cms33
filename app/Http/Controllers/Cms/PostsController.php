<?php

namespace App\Http\Controllers\Cms;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;
use App\Role;
use App\Site;
use App\Post;
use App\Pic;
use App\File;
use App\Category;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('allowOnly:Admin~Editor');
        $this->activeMenu = "Posts";
    }

    public function index() {
    	$posts = Post::where( 'site_id' , auth()->user()->site_id )->where('language', session('currentLanguage'))->orderBy('display_order', 'asc')->orderBy('title')->get();
    	return view('cms.posts.index')->with('activeMenu' , $this->activeMenu)->with('posts' , $posts);
    }

    public function create() {
        $category = new Category;
        $categories = $category->allCategories();

        $roles = Role::where('id', '<', 100)->get();
        $pics = Pic::where('site_id' , auth()->user()->site_id)
        ->orderBy('id','desc')
        ->take(20)
        ->get();

        $files = File::where('site_id' , auth()->user()->site_id)
        ->orderBy('id','desc')
        ->take(20)
        ->get();

        return view('cms.posts.create')->with('activeMenu' , $this->activeMenu)->with('roles' , $roles)->with('pics' , $pics)->with('categories' , $categories)->with('files' , $files);
    }

    public function store(Request $request)
    {

        $this->validate(request(), [
            'title' => 'required|string|min:3',
            'excerpt' => 'required|string|min:3',
            'content' => 'required|string|min:3',
            'slug' => 'required|string',
            //'display_order' => 'required|numeric|min:1',
            
            ]);

        //
        $post_type = "article";
        if(strlen(request('video_url')) >0) $post_type = "video";
        //
        Post::where('site_id', auth()->user()->site->id)->where('language',session('currentLanguage'))->increment('display_order');

        $post = Post::create([
            'user_id' => auth()->user()->id,
            'site_id' => auth()->user()->site->id,
            'title' => request('title'),
            'video_url' => request('video_url'),
            'excerpt' => request('excerpt'),
            'content' => request('content'),
            'post_status' => request('post_status'),
            'comment_status' => request('comment_status'),
            'slug' => request('slug'),
            'display_order' => 1,
            'role_id' => request('role_id'),
            'language' => session('currentLanguage'),
            'gallery_id' => request('gallery_id'),
            'post_type' => $post_type,
            'featured_pic_id' => request('featured_pic_id')
            ]);

        //post categories
        $post->categories()->where('post_id', $post->id)->detach();
        $post->categories()->attach(request('categories'));

        return redirect('/posts');
    }

    public function edit(Post $post){
        $category = new Category;
        $categories = $category->allCategories();
        
        $roles = Role::where('id', '<', 100)->get();
        $pics = Pic::where('site_id' , auth()->user()->site_id)
        ->orderBy('id','desc')
        ->take(20)
        ->get();

        $files = File::where('site_id' , auth()->user()->site_id)
        ->orderBy('id','desc')
        ->take(20)
        ->get();

        return view('cms.posts.edit')->with('activeMenu' , $this->activeMenu)->with('post' , $post)->with('roles' , $roles)->with('pics' , $pics)->with('categories' , $categories)->with('files' , $files);
    }
    
    public function update(Post $post)
    {


       $this->validate(request(), [
        'title' => 'required|string|min:3',
        'excerpt' => 'required|string|min:3',
        'content' => 'required|string|min:3',
        'slug' => 'required|string',
            //'display_order' => 'required|numeric|min:1',

        ]);

        //
       $post_type = "article";
       if(strlen(request('video_url')) >0) $post_type = "video";

       $post->title = request('title');
       $post->video_url = request('video_url');
       $post->excerpt = request('excerpt');
       $post->content = request('content');
       $post->post_status = request('post_status');
       $post->comment_status = request('comment_status');
       $post->slug = request('slug');
       $post->role_id = request('role_id');
       $post->gallery_id = request('gallery_id');
       $post->post_type = $post_type;
       $post->featured_pic_id = request('featured_pic_id');
       $post->save();

       //post categories
       $post->categories()->where('post_id',$post->id)->detach();
       $post->categories()->attach(request('categories'));

       return redirect('/posts');
   }

    public function destroy($post) {
        $post = Post::find($post);
        $post->categories()->where('post_id',$post->id)->detach();
        $post->delete();
        
        //resorting
        
        
        $posts = Post::where('language', session('currentLanguage'))
        ->where('site_id', auth()->user()->site_id)->orderBy('display_order')->get();
        $i = 1;
        foreach($posts as $post)
        {
            $post->display_order = $i;
            $post->save();
            $i++;
        }

        return back();
    }
    
    public function reorder()
    {
        Post::where('language', session('currentLanguage'))
        ->where('site_id', auth()->user()->site_id)
        ->where('display_order', request('oldorder'))
        ->update(['display_order' => -9]);

        if(request('neworder') < request('oldorder')) {
            Post::where('language', session('currentLanguage'))
            ->where('site_id', auth()->user()->site_id )
            ->where('display_order', '>=', request('neworder'))
            ->where('display_order' , '<', request('oldorder'))
            ->increment('display_order');
        }
        else
        {
            Post::where('language', session('currentLanguage'))
            ->where('site_id', auth()->user()->site_id )
            ->where('display_order', '>', request('oldorder'))
            ->where('display_order' , '<=', request('neworder'))
            ->decrement('display_order');
        }

        Post::where('language', session('currentLanguage'))
        ->where('site_id', auth()->user()->site_id)
        ->where('display_order', -9)
        ->update(['display_order' => request('neworder')]);

        return 'successs sss';
    }
}
