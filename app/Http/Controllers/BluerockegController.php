<?php

namespace App\Http\Controllers;

use App\Models\ConfigData;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BluerockegController extends Controller {


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
    public function importData() {

//        $old_Users = DB::connection('secondary_db')->table('tbl_user')->get();
//        foreach ($old_Users as $old){
//            if ($old->user_id > 1){
//                $saveData = new User();
//                $saveData->name = $old->name ;
//                $saveData->email = $old->email;
//                $saveData->is_active = $old->state;
//                $saveData->password = Hash::make($old->email);
//                $saveData->save();
//            }
//        }


//        $OldData = DB::connection('secondary_db')->table('config_data')->get();
//
//        foreach ($OldData as $data){
//            $saveData = new ConfigData();
//            $saveData->id = $data->id ;
//            $saveData->cat_id = $data->cat_id ;
//            $saveData->name = $data->name_en ;
//            $saveData->is_active = $data->state ;
//            $saveData->save();
//        }

//        dd($OldData);
    }
}
