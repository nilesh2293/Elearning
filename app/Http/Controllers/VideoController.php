<?php

namespace App\Http\Controllers;

use App\Video;
use Input;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;


class VideoController extends Controller
{

/**
 *
 * Show All Videos
 *Also include filter
 *
 *  returns all url of video includeing class info
 */
public function index($class_id='')
{
	$success=0;
	$video=new Video;
	if($class_id='')
		$get_all_video=$video->where('status','1')->get();
	else
		$get_all_video=$video->where('class_id',$class_id)->where('status','1')->get();

if(count($get_all_video)>0)
	$success=1;

	return response()->json([
		'video_url'=>$get_all_video,
		'success'=>$success
		]);

}

 	/**
     * Validate and upload a video 
     * 
     *@return Success 1 if video upploaded successfully else 0
     */
 	public function uploadVideo(Request $request)
 	{
 		
$this->validate($request, [
      'video' => 'required|mimes:mp4|max:25600',
      ]); 		
 		 $imageName = time().'.'.$request->video->getClientOriginalExtension();
        $is_file_uploaded=$request->video->move(public_path('video'), $imageName);

/* if $is_file_uploaded is true then save to table else return false */

$class_id='1';

if($is_file_uploaded){
	$video=new Video;
	$video->video_url=$imageName;
	$video->class_id=$class_id;
	$video->upload_by=Auth::user()->id;
	$video->save();
	$success=1;
}
else
$error=1;

if($success==1)
{
	$errors=array('Failed to upload video.Try again..!!');    
return Redirect::back()->withErrors($errors)->withInput();	
}


        
 	}
       
}
