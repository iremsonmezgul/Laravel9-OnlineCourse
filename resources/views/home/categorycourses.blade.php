@extends('layouts.frontbase')

@section('title', $category->title . ' Courses')

@section('content')

            @foreach ($courses as $rs)
                <div class="container-xxl py-5">
                    <div class="container">
                        <div class="row g-4 justify-content-center">
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                <div class="course-item bg-light">
                                    <div class="position-relative overflow-hidden">
                                        <img src="{{Storage::url($rs->image)}}" style="height: 200px; width:180px">
                                        <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                            <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                            <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Join Now</a>
                                        </div>
                                    </div>
                                    <div class="text-center p-4 pb-0">
                                        <h3 class="mb-0">${{$rs->price}}</h3>
                                        <div class="mb-3">
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small>(123)</small>
                                        </div>
                                        <h5 class="mb-4">{{$rs->title}}</h5>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Students</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                        <a href="{{route('course',['id'=>$rs->id])}}">
                            <div class="main-btn quick-view">

                      </div>
                    @endforeach

@endsection

