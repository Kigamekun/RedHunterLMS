@extends('layouts.admin')


@section('content')

<form action="{{ route('storeClass') }}" method="post" enctype="multipart/form-data">
@csrf
<div class="mb-3">
    <label for="name" class="form-label">Nama</label>
    <input type="text" name="name" class="form-control" id="name" placeholder="name">
  </div>



<div class="mb-3">
    <label for="price" class="form-label">Price</label>
    <input type="number" name="price" class="form-control" id="price" placeholder="price">
  </div>


  <div class="mb-3">
    <label for="level" class="form-label">Level</label>
    <input type="number" name="level" class="form-control" id="level" placeholder="level">
  </div>

<div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <input type="number" name="description" class="form-control" id="description" placeholder="description">
  </div>

  <div class="mb-3">
    <label for="category" class="form-label">category</label>
    <input type="number" name="category" class="form-control" id="category" placeholder="description">
  </div>


  <div class="mb-3">
    <label for="formFile" class="form-label">Default file input example</label>
    <input class="form-control" name="thumb" type="file" id="formFile">
  </div>

<button class="btn btn-success">Kirim</button>


</form>
@endsection
