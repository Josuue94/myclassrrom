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
  
$grado = $_GET['grado'];

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
                          <h1 class="box-title">Asignaturas para <?php echo $grado . "° "; ?> grado</h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                          <div class="small-box bg-aqua">
                              <div class="inner">
                               
                                <p>Matemáticas</p>
                              </div>
                              <div class="icon">
                                <i class="ion ion-bag"></i>
                              </div>
                              <a href="../public/files/Matematica <?php echo $grado; ?>.pdf" target="_blank" class="small-box-footer">Descargar <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                          <div class="small-box bg-green">
                              <div class="inner">
                                
                                <p>Lenguaje</p>
                              </div>
                              <div class="icon">
                                <i class="ion ion-bag"></i>
                              </div>
                              <a href="../public/files/Lenguaje <?php echo $grado; ?>.pdf" target="_blank" class="small-box-footer">Descargar <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                          <div class="small-box bg-red">
                              <div class="inner">
                               
                                <p>Ciencia y Salud</p>
                              </div>
                              <div class="icon">
                                <i class="ion ion-bag"></i>
                              </div>
                              <a href="../public/files/Ciencia <?php echo $grado; ?>.pdf" target="_blank" class="small-box-footer">Descargar <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                          <div class="small-box bg-black">
                              <div class="inner">
                               
                                <p>Estudios Sociales</p>
                              </div>
                              <div class="icon">
                                <i class="ion ion-bag"></i>
                              </div>
                              <a href="../public/files/Sociales <?php echo $grado; ?>.pdf" target="_blank" class="small-box-footer">Descargar <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                          <div class="small-box bg-yellow">
                              <div class="inner">
                               
                                <p>Educación Fisica</p>
                              </div>
                              <div class="icon">
                                <i class="ion ion-bag"></i>
                              </div>
                              <a href="../public/files/Fisica <?php echo $grado; ?>.pdf" target="_blank" class="small-box-footer">Descargar <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <?php if($grado <= 6){ echo '
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                          <div class="small-box bg-purple">
                              <div class="inner">
                               
                                <p>Educación Artística</p>
                              </div>
                              <div class="icon">
                                <i class="ion ion-bag"></i>
                              </div>
                              <a href="../public/files/Artistica <?php echo $grado; ?>.pdf" target="_blank" class="small-box-footer">Descargar <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                      
                    </div>';
                        } ?>


                    <?php if($grado > 6){ echo '
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                          <div class="small-box bg-purple">
                              <div class="inner">
                               
                                <p>Ingles</p>
                              </div>
                              <div class="icon">
                                <i class="ion ion-bag"></i>
                              </div>
                              <a href="../public/files/Ingles <?php echo $grado; ?>.pdf" target="_blank" class="small-box-footer">Descargar <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                      
                    
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                          <div class="small-box bg-purple">
                              <div class="inner">
                               
                                <p>Desarrollo Socioemocional</p>
                              </div>
                              <div class="icon">
                                <i class="ion ion-bag"></i>
                              </div>
                              <a href="../public/files/Desarrollo <?php echo $grado; ?>.pdf" target="_blank" class="small-box-footer">Descargar <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                      
                    
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                          <div class="small-box bg-purple">
                              <div class="inner">
                               
                                <p>Fundamentos de las Ciencias de la Computación</p>
                              </div>
                              <div class="icon">
                                <i class="ion ion-bag"></i>
                              </div>
                              <a href="../public/files/Computacion <?php echo $grado; ?>.pdf" target="_blank" class="small-box-footer">Descargar <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                      
                    </div>';
                        } ?>
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


