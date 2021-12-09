<?php
//Activamos el almacenamiento en el buffer
ob_start();
session_start();

if (!isset($_SESSION["nombre"]))
{
  header("Location: login.html");
}
else
{
require 'header.php';

if ($_SESSION['escritorio']==1)
{
  
 

?>
<!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">        
        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                          <h1 class="box-title">Escritorio </h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                          <div class="small-box bg-aqua">
                              <div class="inner">
                               
                                <p>Primero</p>
                              </div>
                              <div class="icon">
                                <i class="ion ion-bag"></i>
                              </div>
                              <a href="Primero.php?grado=1" class="small-box-footer">Primero <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                          <div class="small-box bg-green">
                              <div class="inner">
                                
                                <p>Segundo</p>
                              </div>
                              <div class="icon">
                                <i class="ion ion-bag"></i>
                              </div>
                              <a href="Primero.php?grado=2" class="small-box-footer">Segundo <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                          <div class="small-box bg-red">
                              <div class="inner">
                               
                                <p>Tercero</p>
                              </div>
                              <div class="icon">
                                <i class="ion ion-bag"></i>
                              </div>
                              <a href="Primero.php?grado=3" class="small-box-footer">Tercero <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                          <div class="small-box bg-black">
                              <div class="inner">
                               
                                <p>Cuarto</p>
                              </div>
                              <div class="icon">
                                <i class="ion ion-bag"></i>
                              </div>
                              <a href="Primero.php?grado=4" class="small-box-footer">Cuarto <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                          <div class="small-box bg-yellow">
                              <div class="inner">
                               
                                <p>Quinto</p>
                              </div>
                              <div class="icon">
                                <i class="ion ion-bag"></i>
                              </div>
                              <a href="Primero.php?grado=5" class="small-box-footer">Quinto <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                          <div class="small-box bg-purple">
                              <div class="inner">
                               
                                <p>Sexto</p>
                              </div>
                              <div class="icon">
                                <i class="ion ion-bag"></i>
                              </div>
                              <a href="Primero.php?grado=6" class="small-box-footer">Sexto <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                          <div class="small-box bg-gray">
                              <div class="inner">
                               
                                <p>Septimo</p>
                              </div>
                              <div class="icon">
                                <i class="ion ion-bag"></i>
                              </div>
                              <a href="Primero.php?grado=7" class="small-box-footer">Septimo <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                          <div class="small-box bg-blue-active">
                              <div class="inner">
                               
                                <p>Octavo</p>
                              </div>
                              <div class="icon">
                                <i class="ion ion-bag"></i>
                              </div>
                              <a href="Primero.php?grado=8" class="small-box-footer">Octavo <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                          <div class="small-box bg-light-blue">
                              <div class="inner">
                               
                                <p>Noveno</p>
                              </div>
                              <div class="icon">
                                <i class="ion ion-bag"></i>
                              </div>
                              <a href="Primero.php?grado=9" class="small-box-footer">Noveno <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <!--Fin centro -->
                  </div><!-- /.box -->
              </div><!-- /.col -->
          </div><!-- /.row -->
      </section><!-- /.content -->

    </div><!-- /.content-wrapper -->
  <!--Fin-Contenido-->
<?php
}
else
{
  require 'noacceso.php';
}

require 'footer.php';
?>

<script src="../public/js/chart.min.js"></script>
<script src="../public/js/Chart.bundle.min.js"></script> 
<script type="text/javascript">

</script>


</script>


<?php 
}
ob_end_flush();
?>


