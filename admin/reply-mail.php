<?php 
    $page_name="View/Reply Mail";
    $icon="far fa-envelope";
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
        <?php include_once('inc/nav.php');?>
        <section class="admin-content ">
            <?php include_once("inc/breadcrum.php");?>
            <section class="pull-up">
                <div class="container">
                    <div class="row ">
                        <div class="col-lg-8 mx-auto mt-2">
                            <div class="card py-3 m-b-30">
                                <div class="card-body">
                                    <form method="POST">
                                        <div class="form-group col-md-12">
                                            <label for="head">Name</label>
                                            <input type="text" class="form-control" id="name" placeholder="Name" value="" name="name" autocomplete="off" required="">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="head">Email</label>
                                            <input type="email" class="form-control" id="email" placeholder="Email" value="" name="email" autocomplete="off" required="">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="head">Message</label>
                                             <textarea class="form-control" >
                                               Message</textarea>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="head">Email Subject</label>
                                            <input type="text" class="form-control" id="subject" placeholder="Subject" value="" name="subject" autocomplete="off" required="">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="head">Reply Message</label>
                                             <textarea id="editor" class="form-control" name="message">
                                                Reply Message
                                                </textarea>
                                        </div>
                                        <div class="form-row pt-3">
                                            <div class="form-group col-md-12">
                                                <button type="submit" class="btn btn-success m-auto" name="reply-query">Send Email</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </main>

</body>
    <?php include_once('inc/js.php');?>
</html>