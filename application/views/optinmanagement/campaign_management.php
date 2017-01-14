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
                    <li class="<?php if($this->uri->uri_string() == 'home/campaign_management') { echo 'active'; } ?>">
                    Optin Management</li>
                    <li class="<?php if($this->uri->uri_string() == 'home/campaign_management') { echo 'active'; } ?>">
                    Campaign Management</li>
                </ul>

                <div class="col-lg-12">
                    <section class="panel">
                        <div class="panel-body">
                            <form role="form">
                                <div class="form-group">
                                    <label for="exampleInputTitle">Title</label>
                                    <input type="text" class="form-control" id="exampleInputtitle">
                                </div>

                                 <div class="form-group">
                                    <label for="exampleInputMessage">Body Message</label>
                                    <div class="summernote"></div>
                                </div>
                                
                                
                                <button type="submit" class="btn btn-default">Submit</button>
                            </form>
                        </div>
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
