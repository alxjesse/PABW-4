<!DOCTYPE html>
<html lang="en">
<head>
	<title>JOIN OM-JEK DRIVER</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="contact1">
		<div class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="images/om-jek.png" alt="IMG">
			</div>

			<form class="contact1-form validate-form">
				<span class="contact1-form-title">
					DATA OM-JEK ANDA
				</span>
				<span>
					Nama  				: <?php $name = $_REQUEST['Nama']; echo $name; ?>
					<br>
					Email 				: <?php $mail = $_REQUEST['email']; echo $mail; ?>
					<br>
					No HP 				: <?php $no = $_REQUEST['NoHP']; echo $no; ?>
					<br>
					Alamat				: <?php $adress = $_REQUEST['Alamat']; echo $adress; ?>
					<br>
					Pendidikan Terakhir : <?php $pend = $_REQUEST['pend']; echo $pend; ?>
					<br>
					Dari mana anda mengetahui OM-JEK? 
					<?php $check = $_REQUEST['check']; echo $check; ?>

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
	Mendaftarkan diri sebagai	: <?php $radio = $_REQUEST['radio']; echo $radio; ?>
				</span>

	

<span class="contact1-form-title">
	Upload foto diri
				</span>

				<span class="contact1-form-title">

	<?php $tmp = $_FILES['fileToUpload']['tmp_name']; 
move_uploaded_file($tmp, 'profile.jpg');?>
<img src="profile.jpg">
				</span>
				<div class="container-contact1-form-btn">
					<button class="contact1-form-btn">
						<span>
							Konfirmasi Pengajuan Form
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
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
	<script src="js/main.js"></script>

</body>
</html>
