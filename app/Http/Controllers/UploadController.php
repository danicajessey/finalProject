<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\upload;

class UploadController extends Controller
{
    public function create3(){
        return view('Upload');
    }

    public function store3(Request $request){
        $request->validate([
            'image_CV' => 'required|image|mimes:jpeg,png,jpg,pdf|max:2048',
            'image_flazz_card'=> 'required|image|mimes:jpeg,png,jpg,pdf|max:2048',
            'image_ID_card'=> 'required|image|mimes:jpeg,png,jpg,pdf|max:2048'
        ]);
        $imagePathCV = $request->name . '-'. $request->line_ID. '-'. $request->file('image_CV')->getClientOriginalName();
        $imagePathFlazz =$request->name . '-'. $request->line_ID. '-'. $request->file('image_flazz_card')->getClientOriginalName();
        $imagePathID = $request->name . '-'. $request->line_ID. '-'. $request->file('image_ID_card')->getClientOriginalName();

        $request->file('image_CV')->storeAs('/public/CV', $imagePathCV);
        $request->file('image_flazz_card')->storeAs('/public/flazz', $imagePathFlazz);
        $request->file('image_ID_card')->storeAs('/public/ID', $imagePathID);

        upload::create([
            'image_CV' => $imagePathCV,
            'image_flazz_card' => $imagePathFlazz,
            'image_ID_card' => $imagePathID
        ]);

        return redirect(route('show'));
    }
}
