@extends ('admin.layouts.adminmain')
@section('adminmain-container')
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Add a new user
                        </h1>

                        <form role="form" action="" method="POST" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="user_title">User Name</label>
                                <input type="text" name="username" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="user_author">FirstName</label>
                                <input type="text" name="firstname" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="user_status">LastName</label>
                                <input type="text" name="lastname" class="form-control" required>
                            </div>

                            <div class="input-group">
                                <select class="form-control" name="role" id="">
                                    <label for="user_role">Role</label>
                                </select>

                            </div>
                            <br>
                            <div class="form-group">
                                <label for="user_tag">Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="user_tag">Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="user_tag">Confirm Password</label>
                                <input type="password" name="cpassword" class="form-control" required>
                            </div>
                            <button type="submit" name="add" class="btn btn-primary" value="Add User">Add User</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
