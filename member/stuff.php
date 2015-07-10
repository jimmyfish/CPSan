<?php include "template.php";
include "ngehubungno.php";
?>
    <div class="stuff-header">
        <div class="content-stuff wow bounceIn">
            <h1 style="font-size:65px;text-transform:uppercase;font-weight:700;">Check Out our new stuff today</h1>
        </div>        
    </div>

    <section class="container" id="product">
            <!-- ISI DARI ITEM-ITEM -->
            <div class="wrp grid text-center">
            <h3>Hot Item this Month</h3>
            <hr class="primary">
                <?php

                  $kueri = mysql_query("select * from barang_barang order by id_barang asc") or die(mysql_error());

                  if(mysql_num_rows($kueri) == 0){
                    echo '<tr><td colspan="8"> Tidak Ada Data !</td></tr>';
                }else{
                    $no = 1;
                    while($data = mysql_fetch_array($kueri)){
                        ?>

                    <figure class="effect-zoe wow bounceIn">
                        <img src="../<?php echo $data['preview_barang']; ?>" alt="img1"/>
                        <figcaption>
                            <h2><i class="icon-dollar" style="background-size:cover;"></i><?php echo $data['harga_barang']; ?></h2>
                            <p class="icon-links">
                                <a href="order.php"><span class="icon-shopping-cart" title="Add to Cart"></span></a>
                                
                            </p>
                            <p class="description"><?php echo $data['nama_barang']; ?><br/><small><?php echo $data['deskripsi']; ?></small></p>
                            <p></p>
                        </figcaption>           
                    </figure>

                <?php
                        $no++;
                    }
                }
                   ?>
                
                
            </div>
        </section>
<?php include "footer.php"; ?>