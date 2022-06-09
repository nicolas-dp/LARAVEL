@extends('layouts.app')

@section('content')


<section class="products">
    <h1>pasta</h1>
    <div class="row">
        @forelse($products as $pasta)
        <div class="col">
            <div class="product">
                <img src="{{$pasta['src'}}" alt="">
                <h4>{{$pasta['titolo'}}</h4>
            </div>
        </div>

        @empty
        <div class="col">
            <p>No Products to show</p>
        </div>
        @endforelse
    </div>
</section>
@endsection