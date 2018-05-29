	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4">
					<form class="form-vertical" action="<?php echo base_url() ?>auth/c_23_daftar/fungsiDaftar"  method="POST">
						<div class="module-head">
							<h3>Daftar</h3>
						</div>
						<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="number" id="inputNumber" name="txtNip" required placeholder="NIP" >
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="email" id="inputEmail" name="txtEmail" required placeholder="E-mail">
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="password" id="inputPassword" name="txtPassword" required placeholder="Password">
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
									<input type="submit" onclick="lupas('1')" class="btn btn-primary pull-right" value="Daftar">
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