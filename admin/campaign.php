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
                                    
                                    <div class="row">
                                        <div class="col-4">
                                            <a href="add-campaign.php"class="btn btn-primary">Create Campaign +</a>
                                        </div>
                                    </div>
                                    <div class="table-responsive p-t-10">
                                        <table id="example" class="table" style="width:100%">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Title</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        1
                                                    </td>
                                                    <td>
                                                        Name
                                                    </td>
                                                    <td>
                                                        Title
                                                    </td>
                                                    <td>
                                                        Date Time
                                                    </td>
                                                    <td>
                                                        <label class="cstm-switch">
                                                            <input type="checkbox" name="option" value="1" class="cstm-switch-input change-status" >
                                                            <span class="cstm-switch-indicator "></span>
                                                        </label>
                                                    </td>
                                                    <td> 
                                                        <a href="add-campaign.php?id=1" class="btn btn-primary" data-toggle="tooltip" data-placement="top" data-original-title="Edit">
                                                            <i class="mdi mdi-pencil"></i>
                                                        </a>
                                                        <a href="#" class="btn btn-danger delete-row" data-toggle="tooltip" data-placement="top" data-original-title="Delete">
                                                            <i class="mdi mdi-trash-can"></i>
                                                        </a>
                                                    </td>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Title</th>
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
    <script>
        //change status..
        $('.change-status').on('change', function(){
            var id = $(this).data('this-id'),
                status =0;

            if($(this).prop('checked')==true){
                status = 2;
            }else{
                status = 1;
            }

            $.ajax({
                type: 'post',
                url : '',
                data: {id : id, status: status},
                success: function(data){
                    Materialize.toast("Changes saved.", 3000);

                },
                error: function(data){
                    Materialize.toast("Something went wrong, Please try again.", 3000);
                }
            });
        });
    </script>
</html>