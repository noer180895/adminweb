<?php 

if(isset($_POST['Submit'])){
	// code for check server side validation
	if(empty($_SESSION['captcha_code'] ) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code']) != 0){  
		$msg="<span style='color:red'>The Validation code does not match!</span>";// Captcha verification is incorrect.		
	}else{// Captcha verification is Correct. Final Code Execute here!		
		$msg="<span style='color:green'>The Validation code has been matched.</span>";		
	}
}	
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP Secure Professional Captcha.</title>
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
  </head>
  <body>
    <div class="wrapper">
      <div class="container">
        <div class="row">
          <div class=" module-login span4 offset4">
            <form class="form-vertical" action="<?=base_url()?>index.php/auth/c_23_login/captcha" method="post" name="form1" id="form1" >
                <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="table">
                  <?php if(isset($msg)){?>
                  <tr>
                    <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
                  </tr>
                  <?php } ?>
                  <tr>
                    <td align="right" valign="top"> Validation code:</td>
                    <td><?=$image;?><br>
                      <label for='message'>Enter the code above here :</label>
                      <br>
                      <input id="captcha_code" name="secutity_code" type="text">
                      <br>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td><input name="Submit" type="submit" value="Submit" class="button1"></td>
                  </tr>
                </table>
              </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>