<?php

namespace App\Http\Controllers\Cms;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Image;
use Storage;
use App\Pic;
use App\Post;
use App\File;
use Response;
class UploadController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('allowOnly:Admin~Editor~Author~Contributor');
		$this->activeMenu = "Posts";
	}

	public function uploadimage(Request $request) {
		$this->validate($request, [
			'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=240',
			]);
		$image = $request->file('photo');
		$fsizes = ['1200' , '800' , '400' , '240'];
		$time = time();
		$imagename = $time.'.'.$image->getClientOriginalExtension();

		//original
		$path = request()->file('photo')->storeAs('public/' . auth()->user()->site->siteUrl . '/images/original', $imagename);


		//thumbs
		$lg = $md = $sm = $xs = 0;
		for($i = 0; $i < count($fsizes); $i++)
		{
			Storage::makeDirectory('public/' . auth()->user()->site->siteUrl . '/images/thumb_' . $fsizes[$i]);
			$input['imagename'] = $imagename;
			$destinationPath = storage_path('app/public/' . auth()->user()->site->siteUrl .'/images/thumb_'. $fsizes[$i]);
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

		//Save to table
		$pic = Pic::create([
			'picpath' => $path,
			'lg' => $lg,
			'md' => $md,
			'sm' => $sm,
			'xs' => $xs,
			'site_id' => auth()->user()->site->id
			]);

		$path = '/storage/' . auth()->user()->site->siteUrl . '/images/thumb_240/'. $path;

		//return STATUS , Message , Path, Available Sizes
		return json_encode(array('message' => 'BceOk', 'success' => true, 'path' => $path, 'pic_id' => $pic->id, 'lg' => $lg, 'md' => $md, 'sm' => $sm, 'xs' => $xs));
	}

	public function savecaptionandinsertimagetopost(Request $request)
	{

		//workout caption for the current Pic //
		$pic = Pic::find(request('pic_id'));
		$pic->updatecaption(request('caption'), session('currentLanguage'));
		//End save Caption

		$alignment = request('alignment');
		$margin = ($alignment == "none") ? "bottom" : (($alignment =="right") ? "left" : "right");
		$insert_size = request('insert_size');
		$caption = request('caption');
		$pic_name = request("pic_name");
		$pic_id = request('pic_id');
		$src = '/storage/' . auth()->user()->site->siteUrl . '/images/' . $insert_size . '/'. $pic_name;
		$pic = Pic::find($pic_id);
		$datasizes=$pic->lg."-".$pic->md."-".$pic->sm."-".$pic->xs;
		return '<img src="'. $src .'" style="float:' . $alignment . '; margin-'. $margin .': 15px" data-id="pic-'.$pic_id.'" data-sizes="'.$datasizes.'" data-caption="'.$caption.'" />';
	}

	public function searchimage()
	{
		//search pics 
		$s = request('s');
		$currentlanguage = session('currentLanguage');
		/*$pics = Pic::with('captions')->whereHas('captions', function ($query) use($s) {
		    $query->where('caption', 'LIKE', '%'.$s.'%')->where('site_id', auth()->user()->site_id);
		})->get();
		*/
		$pics = Pic::where('captions', 'LIKE', '%'.$s.'%')->where('site_id', auth()->user()->site_id)->get();
		$objPics = (json_decode(json_encode($pics)));
        //dd($x[0]);
		foreach($objPics as $pic)
		{
			$captions = $pic->captions;
			if($captions)
			{
				$caption = $captions[0]->$currentlanguage;
				$pic->captions = $caption;
			}
		}
		return $objPics;
	}

	public function uploadfile(Request $request) {
		$this->validate($request, [
			'filename' => 'required|file|mimes:ppt,pptx,psd,mp3,mp4,mov,css,html,doc,docx,pdf,xls,xlsx,jpg,jpeg,zip|max:10240',
			]);
		$file = $request->file('filename');
		$time = time();
		$ext = $file->getClientOriginalExtension();
		$filename = $time.'.'.$ext;

		//original
		$path = request()->file('filename')->storeAs('public/' . auth()->user()->site->siteUrl . '/files', $filename);

		$path = basename($path);

		//Save to table
		$file = File::create([
			'filepath' => $path,
			'site_id' => auth()->user()->site->id
			]);

		$fileicon = $this->getIcon($ext);
		
		//return STATUS , Message , Path, Available Sizes
		return json_encode(array('message' => 'BceOk', 'success' => true, 'path' => $path, 'fileicon' => $fileicon, 'file_id' => $file->id));
	}

	public function savecaptionandinsertfilelink(Request $request)
	{
		//dd($request);
		//workout caption for the current Pic //
		$file = File::find(request('file_id'));
		$file->updatecaption(request('captionfile'), session('currentLanguage'));
		//End save Caption

		$captionfile = request('captionfile');
		$file_name = $file->filepath;
		$file_id = request('file_id');
		$ext = pathinfo($file_name, PATHINFO_EXTENSION);
		$fileicon = $this->getIcon($ext);

		$href = '/storage/' . auth()->user()->site->siteUrl . '/files/'. $file_name;
		return '<a data-id="file-'.$file_id.'" data-caption="'.$captionfile.'" href="'.$href.'" target="_blank"><img  style="height: 20px; margin-right: 4px; outline: none" src="/img/filetypes/'.$fileicon.'"" align="left" />'.$captionfile.'</a>';

	}

	public function searchfile()
	{
		//search pics 
		$s = request('s');
		$currentlanguage = session('currentLanguage');
		

		$files = File::where('captions', 'LIKE', '%'.$s.'%')->where('site_id', auth()->user()->site_id)->get();
		$objFiles = (json_decode(json_encode($files)));
        //$objFiles = $files;

		foreach($objFiles as $file)
		{
			$captions = $file->captions;
			if($captions)
			{
				$caption = $captions[0]->$currentlanguage;
				$file->captions = $caption;
			}
			$file_name = $file->filepath;
			$ext = pathinfo($file_name, PATHINFO_EXTENSION);
			$file->fileicon = $this->getIcon($ext);
		}
		return $objFiles;
	}

	public function getIcon($ext)
	{
		$pos = strpos('ppt,pptx,psd,mp3,mp4,mov,css,html,doc,docx,pdf,xls,xlsx,jpg,jpeg,zip', $ext);
		if($pos === false)
		{
			$fileicon = 'na.png';
		}
		else
		{
			$fileicon = $ext.'.png';	
		}
		return $fileicon;
	}
	
}
