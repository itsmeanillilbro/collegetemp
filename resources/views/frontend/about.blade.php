@extends ('frontend.layouts.main')
@section ('main-container')

        <!-- Breadcrumb Start -->
        <div class="all-title-box">
            <div class="container text-center">
                <h1>About Us<span class="m_1"><a href="{{url('/')}}">Home</a> / <a href="{{url('/about')}}">About Us</a></span></h1>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <div id="overviews" class="section lb">
            @foreach($entries as $ab)
            <div class="container">

                <div class="text-center">
                    <img class="img-fluid" src="{{asset('storage/images/' . $ab->image)}}" alt="aboutimg" style="" >
                </div>
                <div class="mt-4">
                    <p>
                      {!!$ab->description!!}
                    </p>
                </div>
@endforeach
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="message-box">
                            <h4>2018 BEST SmartEDU education school</h4>
                            <h2>Awards Winner Support Center</h2>
                            <p>Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>

                            <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis montes, nascetur ridiculus mus. Sed vitae rutrum neque. </p>
                        </div><!-- end messagebox -->
                    </div><!-- end col -->

                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="post-media wow fadeIn">
                            <img src="{{url('frontend/img/news-450x350-1.jpg')}}" alt="" class="img-fluid img-rounded">
                        </div><!-- end media -->
                    </div><!-- end col -->
                </div>
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="post-media wow fadeIn">
                            <img src="{{url('frontend/img/news-450x350-1.jpg')}}" alt="" class="img-fluid img-rounded">
                        </div><!-- end media -->
                    </div><!-- end col -->

                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="message-box">
                            <h2>The standard Lorem Ipsum passage, used since the 1500s</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                            <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum.</p>
                        </div><!-- end messagebox -->
                    </div><!-- end col -->

                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->


@endsection
