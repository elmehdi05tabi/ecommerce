@extends('base')
@section('title','Product')
@section('content')
<div class="d-flex justify-content-between">
    <h1>Create Product</h1>
    <a class="btn btn-primary" href="{{route('products.create')}}">Create</a>
</div>
<table class=" table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Image</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->quantity}}</td>
                    <td><img width="100px" height="100px" src="{{asset('storage/'.$product->image)}}" alt="image for product"></td>
                    <td>{{$product->price}} MAD</td>
                    <td>
                        {{-- delete produit --}}
                        <form action="{{route('products.destroy',$product)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                        {{-- update product --}}
                        <form action="{{route('products.edit',$product)}}" method="GET">
                            @csrf
                            <button class="btn btn-primary">Update</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$products->links()}}
@endsection