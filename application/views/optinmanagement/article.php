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
                    <li class="<?php if($this->uri->uri_string() == 'home/articleM') { echo 'active'; } ?>">
                    Optin Management</li>
                    <li class="<?php if($this->uri->uri_string() == 'home/articleM') { echo 'active'; } ?>">
                    Article Management</li>
                </ul>

                <section class="isolate-tabs">
                    <ul class="nav nav-tabs">
                       
                        <li class="active">
                            <a data-toggle="tab" href="#cat-artikel">Input Category Artikel</a>
                        </li>
                        <li class="">
                            <a data-toggle="tab" href="#artikel-content">Artikel Content</a>
                        </li>
                        
                    </ul>
                    <div class="panel-body">
                        <div class="tab-content">
                            
                            <div id="cat-artikel" class="tab-pane active">

                                <form role="form">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Artikel Category</label>
                                        <input type="text" name="artikel_category" class="form-control">
                                    </div>
                                    
                                    <button type="submit" class="btn btn-default">Submit</button>
                                </form>

                            </div>

                            <div id="artikel-content" class="tab-pane">

                                <form role="form">
                                    <div class="form-group">
                                        <label for="input-title-category">Title Artikel</label>
                                        <input type="text" name="title-artikel" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Article Image</label>
                                        <input id="file-0" class="file" type="file" multiple=true>

                                        <p class="help-block">max file 1mb</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Choose Category</label>
                                        <select class="form-control input-md m-b-10">
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                        </select>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-default">Submit</button>
                                </form>

                            </div>
                            
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
