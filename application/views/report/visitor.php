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
                    Reporting</li>
                    <li class="<?php if($this->uri->uri_string() == 'home/roleM') { echo 'active'; } ?>">
                    Visitor and frequency</li>
                </ul>
                <div class="panel">
                <div class="panel-body">
                <table class="table convert-data-table data-table">
                        <thead>
                        <tr>
                            <th>
                                No
                            </th>
                            <th>
                                Number of Visitor
                            </th>
                            <th class="text-center">
                                Date
                            </th>
                            
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                1
                            </td>
                            <td>
                                1202
                            </td>
                            <td class="text-center">
                                11-12-2016
                            </td>
                            
                        </tr>
                        <tr>
                            <td>
                                2
                            </td>
                            <td>
                                809
                            </td>
                            <td class="text-center">
                                09-12-2016
                            </td>
                            
                        </tr>
                        <tr>
                            <td>
                                3
                            </td>
                            <td>
                                201
                            </td>
                            <td class="text-center">
                                08-12-2016
                            </td>
                            
                        </tr>
                        <tr>
                            <td>
                                4
                            </td>
                            <td>
                                1023
                            </td>
                            <td class="text-center">
                                07-12-2016
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
