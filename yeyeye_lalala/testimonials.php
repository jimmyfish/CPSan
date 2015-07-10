<?php include('template.php');
$query = mysql_query("SELECT * FROM testimonials")

?>

<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><i class="fa fa-comments"></i> Testimonials</h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active"> Testimonials
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <br/>
                <div class="row">
                	<div class="col-md-6">
                	<?php if(mysql_num_rows($query) == 0){
                		echo "No Testimonials";
                		}else{
            				while($data = mysql_fetch_array($query)){ ?>
                		<div class="panel panel-primary">
	                        <div class="panel-heading">
	                        <h3 class="panel-title"><i class="glyphicon glyphicon-comment"></i> <?php echo $data['test_name']; ?> (<small> <?php echo $data['email']; ?> </small>)<a href="hapusTesti.php?id=<?php echo $data['test_id']; ?>" name="hapusTest"><i class="arrow fa fa-trash"></i></a></h3>
	                        </div>
	                        <div class="panel-body">
	                        <i class="fa fa-quote-left fa-2x"></i>&nbsp;&nbsp;<?php echo $data['testimoni']; ?>
	                        </div>
                        </div>
                        <?php }} ?>
                	</div>
                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
<?php include('foot.php'); ?>
