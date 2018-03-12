<?php require_once 'header.php';?>
<style>
.link {padding: 10px 15px;background: transparent;border:#337ab7 1px solid;border-left:0px;cursor:pointer;color:#607d8b}
.disabled {cursor:not-allowed;color: #337ab7;}
.current {background: #337ab7; color: #fff}
.first{border-left:#337ab7 1px solid;}
.question {font-weight:bold;}
.answer{padding-top: 10px;}
#pagination{margin-top: 20px;padding-bottom: 30px;float: right; display: block; }
.dot {padding: 10px 15px;background: transparent;border-right: #337ab7 1px solid;}
#overlay {background-color: rgba(0, 0, 0, 0.6);z-index: 999;position: absolute;left: 0;top: 0;width: 100%;height: 100%;display: none;}
#overlay div {position:absolute;left:50%;top:50%;margin-top:-32px;margin-left:-32px;}
.page-content {padding: 20px;margin: 0 auto;}
.pagination-setting {padding:10px; margin:5px 0px 10px;border:#337ab7  1px solid;color:#337ab7;}
</style>
<body>

    <div id="wrapper">

        <?php require_once("nav.php");?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Datos</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Datos
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        	<div class="col-md-6" style="display:none;border-bottom: #F0F0F0 1px solid;margin-bottom: 15px;">
                        		Pagination Setting:<br> <select name="pagination-setting" onChange="changePagination(this.value);" class="pagination-setting" id="pagination-setting">
                        		<option value="all-links">Display All Page Link</option>
                        		<option value="prev-next">Display Prev Next Only</option>
                        		</select>
                        	</div>

                    
                        	
                            <table width="100%" class="table table-striped table-bordered table-hover" id="example">
                                <thead>
                                    <tr>
										<th>Id</th>
                                        <th>Llevamos</th>
                                        <th>Quedan</th>
                                        <th>Meta</th>
                                        <th>Equivale</th>
                                        <th>Porcentaje</th>
                                        
                                    </tr>
                                    <?php
                                    $datos = $db->get('datos_barra');
                                    //Array ( [0] => Array ( [datoID] => 1 [datoQuedan] => 18 días [datoMeta] => 30 MM [datoLlevamos] => 7.5 MM [datoEquivale] => 15.200 [datoTS] => 2018-03-08 21:22:04 [datoPorcentaje] => 25 ) )
                                    foreach ($datos as $rs) { ?>
                                    	<tr>
                                    		<td><?php echo $rs["datoID"];?></td>
                                    		<td><div class="edit" id="datoLlevamos_<?php echo $rs["datoID"];?>"><?php echo $rs["datoLlevamos"];?></div></td>

                                    		<td><div class="edit" id="datoQuedan_<?php echo $rs["datoID"];?>"><?php echo $rs["datoQuedan"];?></div></td>
                         
                                    		<td><div class="edit" id="datoMeta_<?php echo $rs["datoID"];?>"><?php echo $rs["datoMeta"];?></div></td>
                                    		
                                    		<td><div class="edit" id="datoEquivale_<?php echo $rs["datoID"];?>"><?php echo $rs["datoEquivale"];?></div></td>
                                    		
                                    		<td><div class="edit" id="datoPorcentaje_<?php echo $rs["datoID"];?>"><?php echo $rs["datoPorcentaje"];?></div></td>
                                    		
                                    	</tr>
                                    <?php
                                    }
                                    ?>
                                </thead>
                                <tbody id="pagination-result">
                                    <input type="hidden" name="rowcount" id="rowcount" />
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                            <div id="paginator" class="dataTables_paginate paging_simple_numbers"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Mensaje:</h4>
      </div>
      <div class="modal-body">
        <p></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- JediTables JavaScript -->
   
    <script src="vendor/jeditable/jquery.jeditable.mini.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    	$(document).ready(function() {
    	    $('.edit').editable('ajax/saveDatos.php', {
    	            indicator : "&lt;img src='img/ajax-loader.gif' /&gt;",
    	            tooltip   : 'Click to edit...'
    	        });
    	});
   
    </script>

</body>

</html>
