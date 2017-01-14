 <!DOCTYPE html>
<html lang="en">
 <?php $this->load->view('parts/head') ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/js/bootstrap-fileinput-master/css/fileinput.css");?>" />
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
                    <li class="<?php if($this->uri->uri_string() == 'home/carousel') { echo 'active'; } ?>">
                    Optin Management</li>
                    <li class="<?php if($this->uri->uri_string() == 'home/carousel') { echo 'active'; } ?>">
                    Carousel Management</li>
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
                                    <th width="5%">
                                        No
                                    </th>
                                    <th width="30%">
                                        Image Name
                                    </th>
                                    <th>
                                        Caption
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
                                        <a href="">screenshot.jpg</a>
                                    </td>
                                    <td>
                                        Lorem ipsum dolor sit amet fusce
                                    </td>
                                    <td>
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
                                    <h4 class="modal-title">Add Banner</h4>
                                </div>
                                <div class="modal-body">

                                   
                                        <section class="panel">
                                           
                                            <div class="panel-body">
                                                <form role="form">                                        
                                                    
                                                    <div class="form-group">
                                                        <label>File input</label>
                                                        <input id="file-0" class="file" type="file" multiple=true>

                                                        <p class="help-block">Max file 1Mb JPG PNG </p>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Description</label>
                                                        <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Add To slide</label>
                                                        <select class="form-control m-b-10">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                        </select>
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

                <!-- <div class="col-lg-6">
                            <section class="panel">
                               
                                <div class="panel-body">
                                    <form role="form">                                        
                                        
                                        <div class="form-group">
                                            <label>File input</label>
                                            <input id="file-0" class="file" type="file" multiple=true>

                                            <p class="help-block">Max file 1Mb JPG PNG </p>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Description</label>
                                            <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Description</label>
                                            <select class="form-control m-b-10">
                                                <option>Primary</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                            </select>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-info">Submit</button>
                                    </form>

                                </div>
                            </section>
                        </div> -->
            <!--footer section start-->
            <footer>
                2016 &copy; OPT-IN by TELKOMSEL.
            </footer>
            <!--footer section end-->




        </div>
        <!-- body content end-->
    </section>
    <?php $this->load->view('parts/script') ?>
    <!--bootstrap-fileinput-master-->
    <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap-fileinput-master/js/fileinput.js");?>">    
    </script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/file-input-init.js");?>"></script>


</body>
</html>
