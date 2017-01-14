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
                <table class="table convert-data-table data-table">
                        <thead>
                        <tr>
                            <th>
                                No
                            </th>
                            <th>
                                User
                            </th>
                            <th class="text-center">
                                Reward
                            </th>
                            <th class="text-center">
                                Prize(Coin)
                            </th>
                            <th class="text-center">
                                Current Coin
                            </th>
                            <th class="text-center">
                                Datetime
                            </th>
                            
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                1
                            </td>
                            <td>
                                Maximof
                            </td>
                            <td class="text-center">
                                Roulette Wheel
                            </td>

                            <td class="text-center">
                                5
                            </td>
                            <td class="text-center">
                                205
                            </td>
                            <td class="text-center">
                                24-06-2017 17:02:00
                            </td>
                            
                        </tr>
                        <tr>
                            <td>
                                2
                            </td>
                            <td>
                                Wanda
                            </td>
                            <td class="text-center">
                                Survey
                            </td>

                            <td class="text-center">
                                10
                            </td>
                            <td class="text-center">
                                100
                            </td>
                            <td class="text-center">
                                14-02-2017 15:22:00
                            </td>
                            
                        </tr>
                        <tr>
                            <td>
                                3
                            </td>
                            <td>
                                Cosmo
                            </td>
                            <td class="text-center">
                                Survey
                            </td>

                            <td class="text-center">
                                12
                            </td>
                            <td class="text-center">
                                64
                            </td>
                            <td class="text-center">
                                11-03-2017 05:22:00
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
