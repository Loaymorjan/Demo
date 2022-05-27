@extends('product.layout')
@section('content')

<div class="container">
    <div class="card text-center">

  <div class="card-header">
    PRODUCT
  </div>
  <div class="card-body">
    <h2 class="card-title"> {{$product->name}} </h2>
    <h5 class="card-title"> {{$product->price}} </h5>
    <p class="card-text">   {{$product->details}} </p>    
  </div>
  <div class="card-footer text-muted">
    WELOME TO SHOP
  </div>
</div>
</div>
@endsection