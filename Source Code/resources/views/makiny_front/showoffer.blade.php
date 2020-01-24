@extends('makiny_front.layout')

@section('content')

    <div class="intro">
        <div class="intro_content d-flex flex-row flex-wrap align-items-start justify-content-between">

        @foreach($offer as $offers)
            <!-- Intro Item -->
                <div class="intro_item" >
                <!-- {{--                    <a href="/{{$events->id}}/info">--}} -->
                    <a href="{{route('comment.show',['id' => $offers->id])}}">

                        <div class="intro_image"><img src="{{asset('storage').'/'.$offers->photo}}" alt=""></div>
                        <div class="intro_body">
                            <div class="intro_title"><a href="#">{{$offers->name}}</a></div>
                            <div class="intro_subtitle">{{$offers->description}}</div>
                            <div class="intro_subtitle">{{$offers->location}}</div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>


@endsection


