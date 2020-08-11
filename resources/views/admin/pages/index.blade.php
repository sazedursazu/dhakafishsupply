@extends('admin.layouts.master')

@section('content')
<div class="card">
    <img class="card-img-top" src="holder.js/100x180/" alt="">
    <div class="card-body">
        <h1 class="card-title">Welcome To Your Administrator Panel</h1>
    <a href="{{route('products.index')}}" class="btn btn-success btn-lg" target="_blank">Visit Site</a>
    </div>
</div>

@endsection
