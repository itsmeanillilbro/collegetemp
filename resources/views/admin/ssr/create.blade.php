@extends ('admin.layouts.adminmain')
@section('adminmain-container')
<div id="wrapper">
        <div id="page-wrapper">

<div class="col-lg-12">
                    <h1 class="page-header">
                        Add SSR
                    </h1>

                    <form role="form" action="{{route('ssr.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="banner_title">Name</label>
                        <input type="text" name="title" placeholder="Enter title" value="" class="form-control" required>
                    </div>


                    <div class="form-group">
                        <label for="banner_image">File </label>
                        <input type="file" name="file" required>
                    </div>


                    <button type="submit" name="publish_banner" class="btn btn-primary" value="publish banner">Publish Banner</button>
                </form>

            </div>
        </div>

    </div>

</div>
@endsection
