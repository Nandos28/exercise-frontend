@extends('layouts.master')

@section('title','Product')

@section('content')

@parent
<div class="container px-4 px-lg-5 mt-5">
    <div class="row mb-2">
        <div class="col-md-12 my-1">
            <div class="card">
                <div class="card-body text-left">
                        <b>Product List</b>({{ count ($products) }})
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row gx-4 gx-lg-5 row-cols-2 row-cols-nd-3 row-cols-xl-4 justify-content-center">
    @forelse ($products as $key => $products)
    @component('components.card')
        @endcomponent
            @slot('key_image')
                {{asset($key['photo'])}}
            @endslot

            @slot('key_title')
                {{$key['id'] - $key['name']}}
            @endslot
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Price
                        <span>Rp. {{number_format($key['price'], 2,'.',',')}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Stock
                        <span class="bandage {{$key['stok']<10?'bandage-danger':'bandage-primary'}} bandage-pill">{{ $key['stok'] }}</span>
                    </li>
                </ul>
        @endcomponent
    @empty
        <div class="col-md-12 my-1">
            <div class="card">
                <div class="card-body">
                    No Product(s) Found!
                </div>
            </div>
        </div>
    @endforelse
</div>
@endsection
