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
                    <button class="btn-md btn btn-default">Tambah</button>
                </div>
                <table class="table convert-data-table data-table">
                        <thead>
                        <tr>
                            <th width="5%">
                                No
                            </th>
                            <th width="30%">
                                Name
                            </th>
                            <th>
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
                                Jhon Doe
                            </td>
                            <td>
                                Jones
                            </td>
                            <td>
                                Admin
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
