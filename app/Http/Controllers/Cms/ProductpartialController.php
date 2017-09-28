<?php

namespace App\Http\Controllers\Cms;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Product;
use Storage;
use Image;
use App\Productprice;
use App\Productimage;
use App\Stockin;
class ProductpartialController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('allowOnly:Admin~Editor');
		$this->activeMenu = "Products";
	}


	public function update_unitsizecolor(Product $product)
	{

		$product->productsizes()->where('product_id', $product->id)->detach();
		$product->productsizes()->attach(request('productsizes'));

		$product->productcolors()->where('product_id', $product->id)->detach();
		$product->productcolors()->attach(request('productcolors'));

		//prepare prices
		$pricefactor = $product->pricefactor;

		switch ($pricefactor) {
		    case "None":
		        //insert 1 row to price table after checking
		    	Productprice::firstOrCreate(
				    ['product_id' => $product->id, 'color_id' => null, 'size_id' => null], 
				    ['rangefrom' => 1, 'rangeto' => 1, 'regular' => 0, 'discounted' => 0]
				);
		        break;
		    case "Size":
		        //insert product_size rows 

		    	foreach($product->productsizes as $productsize) {
			    	Productprice::firstOrCreate(
					    ['product_id' => $product->id, 'color_id' => null, 'size_id' => $productsize->id], 
				    	['rangefrom' => 1, 'rangeto' => 1, 'regular' => 0, 'discounted' => 0]
					);
		    	}
		        break;
		    case "Color":
		        //insert color rows
		    	foreach($product->productcolors as $productcolor) {
			    	Productprice::firstOrCreate(
					    ['product_id' => $product->id, 'color_id' => $productcolor->id, 'size_id' => null], 
				    	['rangefrom' => 1, 'rangeto' => 1, 'regular' => 0, 'discounted' => 0]
					);
		    	}
		        break;
		    case "Both":
		        //insert product_size * product_color rows
		    	foreach($product->productsizes as $productsize) {
		    		foreach($product->productcolors as $productcolor) {
				    	Productprice::firstOrCreate(
						    ['product_id' => $product->id, 'color_id' => $productcolor->id, 'size_id' => $productsize->id], 
					    	['rangefrom' => 1, 'rangeto' => 1, 'regular' => 0, 'discounted' => 0]
						);
				    }
		    	}
		        break;
		}


		request()->session()->flash('flashmessage', 'Size & Colors Saved!');
		return redirect('products/'.$product->id.'/edit');

	}

	public function update_price(Productprice $productprice)
	{
		$what = request('what');
		$productprice->$what = request('val');
		$productprice->save();
	}
	


	public function productimage(Product $product, Request $request)
	{
		$this->validate($request, [
           'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=240',
        ]);
        $image = $request->file('photo');
		$time = time();
		$imagename = $time.'.'.$image->getClientOriginalExtension();

		//original
		$path = request()->file('photo')->storeAs('public/' . auth()->user()->site->siteUrl . '/productimages/original', $imagename);
		$path = basename($path);
		$lg = $md = $sm = $xs = 0;
		$fsizes = ['1200' , '800' , '400' , '240'];
		for($i = 0; $i < count($fsizes); $i++)
		{
			Storage::makeDirectory('public/' . auth()->user()->site->siteUrl . '/productimages/thumb_' . $fsizes[$i]);
			$input['imagename'] = $imagename;
			$destinationPath = storage_path('app/public/' . auth()->user()->site->siteUrl .'/productimages/thumb_'. $fsizes[$i]);
			$img[$i] = Image::make($image->getRealPath());
			$width = $img[$i]->width();
			if($width >= $fsizes[$i]) {
				$img[$i]->resize($fsizes[$i], $fsizes[$i], function ($constraint) {
					$constraint->aspectRatio();
				})->save($destinationPath.'/'.$input['imagename']);
				if($i == 0) $lg = 1;
				if($i == 1) $md = 1;
				if($i == 2) $sm = 1;
				if($i == 3) $xs = 1;
			}
		}
		$path = basename($path);

		//Update Banner

		$featured = request('featured');
		if($featured == 1)
        	$product->featured_pic = $path;
        $product->save();
        $colorid = request('color_id') > 0 ? request('color_id') : null;
        $sizeid = request('size_id') > 0 ? request('size_id') : null;
		$productimage = Productimage::create([
			'product_id' => $product->id,
			'picpath' => $path,
			'color_id' => $colorid,
			'size_id' => $sizeid,
			'lg' => $lg,
			'md' => $md,
			'sm' => $sm,
			'xs' => $xs
			]);
        

        $path = '/storage/' . auth()->user()->site->siteUrl . '/productimages/thumb_240/'. $path;
        return json_encode(array('message' => 'BceOk', 'success' => true, 'path' => $path, 'imageid' => $productimage->id));

	}

	public function deleteimage(Product $product, $productimageid)
	{
		Productimage::destroy($productimageid);
		request()->session()->flash('flashmessage', 'Image Deleted!');
		return redirect('products/'.$product->id.'/edit');
	}

	public function setimage(Product $product, Productimage $productimage)
	{
		$product->featured_pic  = $productimage->picpath;
		$product->save();
		request()->session()->flash('flashmessage', 'Image Set as Default!');
		return redirect('products/'.$product->id.'/edit');
	}

	public function refreshimage(Product $product)
	{
		request()->session()->flash('flashmessage', 'Images Refreshed!');
		return redirect('products/'.$product->id.'/edit');
	}

	public function stockin(Product $product)
	{
		$colorid = request('color_id') > 0 ? request('color_id') : null;
        $sizeid = request('size_id') > 0 ? request('size_id') : null;

		$stockin = Stockin::create([
			'product_id' => $product->id,
			'color_id' => $colorid,
			'size_id' => $sizeid,
			'date' => date("Y-m-d", strtotime(request('txtdate'))),
			'quantity' => request('quantity'),
			'godown_id' => 0,
			'fromgodown_id' => 0
			]);
		request()->session()->flash('flashmessage', 'Stock Added!');
		return redirect('products/'.$product->id.'/edit');
	}

	public function deletestockin(Product $product, $stockin)
	{
		
		Stockin::destroy($stockin);
		request()->session()->flash('flashmessage', 'Stock Deleted!');
		return redirect('products/'.$product->id.'/edit');
	}
}
