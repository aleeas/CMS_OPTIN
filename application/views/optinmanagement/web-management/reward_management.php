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
                                    <h4 class="modal-title">Add Reward</h4>
                                </div>
                                <div class="modal-body">

                                    <!-- here -->
                                    <div class="panel-body">
                                        <form class="form-horizontal tasi-form" method="get">
                                            <div class="form-group">
                                                <label class="col-sm-2 col-sm-2 control-label">Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 col-sm-2 control-label">Poin</label>
                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control">
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
                                    <h4 class="modal-title">Edit Reward</h4>
                                </div>
                                <div class="modal-body">

                                    <!-- here -->
                                    <div class="panel-body">
                                        <form class="form-horizontal tasi-form" method="get">
                                            <div class="form-group">
                                                <label class="col-sm-2 col-sm-2 control-label">Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" value="Honda Jazz">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 col-sm-2 control-label">Poin</label>
                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control" value="20000">
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
                                Reward
                            </th>
                            <th>
                                Poin Requirement
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
                                Honda Jazz
                            </td>
                            <td>
                                20000
                            </td>
                            <td>
                                <span><button class="btn-md btn btn-default" data-toggle="modal" href="#myModal2">Edit</button></span>
                                <span><button class="btn btn-default btn-sm">Delete</button></span>
                            </td>
                            
                        </tr>
                        <tr>
                            <td>
                                2
                            </td>
                            <td>
                                Voucher Pulsa
                            </td>
                            <td>
                                100
                            </td>
                            <td>
                                <span><button class="btn-md btn btn-default" data-toggle="modal" href="#myModal2">Edit</button></span>
                                <span><button class="btn btn-default btn-sm">Delete</button></span>
                            </td>
                            
                        </tr>
                        <tr>
                            <td>
                                3
                            </td>
                            <td>
                                Sepeda Motor
                            </td>
                            <td>
                                5000
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
