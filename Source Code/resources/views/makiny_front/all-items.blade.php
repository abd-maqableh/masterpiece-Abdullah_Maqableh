@extends('makiny_front.layout')

@section("content")
        <div>
            @foreach($category_list as $item)
              <p> {{$item->description}}</p>
                @endforeach
        </div>
    @endsection
