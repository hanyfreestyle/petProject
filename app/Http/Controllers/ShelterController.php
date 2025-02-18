<?php

namespace App\Http\Controllers;

use App\Models\Shelter;

class ShelterController extends Controller
{
    public function index()
    {
        $shelters = Shelter::get();
        return view('shelter.index',compact(['shelters']));
    }


    public function view($id)
    {

        $backUrl = route('web.shelterIndex');
        $shelter = Shelter::where('id',$id)
            ->firstOrFail();

        return view('shelter.view',compact(['shelter','backUrl']));
    }
}
