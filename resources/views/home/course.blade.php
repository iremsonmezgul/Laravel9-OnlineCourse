@extends('layouts.frontbase')

@section('title', $data->title)

@section('head')

    <link rel="icon" type="image/png" href="images/icons/favicon.png"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/detail/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/detail/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/detail/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/detail/fonts/linearicons-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/detail/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/detail/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/detail/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/detail/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/detail/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/detail/vendor/slick/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/detail/vendor/MagnificPopup/magnific-popup.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/detail/vendor/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/detail/css/util.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/detail/css/main.css">
@endsection

@section('content')

    <div class="container">
        <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
            <a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">
                Home
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <a href="product.html" class="stext-109 cl8 hov-cl1 trans-04">
                Courses
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <span class="stext-109 cl4">
				{{$data->title}}
			</span>
        </div>
    </div>
    <section class="sec-product-detail bg0 p-t-65 p-b-60">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-7 p-b-30">
                    <div class="p-l-25 p-r-30 p-lr-0-lg">
                        <div class="wrap-slick3 flex-sb flex-w">
                            <div class="wrap-slick3-dots"></div>
                            <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

                            <div class="slick3 gallery-lb">
                                <div class="item-slick3" data-thumb="{{asset('assets')}}/detail/images/product-detail-01.jpg">
                                    <div class="wrap-pic-w pos-relative">
                                        <img src="{{Storage::url($data->image)}}" alt="{{asset('assets')}}/detail/img-PRODUCT">

                                        <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{asset('assets')}}/detail/images/product-detail-01.jpg">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                    </div>

                                </div>


                                <div class="item-slick3" data-thumb="{{asset('assets')}}/detail/images/product-detail-03.jpg">
                                    <div class="wrap-pic-w pos-relative">
                                        <img src="{{asset('assets')}}/detail/images/product-detail-03.jpg" alt="{{asset('assets')}}/detail/img-PRODUCT">

                                        <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{asset('assets')}}/detail/images/product-detail-03.jpg">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-5 p-b-30">
                    <div class="p-r-50 p-t-5 p-lr-0-lg">
                        @include('home.messages')
                        <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                            {{$data->title}}
                        </h4>

                        <span class="mtext-106 cl2">
							${{$data->price}}
						</span>

                        <p class="stext-102 cl3 p-t-23">
                            {{$data->description}}
                        </p>

                        <!--  -->
                        <div class="p-t-33">
                            <div class="flex-w flex-r-m p-b-10">
                                <div class="size-203 flex-c-m respon6">
                                    Size
                                </div>

                                <div class="size-204 respon6-next">
                                    <div class="rs1-select2 bor8 bg0">
                                        <select class="{{asset('assets')}}/detail/js-select2" name="time">
                                            <option>Choose an option</option>
                                            <option>30-Day</option>
                                            <option>60-Day</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>


                            <div class="flex-w flex-r-m p-b-10">
                                <div class="size-204 flex-w flex-m respon6-next">
                                    <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                        <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                            <i class="fs-16 zmdi zmdi-minus"></i>
                                        </div>

                                        <input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1">

                                        <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                            <i class="fs-16 zmdi zmdi-plus"></i>
                                        </div>
                                    </div>

                                    <button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                                        Add to cart
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!--  -->
                        <div class="flex-w flex-m p-l-100 p-t-40 respon7">
                            <div class="flex-m bor9 p-r-10 m-r-11">
                                <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
                                    <i class="zmdi zmdi-favorite"></i>
                                </a>
                            </div>

                            <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
                                <i class="fa fa-facebook"></i>
                            </a>

                            <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
                                <i class="fa fa-twitter"></i>
                            </a>

                            <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bor10 m-t-50 p-t-43 p-b-40">
                <!-- Tab01 -->
                <div class="tab01">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">


                        <li class="nav-item p-b-10">
                            <a class="nav-link active" data-toggle="tab" href="#details" role="tab">Details</a>
                        </li>

                        <li class="nav-item p-b-10">
                            <a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Reviews (1)</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content p-t-43">
                        <!-- - -->


                        <!-- - -->
                    <div class="tab-pane fade show active" id="details" role="tabpanel">
                            <div class="row">
                                <div class="how-pos2 p-lr-15-md">
                                    <p class="stext-102 cl6">
                                        {!!$data->detail!!}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- - -->
                        <div class="tab-pane fade" id="reviews" role="tabpanel">
                            <div class="row">
                                <div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
                                    <div class="p-b-30 m-lr-15-sm">
                                        <!-- Review -->
                                        <div class="flex-w flex-t p-b-68">
                                            <div class="wrap-pic-s size-109 bor0 of-hidden m-r-18 m-t-6">
                                                <img src="{{asset('assets')}}/detail/images/avatar-01.jpg" alt="AVATAR">
                                            </div>

                                            <div class="size-207">
                                                <div class="flex-w flex-sb-m p-b-17">
													<span class="mtext-107 cl2 p-r-20">
														Ariana Grande
													</span>

                                                    <span class="fs-18 cl11">
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star-half"></i>
													</span>
                                                </div>

                                                <p class="stext-102 cl6">
                                                    Quod autem in homine praestantissimum atque optimum est, id deseruit. Apud ceteros autem philosophos
                                                </p>
                                            </div>
                                        </div>

                                        <!-- Add review -->
                                        <form class="w-full" action="{{route('storecomment')}}" method="post">
                                            @csrf
                                            <input class="input" type="hidden" name="course_id" value="{{$data->id}}" />
                                            <h5 class="mtext-108 cl2 p-b-7">
                                                Add a review
                                            </h5>

                                            <p class="stext-102 cl6">
                                                Your email address will not be published. Required fields are marked *
                                            </p>

                                            <div class="flex-w flex-m p-t-50 p-b-23">
												<span class="stext-102 cl3 m-r-16">
													Your Rating
												</span>

                                                <span class="wrap-rating fs-18 cl11 pointer">
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<input class="dis-none" type="number" name="rate">
												</span>
                                            </div>

                                            <div class="row p-b-25">
                                                <div class="col-12 p-b-5">
                                                    <textarea class="input" type="review" placeholder="Your review"></textarea>
                                                </div>
                                                <div class="col-sm-6 p-b-5">
                                                    <label class="stext-102 cl3" for="name">Subject</label>
                                                    <input class="size-111 bor8 stext-102 cl2 p-lr-20" id="name" type="text" name="subject">
                                                </div>

                                                <div class="col-sm-6 p-b-5">
                                                    <label class="stext-102 cl3" for="name">Name</label>
                                                    <input class="size-111 bor8 stext-102 cl2 p-lr-20" id="name" type="text" name="name">
                                                </div>

                                            @auth()
                                            <button class="flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10">
                                                Submit
                                            </button>
                                            @else
                                                <a href="/login" class="hov-btn3"> For Sumbit Your Review, Please Login </a>
                                            @endauth
                                        </form>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15">
			<span class="stext-107 cl6 p-lr-25">
				SKU: JAK-01
			</span>

            <span class="stext-107 cl6 p-lr-25">
				{{$data->category->title}}
			</span>
        </div>
    </section>




