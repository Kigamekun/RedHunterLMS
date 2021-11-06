@extends('layouts.base')

@section('content')
    <div class="container">





            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
                </li>

              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">



            @foreach ($courses as $item)
            <div class="card" style="width: 18rem;">
                <img src="{{ url('thumb/'.$item->thumb) }}" class="card-img-top p-2" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$item->name}}</h5>
                  <p class="card-text">{{$item->description}}</p>
                  <a href="{{ route('detailClass', ['id'=>$item->id]) }}" class="btn btn-primary">Detail</a>
                </div>
              </div>
            @endforeach


                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                    @foreach ($books as $item)
                    <div class="card" style="width: 18rem;">
                        <img src="{{ url('thumb-book/'.$item->thumb) }}" class="card-img-top p-2" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{$item->title}}</h5>
                          <p class="card-text">{{$item->description}}</p>
                          <a href="{{ route('downloadBook', ['id'=>$item->id]) }}" class="btn btn-primary">Download</a>
                        </div>
                      </div>
                    @endforeach



                </div>

              </div>

    </div>
@endsection
