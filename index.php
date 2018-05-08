<?php

if(file_exists("install/index.php")){
    //perform redirect if installer files exist
    //this if{} block may be deleted once installed
    header("Location: install/index.php");
}

require_once 'users/init.php';
require_once $abs_us_root.$us_url_root.'users/includes/header.php';
require_once $abs_us_root.$us_url_root.'users/includes/navigation.php';
if(isset($user) && $user->isLoggedIn()){
}
?>

<div id="page-wrapper" style="background-image: url(users/images/57385.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">

                <header id="gtco-header" class="gtco-cover gtco-cover-md">
                <div class="overlay"></div>
                <div class="gtco-container">
                    <div class="row">
                        <div class="col-md-12 col-md-offset-0 text-left">


                            <div class="row row-mt-15em">
                                <div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
                                    <span class="intro-text-small">Bem vindo a</span>
                                    <h1 class="cursive-font">Pandemic Online</h1>
                                    <span id="news" class="intro-text-small">(mais novidades em breve!!)</span>
                                </div>
                                <div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
                                    
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            	</header>

            </div>
        </div>
        <div class="row">
            <?php
            // To generate a sample notification, uncomment the code below.
            // It will do a notification everytime you refresh index.php.
            // $msg = 'This is a sample notification! <a href="'.$us_url_root.'users/logout.php">Go to Logout Page</a>';
            // $notifications->addNotification($msg, $user->data()->id);
            ?>


            

	   




        </div> <!-- /container -->

    </div> <!-- /#page-wrapper -->

    <!-- footers -->
    <?php require_once $abs_us_root.$us_url_root.'users/includes/page_footer.php'; // the final html footer copyright row + the external js calls ?>

    <!-- Place any per-page javascript here -->


    <?php require_once $abs_us_root.$us_url_root.'users/includes/html_footer.php'; // currently just the closing /body and /html ?>
