<?php

namespace App\Http\Controllers;

use App\Models\PetHelpRequest;
use Illuminate\Http\Request;

class PetHelpRequestController extends Controller
{




    public function index(){



        $pets = PetHelpRequest::get();
        return view('petHelpRequest.index',compact(['pets']));
    }


    public function view($id)
    {

        $backUrl = route('web.lostPetIndex');
        $pet = PetHelpRequest::where('id',$id)
            ->where('status',1)
            ->firstOrFail();

        return view('petHelpRequest.view',compact(['pet','backUrl']));
    }

    public function store(Request $request) {
        $request->validate([
            'pet_name' => 'required|string|max:255',
            'owner_name' => 'required|string|max:255',
            'owner_phone' => 'required|string|max:20',
            'last_seen' => 'nullable|string|max:255',
            'details' => 'nullable|string',
            'petImage' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Handle file upload
        $imagePath = null;
        if ($request->hasFile('petImage')) {
            $imagePath = $request->file('petImage')->store('images/help', 'public');
        }

        PetHelpRequest::create([
            'pet_name' => $request->pet_name,
            'owner_name' => $request->owner_name,
            'owner_phone' => $request->owner_phone,
            'last_seen' => $request->last_seen,
            'details' => $request->details,
            'image' => $imagePath,
            'status' => 1
        ]);

        return redirect()->route('web.lostPet')
            ->with('success', 'Pet Help Request Created Successfully!');
    }
}
