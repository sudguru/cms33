<?php

namespace App\Http\Controllers\Cms;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Featuredproduct;
use App\Product;
class FeaturedproductController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('allowOnly:Admin~Editor');
		$this->activeMenu = "Products";
	}

	public function index()
	{
		$featuredproducts = Featuredproduct::where('site_id', auth()->user()->site_id)->orderBy('display_order')->get();
		return view('cms.products.featuredproducts')->with('featuredproducts', $featuredproducts);
	}

	public function store(Product $product)
	{
		//dd($product->featuredproducts->count());
		if($product->featuredproduct and $product->featuredproduct->count() > 0)
		{
			//dd($product->id);
			Featuredproduct::where('product_id', $product->id)->delete();
			//reorder
			$featuredproducts = Featuredproduct::where('site_id', auth()->user()->site_id)->get();
			$i = 0;
			foreach($featuredproducts as $featuredproduct)
			{
				$i++;
				$featuredproduct->display_order = $i;
				$featuredproduct->save();
			}
		}
		else
		{

			Featuredproduct::create([
				'product_id' => $product->id,
				'site_id' => auth()->user()->site_id,
				'display_order' => auth()->user()->site->featuredproducts->count() + 1
				]);
		}
		return back();
	}

	public function destroy($featuredproduct)
	{
		Featuredproduct::destroy($featuredproduct);
		$featuredproducts = Featuredproduct::where('site_id', auth()->user()->site_id)->get();
			$i = 0;
			foreach($featuredproducts as $featuredproduct)
			{
				$i++;
				$featuredproduct->display_order = $i;
				$featuredproduct->save();
			}
		return back();
	}

	public function reorder()
	{

		Featuredproduct::where('site_id', auth()->user()->site_id)
		->where('display_order', request('oldorder'))
		->update(['display_order' => -9]);

		if(request('neworder') < request('oldorder')) {
			Featuredproduct::where('site_id', auth()->user()->site_id )
			->where('display_order', '>=', request('neworder'))
			->where('display_order' , '<', request('oldorder'))
			->increment('display_order');
		}
		else
		{
			Featuredproduct::where('site_id', auth()->user()->site_id )
			->where('display_order', '>', request('oldorder'))
			->where('display_order' , '<=', request('neworder'))
			->decrement('display_order');
		}

		Featuredproduct::where('site_id', auth()->user()->site_id)
		->where('display_order', -9)
		->update(['display_order' => request('neworder')]);

		return 'successs';
	}
}
