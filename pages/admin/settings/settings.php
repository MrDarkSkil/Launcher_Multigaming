<?php
/**
 * Created by IntelliJ IDEA.
 * User: FlashModz
 * Date: 17-11-18
 * Time: 15:49
 */


$seuser = json_decode($user->checkUser($_SESSION['token']));
$selevlel = json_decode($user->checkAdmin($_SESSION['token']));
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="launcherPanel">
    <meta name="author" content="Leo HUBERT">
    <meta name="token" content="<?php echo $_SESSION['token'];?>">
    <meta name="level" content="<?php echo $seuser->level;?>">

    <link rel="shortcut icon" href="/assets/images/favicon_1.ico">

    <title><?php echo $config->get("site_name");?> panel</title>

    <link href="/assets/plugins/jquery-circliful/css/jquery.circliful.css" rel="stylesheet" type="text/css" />

    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/responsive.css" rel="stylesheet" type="text/css" />

    <link href="/assets/plugins/sweetalert/dist/sweetalert.css" rel="stylesheet" type="text/css">
    <link href="/assets/plugins/jquery-circliful/css/jquery.circliful.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="/assets/js/modernizr.min.js"></script>
    <!-- jQuery  -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/waiting.js"></script>
    <script src="/assets/js/detect.js"></script>
    <script src="/assets/js/fastclick.js"></script>
    <script src="/assets/js/jquery.blockUI.js"></script>
    <script src="/assets/js/wow.min.js"></script>
    <script src="/assets/js/jquery.nicescroll.js"></script>
    <script src="/assets/js/jquery.scrollTo.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.5/jszip.js"></script>

</head>



<body>

<!-- Navigation Bar-->
<?php include "jointures/header_admin.php"?>
<!-- End Navigation Bar-->

