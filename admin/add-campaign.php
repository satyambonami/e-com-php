<?php 
    $page_name="Page Name";
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <?php include_once('inc/css.php');?>
    <title><?php echo $page_name ." | ". "Admin"?></title>
</head>
<body class="sidebar-pinned ">
    <?php include_once('inc/sidebar.php');?>
    <main class="admin-main">
        <?php include_once('inc/nav.php');?>
        <section class="admin-content ">
            <?php include_once("inc/breadcrum.php");?>
            <section class="pull-up">
                <div class="container">
                    <div class="row ">
                        <div class="col-lg-8 mx-auto mt-2">
                            <div class="card py-3 m-b-30">
                                <div class="card-body">
                                    <form method="POST" enctype="multipart/form-data">
                                        <div class="form-group col-md-12">
                                            <label for="head">Campaign Name</label>
                                            <input type="text" class="form-control" id="name" placeholder="Name" value="" name="name" autocomplete="off" required="">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="head">Campaign Template Title</label>
                                            <input type="text" class="form-control" id="Title" placeholder="Title" value="" name="title" autocomplete="off" required="">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <div class="input-group mb-3">
                                                <div class="custom-file">
                                                    <input type="file" name="banner" class="custom-file-input" id="inputGroupFile02">
                                                    <label class="custom-file-label" for="inputGroupFile02"
                                                        >Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="head">Campaign Template Message</label>
                                             <textarea id="editor" class="form-control" name="message">
                                                Message
                                                </textarea>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="head">Campaign Template Button Link</label>
                                            <input type="text" class="form-control" id="button" value="#" placeholder="button" value="" name="button" autocomplete="off" required="">
                                        </div>
                                        <div class="form-row pt-3">
                                            <div class="form-group col-md-12">
                                                <button type="submit" class="btn btn-success m-auto" name="submit">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php if(isset($_GET['id'])){?>
                            <div class="col-lg-4 mt-2">
                                <div class="card py-3 m-b-30">
                                    <div class="card-body">
                                        <h5>Campaign Template Image</h5>
                                        <img src="" alt="Image">
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </section>
        </section>
    </main>

</body>
    <?php include_once('inc/js.php');?>
</html>