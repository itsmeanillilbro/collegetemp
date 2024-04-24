@extends ('frontend.layouts.main')
@section('main-container')
    {{-- popup section --}}
    <!-- <div id="myModal" class="modal fade">
        <div class="modal-dialog modal-dialog-centered  modal-lg">
            <div class="modal-content">
                <div class="modal-header my-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body overflow-hidden">
                    <img class="img-fluid" src="{{ url('frontend/img/news-450x350-1.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="top-news">
        <div class="row">
            <div class="col-md-12 tn-left">
                <div class="row tn-slider">
                    <div class="col-md-6">
                        <div class="tn-img">
                            <img src="{{ url('frontend/img/news-450x350-1.jpg') }}" />
                            <div class="tn-title">
                                <h3>EMPOWER YOUR FUTURE</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tn-img">
                            <img src="{{ url('frontend/img/news-450x350-2.jpg') }}" />
                            <div class="tn-title">
                                <h3>EMPOWER YOUR FUTURE</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Top News End-->

    <!-- Category News Start-->
    <div class="cat-news">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Notice</h2>
                    <div class="row cn-slider">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="image" style="background-image: url('{{ url('frontend/img/news-450x350-1.jpg') }}');">
                                    <h3><a href="#">Academic Result Of 2076</a></h3>
                                    <a class="badge" href="#"><i class="fas fa-download"></i></a>
                                </div>
                                <div class="content">
                                    <span class="news-page">
                                        <i class="fas fa-calendar"></i>
                                        <span class="news-page">Date: <b>2024-04-12</b></span>
                                    </span>
                                    <span class="news1-info-page">
                                        <i class="fas fa-clock"></i>
                                        <span class="news-page">Time: <b>10 pm</b></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="image" style="background-image: url('{{ url('frontend/img/news-450x350-2.jpg') }}');">
                                    <h3><a href="#">Academic Result Of 2076</a></h3>
                                    <a class="badge" href="#"><i class="fas fa-download"></i></a>
                                </div>
                                <div class="content">
                                    <span class="news-page">
                                        <i class="fas fa-calendar"></i>
                                        <span class="news-page">Date: <b>2024-04-12</b></span>
                                    </span>
                                    <span class="news1-info-page">
                                        <i class="fas fa-clock"></i>
                                        <span class="news-page">Time: <b>10 pm</b></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="image" style="background-image: url('{{ url('frontend/img/news-450x350-1.jpg') }}');">
                                    <h3><a href="#">Academic Result Of 2076</a></h3>
                                    <a class="badge" href="#"><i class="fas fa-download"></i></a>
                                </div>
                                <div class="content">
                                    <span class="news-page">
                                        <i class="fas fa-calendar"></i>
                                        <span class="news-page">Date: <b>2024-04-12</b></span>
                                    </span>
                                    <span class="news1-info-page">
                                        <i class="fas fa-clock"></i>
                                        <span class="news-page">Time: <b>10 pm</b></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="image" style="background-image: url('{{ url('frontend/img/news-450x350-2.jpg') }}');">
                                    <h3><a href="#">Academic Result Of 2076</a></h3>
                                    <a class="badge" href="#"><i class="fas fa-download"></i></a>
                                </div>
                                <div class="content">
                                    <span class="news-page">
                                        <i class="fas fa-calendar"></i>
                                        <span class="news-page">Date: <b>2024-04-12</b></span>
                                    </span>
                                    <span class="news1-info-page">
                                        <i class="fas fa-clock"></i>
                                        <span class="news-page">Time: <b>10 pm</b></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Category News End-->


    {{-- academics section start --}}
    <section class="pt-4 pb-4" style="background: aliceblue; padding-top: 5%;">
        <div class="container">
            <div class="col-md-8 text-center offset-md-2">
                <h3>Academics</h3>
                <p class="lead">Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet.</p>
            </div>
            <div class="row main-page">
                <div class="card-page">
                    <img src="{{ url('frontend/img/news-450x350-1.jpg') }}" />
                    <span class="content-page">
                        <span class="title-page">
                            <a href="{{ url('/academicdetails') }}">What is Lorem Ipsum</a>
                        </span>
                        <span class="description-page">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </span>
                        <span class="info-page">
                            <span class="sub-info-page">
                                <i class="fas fa-clock"></i>
                                <span class="details-page">Duration: <b>
                                        4 years
                                    </b></span>
                            </span>
                            <span class="sub-info-page">
                                <i class="fas fa-graduation-cap"></i>
                                <span class="details-page">Faculty: <b>
                                        mgmt
                                    </b></span>
                            </span>
                        </span>

                    </span>
                </div>
                <div class="card-page">
                    <img src="{{ url('frontend/img/news-450x350-1.jpg') }}" />
                    <span class="content-page">
                        <span class="title-page">
                            <a href="{{ url('/academicdetails') }}">What is Lorem Ipsum</a>
                        </span>
                        <span class="description-page">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </span>
                        <span class="info-page">
                            <span class="sub-info-page">
                                <i class="fas fa-clock"></i>
                                <span class="details-page">Duration: <b>
                                        4 years
                                    </b></span>
                            </span>
                            <span class="sub-info-page">
                                <i class="fas fa-graduation-cap"></i>
                                <span class="details-page">Faculty: <b>
                                        mgmt
                                    </b></span>
                            </span>
                        </span>

                    </span>
                </div>
                <div class="card-page">
                    <img src="{{ url('frontend/img/news-450x350-1.jpg') }}" />
                    <span class="content-page">
                        <span class="title-page">
                            <a href="{{ url('/academicdetails') }}">What is Lorem Ipsum</a>
                        </span>
                        <span class="description-page">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </span>
                        <span class="info-page">
                            <span class="sub-info-page">
                                <i class="fas fa-clock"></i>
                                <span class="details-page">Duration: <b>
                                        4 years
                                    </b></span>
                            </span>
                            <span class="sub-info-page">
                                <i class="fas fa-graduation-cap"></i>
                                <span class="details-page">Faculty: <b>
                                        mgmt
                                    </b></span>
                            </span>
                        </span>

                    </span>
                </div>
                <div class="card-page">
                    <img src="{{ url('frontend/img/news-450x350-1.jpg') }}" />
                    <span class="content-page">
                        <span class="title-page">
                            <a href="{{ url('/academicdetails') }}">What is Lorem Ipsum</a>
                        </span>
                        <span class="description-page">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </span>
                        <span class="info-page">
                            <span class="sub-info-page">
                                <i class="fas fa-clock"></i>
                                <span class="details-page">Duration: <b>
                                        4 years
                                    </b></span>
                            </span>
                            <span class="sub-info-page">
                                <i class="fas fa-graduation-cap"></i>
                                <span class="details-page">Faculty: <b>
                                        mgmt
                                    </b></span>
                            </span>
                        </span>

                    </span>
                </div>
                <div class="card-page">
                    <img src="{{ url('frontend/img/news-450x350-1.jpg') }}" />
                    <span class="content-page">
                        <span class="title-page">
                            <a href="{{ url('/academicdetails') }}">What is Lorem Ipsum</a>
                        </span>
                        <span class="description-page">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </span>
                        <span class="info-page">
                            <span class="sub-info-page">
                                <i class="fas fa-clock"></i>
                                <span class="details-page">Duration: <b>
                                        4 years
                                    </b></span>
                            </span>
                            <span class="sub-info-page">
                                <i class="fas fa-graduation-cap"></i>
                                <span class="details-page">Faculty: <b>
                                        mgmt
                                    </b></span>
                            </span>
                        </span>

                    </span>
                </div>
                <div class="card-page">
                    <img src="{{ url('frontend/img/news-450x350-1.jpg') }}" />
                    <span class="content-page">
                        <span class="title-page">
                            <a href="{{ url('/academicdetails') }}">What is Lorem Ipsum</a>
                        </span>
                        <span class="description-page">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </span>
                        <span class="info-page">
                            <span class="sub-info-page">
                                <i class="fas fa-clock"></i>
                                <span class="details-page">Duration: <b>
                                        4 years
                                    </b></span>
                            </span>
                            <span class="sub-info-page">
                                <i class="fas fa-graduation-cap"></i>
                                <span class="details-page">Faculty: <b>
                                        mgmt
                                    </b></span>
                            </span>
                        </span>

                    </span>

                </div>
            </div>
            <div class="btn-page text-center" style="padding: 5%;">
                <a href="{{ url('/academics') }}" class="read-more">Read More</a>
            </div>
        </div>
    </section>
    {{-- academics section end  --}}

    <!-- Main News Start-->
    <div class="main-news" style="padding-top: 5%;">
        <div class="container">
            <div class="col-md-8 text-center offset-md-2">
                <h3>Gallery</h3>
                <p class="lead">Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet.</p>
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mn-img">
                                <img src="{{ url('frontend/img/news-350x223-1.jpg') }}" />
                                <div class="mn-title">
                                    <a href="">Lorem ipsum dolor sit</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mn-img">
                                <img src="{{ url('frontend/img/news-350x223-2.jpg') }}" />
                                <div class="mn-title">
                                    <a href="">Lorem ipsum dolor sit</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mn-img">
                                <img src="{{ url('frontend/img/news-350x223-3.jpg') }}" />
                                <div class="mn-title">
                                    <a href="">Lorem ipsum dolor sit</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mn-img">
                                <img src="{{ url('frontend/img/news-350x223-4.jpg') }}" />
                                <div class="mn-title">
                                    <a href="">Lorem ipsum dolor sit</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mn-img">
                                <img src="{{ url('frontend/img/news-350x223-5.jpg') }}" />
                                <div class="mn-title">
                                    <a href="">Lorem ipsum dolor sit</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mn-img">
                                <img src="{{ url('frontend/img/news-350x223-1.jpg') }}" />
                                <div class="mn-title">
                                    <a href="">Lorem ipsum dolor sit</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mn-img">
                                <img src="{{ url('frontend/img/news-350x223-2.jpg') }}" />
                                <div class="mn-title">
                                    <a href="">Lorem ipsum dolor sit</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mn-img">
                                <img src="{{ url('frontend/img/news-350x223-3.jpg') }}" />
                                <div class="mn-title">
                                    <a href="">Lorem ipsum dolor sit</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mn-img">
                                <img src="{{ url('frontend/img/news-350x223-4.jpg') }}" />
                                <div class="mn-title">
                                    <a href="">Lorem ipsum dolor sit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="mn-list">
                        <h2>News List</h2>
                        <ul>
                            <li><a href="">Lorem ipsum dolor sit amet</a></li>
                            <li><a href="">Pellentesque tincidunt enim libero</a></li>
                            <li><a href="">Morbi id finibus diam vel pretium enim</a></li>
                            <li><a href="">Duis semper sapien in eros euismod sodales</a></li>
                            <li><a href="">Vestibulum cursus lorem nibh</a></li>
                            <li><a href="">Morbi ullamcorper vulputate metus non eleifend</a></li>
                            <li><a href="">Etiam vitae elit felis sit amet</a></li>
                            <li><a href="">Nullam congue massa vitae quam</a></li>
                            <li><a href="">Proin sed ante rutrum</a></li>
                            <li><a href="">Curabitur vel lectus</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="btn-page text-center" style="padding: 5%;">
                <a href="{{ url('/gallery') }}" class="read-more">Read More</a>
            </div>
        </div>
    </div>
    <!-- Main News End-->
    {{-- news and events section start  --}}
    <section class="news-event pt-4 pb-4" data-aos="fade-up" data-aos-delay="200"
        style="background: aliceblue; padding-top: 5%;">
        <div class="container">
            <div class="col-md-8 text-center offset-md-2">
                <h3>News & Events</h3>
                <p class="lead">Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet.</p>
            </div>
