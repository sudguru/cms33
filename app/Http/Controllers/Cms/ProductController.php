<?php

namespace App\Http\Controllers\Cms;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Product;
use App\Productcategory;
use App\Materialtype;
use App\Brand;
use Storage;
use Image;
use App\Size;
use App\Color;

class ProductController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('allowOnly:Admin~Editor');
		$this->activeMenu = "Products";
	}


	public function index() {
		$products = Product::where( 'site_id' , auth()->user()->site_id )->orderBy('display_order')->orderBy('id', 'desc')->orderBy('productname')->get();
		return view('cms.products.index')->with('activeMenu' , $this->activeMenu)->with('products' , $products);
	}

	public function create() {

		$productcategory = new Productcategory;
		$productcategories = $productcategory->allCategories();

		$materialtypes = Materialtype::where('site_id', auth()->user()->site_id)->get();
		$brands = Brand::where('site_id', auth()->user()->site_id)->get();

		return view('cms.products.create')->with('activeMenu' , $this->activeMenu)->with('productcategories' , $productcategories)->with('materialtypes' , $materialtypes)->with('brands' , $brands);
	}

	public function store(Request $request)
	{

		$this->validate(request(), [
			'productname' => 'required|string|min:3',
			'description' => 'required|string|min:3',
			'slug' => 'required|string'     
			]);


		Product::where('site_id', auth()->user()->site->id)->increment('display_order');

		$product = Product::create([
			'user_id' => auth()->user()->id,
			'site_id' => auth()->user()->site->id,
			'productname' => request('productname'),
			'materialtype_id' => request('materialtype_id'),
			'brand_id' => request('brand_id'),
			'description' => request('description'),
			'specification' => request('specification'),
			'pricefactor' => request('pricefactor'),
			'sku' => request('sku'),
			'discountupto' => 0,
			'tags' => request('tags'),
			'product_status' => request('product_status'),
			'review_status' => request('review_status'),
			'slug' => request('slug'),
			'display_order' => 1,
			'featured_pic' => 'dummy_product_image.jpg'
			]);

        //post productcategories
		$product->productcategories()->where('product_id', $product->id)->detach();
		$product->productcategories()->attach(request('productcategories'));
		
		request()->session()->flash('flashmessage', 'Product Saved!');
		return redirect('products/'.$product->id.'/edit');
	}

	public function edit(Product $product){
		$productcategory = new Productcategory;
		$productcategories = $productcategory->allCategories();

		$materialtypes = Materialtype::where('site_id', auth()->user()->site_id)->get();
		$brands = Brand::where('site_id', auth()->user()->site_id)->get();
		$sizes = Size::where('site_id', auth()->user()->site_id)->get();
		$colors = Color::where('site_id', auth()->user()->site_id)->get();
		return view('cms.products.edit')->with('activeMenu' , $this->activeMenu)->with('productcategories' , $productcategories)->with('product' , $product)->with('materialtypes' , $materialtypes)->with('brands' , $brands)->with('sizes' , $sizes)->with('colors' , $colors);
	}

	public function update(Product $product)
	{
		$this->validate(request(), [
			'productname' => 'required|string|min:3',
			'description' => 'required|string|min:3',
			'slug' => 'required|string',  
			]);

		$product->productname = request('productname');
		$product->materialtype_id = request('materialtype_id');
		$product->brand_id = request('brand_id');
		$product->description = request('description');
		$product->specification = request('specification');
		$product->pricefactor = request('pricefactor');
		$product->sku = request('sku');
		$product->tags = request('tags');
		$product->product_status = request('product_status');
		$product->review_status = request('review_status');
		$product->slug = request('slug');
		$product->save();

       //product productcategories
		$product->productcategories()->where('product_id',$product->id)->detach();
		$product->productcategories()->attach(request('productcategories'));
		//product_unit
		request()->session()->flash('flashmessage', 'Product Saved!');
		return redirect('products/'.$product->id.'/edit');
	}

	public function destroy($product) {

		$product = Product::find($product);
        $product->productcategories()->where('product_id',$product->id)->detach();
        $product->delete();
        return back();

	}
}