<div class="wrapper">
    <div class="container">

        <!-- Page-Title -->
        <br /><div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Launcher control</h4>
            </div>
        </div>

        <!-- Start Row -->

        <div class="row">
            <div class="col-md-8">
                <div class="grid-container">
                    <div class="card-box">
                        <div class="row">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div class="card-box">
                                        <p><i class="md md-vpn-lock"></i> Settings</p>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <button type="button" id="websiteconfig" data-toggle="modal" data-target="#OpenWebSettings" class="btn btn-purple btn-rounded w-md waves-effect waves-light m-b-5">Open Website Settings</button>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <button type="button" id="mailconfig" data-toggle="modal" data-target="#OpenMailSettings" class="btn btn-purple btn-rounded w-md waves-effect waves-light m-b-5">Open Mail Settings</button>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <button type="button" id="launcherconfig" onclick="openLauncherconfig()" class="btn btn-purple btn-rounded w-md waves-effect waves-light m-b-5">Open Launcher Settings</button>
                                    </div>

                                    <div class="modal fade" role="dialog" id="OpenWebSettings">
                                        <div class="modal-dialog modal-sm">

                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title"><i class="md md-vpn-lock"></i> Website Settings</h4>
                                                </div><br>

                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <div class="card-box">
                                                                <input type="text" class="form-control" id="sitename" placeholder="<?php echo $config->get("site_name")?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="card-box">
                                                                <button type="submit" onclick="updatewebsite()" class="btn btn-primary">Change Website Name</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <div class="card-box">
                                                                <input type="text" class="form-control" id="maxaccount" placeholder="<?php echo $config->get("max_account")?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="card-box">
                                                                <button type="submit" onclick="updatemaccount()" class="btn btn-primary">Update Max Account</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><br>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-purple btn-rounded w-md waves-effect waves-light m-b-5" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="modal fade" role="dialog" id="OpenMailSettings">
                                        <div class="modal-dialog modal-sm">

                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title"><i class="ion-at"></i> Website Mail Settings</h4>
                                                </div><br>

                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <div class="card-box">

                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="card-box">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <div class="card-box">

                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="card-box">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><br>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-purple btn-rounded w-md waves-effect waves-light m-b-5" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box">
                        <br />
                        <div class="row">
                            <div class="card-box text-center"><span>Indexer Status : <div><span class="label label-success" id="indexer_state">Support Available</span></div></span></div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 text-center">
                                <div class="card-box">
                                    <div class="row"><p><i class="md md-https"></i> login </p></div>
                                    <div class="row">
                                        <input type="text" id="msg_title" class="form-control text-center" placeholder="<?php echo $config->get("msg_title") ?>">
                                    </div> <br>
                                    <div class="row">
                                        <textarea class="form-control text-center" rows="5" id="msg_content" placeholder="<?php echo $config->get("msg_content") ?>"></textarea>
                                    </div><br>
                                    <div class="row">
                                        <button id="msg_save" type="button" class="btn btn-info waves-effect w-md waves-light m-b-5" onclick="save_loginNews()">Save</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 text-center">
                                <div class="card-box">
                                    <p><i class="md md-security"></i> Maintenance </p>
                                    <div class="row">
                                        <input type="text" id="maintenance_title" class="form-control text-center" placeholder="<?php echo $config->get("maintenance_title") ?>">
                                    </div> <br>
                                    <div class="row">
                                        <textarea class="form-control text-center" rows="5" id="maintenance_content" placeholder=<?php echo $config->get("maintenance_content") ?>"></textarea>
                                    </div><br>
                                    <div class="row">
                                        <button id="maintenance_save" type="button" class="btn btn-info waves-effect w-md waves-light m-b-5" onclick="save_maintenance()">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="grid-container">
                    <div class="card-box">
                        <div class="row">
                            <div class="col-xs-12 text-center">
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <span>Login <div><span class="label label-success" id="login_state">Activated</span></div></span>
                                        </div>
                                        <div class="col-xs-6">
                                            <button id="login" type="button" class="btn btn-primary waves-effect w-md waves-light m-b-5" onclick="switch_login()">Deactivate login</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 text-center">
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <span>Register <div><span class="label label-success" id="register_state">Activated</span></div></span>
                                        </div>
                                        <div class="col-xs-6">
                                            <button id="register" type="button" class="btn btn-primary waves-effect w-md waves-light m-b-5" onclick="switch_register()">Deactivate register</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 text-center">
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <span>Maintenance <div><span class="label label-success" id="maintenance_state">Activated</span></div></span>
                                        </div>
                                        <div class="col-xs-6">
                                            <button id="maintenance" type="button" class="btn btn-primary waves-effect w-md waves-light m-b-5" onclick="switch_maintenance()">Deactivate maintenance</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><br />

                        <div class="row text-center">
                            <div class="card-box">
                                <span>Launcher update</span>
                                <div style="line-height:50%;"><br></div>
                                <span class="label label-info" id="vlauncher">...</span>
                                <div style="line-height:100%;"><br></div>
                                <div class="container">
                                    <div class="page-header">
                                        <h3>Upload a new launcher</h3>
                                    </div>
                                    <div class="row" style="padding-top:10px;">
                                        <div class="text-center">
                                            <button id="uploadBtn" class="btn btn-large btn-primary" onclick="checkLevel()">Choose File</button>
                                        </div>
                                        <div class="col-xs-10">
                                            <div id="progressOuter" class="progress progress-striped active" style="display:none;">
                                                <div id="progressBar" class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="padding-top:10px;">
                                        <div class="col-xs-10">
                                            <div id="msgBox">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- end row -->

        <?php include "jointures/footer.php";?>

    </div> <!-- end container -->
</div>
<!-- End wrapper -->

<!-- circliful Chart -->
<script src="/assets/plugins/jquery-circliful/js/jquery.circliful.min.js"></script>
<script src="/assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

<!-- skycons -->
<script src="/assets/plugins/skyicons/skycons.min.js" type="text/javascript"></script>

<!-- Notifications -->
<script src="/assets/plugins/notifyjs/dist/notify.min.js"></script>
<script src="/assets/plugins/notifications/notify-metro.js"></script>

<!-- Custom main Js -->
<script src="/assets/js/jquery.core.js"></script>
<script src="/assets/js/jquery.app.js"></script>

<!-- Sweet-Alert  -->
<script src="/assets/pages/jquery.sweet-alert.init.js"></script>
<script src="/assets/plugins/sweetalert/dist/sweetalert.min.js"></script>

<!-- Load Pages Script -->
<script src="/assets/js/SimpleAjaxUploader.js"></script>
<script src="/assets/js/pages/admin/settings.js"></script>
</body>
</html>