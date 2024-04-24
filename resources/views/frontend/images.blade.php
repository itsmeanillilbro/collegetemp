@extends ('frontend.layouts.main')
@section ('main-container')
        <!-- Breadcrumb Start -->
        <div class="all-title-box">
            <div class="container text-center">
                <h1>Images<span class="m_1"><a href="{{url('/')}}">Home</a> / <a href="{{url('/images')}}">Images</a></span></h1>
            </div>
        </div>
        <!-- Breadcrumb End -->
        <section class="gallery">
            <div class="gallery-item">
              <img src="{{url('frontend/img/news-450x350-1.jpg')}}" alt="Image 1">
            </div>
            <div class="gallery-item">
              <img src="{{url('frontend/img/news-450x350-1.jpg')}}" alt="Image 2">
            </div>
            <div class="gallery-item">
              <img src="{{url('frontend/img/news-450x350-1.jpg')}}" alt="Image 3">
            </div>
            <div class="gallery-item">
                <img src="{{url('frontend/img/news-450x350-1.jpg')}}" alt="Image 3">
              </div>
              <div class="gallery-item">
                <img src="{{url('frontend/img/news-450x350-1.jpg')}}" alt="Image 3">
              </div>
          </section>
          
@endsection