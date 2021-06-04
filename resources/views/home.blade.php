@extends('base')
@section('contant')
    <div id="main" class='home' style="margin: 50px 0">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($products as $product)
                <div id="{{'product-'.$product->id}}" class="col">
                    <div class="card">
                        <img src="{{asset('images/products/'.$product->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->title }}</h5>
                            <p class="brand"> {{$product->brand}} for {{$product->category}}</p>
                            @if($product->discount > 0)
                                <strong style="text-decoration-line: line-through;color: red">${{$product->price}}</strong>
                                <strong style="margin-left: 5px">${{($product->discount*$product->price)/100}}</strong>
                            @else
                                <strong>${{$product->price}}</strong>
                            @endif
                            <p class="card-text description">{{$product->description}}.</p>

                            <a class="btn btn-primary">Read more</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
