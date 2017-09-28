<?php

namespace App\Http\Controllers\Cms;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Materialtype;
use App\Brand;
use App\Size;
use App\Color;

class ProducctsettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('allowOnly:Super~Admin~Editor'); //restrict all except super suer
        $this->activeMenu = "Products";
    }

   
    public function index()
    {
        $brands = Brand::where('site_id', auth()->user()->site_id)->get();
        return view('cms.products.settings.index')->with('activeMenu' , $this->activeMenu)->with('brands', $brands);
    }

    public function materialtypes()
    {
        $materialtypes = Materialtype::where('site_id',auth()->user()->site_id)->get();
        return view('cms.products.settings.materialtypes')->with('materialtypes', $materialtypes);
    }

    public function materialtypessave()
    {

        $materialtype = Materialtype::create([
            'site_id' => auth()->user()->site_id,
            'materialtype' => request('materialtype'),
            'description' => request('description'),
        ]);

        return trim($materialtype->id);
    }

    public function materialtypesdelete($materialtype)
    {
        Materialtype::destroy($materialtype);
        return "OK";
    }

    public function sizes()
    {
        $sizes = Size::where('site_id',auth()->user()->site_id)->get();
        return view('cms.products.settings.sizes')->with('sizes', $sizes);
    }

    public function sizessave()
    {

        $size = Size::create([
            'site_id' => auth()->user()->site_id,
            'size' => request('size')
        ]);

        return trim($size->id);
    }

    public function sizesdelete($size)
    {
        Size::destroy($size);
        return "OK";
    }


    public function colors()
    {
        $colors = Color::where('site_id',auth()->user()->site_id)->get();
        return view('cms.products.settings.colors')->with('colors', $colors);
    }

    public function colorssave()
    {

        $color = Color::create([
            'site_id' => auth()->user()->site_id,
            'color' => request('color')
        ]);

        return trim($color->id);
    }

    public function colorsdelete($color)
    {
        Materialtype::destroy($color);
        return "OK";
    }


    public function brands()
    {
        $brands = Brand::where('site_id', auth()->user()->site_id)->get();
        return view('cms.products.settings.brands')->with('brands', $brands);
    }

    public function brandssave()
    {
        $brand = Brand::create([
            'site_id' => auth()->user()->site_id,
            'brandname' => request('brandname'),
            'description' => request('description'),
        ]);
        return $brand->id;
    }

    public function brandsdelete($brand)
    {
        Brand::destroy($brand);
        return $brand;
    }

    public function savebrandimage(Request $request)
    {
        $this->validate($request, [
           'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $image = $request->file('photo');
        $time = time();
        $imagename = $time.'.'.$image->getClientOriginalExtension();

        //original
        $path = request()->file('photo')->storeAs('public/' . auth()->user()->site->siteUrl . '/images/brands', $imagename);
        $path = basename($path);
        
        //Update brand
        $brand = Brand::find($request->modalbrandid);
        $brand->picpath = $path;
        $brand->save();

        $path = '/storage/' . auth()->user()->site->siteUrl . '/images/brands/'. $path;
        //return json_encode(array('message' => 'BceOk', 'success' => true, 'path' => $path));
        return back();

    }

    public function deletebrandimage(Brand $brand)
    {
        $brand->picpath = null;
        $brand->save();
        return back();
    }
    

}