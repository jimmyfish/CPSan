<?php include('template.php');
$order = mysql_fetch_object(mysql_query("SELECT count(*) FROM testimonials"));
?>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <i class="fa fa-xing"></i> Welcome, <small><?php echo $login_session ?>!  |  <a href="http://localhost/cps/" target="_blank"><i class="fa fa-external-link"></i> View Site</a></small>
                </h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                    </li>
                </ol>
            </div>
        </div>
        <div class="alert alert-danger">
            <i class="fa fa-bug"></i> <strong>Bug Reports : </strong>Agus has found a new bug about Denial of Service.<a href="#" style="color:#A94442;"><span class="arrow"><i class="fa fa-times"></i></span></a> 
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-comments fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?php echo $tst; ?></div>
                                <div>Testimonial(s)</div>
                            </div>
                        </div>
                    </div>
                    <a href="testimonials.php">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-tasks fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?php echo $badd; ?></div>
                                <div>Item List!</div>
                            </div>
                        </div>
                    </div>
                    <a href="list_item.php">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-shopping-cart fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?php echo $custc; ?></div>
                                <div>Orders!</div>
                            </div>
                        </div>
                    </div>
                    <a href="customers.php">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-bug fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">27</div>
                                <div>Bug Reports!</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Visitor</h3>
                    </div>
                    <div class="panel-body">
                    <div id="morris-area-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-desktop fa-fw"></i> Server Status</h3>
                    </div>
                    <div class="panel-body">
                    Storage<span class="arrow">931.02 MiB / 4 GiB</span>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"><span class="sr-only">20%</span>22.73%
                        </div>
                    </div>
                    Bandwidth<span class="arrow">409.6 MiB / 1024 MiB</span>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary active progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"><span class="sr-only">40%</span>
                        40%
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php include('foot.php'); ?>