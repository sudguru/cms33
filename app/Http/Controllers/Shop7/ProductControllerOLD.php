<?php
namespace App\Http\Controllers\Shop7;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Productcategory;
use App\Product;
use App\Productprice;
use App\Brand;
use App\Color;
use App\Size;
use App\Materialtype;
use App\Ad;
use DB;


class ProductControllerOLD extends Controller
{
	private $site_id;
	public function __construct()
	{
		$this->site_id = config('custom.frontsiteID');
	}

	public function productByCategory($pcn, Productcategory $productcategory)
	{
		$products = $productcategory->products()->where('site_id', $this->site_id)
		->orderBy('display_order')
		->get();
		return view('front.shop7.product-hub')
		->with('sisters' , Ad::sisters($this->site_id))
		->with('colors' , Color::where('site_id', $this->site_id)->get())
		->with('sizes' , Size::where('site_id', $this->site_id)->get())
		->with('brands' , Brand::where('site_id', $this->site_id)->get())
		->with('pagetitle' , $productcategory->name)
		->with('products' , $products);
	}

	public function productByPrice()
	{
		$min = request('price-range-low');
		$max = request('price-range-high');
		$products = DB::table('products')
			->join('productprices', 'products.id', '=' , 'productprices.product_id')
			->where('productprices.regular', '>=', $min)
			->where('productprices.regular' , '<=', $max)
			->select('products.*','productprices.regular', 'productprices.discounted')
			->get();
		return view('front.shop7.product-hub')
		->with('sisters' , Ad::sisters($this->site_id))
		->with('colors' , Color::where('site_id', $this->site_id)->get())
		->with('sizes' , Size::where('site_id', $this->site_id)->get())
		->with('brands' , Brand::where('site_id', $this->site_id)->get())
		->with('pagetitle' , "Products between Price range from ". $min . " to " . $max)
		->with('products' , $products);
	}

	public function productBySize()
	{

	}

	public function productByBrand($bn, Brand $brand)
	{
		$products = $brand->products()->where('site_id', $this->site_id)
		->orderBy('display_order')
		->get();

		return view('front.shop7.product-hub')
		->with('sisters' , Ad::sisters($this->site_id))
		->with('colors' , Color::where('site_id', $this->site_id)->get())
		->with('sizes' , Size::where('site_id', $this->site_id)->get())
		->with('brands' , Brand::where('site_id', $this->site_id)->get())
		->with('pagetitle', $brand->brandname)
		->with('products' , $products);
	}

	public function productByColor()
	{

	}

	public function productByMaterialType($mt, Materialtype $materialtype)
	{
		$products = $materialtype->products()->where('site_id', $this->site_id)
		->orderBy('display_order')
		->get();

		return view('front.shop7.product-hub')
		->with('sisters' , Ad::sisters($this->site_id))
		->with('colors' , Color::where('site_id', $this->site_id)->get())
		->with('sizes' , Size::where('site_id', $this->site_id)->get())
		->with('brands' , Brand::where('site_id', $this->site_id)->get())
		->with('pagetitle', $materialtype->materialtype)
		->with('products' , $products);
	}

}