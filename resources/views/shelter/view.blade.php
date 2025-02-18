@extends('layouts.app')

@section('content')

    <div class="page-content-wrapper py-3">
        <div class="container mb-5">
            <div class="card image-gallery-card direction-rtl">
                <div class="card-body">


                    <div class="text-center">

                        @if(!empty($shelter->logo))
                            <img class="mb-3 rounded" src="{{ Storage::disk('public')->url($shelter->logo)  }}" alt="">
                        @else
                            <img class="mb-3 rounded" src="{{ asset('images/nophoto.jpg') }}" alt="">
                        @endif



                    </div>



                    <h5 class="mb-3"><b>Name : </b>{{$shelter->name}}!</h5>
                    <p><b>services :</b> {{$shelter->services}}</p>

                    <p><b>Landmark :</b> {{$shelter->landmark ?? '----'}} </p>

                    <div class="social-info-wrap">


                        @foreach($shelter->phone_number as $one)



                            <a href="tel:{{$one['number']}}">
                                <i style="font-size: 24px" class="fa-solid fa-square-phone"></i>
                            </a>
                        @endforeach
                            @if($shelter->website?? null)

                            <a href="{{$shelter->website}}" target="_blank">
                                <i style="font-size: 24px" class="fa-solid fa-globe"></i>
                            </a>

                        @endif


                    </div>



                    <a target="_blank" href="https://www.google.com/maps/dir/?api=1&destination={{$shelter->location['lat']}},{{$shelter->location['lng']}}"
                       class="btn btn-info mt-2 w-100">
                        <i style="margin-right: 10px" class="fa-solid fa-map-location-dot"></i>
                        Get Direction
                    </a>




                </div>
            </div>
        </div>
    </div>


@endsection
