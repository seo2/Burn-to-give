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
                    <h1 class="page-header"> Usuarios</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Listado de Usuarios
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        	<div class="col-md-6" style="border-bottom: #F0F0F0 1px solid;margin-bottom: 15px;">
                        		Pagination Setting:<br> <select name="pagination-setting" onChange="changePagination(this.value);" class="pagination-setting" id="pagination-setting">
                        		<option value="all-links">Display All Page Link</option>
                        		<option value="prev-next">Display Prev Next Only</option>
                        		</select>
                        	</div>
                        	<div class="col-md-6">
                        
                        		<div class="pull-right">
                        		<a href="exportar_usuarios.php" class="btn btn-success">Exportar XLS</a>
                        		</div>
                        	</div>	

                            <table width="100%" class="table table-striped table-bordered table-hover" id="example">
                                <thead>
                                    <tr>
                                         <th>#</th>
                                        <th>FB</th>
                                        <th>Nombre</th>
                                        <th>Email</th>
                                         <th>Genero</th>
                                        <th>Fecha Nac.</th>
                                        <th>Edad</th>
                                        <th>Pais</th>
                                        <th>Fecha de Registro</th>
                                        <th>Estado</th>
                                
                                        
                                    </tr>
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

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
       /* $('#example').DataTable({
            responsive: true,
            "ajax": 'ajax/calorias.php'
        });*/
        

    });

    getresult("ajax/usuarios.php");

        function getresult(url) {
        	$.ajax({
        		url: url,
        		type: "GET",
        		data:  {rowcount:$("#rowcount").val(),"pagination_setting":$("#pagination-setting").val()},
        		beforeSend: function(){$("#overlay").show();},
        		success: function(data){
        			console.log(data);
        			var obj = $.parseJSON( data );
        		$("#pagination-result").html(obj.datos);
        		$("#paginator").html(obj.paginador);
        		setInterval(function() {$("#overlay").hide(); },500);
        		},
        		error: function() 
        		{} 	        
           });
        }
        function changePagination(option) {
        	if(option!= "") {
        		getresult("ajax/usuarios.php");
        	}
        }

    </script>

</body>

</html>
