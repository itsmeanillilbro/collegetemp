@extends ('frontend.layouts.main')
@section ('main-container')
        
        <!-- Breadcrumb Start -->
        <div class="all-title-box">
            <div class="container text-center">
                <h1>Gallery<span class="m_1"><a href="{{url('/')}}">Home</a> / <a href="{{url('/gallery')}}">Gallery</a></span></h1>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <section class="gallery-section">
            <!-- Container -->
            <div class="containersec">
                <!-- Gallery Items -->
                <div class="grid-item">
                    <!-- Box -->
                    <div class="box">
                        <!-- Image Holder -->
                        <div class="img-holder">
                            <a href="{{url('/images')}}"><img src="{{url('frontend/img/news-450x350-1.jpg')}}" alt="Sports Club"></a>
                        </div>
                        <!-- Content -->
                        <div class="box-content">
                            <span class="post">Sports Club</span>
                        </div>
                    </div>
                </div>
                <div class="grid-item">
                    <!-- Box -->
                    <div class="box">
                        <!-- Image Holder -->
                        <div class="img-holder">
                            <a href="{{url('/images')}}"><img src="{{url('frontend/img/news-450x350-1.jpg')}}" alt="Sports Club"></a>
                        </div>
                        <!-- Content -->
                        <div class="box-content">
                            <span class="post">Sports Club</span>
                        </div>
                    </div>
                </div>
                <div class="grid-item">
                    <!-- Box -->
                    <div class="box">
                        <!-- Image Holder -->
                        <div class="img-holder">
                            <a href="{{url('/images')}}"><img src="{{url('frontend/img/news-450x350-1.jpg')}}" alt="Sports Club"></a>
                        </div>
                        <!-- Content -->
                        <div class="box-content">
                            <span class="post">Sports Club</span>
                        </div>
                    </div>
                </div>
                <div class="grid-item">
                    <!-- Box -->
                    <div class="box">
                        <!-- Image Holder -->
                        <div class="img-holder">
                            <a href="{{url('/images')}}"><img src="{{url('frontend/img/news-450x350-1.jpg')}}" alt="Sports Club"></a>
                        </div>
                        <!-- Content -->
                        <div class="box-content">
                            <span class="post">Sports Club</span>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>

@endsection