@php
$chunks = $news->take(6);
@endphp
            <div class="row text-light  ">
                @foreach ($chunks as $new)
                    <div class="col-12 col-sm-6 col-md-4 mb-4">
                        <div class="news-card">
                            <div class="ne-img overflow-hidden">
                                <a href="{{ asset('storage/images/' . $new->news_img) }}"><img class="img-fluid"
                                        src="{{ asset('storage/images/' . $new->news_img) }}" alt=""></a>
                            </div>
                            <div class="news-header">
                                <span class="news-page">
                                    <span class="news-info-page">
                                        <i class="fas fa-calendar"></i>
                                        <span class="news-page">Date: <b>
                                                {{ date('Y-m-d', strtotime($new->created_at)) }}
                                            </b></span>
                                    </span>
                                    <span class="news1-info-page">
                                        <i class="fas fa-clock"></i>
                                        <span class="news-page"><b>
                                                @if ($new->created_at->isToday())
                                                    Today
                                                @elseif($new->created_at->isYesterday())
                                                    Yesterday
                                                @else
                                                    {{ $new->created_at->diffForHumans() }}
                                                @endif
                                            </b></span>
                                    </span>
                      </span>
                                <div class="ps-2 pe-2 pt-2 pb-2">
                                    <h5><a href="{{ route('news_details',[$new->id]) }}" class="news-title">{{ $new->title }}</a></h5>
                                    @php
                                    $plainText = strip_tags($new->news_para);
                                    $limitedText = Str::limit($plainText, 70);
                                    @endphp
                                    <span class="news-para">{{ $limitedText }}</span>
                                </div>
                            </div>

                        </div>

                    </div>
                @endforeach


            </div>

            <div class="btn-page text-center" style="padding: 5%;">
                <a href="{{ url('/news') }}" class="read-more">Read More</a>
            </div>

        </div>

    </section>

    {{-- news and events section end --}}
    <!-- TESTIMONIAL SECTION -->
    <section class="testimonial-section" data-aos="fade-up" data-aos-delay="200">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>Testimonial</h3>
                    <p class="lead">Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet.</p>
                </div>
            </div>
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-target="#carouselExampleCaptions" data-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-target="#carouselExampleCaptions" data-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-target="#carouselExampleCaptions" data-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active text-center">
                        <div class="testimonial-img">
                            <img src="frontend/img/news-350x223-1.jpg" class="img-fluid"
                                alt="Testimonial Image">
                        </div>
                        <div class="testimonial-text mt-4">
                            <h5>Lorem ipsum dolor sit</h5>
                            <h6>Lorem ipsum dolor sit</h6>
                            <p>“Lorem ipsum dolor sit amet consectetur adipisicing elit. In dolorum, numquam obcaecati et
                                similique iure exercitationem vitae fuga nihil aperiam autem voluptate praesentium tenetur
                                nulla nesciunt, cumque ullam, accusamus recusandae!”</p>
                        </div>
                    </div>
                    <div class="carousel-item text-center">
                        <div class="testimonial-img">
                            <img src="frontend/img/news-350x223-2.jpg" class="img-fluid"
                                alt="Testimonial Image">
                        </div>
                        <div class="testimonial-text mt-4">
                            <h5>Lorem ipsum dolor sit</h5>
                            <h6>Lorem ipsum dolor sit</h6>
                            <p>“Lorem ipsum dolor sit amet consectetur adipisicing elit. In dolorum, numquam obcaecati et
                                similique iure exercitationem vitae fuga nihil aperiam autem voluptate praesentium tenetur
                                nulla nesciunt, cumque ullam, accusamus recusandae!”</p>
                        </div>
                    </div>
                    <div class="carousel-item text-center">
                        <div class="testimonial-img">
                            <img src="frontend/img/news-350x223-3.jpg" class="img-fluid"
                                alt="Testimonial Image">
                        </div>
                        <div class="testimonial-text mt-4">
                            <h5>Lorem ipsum dolor sit</h5>
                            <h6>Lorem ipsum dolor sit</h6>
                            <p>“Lorem ipsum dolor sit amet consectetur adipisicing elit. In dolorum, numquam obcaecati et
                                similique iure exercitationem vitae fuga nihil aperiam autem voluptate praesentium tenetur
                                nulla nesciunt, cumque ullam, accusamus recusandae!”</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- timeline section start --}}
    <section class="section lb page-section" style="background: aliceblue;padding: 5%;">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>Our history</h3>
                    <p class="lead">Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet.</p>
                </div>
            </div><!-- end title -->
            <div class="timeline">
                <div class="timeline__wrap">
                    <div class="timeline__items">
                        <div class="timeline__item">
                            <div class="timeline__content img-bg-01">
                                <h2>2018</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque
                                    condimentum lacus dapibus. Lorem
                                    ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="timeline__item">
                            <div class="timeline__content img-bg-02">
                                <h2>2015</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque
                                    condimentum lacus dapibus. Lorem
                                    ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="timeline__item">
                            <div class="timeline__content img-bg-03">
                                <h2>2014</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque
                                    condimentum lacus dapibus. Lorem
                                    ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="timeline__item">
                            <div class="timeline__content img-bg-04">
                                <h2>2012</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque
                                    condimentum lacus dapibus. Lorem
                                    ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="timeline__item">
                            <div class="timeline__content img-bg-01">
                                <h2>2010</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque
                                    condimentum lacus dapibus. Lorem
                                    ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="timeline__item">
                            <div class="timeline__content img-bg-02">
                                <h2>2007</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque
                                    condimentum lacus dapibus. Lorem
                                    ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="timeline__item">
                            <div class="timeline__content img-bg-03">
                                <h2>2004</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque
                                    condimentum lacus dapibus. Lorem
                                    ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="timeline__item">
                            <div class="timeline__content img-bg-04">
                                <h2>2002</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque
                                    condimentum lacus dapibus. Lorem
                                    ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- timeline section end --}}
@endsection
