@extends('admin.layouts.adminmain')
@section('adminmain-container')

<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        <div class="col-xs-4">
                        <a href="{{ route('images.create') }}" class="btn btn-primary">Add New</a>
                        </div>
                        Images
                    </h1>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($images as $image)
                                        <tr>
                                            <td><img src="{{ asset('storage/images/' . $image) }}" style="width:100px;" alt=""></td>
                                            <td>
                                                <form action="{{ route('images.destroy', $image) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger confirm-delete">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
