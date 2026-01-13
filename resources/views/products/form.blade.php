@extends('base')
@section('title',$isUpdate ?'Update':'Create'.' Product')
@php
    $route = route('products.store') ; 
    if($isUpdate) {
        $route = route('products.update',$product) ;
    }
@endphp
@section('content')
<h1>{{$isUpdate ? 'Update':'Create'.' Product'}}</h1>
<form action="{{$route}}" 
 method="POST" enctype="multipart/form-data">
    @csrf
    @if($isUpdate)
        @method('PUT')
    @endif
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input
            type="text"
            name="name"
            id="name"
            class="form-control"
            placeholder=""
            aria-describedby="helpId"
            value="{{old('name',$product->name)}}"
        />
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea
            type="text"
            name="description"
            id="name"
            class="form-control"
            placeholder=""
            aria-describedby="helpId"
        >{{old('description',$product->description)}}</textarea>
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Quantity</label>
        <input
            type="number"
            name="quantity"
            id="name"
            class="form-control"
            placeholder=""
            value="{{old('quantity',$product->quantity)}}"
            aria-describedby="helpId"
        />
    </div>
    <div class="mb-3">
        <label for="Image" class="form-label">Image Product</label>
        <input
            type="file"
            name="image"
            id="name"
            class="form-control"
            placeholder=""
            aria-describedby="helpId"
        />
        @if($product->image)
        <img src="{{asset('storage/'.$product->image)}}" width="100px" height="100px" alt="">
        @endif
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input
            type="number"
            name="price"
            value="{{old('price',$product->price)}}"
            id="name"
            class="form-control"
            placeholder=""
            aria-describedby="helpId"
        />
    </div>
     <div class="mb-3 w-100">
        <button class="btn btn-primary w-100" type="submit">{{$isUpdate ?'Update':'Create'.' Product'}}</button>
    </div>
</form>
@endsection