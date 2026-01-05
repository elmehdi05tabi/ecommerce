@extends('base')
@section('title','Create Product')
@section('content')

<form action="{{route('products.update',$product)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
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
        <button class="btn btn-primary w-100" type="submit">Update Product</button>
    </div>
</form>
@endsection