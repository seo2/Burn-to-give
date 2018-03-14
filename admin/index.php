<?php require_once 'header.php';
$hoy = date("Y-m-d");
?>

<body>

    <div id="wrapper">

        <?php require_once("nav.php");?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <?php

            //$count = $db->getValue ("lollapalooza_2018", "count(*)");
            $stats = $db->getOne ("usuarios", "sum(usuID), count(*) as cnt");
            //total diario usuarios
            $db->where ("DATE_FORMAT(usuTS, '%Y-%m-%d') = '".$hoy."' ");
            $stats_users_dia = $db->getOne ("usuarios", "count(*) as cnt");
            //print_r($stats_users_dia);

            $stats2 = $db->getOne ("calorias", "sum(calVal) as totCal, count(*) as cnt");

            //$db->where('calTS', Array ($hoy, $hoy), 'BETWEEN');
            $db->where ("DATE_FORMAT(calTS, '%Y-%m-%d') = '".$hoy."' ");
            $stats_calorias_dia = $db->getOne ("calorias", "sum(calVal) as totCal");
			//echo "total ".$stats['cnt']. "users found";
			if($stats_calorias_dia['totCal'] == ""){
				$totalCalDia = 0;
			}else{
				$totalCalDia = $stats_calorias_dia['totCal'];
			}
            ?>

            <div class="row">
            	<div class="col-lg-4 col-md-6">
            	    <div class="panel panel-warning panel-orange">
            	        <div class="panel-heading">
            	            <div class="row">
            	                <div class="col-xs-3">
            	                    <i class="fa fa-fire fa-5x"></i>
            	                </div>
            	                <div class="col-xs-9 text-right">
            	                    <div class="huge"><?php echo format_number($stats2['totCal']);?></div>
            	                    <div>Calorias</div>
            	                </div>
            	            </div>
            	            <div class="row">
            	            	<div class="col-xs-12">
            	            		<div class="pull-right">
            	            			<h4>Total Hoy: <?php echo format_number($totalCalDia);?></h4>
            	            		</div>
            	            	</div>
            	            </div>
            	        </div>
            	        <a href="calorias.php">
            	            <div class="panel-footer">
            	                <span class="pull-left">Ver Más</span>
            	                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
            	                <div class="clearfix"></div>
            	            </div>
            	        </a>
            	    </div>
            	</div>
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo format_number($stats['cnt']);?></div>
                                    <div>Usuarios</div>
                                </div>
                            </div>
                            <div class="row">
                            	<div class="col-xs-12">
                            		<div class="pull-right">
                            			<h4>Total Hoy: <?php echo format_number($stats_users_dia['cnt']);?></h4>
                            		</div>
                            	</div>
                            </div>
                        </div>
                        <a href="usuarios.php">
                            <div class="panel-footer">
                                <span class="pull-left">Ver Más</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                
                
            </div>
            <!-- /.row -->
            <div class="row">
                
                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-fire fa-fw"></i> Calorias
                        </div>
                        <!-- /.panel-heading -->
                        <?php
                        $q1 = "SELECT * FROM calorias c inner join usuarios u on c.usuID = u.usuID order by calTS DESC LIMIT 8 ";
                        $result = $db->rawQuery($q1);
                        //print_r($r1);
                        ?>
                        <div class="panel-body">
                            <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nombre</th>
                                                    <th>Genero</th>
                                                    
                                                    <th>Fecha</th>
                                                    <th>Calorias</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                            	<?php foreach ($result as $rs) {
                            		# code...
                            	?>
                                <tr><td><?php echo $rs["calID"];?></td>
                                	<td><?php echo $rs["usuNom"];?></td>
                                	<td><?php echo $rs["usuGen"];?></td>
                                	<td><?php echo $rs["calTS"];?></td>
                                	<td>
                                    <span class="pull-right text-muted small">
                                    	<em><?php echo format_number($rs["calVal"]);?></em>
                                    </span>
                                    </td>
                               </tr>
                               	<?php 
                               	}
                               	?>
                                
                                
                               </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                            <!--<a href="#" class="btn btn-default btn-block">View All Alerts</a>-->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    
                    
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-6">
                    
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-users fa-fw"></i> Últimos Usuarios
                            
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nombre</th>
                                                    <th>Genero</th>
                                                    <th>Edad</th>
                                                    <th>Pais</th>
                                                    <th>Fecha</th>
                                                </tr>
                                            </thead>
                                            <tbody>
											<?php
											$query = "SELECT * FROM usuarios u left join paises p  on u.usuPais = p.paisID order by usuTS DESC LIMIT 8 ";
											$users = $db->rawQuery($query);
											foreach ($users as $row) {
												# code...
											
											?>

                                                <tr>
                                                    <td><?php echo $row["usuID"];?></td>
                                                    <td><?php echo $row["usuNom"];?></td>
                                                    <td><?php echo $row["usuGen"];?></td>
                                                    <td><?php echo $row["usuEdad"];?></td>
                                                    <td><?php echo $row["paisNombre"];?></td>
                                                    <td><?php echo $row["usuTS"];?></td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    
                    <!-- /.panel -->
                </div>
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

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

</body>

</html>