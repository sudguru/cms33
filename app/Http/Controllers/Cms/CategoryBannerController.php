<?php
namespace App\Http\Controllers\Cms;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Category;
use Image;
use Storage;
use Response;
class CategoryBannerController extends Controller
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
		return view('cms.categories.categorybanner')->with('activeMenu' , $this->activeMenu)->with('categories' , $categories);
	}

    public function getcategory(Category $category)
	{
		return $category;
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
		Storage::makeDirectory('public/' . auth()->user()->site->siteUrl . '/images/thumb_1200');
			$input['imagename'] = $imagename;
			$destinationPath = storage_path('app/public/' . auth()->user()->site->siteUrl .'/images/thumb_1200');
			$img = Image::make($image->getRealPath());
			$width = $img->width();
			$img->resize(1200, 1200, function ($constraint) {
	    		$constraint->aspectRatio();
				})->save($destinationPath.'/'.$input['imagename']);
		
		//Update Banner
		$category = Category::find($request->categoryid);
        $category->banner = $path;
        $category->save();

        $path = '/storage/' . auth()->user()->site->siteUrl . '/images/thumb_1200/'. $path;
        return json_encode(array('message' => 'BceOk', 'success' => true, 'path' => $path));

	}

	public function update(Request $request)
	{
		
		//Update Banner
		$category = Category::find($request->categoryid);
        $category->description = $request->description;
        $category->gist = $request->gist;
        $category->save();
        return "OK";
	}
}
