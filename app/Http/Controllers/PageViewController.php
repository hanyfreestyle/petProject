<?php

namespace App\Http\Controllers;
use App\Models\About;
use App\Models\Settings;
use App\Models\Shelter;
use App\Models\Slider;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;

class PageViewController extends Controller {

    public function __construct() {

        $settings =  Settings::query()->first();
        View::share('settings', $settings);

    }
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
    public function homePage() {
        $slider = Slider::query()->get();
        $about = About::query()->first();
        $shelters  = Shelter::query()->get();
        return view('home')->with([
            'slider'=> $slider ,
            'about'=> $about ,
            'shelters'=> $shelters ,
        ]);

    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
    public function contactPage() {


        return view('contact');
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
    public function aboutPage() {
        $about = About::query()->first();

        return view('about')->with([
            'about'=> $about ,
        ]);
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
    public function lostPet () {


        return view('lost');
    }

}
