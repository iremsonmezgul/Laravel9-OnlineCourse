<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->
<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="{{route('home')}}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>eLEARNING</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">





        <div class="navbar-nav ms-auto p-4 p-lg-0">

            <li class="dropdown nav-item nav-link" style="color: black ">
                @php
                    $mainCategories = \App\Http\Controllers\HomeController::maincategorylist();
                @endphp
                <a data-toggle="dropdown" class="dropdown-toggle disabled" href="books-media-list-view.html">Categories</a>
                <ul class="dropdown-menu">
                    @foreach($mainCategories as $rs)
                        @if(count($rs->children))
                            <li>
                                <a href="{{route('categorycourses',['id'=>$rs->id, 'slug'=>$rs->title])}}">{{$rs->title}}
                                    <i class="bi bi-caret-right-fill"></i></a>
                                <ul>
                                    @include('home.categorytree',['children'=>$rs->children])
                                </ul>
                            </li>
                        @else
                            <li>
                                <a href="{{route('categorycourses',['id'=>$rs->id, 'slug'=>$rs->title])}}">{{$rs->title}}</a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </li>
            <a href="{{route('home')}}" class="nav-item nav-link">Home</a>
            <a href="{{route('about')}}" class="nav-item nav-link">About</a>
            <a href="{{route('references')}}" class="nav-item nav-link">References</a>
            <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
            <a href="{{'courses'}}" class="nav-item nav-link">Courses</a>
            <a href="{{'faq'}}" class="nav-item nav-link">FAQ</a>

                @auth
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">{{Auth::user()->name}}</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="/logoutuser" class="text-uppercase">Logout</a>
                        @endauth


                            <ul class ="dropdown-item">
                                <a href="/loginuser" class="text-uppercase">Login</a> / <a href="/registeruser" class="text-uppercase">Join</a>


                                <li><a href="#"><i class="fa fa-user-o"></i>My Account</a></li>
                            <li><a href="#"><i class="fa fa-user-o"></i>Checkout</a></li>
                            <li><a href="#"><i class="fa fa-user-o"></i>My Wishlist</a></li>

                            </ul>
                    </div>
                </div>

        </div>
        <a href="{{route('courses')}}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Join Now<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
<!-- Navbar End -->

