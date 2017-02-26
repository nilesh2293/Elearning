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
