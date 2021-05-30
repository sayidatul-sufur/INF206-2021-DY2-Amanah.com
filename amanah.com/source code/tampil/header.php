<!DOCTYPE html>
<html lang="en">
<?php
require '../tampil/function.php';
?>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Amanah.com
    </title>

    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="../../asset/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper ">
        <div class="main-panel">
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                    <div>
                        <button class="btn btn-white btn-round btn-just-icon">
                            <i class="material-icons">notifications</i>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse justify-content-end">
                        <form class="navbar-form" method="post" action="">
                            <div class="input-group no-border">
                                <input type="text" name="keyword" value="" class="form-control" placeholder="Search..." autofocus>
                                <button type="submit" name="cari" class="btn btn-white btn-round btn-just-icon" autocomplete="">
                                    <i class="material-icons">search</i>
                                    <div class="ripple-container"></div>
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </nav>
            <script src="../../asset/js/plugins/sweetalert2.js"></script>