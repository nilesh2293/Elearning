<?php

namespace App\Http\Controllers;

use Input;
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
 		

 		
 		 $imageName = time().'.'.$request->video->getClientOriginalExtension();
        $request->video->move(public_path('video'), $imageName);

        
 	}
       
}
