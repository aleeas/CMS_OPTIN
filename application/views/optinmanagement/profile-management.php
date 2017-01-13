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
            
            	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Modal Tittle</h4>
                                </div>
                                <div class="modal-body">

                                    <form class="form-horizontal tasi-form" method="get">
                        <div class="form-group">

                            <label class="col-sm-2 col-sm-2 control-label">Interest</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control">
                                </div>
                            <br />
                            <br />
                            <br />
                                
                            <label class="col-sm-2 col-sm-2 control-label">Age</label>
                                <div class="col-sm-10">
                                    <select class="form-control col-sm-10">
                                            <option selected disabled>Choose Range of Age</option>
                                            <option>14 - 50</option>
                                            <option>16 - 37</option>
                                            <option>14 - 40</option>
                                            <option>14 - 38</option>
                                    </select>
                                </div>
                            <br />
                            <br />
                            <br />
                            
                            <label class="col-sm-2 col-sm-2 control-label">Smoking Statue</label>
                                <div class="col-sm-10">
                                    <div class="check-box">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
                                            Smoking
                                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                            Not Smoking
                                        </label>
                                    </div>
                                </div>
                            <br />
                            <br />
                            <br />

                             <label class="col-sm-2 col-sm-2 control-label">Agreement in receiving number of campaign per day</label>
                                <div class="col-sm-10">
                                    <div class="check-box">
                                        <label>
                                            <input type="radio" name="optionsRadios1" id="optionsRadios1" value="option1">
                                            Yes
                                            <input type="radio" name="optionsRadios1" id="optionsRadios2" value="option2">
                                            No
                                        </label>
                                    </div>
                                </div>
                            <br />
                            <br />
                            <br />
                            <br />
                            <br />
                            <br />
                            <br />
                            
                            <label class="col-sm-2 col-sm-2 control-label">Agreement in receiving product sample or endorsement</label>
                                <div class="col-sm-10">
                                    <div class="check-box">
                                        <label>
                                            <input type="radio" name="optionsRadios2" id="optionsRadios3" value="option3">
                                            Yes
                                            <input type="radio" name="optionsRadios2" id="optionsRadios4" value="option4">
                                            No
                                        </label>
                                    </div>
                                </div>
                            <br />
                            <br />
                            <br />
                            <br />
                            <br />
                            <br />
                            <br />

                            <label class="col-sm-2 col-sm-2 control-label">Agreement in receiving ads in lock screen</label>
                                <div class="col-sm-10">
                                    <div class="check-box">
                                        <label>
                                            <input type="radio" name="optionsRadios3" id="optionsRadios5" value="option5">
                                            Yes
                                            <input type="radio" name="optionsRadios3" id="optionsRadios6" value="option6">
                                            No
                                        </label>
                                    </div>
                                </div>
                            <br />
                            <br />
                            <br />
                            <br />
                            <br />

                            <label class="col-sm-2 col-sm-2 control-label">RBT</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control">
                                </div>
                            <br />
                            <br />
                            <br />

                            <label class="col-sm-2 col-sm-2 control-label">ETC</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control">
                                </div>
                            <br />
                            <br />
                            <br />
                        </div>
                        
                </form>

                                </div>
                                <div class="modal-footer">
                                    <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                    <button class="btn btn-success" type="button">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <br />
               <div class="row">
                    <div class="col-lg-12">

                        <section class="panel">
                        <header class="panel-heading head-border">
                            List Profile
                        </header>
                        <a class="btn btn-default" data-toggle="modal" href="#myModal">
                        Add
            			</a>
                       <table class="table responsive-data-table data-table">
                            <thead>
                            <tr>
                               <th>
                                   No.
                               </th>
                                <th>
                                   Interest
                                </th>
                                <th>
                                   Age
                                </th>
                                <th>
                                   Smoking Or Not Smoking
                                </th>
                                <th>
                                   Agreement in receiving number of campaign per day
                                </th>
                                <th>
                                   Agreement in receiving product sample or endorsement
                                </th>
                                <th>
                                   Agreement in receiving ads in lock screen
                                </th>
                                <th>
                                   RBT
                                </th>
                                <th>
                                   Etc
                                </th>
                                <th>
                                   Action
                                </th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td width="50px">1</td>
                                <td>
                                    Bernyanyi                                
                                </td>
                                <td>
                                    14 - 50                               
                                </td>
                                <td>
                                    Smoking                               
                                </td>
                                <td style="color:green">
                                    Yes                               
                                </td>
                                <td style="color:red">
                                    No                            
                                </td>
                                <td style="color:green">
                                    Yes                               
                                </td>
                                <td>
                                    Peterpan - Belah Duren                              
                                </td>
                                <td>
                                	None
                                </td>
                                <td>
                                   <span><a href="#"><i class="fa fa-pencil"></i></a></span>
                                   <span><a href="#"><i class="fa fa-eye"></i></a></span>
                                   <span><a href="#"><i class="fa fa-trash"></i></a></span>

                                </td>

                            </tr>
                            <tr>
                                <td width="50px">1</td>
                                <td>
                                    Futsal                               
                                </td>
                                <td>
                                    16 - 37                             
                                </td>
                                <td>
                                    Not Smoking                               
                                </td>
                                <td style="color:red">
                                    No                            
                                </td>
                                <td style="color:green">
                                    Yes                               
                                </td>
                                <td style="color:green">
                                    Yes                               
                                </td>
                                <td>
                                    Peterpan - Belah Duren                              
                                </td>
                                <td>
                                	None
                                </td>
                                <td>
                                   <span><a href="#"><i class="fa fa-pencil"></i></a></span>
                                   <span><a href="#"><i class="fa fa-eye"></i></a></span>
                                   <span><a href="#"><i class="fa fa-trash"></i></a></span>

                                </td>
                            </tr>
                            <tr>
                                <td width="50px">2</td>
                                <td>
                                    Musik                               
                                </td>
                                <td>
                                    14 - 50                               
                                </td>
                                <td>
                                    Not Smoking                               
                                </td>
                                <td style="color:green">
                                    Yes                               
                                </td>
                                <td style="color:green">
                                    Yes                               
                                </td>
                                <td style="color:red">
                                    No                            
                                </td>
                                <td>
                                    Dewa - Cinta Satu Jam                              
                                </td>
                                <td>
                                	None
                                </td>
                                <td>
                                   <span><a href="#"><i class="fa fa-pencil"></i></a></span>
                                   <span><a href="#"><i class="fa fa-eye"></i></a></span>
                                   <span><a href="#"><i class="fa fa-trash"></i></a></span>

                                </td>
                            </tr>
                            <tr>
                                <td width="50px">3</td>
                                <td>
                                    Basket                                
                                </td>
                                <td>
                                    14 - 40                              
                                </td>
                                <td>
                                    Not Smoking                               
                                </td>
                                <td style="color:green">
                                    Yes                               
                                </td>
                                <td style="color:green">
                                    Yes                               
                                </td>
                                <td style="color:green">
                                    Yes                               
                                </td>
                                <td>
                                    Kufaku - Cuma Kamu                              
                                </td>
                                <td>
                                	None
                                </td>
                                <td>
                                   <span><a href="#"><i class="fa fa-pencil"></i></a></span>
                                   <span><a href="#"><i class="fa fa-eye"></i></a></span>
                                   <span><a href="#"><i class="fa fa-trash"></i></a></span>

                                </td>
                            </tr>
                            <tr>
                                <td width="50px">4</td>
                                <td>
                                    Tennis                               
                                </td>
                                <td>
                                    14 - 50                               
                                </td>
                                <td>
                                    Smoking                               
                                </td>
                                <td style="color:green">
                                    Yes                               
                                </td>
                                <td style="color:red">
                                    No                            
                                </td>
                                <td style="color:green">
                                    Yes                               
                                </td>
                                <td>
                                    Bob Marley - Nikmatnya Belah Duren                              
                                </td>
                                <td>
                                	None
                                </td>
                                <td>
                                   <span><a href="#"><i class="fa fa-pencil"></i></a></span>
                                   <span><a href="#"><i class="fa fa-eye"></i></a></span>
                                   <span><a href="#"><i class="fa fa-trash"></i></a></span>

                                </td>
                            </tr>
                            <tr>
                                <td width="50px">5</td>
                                <td>
                                    Tari Tradisional                                
                                </td>
                                <td>
                                    14 - 38                               
                                </td>
                                <td>
                                    Not Smoking                               
                                </td>
                                <td style="color:green">
                                    Yes                               
                                </td>
                                <td style="color:red">
                                    No                            
                                </td>
                                <td style="color:red">
                                    No                            
                                </td>
                                <td>
                                    Nidji - Manis Manja                              
                                </td>
                                <td>
                                	None
                                </td>
                                <td>
                                   <span><a href="#"><i class="fa fa-pencil"></i></a></span>
                                   <span><a href="#"><i class="fa fa-eye"></i></a></span>
                                   <span><a href="#"><i class="fa fa-trash"></i></a></span>

                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="7">
                                   Total Record : 6                                
                                 </td>
                            </tr>
                            <tr>
                                <td colspan="7" align="right"><nav><ul class="pagination" style="margin-top:0px"><li class="active"><a>1</a></li><li><a href="#" data-ci-pagination-page="2">2</a></li><li><a href="#" data-ci-pagination-page="2" rel="next">Next</a></li></ul></nav></td>
                            </tr>
                        </tfoot>
                    </table>
                    </section>
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
