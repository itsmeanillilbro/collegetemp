@extends ('frontend.layouts.main')
@section('main-container')
    <!-- Breadcrumb Start -->
    <div class="all-title-box">
        <div class="container text-center">
            <h1>Downloads<span class="m_1"><a href="{{ url('/') }}">Home</a> / <a
                        href="{{ url('/download') }}">Downloads</a></span></h1>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <section>
        <div class="container">
            <center>
                <h3>Downloads</h3>
            </center>
            <br>
            <table class="table table-bordered">
                <thead class="bg-download">
                    <tr>
                        <th class="serial-no" scope="col">SN</th>
                        <th scope="col">Title</th>
                        <th scope="col">Downloads</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Test</td>
                        <td><a class='down-title' href="">Download file</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection
