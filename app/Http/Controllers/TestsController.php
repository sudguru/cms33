<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;
use App\Pic;
use App\Site;
use App\Ad;

use App\Product;
use App\Brand;
use App\Productprices;

class TestsController extends Controller
{
    public function test($caption) {
    	//0 get currentlanguage
    	$currentLanguage = session('currentLanguage');
        //1. create dummy arry for all the available languages
        $a = array();
        $languages = explode('~', auth()->user()->site->languages);
        $lang_names_array = explode(',', $languages[0]);
   
        foreach($lang_names_array as $lang)
        {
        	$a[$lang] = "";
        }

        //2. get the current json data from the database and covert it to an array
        $d = json_decode(Test::find(4)->caption);
        //dd($d);
        //3. adding old values taken from d to a for all languages
        if($d)
        {
        	foreach($lang_names_array as $lang)
	        {
	        	$a[$lang] = $d[$lang];
	        }
        }
        //4. change the value for current language key
        	$a[$currentLanguage] = $caption;
        //5. json_encode and save
        Test::create([
        	'caption' => json_encode($a)
        ]);
       
    }

    public function st()
    {
        $currentlanguage = session('currentLanguage');
        $s = "s";
        $pics = Pic::where('captions', 'LIKE', '%'.$s.'%')->where('site_id', auth()->user()->site_id)->get();
        $objPics = (json_decode(json_encode($pics)));
        //dd($x[0]);
        foreach($objPics as $pic)
        {
            $captions = $pic->captions;
            if($captions)
            {
                $objCaptions = json_decode($captions);
                $caption = $objCaptions->$currentlanguage;
                $pic->captions = $caption;
            }
        }
        
        return $objPics;
    
    }

    public function sts()
    {
        require app_path() . "/external/simple_html_dom.php";
        $html = str_get_html('<div id="hello">Hello</div><img src="abc.jpg"><div id="world">World</div><img src="xyz.png">');
        foreach($html->find('img') as $element) 
            echo $element->src . '<br>';

    }

    public function productdetails()
    {
        return view('layouts.productdetails');
    }

    public function d()
    {
        //return 'hello';
        return view('direction');
    }

    public function ads()
    {
        // $ads_json = auth()->user()->site->ads;
        // $ads_json = trim(preg_replace('/\s+/', ' ', $ads_json));
        // $ads = json_decode($ads_json);
        // return view('ads')->with('ads' , $ads);
        $ad = Ad::find(1);
        //$ads = $ad->ads;

        $options[0]['symbol'] = 'NPR';
        $options[0]['base'] = '16';
        $options[0]['name'] = 'Nepalese Currency';
        $options[1]['symbol'] = 'INR';
        $options[1]['base'] = '10';
        $options[1]['name'] = 'Indian Currency';

        $ad->ads = $options;
        $ad->save();
    }

    public function showads()
    {
        $ads = Ad::all();
        return view('ads')->with('ads' , $ads);
    }

    public function savead()
    {
        $options['key'] = 'value';

        Ad::create([
            'name' => 'Sudeep',
            'ads' => ''
        ]);
    }

    public function testjson()
    {
        $products = Product::all();
        foreach($products as $product)
        {
            $brand = $product->brand;
            array_add($product, "brand" , $brand);

            $productprices = $product->productprices;
            array_add($product, "productprices" , $productprices);
        }
        dd(json_encode($products));
        
    }
}
