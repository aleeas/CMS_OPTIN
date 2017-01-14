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
                        Web & Mobile Management</li>
                        <li class="<?php if($this->uri->uri_string() == 'home/roleM') { echo 'active'; } ?>">
                        Menu Management</li>
                    </ul>
                <div class="panel">
                <div class="panel-body">
                 <div>
                        <button class="btn-md btn btn-default" data-toggle="modal" href="#myModal">Tambah</button>
                    </div><br>
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Add Menu</h4>
                                </div>
                                <div class="modal-body">

                                    <!-- here -->
                                    <div class="panel-body">
                                        <form class="form-horizontal tasi-form" method="get">
                                            <div class="form-group">
                                                <label class="col-sm-2 col-sm-2 control-label">Menu</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                    <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Parent</label>
                                                    <div class="col-lg-10">
                                                        <select class="form-control m-b-10">
                                                            <option>None</option>
                                                            <option>Item 13</option>
                                                            <option>Item 14</option>
                                                            <option>Item 15</option>
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
                <div class="row">
                   

                    <div class="col-lg-4">
                        <div class="dd" id="nestable_list_2">
                            <ol class="dd-list">
                                <li class="dd-item" data-id="13">
                                    <div class="dd-handle">Item 13</div>
                                </li>
                                <li class="dd-item" data-id="14">
                                    <div class="dd-handle">Item 14</div>
                                </li>
                                <li class="dd-item" data-id="15">
                                    <div class="dd-handle">Item 15</div>
                                    <ol class="dd-list">
                                        <li class="dd-item" data-id="16">
                                            <div class="dd-handle">Item 16</div>
                                        </li>
                                        <li class="dd-item" data-id="17">
                                            <div class="dd-handle">Item 17</div>
                                        </li>
                                        <li class="dd-item" data-id="18">
                                            <div class="dd-handle">Item 18</div>
                                        </li>
                                    </ol>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                </div></div>

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
