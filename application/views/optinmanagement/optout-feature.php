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
               
                        <!-- <div class="col-sm-10">
                            <input type="text" class="form-control">
                        </div>
                        <button type="button" class="btn btn-default m-b-10">Unregistration</button> -->

                        <section class="panel">
	                        <header class="panel-heading">
	                            OPT-OUT Feature
	                        </header>
	                        <div class="panel-body">
	                            <form role="form">
	                                <div class="form-group">
	                                    <label for="exampleInputmsisdn">MSISDN</label>
	                                    <input type="text" class="form-control" id="exampleInputmsisdn" placeholder="Enter MSISDN">
	                                </div>                               
	                               
	                                <button type="submit" class="btn btn-default">Unreg</button>
	                            </form>

	                        </div>
	                    </section>
                        <section class="panel">
                        <header class="panel-heading head-border">
                            Opt Out History
                        </header>
                        <table class="table convert-data-table data-table">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>MSISDN</th>
                                <th>Date Unregistration</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>6281212309322</td>
                                <td>01-01-2017 22:22:50</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>6281219809345</td>
                                <td>22-01-2017 22:22:50</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>6282113509123</td>
                                <td>27-01-2017 22:22:50</td>
                            </tr>
                            </tbody>
                        </table>
                    </section>
             
                

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
