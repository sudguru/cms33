<?php

namespace App\Http\Controllers\Cms;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Menu;
use App\Category;
use App\Post;

class MenusController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('allowOnly:Admin~Editor');
		$this->activeMenu = "Settings";
	}

	public function index($menuname) {

		$menus = $this->getMenus($menuname);

		$category = new Category;
		$categories = $category->allCategories();
		$posts = Post::where( 'site_id' , auth()->user()->site_id )
					->where('language', session('currentLanguage'))
					->orderBy('display_order', 'asc')->get();
		return view('cms.menus.index')->with('activeMenu' , $this->activeMenu)->with('menus' , $menus)->with('posts' , $posts)->with('categories' , $categories)->with('menuname' , $menuname);
	}


	private function getMenus($menuname)
	{
		$menu = new Menu;
		return $menu->allMenus($menuname);
	}

	public function getCategorySlug(Category $category)
	{
		return $category->slug;
	}

	public function getPostSlug(Post $post)
	{
		return $post->slug;
	}

public function store(Request $request, $menuname) 
{
		//dd($request);
		$data = json_decode($request->jsondata);
		$x = "";
		$displayOrder = 0;
		foreach($data as $parent)
		{
			$displayOrder += 1;
			//$x .= $parent->{'name'} . "(parent)\n";
			$deleted =  $parent->{'deleted'};
			$new = $parent->{'new'};
			$link = $parent->{'link'};
			$title = $parent->{'title'};
			$id = $parent->{'id'};
			$parent_id = null;
			$parent_id2 = $this->razRabotach($id, $title, $link, $new, $deleted, $parent_id, $displayOrder, $menuname);
			if (array_key_exists('children', $parent)) 
			{
				foreach($parent->{'children'} as $child)
				{
					$displayOrder += 1;
					//$x .= "-----" . $child->{'name'} . "(child)\n";
					$deleted =  $child->{'deleted'};
					$new = $child->{'new'};
					$link = $child->{'link'};
					$title = $child->{'title'};
					$id2 = $child->{'id'};
					//$parent_id2 = $id;
					$parent_id3 = $this->razRabotach($id2, $title, $link, $new, $deleted, $parent_id2, $displayOrder, $menuname);
					if (array_key_exists('children', $child))
					{ 
						foreach($child->{'children'} as $grandchild)
						{
							$displayOrder += 1;
							//$x .= "----------" . $grandchild->{'name'} . "(nati)\n";
							$deleted =  $grandchild->{'deleted'};
							$new = $grandchild->{'new'};
							$link = $grandchild->{'link'};
							$title = $grandchild->{'title'};
							$id3 = $grandchild->{'id'};
							//$parent_id3 = $id2;
							$this->razRabotach($id3, $title, $link, $new, $deleted, $parent_id3, $displayOrder, $menuname);
						}
					}
				}
			}
		}
		//return $data[0]->{'name'};
		session()->flash('flashmessage', 'Menus Saved!');
		return back();
	}

	private function razRabotach($id, $name, $link, $new, $deleted, $parent_id, $display_order, $menuname)
	{	
		//$menu = new Menu;
		
		if($deleted == 1 and $new == 1)
		{
			//do nothing
			return "9840528869";
		}
		elseif($deleted == 1 and $new == 0)
		{	
			$menu = Menu::find($id);
			$menu->delete();
			return $id;
		}
		else
		{
			$menu = Menu::updateOrCreate(
			    ['id' => $id],
			    [
			    	'title' => $name,
			    	'language' => session('currentLanguage'), 
			    	'parent_id' => $parent_id,
			    	'site_id' => auth()->user()->site_id,
			    	'link' => $link,
			    	'display_order' => $display_order,
			    	'menu' => $menuname
			    ]
			);
			return $menu->id;
		}
	}




	public function getmenu(Menu $menu)
	{
		return $menu;
	}
}
