<?php include('template.php'); ?>
    <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           <i class="fa fa-shopping-cart"></i> Orders Management
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                Orders
                            </li>
                        </ol>
                        <p><a href="../order.php" class="btn btn-sm btn-success"><i class="fa fa-cart-plus"></i> Order New</a></p>
                    </div>

                </div>
                <!-- /.row -->

                <div class="row">

                    <div class="table-responsive">

                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Phone Number</th>
                                        <th>Product Name</th>
                                        <th>CC Number</th>
                                        <th><i class="fa fa-edit"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                  $kueri = mysql_query("select * from ordering order by ordering_id asc") or die(mysql_error());

                                  if(mysql_num_rows($kueri) == 0){
                                    echo '<tr><td colspan="8"> Tidak Ada Data !</td></tr>';
                                }else{
                                    $no = 1;
                                    while($data = mysql_fetch_array($kueri)){
                                        ?>
                                <tr>
                                    <td><?php echo $data['ordering_id']; ?></td>
                                    <td><?php echo $data['first_name']; ?></td>
                                    <td><?php echo $data['last_name']; ?></td>
                                    <td><?php echo $data['email']; ?></td>
                                    <td><?php echo $data['address']; ?></td>
                                    <td><?php echo $data['phone_number']; ?></td>
                                    <td><?php echo $data['product_code']; ?></td>
                                    <td><?php echo $data['cc_number']; ?></td>
                                    <td><a href="hapus.php?id=<?php echo $data['ordering_id'] ?>"><i class="fa fa-trash"></i></a></td>
                                </tr>
                                <?php
                                        $no++;
                                    }
                                }
                                   ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.row -->

                
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
<?php include('foot.php'); ?>