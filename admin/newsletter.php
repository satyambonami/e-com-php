<?php 
    $page_name="Newsletter";
    $icon = "far fa-envelope"; 
    
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <?php include_once('inc/css.php');?>
    <title><?php echo $page_name ?></title>
    <style>
        .select2{
            width:100% !important;
        }
        .select2-search {
            display:none;
        }
    </style>
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
                        <div class="col-lg-12 mx-auto mt-2">
                            <div class="card py-3 m-b-30">
                                <div class="card-body">
                                    <form method="POST">
                                        <div class="table-responsive p-t-10">
                                            <div class="row">
                                                <div class="form-group col-2">
                                                    <button type="button" id="ckbCheckAll" class="btn btn-primary">Select All & Send</button>
                                                </div>
                                                <div class="form-group col-2">
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Select & Send</button>
                                                </div>
                                            </div>
                                            <table id="example" class="table" style="width:100%">
                                                <thead>
                                                <tr>
                                                    <th>Select</th>
                                                    <th>Id</th>
                                                    <th>Email</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input id_checkBox" name="" value="" id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1"></label>
                                                    </div>
                                                </td>
                                                <td>1</td>
                                                <td>Email</td>
                                                <td>Date Time</td>
                                                <td>
                                                        <label class="cstm-switch">
                                                            <input type="checkbox" name="option" value="1" class="cstm-switch-input change-status" >
                                                            <span class="cstm-switch-indicator "></span>
                                                        </label>
                                                </td>
                                                <td> 
                                                        <a href="reply-newsletter.php?id=id" class="btn btn-primary" data-toggle="tooltip" data-placement="top" data-original-title="Reply">
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
                                                    <th>Select</th>
                                                    <th>Id</th>
                                                    <th>Email</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Action</th>     
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="myLargeModalLabel">Send Bulk Mail</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body pb-5">
                                                        <input type="hidden" name="email_id[]">
                                                        <div class="form-group col-md-12">
                                                            <label for="head">Subject</label>
                                                            <input type="subject" class="form-control" id="subject" placeholder="subject"  name="subject" autocomplete="off" required="">
                                                        </div>
                                                        <div class="form-group ">
                                                            <label  class="font-secondary">Select Campaign template </label>
                                                            <select  class="form-control js-select2 w-100" name="template" autocomplete="off" required >
                                                                <option selected value="0" disabled>Select Template</option>
                                                                    <option value="0">Select Template</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                            Close
                                                        </button>
                                                        <button type="submit" class="btn btn-primary" name="SendMails">Submit</button>
                                                    </div>
                                                </div>
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

    <?php include_once('inc/js.php');?>

    </body>
</html>