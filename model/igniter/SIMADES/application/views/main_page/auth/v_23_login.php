	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4">
					<form class="form-vertical" action="<?php echo base_url() ?>auth/c_23_login/login" method="POST">
						<div class="module-head">
							<h3>Anda harus masuk terlebih dahulu</h3>
						</div>
						<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="email" id="inputEmail" name="txtEmail" required placeholder="E-mail">
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="password" id="inputPassword" name="txtPassword" required placeholder="Kata sandi">
								</div>
							</div>
						</div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<button type="submit" class="btn btn-primary pull-left" style="
									    background-color: #1b4bfa;
									    height: 30px;
									    text-align: left;">
										<i class="icon-signin pull-left"></i>
										Masuk
									</button>
									<a href="http://localhost/desa" class="btn btn-danger pull-right" style="
									    height: 20px;
									    text-align: left;">
										<i class="icon-home pull-left"></i>
										Kembali
									</a>
								</div>
							</div>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div><!--/.wrapper-->