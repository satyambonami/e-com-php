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
                        <div class="col-lg-10 mx-auto mt-2">
                            <div class="card py-3 m-b-30">
                                <div class="card-body">
                                    <div class="table-responsive p-t-10">
                                        <table id="example" class="table" style="width:100%">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Message</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                               <td>1</td>
                                               <td>Name</td>
                                               <td>Email</td>
                                               <td>Message</td>
                                               <td>Date Time</td>
                                               <td>
                                                Reply Status
                                               </td>
                                               <td> 
                                                    <a href="reply-mail.php?id=id" class="btn btn-primary" data-toggle="tooltip" data-placement="top" data-original-title="Reply">
                                                        <i class="mdi mdi-reply"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-danger delete-row" data-toggle="tooltip" data-placement="top" data-original-title="Delete">
                                                        <i class="mdi mdi-trash-can"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Message</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Action</th>     
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
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