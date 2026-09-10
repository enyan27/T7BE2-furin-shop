@extends('customer.layout.master')

@section('title','Furin - Online Store')

@section('body')

    @include('customer.component.slide')
    @include('customer.component.product_index')
    @include('customer.component.best_seller')
    @include('customer.component.blog')

@endsection
