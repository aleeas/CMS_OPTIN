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

                <div class="col-sm-12">
                        <section class="panel">
                            <header class="panel-heading ">
                                List registered user
                            </header>
                            <table class="table responsive-data-table data-table">
                            <thead>
                            <tr>
                                <th>
                                    No
                                </th>
                                <th>
                                    Nama
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    No Handphone
                                </th>
                                <th>
                                    Jenis Kelamin
                                </th>
                                <th>
                                    Tgl Lahir
                                </th>
                                
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    1
                                </td>
                                <td>
                                    Asli
                                </td>
                                <td>
                                    andi@gmail.com
                                </td>
                                <td>
                                    08223273261
                                </td>
                                <td>
                                    Laki-Laki
                                </td>
                                <td>
                                    11/12/1990
                                </td>
                                
                            </tr>
                            <tr>
                                <td>
                                    2
                                </td>
                                <td>
                                    Widyarsa
                                </td>
                                <td>
                                    widyarsa@gmail.com
                                </td>
                                <td>
                                    08223273261
                                </td>
                                <td>
                                    Laki-Laki
                                </td>
                                <td>
                                    11/12/1990
                                </td>
                                
                            </tr>
                            <tr>
                                <td>
                                    3
                                </td>
                                <td>
                                    Pratama
                                </td>
                                <td>
                                    paratamax@gmail.com
                                </td>
                                <td>
                                    08223273261
                                </td>
                                <td>
                                    Laki-Laki
                                </td>
                                <td>
                                    11/12/1990
                                </td>
                                
                            </tr>
                            
                            </tbody>
                            </table>
                        </section>
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
