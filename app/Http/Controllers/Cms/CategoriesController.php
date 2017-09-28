<?php

namespace App\Http\Controllers\Cms;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Category;

class CategoriesController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('allowOnly:Admin~Editor');
		$this->activeMenu = "Posts";
	}

	public function index() {
		/*view()->composer('partials.header', function($view) {
		  $view->with('categories', Category::with('children')->whereNull('cat_parent_id')->orderBy('cat_name', 'asc')->get());
		});*/
		$categories = $this->getCategories();
		return view('cms.categories.index')->with('activeMenu' , $this->activeMenu)->with('categories' , $categories);
	}


	private function getCategories()
	{
		$category = new Category;
		return $category->allCategories();
	}

	public function store(Request $request) 
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
			$slug = $parent->{'slug'};
			$name = $parent->{'name'};
			$id = $parent->{'id'};
			$parent_id = null;
			$parent_id2 = $this->razRabotach($id, $name, $slug, $new, $deleted, $parent_id, $displayOrder);
			if (array_key_exists('children', $parent)) 
			{
				foreach($parent->{'children'} as $child)
				{
					$displayOrder += 1;
					//$x .= "-----" . $child->{'name'} . "(child)\n";
					$deleted =  $child->{'deleted'};
					$new = $child->{'new'};
					$slug = $child->{'slug'};
					$name = $child->{'name'};
					$id2 = $child->{'id'};
					//$parent_id2 = $id;
					$parent_id3 = $this->razRabotach($id2, $name, $slug, $new, $deleted, $parent_id2, $displayOrder);
					if (array_key_exists('children', $child))
					{ 
						foreach($child->{'children'} as $grandchild)
						{
							$displayOrder += 1;
							//$x .= "----------" . $grandchild->{'name'} . "(nati)\n";
							$deleted =  $grandchild->{'deleted'};
							$new = $grandchild->{'new'};
							$slug = $grandchild->{'slug'};
							$name = $grandchild->{'name'};
							$id3 = $grandchild->{'id'};
							//$parent_id3 = $id2;
							$this->razRabotach($id3, $name, $slug, $new, $deleted, $parent_id3, $displayOrder);
						}
					}
				}
			}
		}
		//return $data[0]->{'name'};
		session()->flash('flashmessage', 'Categories Saved!');
		return back();
	}

	private function razRabotach($id, $name, $slug, $new, $deleted, $parent_id, $display_order)
	{	
		$category = new Category;
		
		if($deleted == 1 and $new == 1)
		{
			//do nothing
			return 9840528869;
		}
		elseif($deleted == 1 and $new == 0)
		{	
			$category = Category::find($id);
			//Category::destroy($id);
			//dd($category);
			$category->posts()->where('category_id',$category->id)->detach();
			$category->delete();
			return $id;
		}
		else
		{
			$category = Category::updateOrCreate(
			    ['id' => $id],
			    [
			    	'name' => $name,
			    	'slug' => $slug, 
			    	'language' => session('currentLanguage'), 
			    	'parent_id' => $parent_id,
			    	'site_id' => auth()->user()->site_id,
			    	'display_order' => $display_order
			    ]
			);
			return $category->id;
		}
	}


	public function customfields()
	{
		$categories = $this->getCategories();
		return view('cms.categories.customfields')->with('activeMenu' , $this->activeMenu)->with('categories' , $categories);
	}

	public function getcategory(Category $category)
	{
		return $category;
	}

}