@endsection

@section('foot')
    <script src="{{asset('assets')}}/detail/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{asset('assets')}}/detail/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{asset('assets')}}/detail/vendor/bootstrap/js/popper.js"></script>
    <script src="{{asset('assets')}}/detail/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{asset('assets')}}/detail/vendor/select2/select2.min.js"></script>
    <script>
        $(".js-select2").each(function(){
            $(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: $(this).next('.dropDownSelect2')
            });
        })
    </script>
    <!--===============================================================================================-->
    <script src="{{asset('assets')}}/detail/vendor/daterangepicker/moment.min.js"></script>
    <script src="{{asset('assets')}}/detail/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="{{asset('assets')}}/detail/vendor/slick/slick.min.js"></script>
    <script src="{{asset('assets')}}/detail/js/slick-custom.js"></script>
    <!--===============================================================================================-->
    <script src="{{asset('assets')}}/detail/vendor/parallax100/parallax100.js"></script>
    <script>
        $('.parallax100').parallax100();
    </script>
    <!--===============================================================================================-->
    <script src="{{asset('assets')}}/detail/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
    <script>
        $('.gallery-lb').each(function() { // the containers for all your galleries
            $(this).magnificPopup({
                delegate: 'a', // the selector for gallery item
                type: 'image',
                gallery: {
                    enabled:true
                },
                mainClass: 'mfp-fade'
            });
        });
    </script>
    <!--===============================================================================================-->
    <script src="{{asset('assets')}}/detail/vendor/isotope/isotope.pkgd.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{asset('assets')}}/detail/vendor/sweetalert/sweetalert.min.js"></script>
    <script>
        $('.js-addwish-b2, .js-addwish-detail').on('click', function(e){
            e.preventDefault();
        });

        $('.js-addwish-b2').each(function(){
            var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
            $(this).on('click', function(){
                swal(nameProduct, "is added to wishlist !", "success");

                $(this).addClass('js-addedwish-b2');
                $(this).off('click');
            });
        });

        $('.js-addwish-detail').each(function(){
            var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

            $(this).on('click', function(){
                swal(nameProduct, "is added to wishlist !", "success");

                $(this).addClass('js-addedwish-detail');
                $(this).off('click');
            });
        });

        /*---------------------------------------------*/

        $('.js-addcart-detail').each(function(){
            var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
            $(this).on('click', function(){
                swal(nameProduct, "is added to cart !", "success");
            });
        });

    </script>
    <!--===============================================================================================-->
    <script src="{{asset('assets')}}/detail/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script>
        $('.js-pscroll').each(function(){
            $(this).css('position','relative');
            $(this).css('overflow','hidden');
            var ps = new PerfectScrollbar(this, {
                wheelSpeed: 1,
                scrollingThreshold: 1000,
                wheelPropagation: false,
            });

            $(window).on('resize', function(){
                ps.update();
            })
        });
    </script>
    <!--===============================================================================================-->
    <script src="{{asset('assets')}}/detail/js/main.js"></script>
@endsection
