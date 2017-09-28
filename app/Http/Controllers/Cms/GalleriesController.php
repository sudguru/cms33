<?php

namespace App\Http\Controllers\Cms;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Gallery;
use App\Gallerydata;
use App\Gallerypic;
use App\Gallerydatapic;
use Image;
use Storage;

class GalleriesController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('allowOnly:Admin~Editor');
		$this->activeMenu = "Images";
	}

	public function index() {
		$galleries = Gallery::where( 'site_id' , auth()->user()->site_id )->orderBy('display_order')->get();
		return view('cms.galleries.index')->with('activeMenu' , $this->activeMenu)->with('galleries' , $galleries);
	}

	public function create() {
		return view('cms.galleries.create')->with('activeMenu' , $this->activeMenu);
	}


	public function store(Request $request) 
	{
		$this->validate(request(), [
            'galleryname' => 'required|min:3'
        ]);
        //galleries
 
        $site_id = auth()->user()->site_id;
        $display_order = Gallery::all()->where('site_id' , $site_id)->count() + 1;
        $gallery = Gallery::create([
        	'site_id' => $site_id,
            'description' => request('galleryname'),
            'display_order' => $display_order
        ]);
        $gallery_id = $gallery->id;

        Gallerydata::create([
        	'gallery_id' => $gallery_id,
            'title' => request('galleryname'),
            'language' => session('currentLanguage')
        ]);

        return redirect('/galleries/'.$gallery_id.'/edit');
        

	}

	public function edit(Gallery $gallery) {
		$gallery_id = $gallery->id;
		$gallerypics = Gallerypic::where('gallery_id', $gallery_id)->orderBy('display_order')->get();
		return view('cms.galleries.edit')->with('activeMenu' , $this->activeMenu)->with('gallery' , $gallery)->with('gallerypics', $gallerypics);
	}

	public function upload(Request $request) {
		/*$this->validate($request, [
           'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=250',
        ]);*/
        $photos = $request->file('photos');
       

        if($request->hasFile('photos'))
        {
        	$i = 0;
        	foreach ($photos as $photo)
        	{	
        		$i++;
				$time = time();
				$imagename = $time.$i.'.'.$photo->getClientOriginalExtension();
				//original
				$path = $photo->storeAs('public/images/' . auth()->user()->site->siteUrl . '/original', $imagename);
				$path = basename($path);
				$this->addImageToGallery($path, $request->input('gallery_id'));
				$this->resize($photo, $imagename);
        	}
        }

        return back();
	}

	private function resize($image, $imagename)
	{
		$fsizes = ['1200' , '800' , '400' , '240'];
		for($i = 0; $i < count($fsizes); $i++)
		{
			Storage::makeDirectory('public/images/' . auth()->user()->site->siteUrl . '/thumb_' . $fsizes[$i]);
			$input['imagename'] = $imagename;
			$destinationPath = storage_path('app/public/images/' . auth()->user()->site->siteUrl .'/thumb_'. $fsizes[$i]);
			$img[$i] = Image::make($image->getRealPath());
			$width = $img[$i]->width();
			if($width >= $fsizes[$i]) {
				$img[$i]->resize($fsizes[$i], $fsizes[$i], function ($constraint) {
			    		$constraint->aspectRatio();
					})->save($destinationPath.'/'.$input['imagename']);
			}
		}
	}

	private function addImageToGallery($path, $gallery_id)
	{
		//dd($gallery_id);
		$gallery = Gallery::find($gallery_id);
		//dd($gallery);
		$gallerypic = Gallerypic::create([
        	'gallery_id' => $gallery_id,
            'display_order' => $gallery->photos->count() + 1 ,
            'pic_path' => $path
        ]);

		$gallerypic->captions()->create([ 'language' => session('currentLanguage'), 'caption' => $gallery->description ]);
        /*Gallerydatapic:: create([
        	'gallerypic_id' = $gallerypic->id,
        	'language' = session('currentLanguage'),
        	'caption' = $gallery->description
        ]);*/
	}

}
