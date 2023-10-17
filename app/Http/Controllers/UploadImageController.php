<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use thiagoalessio\TesseractOCR\TesseractOCR;
class UploadImageController extends Controller {

   public function index(){
       return view('UploadImage');
   }

   public function upload(Request $request){

    $image = $request->file('image');
    $filename= date('YmdHi').$image->getClientOriginalName();
    $image-> move(public_path('images'), $filename);

    $ocr = new TesseractOCR(public_path("images/$filename"));
    $ocr->lang('ara','eng', 'jpn', 'spa');
    $text = $ocr->run();

    return redirect()->back()->with('text',$text);
   

    

   }
}

