@extends('layouts.base')

@section('content')

    <div class="container">
            <h1>{{$class->name}}</h1>
            <img src="{{ url('thumb/'.$class->thumb) }}" style="max-width: 200px" alt="">

<hr>
<ul class="list-group">
    @foreach ($course as $item)
    <li  class="list-group-item"><a href="{{ route('detailCourse', ['id'=>$item]) }}">{{$item->title}}</a></li>

    @endforeach
  </ul>
        </div>

@endsection
