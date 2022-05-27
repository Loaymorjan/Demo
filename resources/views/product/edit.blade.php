@extends('product.layout')
@section('content')

<div class="container">
    <div class="card text-center">

  <div class="card-header">
    WELCOME
  </div>
  <div class="card-body">
    <h5 class="card-title"> EDIT PRODUCT </h5>
    <p class="card-text">With supporting text below as a natural lead-in to edit product.</p>
    <a href="{{route('product.index')}}" class="btn btn-primary" role="button"> Index </a>
    
  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
</div>
</div>

 <br/>
 <br/>
<form action="{{route('product.update',$product->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">name</label>
        <input type="text" name="name" value="{{$product->name}}" class="form-control" id="name" placeholder="Example input name">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">price</label>
        <input type="text" name="price" value="{{$product->price}}" class="form-control" id="price" placeholder="Another input price">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">details</label>
        <input type="text" name="details" value="{{$product->details}}" class="form-control" id="details" placeholder="Another input details">
      </div>
       <div class="mb-3">
        <button type="submit" class="btn btn-primary"> Edit </button>
       </div>
     </div>
    </div>
</form>
@endsection