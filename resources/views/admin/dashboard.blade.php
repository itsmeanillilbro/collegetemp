@extends ('admin.layouts.adminmain')
@section('adminmain-container')
<div id="wrapper">
    <div id="page-wrapper">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Welcome to Dashboard
                        <small></small>
                    </h1>

                </div>
            </div>

            <div class="row">
                <!-- USERS -->
                <div class="col-md-6 col-lg-3">
                    <div class="panel panel-dash">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-4x"></i>
                                </div>
                                <div class="col-xs-9">
                                    <div class="text-capitalize text-right">Users</div>

                                </div>
                            </div>
                        </div>
                        <a href="users.php">
                            <div class="panel-footer">
                                <span class="text-capitalize pull-left">View All</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- TOP BANNER -->
                <div class="col-md-6 col-lg-3">
                    <div class="panel panel-dash">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa-solid fa-ribbon fa-4x"></i>
                                </div>
                                <div class="col-xs-9">
                                    <div class="text-capitalize text-right">topbanner</div>

                                </div>
                            </div>
                        </div>
                        <a href="topbanner.php">
                            <div class="panel-footer">
                                <span class="text-capitalize pull-left">View All</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- POPUP -->
                <div class="col-md-6 col-lg-3">
                    <div class="panel panel-dash">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa-solid fa-fire-flame-curved fa-4x"></i>
                                </div>
                                <div class="col-xs-9">
                                    <div class="text-capitalize text-right">popup</div>

                                </div>
                            </div>
                        </div>
                        <a href="popup.php">
                            <div class="panel-footer">
                                <span class="text-capitalize pull-left">View All</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- MENU -->
                <div class="col-md-6 col-lg-3">
                    <div class="panel panel-dash">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa-solid fa-bars fa-4x"></i>
                                </div>
                                <div class="col-xs-9">
                                    <div class="text-right text-capitalize">menu</div>

                                </div>
                            </div>
                        </div>
                        <a href="menu.php">
                            <div class="panel-footer">
                                <span class="text-capitalize pull-left">View All</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- SUB MENU -->
                <div class="col-md-6 col-lg-3">
                    <div class="panel panel-dash">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa-brands fa-mendeley fa-4x"></i>
                                </div>
                                <div class="col-xs-9">
                                    <div class="text-right text-capitalize">submenu</div>

                                </div>
                            </div>
                        </div>
                        <a href="submenu.php">
                            <div class="panel-footer">
                                <span class="text-capitalize pull-left">View All</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- SUB TO SUBMENU -->
                <div class="col-md-6 col-lg-3">
                    <div class="panel panel-dash">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa-brands fa-mendeley fa-4x"></i>
                                </div>
                                <div class="col-xs-9">

                                    <div class="text-right text-capitalize">Sub to submenu</div>

                                </div>
                            </div>
                        </div>
                        <a href="subsubmenu.php">
                            <div class="panel-footer">
                                <span class="text-capitalize pull-left">View All</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>


                <!-- BANNER -->
                <div class="col-md-6 col-lg-3">
                    <div class="panel panel-dash">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa-solid fa-panorama fa-4x"></i>
                                </div>
                                <div class="col-xs-9">

                                    <div class="text-right text-capitalize">banner</div>

                                </div>
                            </div>
                        </div>
                        <a href="banner.php">
                            <div class="panel-footer">
                                <span class="text-capitalize pull-left">View All</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- NOTICE -->
                <div class="col-md-6 col-lg-3">
                    <div class="panel panel-dash">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa-solid fa-flag-checkered fa-4x"></i>
                                </div>
                                <div class="col-xs-9">

                                    <div class="text-right text-capitalize">notice</div>

                                </div>
                            </div>
                        </div>
                        <a href="notice.php">
                            <div class="panel-footer">
                                <span class="text-capitalize pull-left">View All</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- NEWS & EVENTS -->
                <div class="col-md-6 col-lg-3">
                    <div class="panel panel-dash">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa-regular fa-file-lines fa-4x"></i>
                                </div>
                                <div class="col-xs-9">

                                    <div class="text-capitalize text-right">News & Events</div>

                                </div>
                            </div>
                        </div>
                        <a href="news.php">
                            <div class="panel-footer">
                                <span class="pull-left">View All</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- TIMELINE -->
                <div class="col-md-6 col-lg-3">
                    <div class="panel panel-dash">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa-solid fa-timeline fa-4x"></i>
                                </div>
                                <div class="col-xs-9">

                                    <div class="text-capitalize text-right">timeline</div>

                                </div>
                            </div>
                        </div>
                        <a href="timeline.php">
                            <div class="panel-footer">
                                <span class="pull-left">View All</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- ACADEMIC -->
                <div class="col-md-6 col-lg-3">
                    <div class="panel panel-dash">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa-solid fa-graduation-cap fa-4x"></i>
                                </div>
                                <div class="col-xs-9">

                                    <div class="text-capitalize text-right">academic</div>

                                </div>
                            </div>
                        </div>
                        <a href="academic.php">
                            <div class="panel-footer">
                                <span class="pull-left">View All</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- GALLERY -->
                <div class="col-md-6 col-lg-3">
                    <div class="panel panel-dash">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa-regular fa-image fa-4x"></i>
                                </div>
                                <div class="col-xs-9">

                                    <div class="text-capitalize text-right">gallery</div>

                                </div>
                            </div>
                        </div>
                        <a href="gallery.php">
                            <div class="panel-footer">
                                <span class="pull-left">View All</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- TESTIMONIALS -->
                <div class="col-md-6 col-lg-3">
                    <div class="panel panel-dash">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa-solid fa-quote-left fa-4x"></i>
                                </div>
                                <div class="col-xs-9">

                                    <div class="text-capitalize text-right">testimonial</div>

                                </div>
                            </div>
                        </div>
                        <a href="testimonial.php">
                            <div class="panel-footer">
                                <span class="pull-left">View All</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- TEAMS -->
                <div class="col-md-6 col-lg-3">
                    <div class="panel panel-dash">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-4x"></i>
                                </div>
                                <div class="col-xs-9">

                                    <div class="text-capitalize text-right">teams</div>

                                </div>
                            </div>
                        </div>
                        <a href="team.php">
                            <div class="panel-footer">
                                <span class="pull-left">View All</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>

        </div>

    </body>

</html>
@endsection
