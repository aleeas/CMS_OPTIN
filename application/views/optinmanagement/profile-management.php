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
            	 <section class="isolate-tabs">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a data-toggle="tab" href="#home-iso">Text Content</a>
                        </li>
                        <li class="">
                            <a data-toggle="tab" href="#about-iso">Survei Content</a>
                        </li>
                        
                    </ul>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div id="home-iso" class="tab-pane active">
                                    
                                <form role="form">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Text Content</label>
                                        <textarea class="form-control"></textarea>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-default">Submit</button>
                                </form>
                              
                            </div>
                            <div id="about-iso" class="tab-pane">About</div>
                            
                        </div>
                    </div>
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
