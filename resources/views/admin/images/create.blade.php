@extends ('admin.layouts.adminmain')
@section('adminmain-container')
<div id="wrapper">
        <div id="page-wrapper">

<div class="col-lg-12">
                    <h1 class="page-header">
                        Add Images
                    </h1>

                    <form role="form" action="{{route('images.store')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="form-group">
                    <label for="gallery_title">Title</label>
                    <select class="form-control" name="gallery_id" id="gallery_id" >
                            <option value="">Select the Gallery Album</option>
                                <option value="">
                                </option>

                        </select>
                </div>




                <div class="form-group">
                    <label for="gallery_images">Select Multiple Image </label>
                    <font color='brown'> &nbsp;&nbsp;(Allowed image size: 1024 KB) </font>
                    <input type="file" name="images" multiple>
                    <input type="hidden" name="gallery_id" value="{{ request()->input('gallery_id') }}">

                </div>
                <button type="submit" name="publish_images" class="btn btn-primary" value="publish gallery">Publish</button>

                    </form>

                </div>
                </div>
                </div>
@endsection
