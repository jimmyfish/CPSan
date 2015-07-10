<?php include "template.php";
include "ngehubungno.php";
?> 
<div class="testimoni-header">
	<section class="container">
	<div class="wrp">
	<h2>Testimonials</h2>
	<hr class="primary">
	<br/>
		<div class="row">
		<div class="col-md-3"></div>
			<div class="col-md-6">
				<form method="post" action="aksi.php" role="form" id="form_test">
					<div class="form-group input-group wow bounceIn">
		                <span class="input-group-addon"><i class="fa fa-user"></i></span>
		                <input name="full_name" class="form-control" type="text" placeholder="Full Name" required="" >
		            </div>
		            <div class="form-group input-group wow bounceIn">
		                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
		                <input name="e_mail" class="form-control" type="text" placeholder="E-mail Address" required="" >
		            </div>
		            <div class="form-group input-group wow bounceIn">
		                <textarea name="testi" class="form-control" type="text" placeholder="Testimoni" required="" maxlength="255" rows="3" cols="100%"></textarea>
		                <p style="text-align:right">( only 255 Characters allowed )</p>
		            </div>
		            <div class="wow bounceIn" style="text-align:right">
		                <input class="btn btn-primary" type="submit" name="add_test" required="" value="Add Testimoni" >
		            </div>
				</form>
			</div>
		<div class="col-md-2"></div>
		</div>
		
	</div>
</section>
</div>

<?php include "footer.php"; ?>
