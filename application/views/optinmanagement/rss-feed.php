 <!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/js/bootstrap-datepicker/css/datepicker.css"); ?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/js/bootstrap-timepicker/compiled/timepicker.css"); ?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/js/bootstrap-datetimepicker/css/datetimepicker.css"); ?>"/>
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
                    Optin Management</li>
                    <li class="<?php if($this->uri->uri_string() == 'home/roleM') { echo 'active'; } ?>">
                    Web Management</li>
                    <li class="<?php if($this->uri->uri_string() == 'home/roleM') { echo 'active'; } ?>">
                    RSS Feed Management</li>
                </ul>
                
                <div class="panel">
                    <div class="panel-body">
                        <div>
                            <button class="btn-md btn btn-default" data-toggle="modal" data-target="#myModal">
                            Tambah</button>
                        </div>
                        <table class="table convert-data-table data-table">
                                <thead>
                                <tr>
                                    <th>
                                        No
                                    </th>                                    
                                    <th>
                                        Judul
                                    </th>
                                    <th>
                                        Link
                                    </th>
                                    <th>
                                        Bahasa
                                    </th>
                                    <th width="25%">
                                        Desc
                                    </th>
                                    <th>
                                        Publish Date
                                    </th>
                                    
                                    <th width="20%" class="text-center">
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
                                         Lorem ipsum dolor sit amet fusce
                                    </td>
                                    <td>
                                         https://placehold.it/
                                    </td>
                                    <td>
                                         Indonesia
                                    </td>
                                    <td>
                                         Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                         tempor incididunt ut labore et dolore magna aliqua.
                                    </td>
                                    <td>
                                         25/01/2017
                                    </td>
                                    <td>
                                        <span><button class="btn btn-default btn-sm">Lihat</button></span>
                                        <span><button class="btn btn-default btn-sm">Edit</button></span>
                                        <span><button class="btn btn-default btn-sm">Delete</button></span>
                                    </td>
                                    
                                </tr>
                                </tbody>
                        </table>
                        
                    </div>
                </div>

            </div>
            <!--body wrapper end-->

            <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">RSS Feed</h4>
                                </div>
                                <div class="modal-body">

                                   
                                        <section class="panel">
                                           
                                            <div class="panel-body">
                                                <form role="form">                                        
                                                   
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Title</label>
                                                        <input type="text" name="title" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Description</label>
                                                        <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Add Link</label>
                                                        <input type="text" name="title" class="form-control">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Language</label>
                                                        <input type="text" name="title" class="form-control">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Publish</label>
                                                        <input class="form-control form-control-inline input-medium default-date-picker"  size="16" type="text" value="" />
                                                    </div>

                                                                                                        
                                                    
                                                </form>

                                            </div>
                                        </section>
                                

                                </div>
                                <div class="modal-footer">
                                    <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                    <button class="btn btn-default" type="button">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- modal -->

              
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
