@extends('layouts.frontbase')

@section('title', $settings->title)
@section('description',$settings->description)
@section('keywords',$settings->keywords)
@section('icon',Storage::url($settings->icon))

@section('content')

@endsection
