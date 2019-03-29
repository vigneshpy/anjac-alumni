<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Admin Panel</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" /> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" /> -->

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="<?php echo base_url();?>assets/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/assets/css/light-bootstrap-dashboard.css?v=2.0.1" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css1/mdb.css" rel="stylesheet" />
    <!-- <link href="<?php echo base_url();?>assets/assets/css/demo.css" rel="stylesheet" /> -->

    <style type="text/css">
        .text-uppercase {
    text-transform: uppercase!important;
    font-size: initial;
}


    </style>
 
</head>
 <div class="wrapper">
        <div class="sidebar" data-image="">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="<?php echo base_url();?>home" style="text-decoration:none;"class="simple-text">
                       Anjac Alumni
                    </a>
                </div>
                <ul class="nav">
                    <li>
                        <a class="nav-link" href="<?php echo base_url();?>admin/dashboard ">
                            <i class="fa fa-bar-chart"></i>
                            <p>Insight</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?php echo base_url();?>admin/user-profile">
                            <i class="fa fa-pencil"></i>
                            <p>Alumni Profile</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?php echo base_url();?>admin/user-need">
                            <i class="fa fa-sticky-note-o"></i>
                            <p>Alumni Needs</p>
                        </a>
                    </li>
            <!--         <li>
                        <a class="nav-link" href="./typography.html">
                            <i class="nc-icon nc-paper-2"></i>
                        <p>Change the Header</p>
                        </a>
                    </li> -->
                    <li>
                        <a class="nav-link" href="<?php echo base_url();?>admin/add-event">
                            <i class="fa fa-plus"></i>
                            <p>Add Events</p>
                        </a>
                    </li>   
                    <li>
                        <a class="nav-link" href="<?php echo base_url();?>admin/view-event">
                            <i class="fa fa-calendar"></i>
                            <p>View Events</p>
                        </a>
                    </li> 

                    <li>
                        <a class="nav-link" href="<?php echo base_url();?>admin/event-request">
                            <i class="fa fa-paper-plane"></i>
                            <span class='badge badge-warning' id='lblCartCount'><?php echo $nor?></span>
                            <p>Event Request </p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="">
                            <i class="fa fa-briefcase"></i>
                            <p>Jobs And Internship</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>notify">
                            <i class="fa fa-bell"></i>
                            <p>Notifications</p>
                        </a>
                    </li>
              
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class=" container-fluid  ">
                    <a class="navbar-brand" href="#pablo">Alumni</a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-palette"></i>
                                    <span class="d-lg-none">Insight</span>
                                </a>
                            </li>
               
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nc-icon nc-zoom-split"></i>
                                    <span class="d-lg-block">&nbsp;Search</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Account</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="no-icon">Dropdown</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url();?>admin/admin-logout">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>


<style type="text/css">
    .header{background:rgb(0, 178, 255);color:#fff;}
#lblCartCount {
    font-size: 12px;
    background: #ff0000;
    color: #fff;
    padding: 0 5px;
    vertical-align: top;
    margin-left: -10px;
}
.badge {
  padding-left: 9px;
  padding-right: 9px;
  -webkit-border-radius: 9px;
  -moz-border-radius: 9px;
  border-radius: 19px;
}

.label-warning[href],
.badge-warning[href] {
  background-color: #c67605;
}
</style>

<script type="text/javascript" src="https://bootswatch.com/_vendor/jquery/dist/jquery.min.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js1/mdb.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/sweetalert.min.js"></script>