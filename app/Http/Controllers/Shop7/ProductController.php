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



class ProductController extends Controller
{
	private $site_id;
	public function __construct()
	{
		$this->site_id = config('custom.frontsiteID');
	}

	public function index($dept, $slug, $id)
	{
		$pagetitle = ucfirst($dept) . " - " . ucwords(str_replace("-", " ", $slug));
		//prepare summary json
		//send to product-hub
		$products = Product::where('site_id' , $this->site_id)->orderBy('display_order')->get();

        foreach($products as $product)
        {
            $brand = $product->brand;
            array_add($product, "brand" , $brand);

            $materialtype = $product->brand;
            array_add($product, "materialtype" , $materialtype);

            $productcategories = $product->productcategories;
            array_add($product, "productcategories" , $productcategories);

            $sizes = $product->productsizes;
            array_add($product, "sizes" , $sizes);

           	$colors = $product->productcolors;
           	array_add($product, "colors" , $colors);

           	$productprices = $product->productprices;
            array_add($product, "productprices" , $productprices);

            $productimages = $product->productimages;
            array_add($product, "productimages" , $productimages);

            $stockins = $product->stockins;
            array_add($product, "stockins" , $stockins);
        }

   

        return view('front.shop7.product-hub')
		->with('sisters' , Ad::sisters($this->site_id))
		->with('colors' , Color::where('site_id', $this->site_id)->get())
		->with('sizes' , Size::where('site_id', $this->site_id)->get())
		->with('brands' , Brand::where('site_id', $this->site_id)->get())
		->with('pagetitle' , $pagetitle)
        ->with('departmant' , $dept)
        ->with('deptid', $id)
		->with('products' , (string) $products);
	}

    public function show($slug, Product $product)
    {
        $pagetitle = ucwords(str_replace("-", " ", $slug));
        $detailpagesideads = Ad::where('site_id', $this->site_id)->where('language', session('siteLanguage'))->where('position', 6)->orderBy('display_order')->get();

        return view('front.shop7.product-detail')
        ->with('sisters' , Ad::sisters($this->site_id))
        ->with('colors' , Color::where('site_id', $this->site_id)->get())
        ->with('sizes' , Size::where('site_id', $this->site_id)->get())
        ->with('pagetitle' , $pagetitle)
        ->with('detailpagesideads' , $detailpagesideads)
        ->with('product' , $product);
    }

}