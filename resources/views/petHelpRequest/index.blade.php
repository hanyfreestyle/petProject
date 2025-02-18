@extends('layouts.app')

@section('content')

    <div class="pt-2"></div>

    <div class="container mt-2">


        @foreach($pets as $pet)
            <div class="card mt-3" style="border-radius: 10px">
                <div class="card-body d-flex align-items-center direction-rtl">
                    <div class="card-img-wrap">

                        @if(!empty($pet->image))
                            <img class="mb-3 rounded" src="{{ Storage::disk('public')->url($pet->image)  }}" alt="">
                        @else
                            <img class="mb-3 rounded" src="{{ asset('images/nophoto.jpg') }}" alt="">
                        @endif


                    </div>
                    <div class="card-content">
                        <h5 class="mb-3">Help Me To Find {{$pet->pet_name}}!</h5>
                        <p><b>Last Seen Place :</b> {{$pet->last_seen}}
                        <br/>
                            {{Str::of($pet->details)->limit(50)}}
                        </p>
                        <a class="btn btn-info rounded-pill" href="{{route('web.lostPetView',['id'=>$pet->id])}}">
                            <i class="fa-solid fa-handshake-angle"></i>
                            Help Me</a>
                    </div>
                </div>
            </div>
        @endforeach





    </div>

    <div class="pb-3"></div>
@endsection
