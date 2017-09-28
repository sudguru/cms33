<?php
namespace App\Http\Controllers\Cms;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Productcategory;
use Image;
use Storage;
use Response;
class ProductcategoryBannerController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('allowOnly:Admin~Editor');
		$this->activeMenu = "Products";
	}

	
	
	public function index()
	{
		
		$category = new Productcategory;
		$productcategories = $category->allCategories();
		return view('cms.productcategories.categorybanner')->with('activeMenu' , $this->activeMenu)->with('productcategories' , $productcategories);
	}

    public function getcategory(Productcategory $productcategory)
	{
		return $productcategory;
	}

	public function uploadimage(Request $request)
	{
		$this->validate($request, [
           'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=400',
        ]);
        $image = $request->file('photo');
		$time = time();
		$imagename = $time.'.'.$image->getClientOriginalExtension();

		//original
		$path = request()->file('photo')->storeAs('public/' . auth()->user()->site->siteUrl . '/images/original', $imagename);
		$path = basename($path);

		//1200px
		Storage::makeDirectory('public/' . auth()->user()->site->siteUrl . '/thumb_1200');
			$input['imagename'] = $imagename;
			$destinationPath = storage_path('app/public/' . auth()->user()->site->siteUrl .'/images/thumb_1200');
			$img = Image::make($image->getRealPath());
			$width = $img->width();
			$img->resize(1200, 1200, function ($constraint) {
	    		$constraint->aspectRatio();
				})->save($destinationPath.'/'.$input['imagename']);
		
		//Update Banner
		$productcategory = Productcategory::find($request->categoryid);
		//dd($request->categoryid);
        $productcategory->banner = $path;
        $productcategory->save();

        $path = '/storage/' . auth()->user()->site->siteUrl . '/images/thumb_1200/'. $path;
        return json_encode(array('message' => 'BceOk', 'success' => true, 'path' => $path));

	}

	public function update(Request $request)
	{
		
		//Update Banner
		$productcategory = Productcategory::find($request->categoryid);
        $productcategory->description = $request->description;
        $productcategory->gist = $request->gist;
        $productcategory->save();
        return "OK";
	}
}
