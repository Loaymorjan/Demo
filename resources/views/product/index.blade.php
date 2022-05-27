@extends('product.layout')
@section('content')

<div class="container">
  <div class="card text-center">

  <div class="card-header">
    WELCOME
  </div>
  <div class="card-body">
    <h5 class="card-title">  PRODUCTS </h5>
    <p class="card-text">With supporting text below as a natural lead-in to products.</p>
    <a href="{{route('product.create') }}" class="btn btn-primary" role="button"> CREATE </a>
  
  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
</div>
</div>
<br/>
<br/>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">price</th>
        <th scope="col">details</th>
        <th scope="col">actions</th>

      </tr>
    </thead>
    <tbody>

    @php
      $x=1
    @endphp
      @foreach($products as $item)
      <tr>
        <th scope="row">{{$x++}}</th>
        <th >{{$item->name}}</th>
        <td >{{$item->price}}</td>
        <td>{{$item->details}}</td>
        <td>
            
          <div class="row mb-2">
            <a type="text" class="btn btn-success" href="{{route('product.edit',$item->id)}}" placeholder="Input Product Name"> Edit</a>
          </div>
           <div class="row mb-2">
            <a type="text" class="btn btn-primary" href="{{route('product.show',$item->id)}}" placeholder="Input Price"> Show</a>
                 </div>
                                 
<form action="{{route('product.destroy',$item->id)}}" method="POST">
@csrf
@method('DELETE')
<div class="row mb-2">
<button class="btn btn-danger" type="submit"> Delete </button>
</div>
</form>


            </tr>
      @endforeach
    </tbody>

    {{$products->links()}}
  </table>

@endsection