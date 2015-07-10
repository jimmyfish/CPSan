<?php include('template.php'); ?>

	<div id="page-wrapper">
		<div class="container-fluid">
			<div class="row">
	            <div class="col-lg-12">
	                <h1 class="page-header">
	                   <i class="fa fa-list"></i> Item List
	                </h1>
	                <ol class="breadcrumb">
	                    <li>
	                        <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
	                    </li>
	                    <li class="active">
	                        Item List
	                    </li>

	                </ol>
	                <p><a href="new_item.php" class="btn btn-sm btn-success"><i class="fa fa-paw"></i> New Item</a>&nbsp;<a href="" class="btn btn-sm btn-info"><i class="fa fa-tag"></i> Featured Item</a></p>

	            </div>
        	</div>
        	<div class="row">

            	<div class="table-responsive">

                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                    <th>Nama Barang</th>
                                    <th>Deskripsi</th>
                                    <th>Harga</th>
                                    <th>Preview</th>
                                    <th class="text-center"><i class="fa fa-edit"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                              $kueri = mysql_query("select * from barang_barang order by id_barang asc") or die(mysql_error());

                              if(mysql_num_rows($kueri) == 0){
                                echo '<tr><td colspan="8"> Tidak Ada Data !</td></tr>';
                            }else{
                                $no = 1;
                                while($data = mysql_fetch_array($kueri)){
                                    ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $data['nama_barang']; ?></td>
                                <td><?php echo $data['deskripsi']; ?></td>
                                <td><i class="fa fa-dollar"></i><?php echo $data['harga_barang']; ?></td>
                                <td class="text-center"><a href="../<?php echo $data['preview_barang']; ?>" target="_blank"><i class="fa fa-picture-o"></i> </a></td>
                                <td class="text-center">
                                    <a title="Link this" href=""><i class="fa fa-link"></i></a>
                                    <a title="Delete Item" href="hapusBarang.php?id=<?php echo $data['id_barang'] ?>"><i class="fa fa-trash"></i></a>
                                    <a title="Edit Item" href="editBarang.php?id=<?php echo $data['id_barang'] ?>"><i class="fa fa-edit"></i></a>
                                </td>
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
		</div>
	</div>

<?php include('foot.php'); ?>