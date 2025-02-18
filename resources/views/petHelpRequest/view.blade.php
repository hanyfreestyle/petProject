@extends('layouts.app')

@section('content')



    <div class="page-content-wrapper py-3">
        <div class="container mb-5">
            <div class="card image-gallery-card direction-rtl">
                <div class="card-body">


                    <div class="text-center">

                        @if(!empty($pet->image))
                            <img class="mb-3 rounded" src="{{ Storage::disk('public')->url($pet->image)  }}" alt="">
                        @else
                            <img class="mb-3 rounded" src="{{ asset('images/nophoto.jpg') }}" alt="">
                        @endif



                    </div>



                    <h5 class="mb-3">Help Me To Find {{$pet->pet_name}}!</h5>
                    <p><b>Owner Name :</b> {{$pet->owner_name}}</p>
                    <p><b>Last Seen Place :</b> {{$pet->last_seen}}</p>
                    <p><b>Details :</b> {{$pet->details}}</p>





                    <a href="tel:{{$pet->owner_phone}}" class="btn btn-primary mt-3 w-100">
                        <i class="fa-solid fa-mobile-screen-button"></i>
                        Contact Us</a>
                </div>
            </div>
        </div>
    </div>


@endsection
