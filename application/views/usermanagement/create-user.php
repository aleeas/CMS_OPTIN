 <!DOCTYPE html>
<html lang="en">
 <?php $this->load->view('parts/head') ?>

<body class="sticky-header">

    <section>
        <!-- sidebar left start-->
        <div class="sidebar-left">
           <?php $this->load->view('parts/menu-side') ?>
        </div>
        <!-- sidebar left end-->

        <!-- body content start-->
        <div class="body-content" style="min-height: 1200px;">

            <!-- header section start-->
            <div class="header-section">
                <?php $this->load->view('parts/header-section') ?>
            </div>
            <!-- header section end-->

            <!--body wrapper start-->
            <div class="wrapper">
                <ul class="breadcrumb">
                    <li><a href="<?php echo site_url(); ?>"><i class="fa fa-home"></i> Home</a></li>
                    <li class="<?php if($this->uri->uri_string() == 'home/roleM') { echo 'active'; } ?>">
                    User Management</li>
                    <li class="<?php if($this->uri->uri_string() == 'home/roleM') { echo 'active'; } ?>">
                    Role Management</li>
                </ul>
                <div class="panel">
                <div class="panel-body">
                <div>
                    <button class="btn-md btn btn-default" data-toggle="modal" href="#myModal">Tambah</button>
                </div>
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Create User</h4>
                                </div>
                                <div class="modal-body">

                                    <!-- here -->
                                    <div class="panel-body">
                                        <form class="form-horizontal tasi-form" method="get">
                                            <div class="form-group">
                                                <label class="col-sm-2 col-sm-2 control-label">Username</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 col-sm-2 control-label">Password</label>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                    <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Role</label>
                                                    <div class="col-lg-10">
                                                        <select class="form-control m-b-10">
                                                            <option>Admin</option>
                                                            <option>Super User</option>
                                                            <option>User</option>
                                                            <option>Creator</option>
                                                        </select>
                                                    </div>
                                                </div>

                                        </form>
                                    </div>
                                    <!-- and here -->

                                </div>
                                <div class="modal-footer">
                                    <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                    <button class="btn btn-success" type="button">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Edit User</h4>
                                </div>
                                <div class="modal-body">

                                    <!-- here -->
                                    <div class="panel-body">
                                        <form class="form-horizontal tasi-form" method="get">
                                            <div class="form-group">
                                                <label class="col-sm-2 col-sm-2 control-label">Username</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" value="John">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 col-sm-2 control-label">Password</label>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                    <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Role</label>
                                                    <div class="col-lg-10">
                                                        <select class="form-control m-b-10">
                                                            <option selected>Admin</option>
                                                            <option>Super User</option>
                                                            <option>User</option>
                                                            <option>Creator</option>
                                                        </select>
                                                    </div>
                                                </div>

                                        </form>
                                    </div>
                                    <!-- and here -->

                                </div>
                                <div class="modal-footer">
                                    <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                    <button class="btn btn-success" type="button">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <table class="table convert-data-table data-table">
                        <thead>
                        <tr>
                            <th width="5%">
                                No
                            </th>
                            <th width="30%">
                                Username
                            </th>
                            <th>
                                Role
                            </th>
                            <th width="15%" class="text-center">
                                Action
                            </th>
                            
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                1
                            </td>
                            <td>
                                John
                            </td>
                            <td>
                                Admin
                            </td>
                            <td>
                                <span><button class="btn-md btn btn-default" data-toggle="modal" href="#myModal2">Edit</button></span>
                                <span><button class="btn btn-default btn-sm">Delete</button></span>
                            </td>
                            
                        </tr>
                        </tbody>
                </table>
                </div>
                </div>
                
            </div>
            <!--body wrapper end-->


            <!--footer section start-->
            <footer>
                2016 &copy; OPT-IN by TELKOMSEL.
            </footer>
            <!--footer section end-->




        </div>
        <!-- body content end-->
    </section>
    <?php $this->load->view('parts/script') ?>



</body>
</html>
