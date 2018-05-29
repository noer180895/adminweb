<?php 

if(isset($_POST['Submit'])){
	// code for check server side validation
	if(empty($_SESSION['captcha_code'] ) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code']) != 0){  
		$msg="Kode captcha tidak sesuai!";// Captcha verification is incorrect.		
	}else{// Captcha verification is Correct. Final Code Execute here!		
		$msg="<span style='color:green'>Kode captcha tidak sesuai.</span>";		
	}
}	
?>
	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4">
					<form class="form-vertical" action="<?php echo base_url() ?>auth/c_23_lupas/captcha"  method="POST">
						<div class="module-head">
							<h3>Lupa Password</h3>
						</div>
						<div class="module-body">
							<?php
								if (isset($msg)) {
									?>
										<div class="alert alert-error">
											<button type="button" class="close" data-dismiss="alert">×</button>
											<strong>Warning! </strong><?php echo $msg ?>
										</div>
									<?php
								}
							?>
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="email" id="inputEmail" name="txtEmail" required placeholder="E-mail">
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="number" id="inputNumber" name="txtNip" required placeholder="NIP" >
								</div>
							</div>
							<div class="control-group">
									<?=$image;?><br><br>
								<div class="controls row-fluid">
									<input class="span12" type="text" id="inputNumber" name="secutity_code" required placeholder="Tulis Captcha disini" >
								</div>
							</div>
							<!-- <div class="control-group">
								<div class="controls row-fluid">
									<?php
										// include('include/demo.php');
									?>
								</div>
							</div> -->
						</div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<input type="submit" name="Submit"  class="btn btn-primary pull-right" value="Lupa Password">
								</div>
								<!-- <script -->
								<!-- //   function lupas(str) {
								//     if(str.length==0){
								//       // document.getElementById("cari_data").innerHTML = "";
								//       var xmlhttp = new XMLHttpRequest();
								//       xmlhttp.onreadystatechange = function(){
								//         if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
								//           document.getElementById("hasil").innerHTML = xmlhttp.responseText;
								//         }
								//       };
								//       xmlhttp.open("GET", "<?php //echo base_url();?>auth/c_23_lupas/lupaPassword?q=",true);
								//       xmlhttp.send();
								//     }
								//     else{
								//       var xmlhttp = new XMLHttpRequest();
								//       xmlhttp.onreadystatechange = function(){
								//         if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
								//           document.getElementById("hasil").innerHTML = xmlhttp.responseText;
								//         }
								//       };
								//       xmlhttp.open("GET", "<?php //echo base_url();?>auth/c_23_lupas/lupaPassword?q=" + str,true);
								//       xmlhttp.send();
								//     }
								//   } -->
								<!-- </script -->
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div><!--/.wrapper-->