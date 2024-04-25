@extends ('admin.layouts.adminmain')
@section('adminmain-container')

<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        <div class="col-xs-4">
                            <a href="{{route('teams.create')}}" class="btn btn-primary">Add New</a>
                        </div>
                        All Teams
                    </h1>


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover">


                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Author</th>
                                                <th>Title</th>
                                                <th>Status</th>
                                                <th>Designation</th>
                                                <th>Image</th>
                                                <th>Date</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                                <th>Publish</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($teams as $new)
                                        <tr>

                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $new->author }}</td>
                                                    <td>{{ $new->title }}</td>
                                                    <td>{{ $new->status }}</td>
                                                    <td>{{$new->designation}}</td>
                                                    <td><img style="width:100px" src="{{asset('storage/images/' . $new->image) }}" ></td>
                                                    <td>{{ date('Y-m-d', strtotime($new->created_at)) }}</td>
                                                    <td><a class="btn btn-primary" href="{{ route('teams.edit', $new->id) }}">Edit</a></td>
                                                    <td>
                                                        <form action="{{route('teams.destroy', $new->id)}}" method="post">
                                                        @csrf
                                                        @method('DELETE')

                                                            <button type="submit" class="btn btn-danger confirm-delete" data-id="{{$new->id}}">Delete</button>
                                                        </form>
                                                    </td>
                                                    <td>
    <form action="{{ route('teams.publish', $new->id) }}" method="post">
        @csrf
        <button type="submit" class="btn btn-success confirm-publish"  data-id="{{$new->id}}" >Publish</button>
    </form>
</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="pagination">
                                        {{$teams->links()}}
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

