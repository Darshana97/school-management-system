<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap-theme.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('custom/css/custom.css') ?>">
    <script type="text/javascript" src="<?php echo base_url('assets/jquery/jquery.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>


</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url('dashboard') ?>">SMS</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li id="topNavDashboard"><a href="<?php echo base_url('dashboard') ?>"><i class="glyphicon glyphicon-dashboard">Dashboard</i></a></li>


                    <li class="dropdown" id="topClassMainNav">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-edit"></i> Class <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li id="topNavClass"><a href="<?php echo base_url('classes') ?>">Manage Class</a></li>
                            <li id="topNavSection"><a href="<?php echo base_url('section') ?>">Manage Section</a></li>
                            <li id="topNavSubject"><a href="<?php echo base_url('subject') ?>">Manage Subject</a></li>

                        </ul>
                    </li>

                    <li class="dropdown" id="topClassMainNav">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-list-alt"></i>Student <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li id="topNavClass"><a href="<?php echo base_url('student?opy=addst') ?>">Add Student</a></li>
                            <li id="topNavSection"><a href="<?php echo base_url('student?opy=bulkst') ?>">Add Bulk Student</a></li>
                            <li id="topNavSubject"><a href="<?php echo base_url('student?opy=mgst') ?>">Manage Student</a></li>

                        </ul>
                    </li>

                    <li class="dropdown" id="topClassMainNav">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Class <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li id="topNavClass"><a href="<?php echo base_url('classes') ?>">Manage Class</a></li>
                            <li id="topNavSection"><a href="<?php echo base_url('section') ?>">Manage Section</a></li>
                            <li id="topNavSubject"><a href="<?php echo base_url('subject') ?>">Manage Subject</a></li>

                        </ul>
                    </li>

                    <li class="dropdown" id="topClassMainNav">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Class <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li id="topNavClass"><a href="<?php echo base_url('classes') ?>">Manage Class</a></li>
                            <li id="topNavSection"><a href="<?php echo base_url('section') ?>">Manage Section</a></li>
                            <li id="topNavSubject"><a href="<?php echo base_url('subject') ?>">Manage Subject</a></li>

                        </ul>
                    </li>

                </ul>

                <ul class="nav navbar-nav navbar-right">

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user"></i> <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url('setting') ?>">Setting</a></li>
                            <li><a href="<?php echo base_url('users/logout') ?>">Logout</a></li>

                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <div class="container-fluid">
        hello
    </div>

</body>

</html>