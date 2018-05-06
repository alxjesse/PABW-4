<!DOCTYPE html>
<html lang="en">
<head>
	<title>JOIN OM-JEK DRIVER</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="http://localhost/PABW4/PABW-4/Assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://localhost/PABW4/PABW-4/Assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://localhost/PABW4/PABW-4/Assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://localhost/PABW4/PABW-4/Assets/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://localhost/PABW4/PABW-4/Assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://localhost/PABW4/PABW-4/Assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://localhost/PABW4/PABW-4/Assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/PABW4/PABW-4/Assets/css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="contact1">
		<div class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="http://localhost/PABW4/PABW-4/Assets/images/om-jek.png" alt="IMG">
			</div>

			<form class="contact1-form validate-form">
				<span class="contact1-form-title">
					DATA OM-JEK ANDA
				</span>
				<span>
					Nama  				: <?php  echo $data['a']; ?>
					<br>
					Email 				: <?php echo $data['b']; ?>
					<br>
					No HP 				: <?php echo $data['c']; ?>
					<br>
					Alamat				: <?php echo $data['d']; ?>
					<br>
					Pendidikan Terakhir : <?php $pend = $_REQUEST['pend']; echo $pend; ?>
					<br>
					Dari mana anda mengetahui OM-JEK? 
					<?php echo $data['e']; ?>
					<br>
					Berasal dari
					<?php echo $data['asal'];?>

					</span> 

				<span class="contact1-form-title">
					
					

				</span>

				<!--
				 <label class="container">
				 	<input type="checkbox" >
				 	Orang Tua
  
  <span class="checkmark"></span>
</label>

<label class="container"><input type="checkbox" checked="checked"> Teman/Saudara
  
  <span class="checkmark"></span>
</label>

<label class="container"><input type="checkbox" checked="checked"> Media Sosial
  
  <span class="checkmark"></span>
</label>

<label class="container">
	<input type="checkbox" checked="checked"> Driver OM-JEK
  <span class="checkmark"></span>
</label>  -->

<span class="contact1-form-title">
	Mendaftarkan diri sebagai	: <?php echo $data['f']; ?>
				</span>

	

<span class="contact1-form-title">
	Foto diri
				</span>

				<span class="contact1-form-title">

	<img src="http://localhost/PABW4/PABW-4/Assets/Images/<?php echo $data['poto'];?>" width="480px;">
				</span>
				<div class="container-contact1-form-btn">
					
				</div>
			</form>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="http://localhost/PABW4/PABW-4/Assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="http://localhost/PABW4/PABW-4/Assets/vendor/bootstrap/js/popper.js"></script>
	<script src="http://localhost/PABW4/PABW-4/Assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="http://localhost/PABW4/PABW-4/Assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="http://localhost/PABW4/PABW-4/Assets/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<!--===============================================================================================-->
	<script src="http://localhost/PABW4/PABW-4/Assets/js/main.js"></script>

</body>
</html>
