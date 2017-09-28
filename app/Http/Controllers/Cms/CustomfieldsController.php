<?php

namespace App\Http\Controllers\Cms;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Category;
use App\Customfield;

class CustomfieldsController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('allowOnly:Admin~Editor');
		$this->activeMenu = "Posts";
	}

	public function index()
	{
		
		$category = new Category;
		$categories = $category->allCategories();
		return view('cms.customfields.customfields')->with('activeMenu' , $this->activeMenu)->with('categories' , $categories);
	}

	public function getfields(Category $category)
	{
		$fields = $category->fields;
		return $fields;
	}

	public function store(){
		$this->validate(request(), [
            'fieldname' => 'required',
            'display_order' => 'numeric|min:1'
        ]);
        $customfield = Customfield::create([
            'fieldname' => request('fieldname'),
            'required' => request('required'),
            'options' => request('options'),
            'control' => request('control'),
            'display_order' => request('display_order'),
            'category_id' => request('category_id'),
        ]);
        return request('category_id');
	}

	public function update()
	{
		$this->validate(request(), [
            'fieldname' => 'required',
            'display_order' => 'numeric|min:1'
        ]);

        $categoryfield = Customfield::find(request('category_field_id'));
		$categoryfield->fieldname = request('fieldname');
        $categoryfield->required = request('requiredfield');
        $categoryfield->options = request('options');
        $categoryfield->control = request('control');
        $categoryfield->display_order = request('display_order');
        $categoryfield->save();
        return request('category_id');
	}

	public function destroy($customfield)
	{
		Customfield::destroy($customfield);
	}

	
}
