
<!-- Placed js at the end of the document so the pages load faster -->
<script src="<?php echo base_url("assets/js/jquery-1.10.2.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/jquery-migrate.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/modernizr.min.js"); ?>"></script>

<!--Nice Scroll-->
<script src="<?php echo base_url("assets/js/jquery.nicescroll.js"); ?>" type="text/javascript"></script>


<!--switchery-->
<script src="<?php echo base_url("assets/js/switchery/switchery.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/switchery/switchery-init.js"); ?>"></script>

<!--nestable -->
<script src="<?php echo base_url("assets/js/nestable/jquery.nestable.js");?>"></script>
<script src="<?php echo base_url("assets/js/nestable-init.js");?>"></script>

<!--Data Table-->
<script src="<?php echo base_url("assets/js/data-table/js/jquery.dataTables.min.js");?>"></script>
<!-- <script src="<?php echo base_url("assets/js/data-table/js/dataTables.tableTools.min.js");?>"></script> -->
<script src="<?php echo base_url("assets/js/data-table/js/bootstrap-dataTable.js");?>"></script>
<script src="<?php echo base_url("assets/js/data-table/js/dataTables.colVis.min.js");?>"></script>
<script src="<?php echo base_url("assets/js/data-table/js/dataTables.responsive.min.js");?>"></script>
<script src="<?php echo base_url("assets/js/data-table/js/dataTables.scroller.min.js");?>"></script>
<!--data table init-->
<script src="<?php echo base_url("assets/js/data-table-init.js");?>"></script>


<script src="<?php echo base_url("assets/js/summernote/dist/summernote.min.js"); ?>"></script>

<!--common scripts for all pages-->
<script src="<?php echo base_url("assets/js/scripts.js"); ?>"></script>

  <script>

    jQuery(document).ready(function(){
        $('.wysihtml5').wysihtml5();

        $('.summernote').summernote({
            height: 200,                 // set editor height

            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor

            focus: true                 // set focus to editable area after initializing summernote
        });
    });

	</script>