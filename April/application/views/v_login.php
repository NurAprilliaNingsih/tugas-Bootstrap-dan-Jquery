<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Simple HTML & CSS Login Form</title>
  
  
  
      <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">

  
</head>

<body>
  <link href="<?php echo base_url('https://fonts.googleapis.com/css?family=Open+Sans:700,600')?>" rel='stylesheet' type='text/css'>


<form method="post" action="">
<div class="box">
<h1>LOGIN</h1>

<input type="email" name="email" value="email" onFocus="field_focus(this, 'email');" onblur="field_blur(this, 'email');" class="email" />
  
<input type="password" name="password" id="password" value="email" onFocus="field_focus(this, 'email');" onblur="field_blur(this, 'email');" class="email" />

<div>
<input type="checkbox" class="form-checkbox"> Show password
</div>
  
<a href="<?php echo base_url();?>index.php/Login/form"><div class="btn">Sign In</div></a> <!-- End Btn -->  
</div> <!-- End Box -->
  
</form>

<p>Forgot your password? <u style="color:#f1c40f;">Click Here!</u></p>
  
<script src="<?php echo base_url('//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js')?>" type="text/javascript"></script>
  
    <script  src="<?php echo base_url('assets/js/jquery-3.2.1.min.js')?>"></script>

 


    <script type="text/javascript">
	$(document).ready(function(){		
		$('.form-checkbox').click(function(){
			if($(this).is(':checked')){
				$('#password').attr('type','text');
			}else{
				$('#password').attr('type','password');
			}
		});
	});
</script>

</body>
</html>
