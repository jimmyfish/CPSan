<?php
    include('template.php');
    $id = $_GET['id'];
    $sql=mysql_query("SELECT * FROM barang_barang where id_barang='".$id."'");
    $data=mysql_fetch_array($sql);
?>
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                   <i class="fa fa-edit"></i> Edit Item
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                    </li>
                    <li class="active">
                        Edit Item
                    </li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
        	<div class="col-md-6">

		        <form role="form" action="aksi.php" method="post" enctype="multipart/form-data">
                    <div class="form-group input-group">
                        <input type="text" name="aidi-barang" class="form-control" placeholder="Item Name" value="<?php echo $data['id_barang']; ?>" disabled>
                    </div>
		            <div class="form-group input-group">
		                <span class="input-group-addon"><i class="fa fa-quote-left"></i></span>
		                <input type="text" name="nama-barang" class="form-control" placeholder="Item Name" value="<?php echo $data['nama_barang']; ?>">
		            </div>
		            <div class="form-group">
                        <textarea name="deskripsi-barang" class="form-control" rows="3" placeholder="Item Description" maxlength="255" name="deskripsi" value="<?php echo $data['deskripsi']; ?>"></textarea>
                        <p style="text-align:right">( only 255 Characters allowed )</p>
                    </div>
		            <div class="form-group input-group">
		                <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
		                <input type="text" class="form-control" placeholder="Item Price" name="harga-barang" value="<?php echo $data['harga_barang']; ?>">
		            </div>
		            <div class="form-group">
                        <label><i class="fa fa-picture-o"></i> Item Preview</label>
                        <input type="file" name="previewnew" >
                        <br/>
                        <p><small>*) Recommended pixel is 480 x 288 and the size must be below 500kB</small></p>
                        <br/>
                        <p>Image Preview</p>
                        <img class="img-thumbnails" src="../<?php echo $data['preview_barang']; ?>">
                    </div>
		            <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Proccess" name="ubahBarang">
                    </div>
		        </form>
        	</div>
            <div class="col-md-2"></div>
        </div>
	</div>
</div>



<?php include('foot.php'); ?>