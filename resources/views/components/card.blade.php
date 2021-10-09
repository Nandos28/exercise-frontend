@extends('layouts.master')
<style>



</style>
<div class="col mb-5">
    <div class="card h-100">
        <img class="card-img-top img-product" src="{{$key_image}}" />
        <div class="card-body p-4">
            <div class="text-center">
                <h4 class="fw-bolder">{{$key_title}}</h4>
                {{$slot}}
            </div>
        </div>
    </div>
</div>
