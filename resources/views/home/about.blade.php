@extends('layouts.frontbase')

@section('title','About Us | '. $settings->title)
@section('description',$settings->description)
@section('keywords',$settings->keywords)
@section('icon',Storage::url($settings->icon))

@section('content')


    <div  id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active"> /About Us</li>
            </ul>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                {!! $settings->aboutus !!}
                </div>
            </div>
        </div>
    </div>
@endsection
