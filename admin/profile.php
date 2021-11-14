<?php 
    $page_name="User Profile";
    $icon = "fas fa-user";
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <?php include_once('inc/css.php');?>
    <title><?php echo $page_name ." | ". SITE_NAME?></title>

</head>
<body class="sidebar-pinned ">
    <?php include_once('inc/sidebar.php');?>
<main class="admin-main">
    <?php include_once("inc/nav.php");?>
    <section class="admin-content ">
        <?php include_once("inc/breadcrum.php");?>
        <section class="pull-up">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-8 mx-auto mt-2">
                        <div class="card py-3 m-b-30">
                            <div class="card-body">
                                <ul class="nav nav-tabs tab-line" id="myTab2" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#line-home" role="tab" aria-controls="home" aria-selected="true">Profile</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent2">
                                    <div class="tab-pane fade show active" id="line-home" role="tabpanel" aria-labelledby="home-tab">
                                        <form method="POST" enctype="multipart/form-data">
                                            <h3 class="text-center">Personal Data</h3>
                                            <p class="text-muted text-center"> Use this page to update your contact information...</p>
                                            <div class="text-center">
                                                <label class="avatar-input"> 
                                                    <span class="avatar avatar-xl"> 
                                                        <img src="../assets/img/users/" class="avatar-img rounded-circle"> 
                                                        <span class="avatar-input-icon rounded-circle"> 
                                                            <i class="mdi mdi-upload mdi-24px"></i> 
                                                        </span> 
                                                    </span>
                                                    <input type="file" class="avatar-file-picker" name="profile_img">
                                                </label>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail6">Name</label>
                                                    <input type="text" value="Name" class="form-control" id="inputEmail6" placeholder="Name" name="name">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4">Email</label>
                                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email" value="" disabled>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success btn-cta" name="submit_profile">Save changes</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
</main>
    <?php include_once("inc/js.php");?>
</body>
</html>