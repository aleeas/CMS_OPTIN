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
                    Web & Mobile Management</li>
                    <li class="<?php if($this->uri->uri_string() == 'home/roleM') { echo 'active'; } ?>">
                    Game Management</li>
                    <li class="<?php if($this->uri->uri_string() == 'home/wheelfortune') { echo 'active'; } ?>">
                    Wheel Of Fortune</li>
                </ul>
                <div class="col-lg-6">
                    <section class="panel">
                        <header class="panel-heading">
                            Wheel Of Fortune (8)
                        </header>
                        <div class="panel-body">
                            
                            <section class="isolate-tabs">
                                <ul class="nav nav-tabs">
                                   
                                    <li class="active">
                                        <a data-toggle="tab" href="#cat-game-8">Input Category Game</a>
                                    </li>
                                    <li class="">
                                        <a data-toggle="tab" href="#game-content-8">Game Content</a>
                                    </li>
                                    
                                </ul>
                                <div class="panel-body">
                                    <div class="tab-content">
                                        
                                        <div id="cat-game-8" class="tab-pane active">

                                            <form role="form">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Game Category</label>
                                                    <input type="text" name="artikel_category" class="form-control">
                                                </div>
                                                
                                                <button type="submit" class="btn btn-default">Submit</button>
                                            </form>

                                        </div>

                                        <div id="game-content-8" class="tab-pane">

                                            <form role="form">
                                                
                                                <div class="form-group">
                                                    <label>Game Image</label>
                                                    <input id="file-0" class="file" type="file" multiple=true>

                                                    <p class="help-block">max file 1mb</p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Choose Category</label>
                                                    <select class="form-control input-md m-b-10">
                                                        <option>Option 1</option>
                                                        <option>Option 2</option>
                                                        <option>Option 3</option>
                                                        <option>Option 4</option>
                                                        <option>Option 5</option>
                                                        <option>Option 6</option>
                                                        <option>Option 7</option>
                                                        <option>Option 8</option>
                                                    </select>
                                                </div>
                                                
                                                <button type="submit" class="btn btn-default">Submit</button>
                                            </form>

                                        </div>
                                        
                                    </div>
                                </div>
                            </section>

                        </div>
                    </section>
                </div>




                <div class="col-lg-6">
                    <section class="panel">
                        <header class="panel-heading">
                            Wheel Of Fortune (12)
                        </header>
                        <div class="panel-body">
                            
                            <section class="isolate-tabs">
                                <ul class="nav nav-tabs">
                                   
                                    <li class="active">
                                        <a data-toggle="tab" href="#cat-game-12">Input Category Game</a>
                                    </li>
                                    <li class="">
                                        <a data-toggle="tab" href="#game-content-12">Game Content</a>
                                    </li>
                                    
                                </ul>
                                <div class="panel-body">
                                    <div class="tab-content">
                                        
                                        <div id="cat-game-12" class="tab-pane active">

                                            <form role="form">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Game Category</label>
                                                    <input type="text" name="artikel_category" class="form-control">
                                                </div>
                                                
                                                <button type="submit" class="btn btn-default">Submit</button>
                                            </form>

                                        </div>

                                        <div id="game-content-12" class="tab-pane">

                                            <form role="form">
                                                
                                                <div class="form-group">
                                                    <label>Game Image</label>
                                                    <input id="file-0" class="file" type="file" multiple=true>

                                                    <p class="help-block">max file 1mb</p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Choose Category</label>
                                                    <select class="form-control input-md m-b-10">
                                                        <option>Option 1</option>
                                                        <option>Option 2</option>
                                                        <option>Option 3</option>
                                                        <option>Option 4</option>
                                                        <option>Option 5</option>
                                                        <option>Option 6</option>
                                                        <option>Option 7</option>
                                                        <option>Option 8</option>
                                                        <option>Option 9</option>
                                                        <option>Option 10</option>
                                                        <option>Option 11</option>
                                                        <option>Option 12</option>
                                                    </select>
                                                </div>
                                                
                                                <button type="submit" class="btn btn-default">Submit</button>
                                            </form>

                                        </div>
                                        
                                    </div>
                                </div>
                            </section>

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
