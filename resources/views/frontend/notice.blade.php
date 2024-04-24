@extends ('frontend.layouts.main')
@section('main-container')
    <!-- Breadcrumb Start -->
    <div class="all-title-box">
        <div class="container text-center">
            <h1>news<span class="m_1"><a href="{{ url('/') }}">Home</a> / <a href="{{ url('/news') }}">news</a></span>
            </h1>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <section class="main-section">
        <div class="container">
            <div class="row">
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
                <!-- Other columns go here -->
            </div>
        </div>
    </section>
@endsection
