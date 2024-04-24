@extends ('admin.layouts.adminmain')
@section('adminmain-container')
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <div class="col-xs-4">
                                <a href="{{url('/admin/adduser')}}" class="btn btn-primary">Add New</a>
                            </div>
                            All Users
                        </h1>

                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Username</th>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Change Role</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>

                            <tbody>



                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
