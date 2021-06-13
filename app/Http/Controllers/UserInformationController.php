<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\UserInformation;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Input;

class UserInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $slug)
    {   
        if ($slug != '') {
            $user_information = UserInformation::where('slug',$slug)->first();

            if ($user_information != null) {
                return view('user_information.index',compact('slug','user_information'));
            }
            abort(404);
        }else{
            abort(500);
        }
    }

    public function storeInformation(request $request,$slug)
    {
        $user_information = UserInformation::find($request->id);
        $user_information->name      = $request->name;
        $user_information->email     = $request->email;
        $user_information->phone     = $request->number;
        $user_information->degree    = $request->degree;
        $user_information->save();
        return view('user_information.upload_photo',compact('slug','user_information'));
    }

    public function storeImages(Request $request, $slug)
    {   
        if ($request->hasFile('input_image01')) {
            $request->input_image01->store('user_information', 'public');
        }

        if ($request->hasFile('input_image02')) {
            $request->input_image02->store('user_information', 'public');
        }

        $user_information = UserInformation::find($request->id);
        $user_information->image01     = $request->input_image01->hashName();
        $user_information->image02     = $request->input_image02->hashName();
        $user_information->save();
        return view('user_information.review',compact('slug','user_information'));
    }

    public function storeReview(Request $request, $slug)
    {
        $user_information = UserInformation::find($request->id);
        $user_information->review      = $request->review;
        $user_information->save();
        return view('user_information.thankyou');
    }
   
}