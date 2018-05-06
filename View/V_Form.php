
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
	<background-image: url("D:\PEMWEB\TUGAS\ContactFrom_v1\ContactFrom_v1\images");>

	<div class="contact1">
		<div class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="images/om-jek.png" alt="IMG">
			</div>

			<form class="contact1-form validate-form" action="http://localhost/PABW4/PABW-4/router.php/Data/lihatData" method="POST" enctype="multipart/form-data">
				<span class="contact1-form-title">
					Pendaftaran Driver OM - JEK
				</span>

				<div class="wrap-input1 validate-input" data-validate = "Nama harus diisi">
					<input class="input1" type="text" name="Nama" placeholder="Nama">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "E-mail tidak valid">
					<input class="input1" type="text" name="email" placeholder="Email">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "No Hape dibutuhkan">
					<input class="input1" type="text" name="NoHP" placeholder="NoHP">
					<span class="shadow-input1"></span>
				</div>
				<div class="wrap-input1 validate-input" data-validate = "Message is required">
					<textarea class="input1" name="Alamat" placeholder="Alamat"></textarea>
					<span class="shadow-input1"></span>

				<span class="contact1-form-title">
					Dari mana anda mengetahui OM-JEK?
				</span>
				 <label class="container">
				 	<input type="checkbox" name="check" checked = "checked" value="Orang Tua">
				 	Orang Tua
  
  <span class="checkmark"></span>
</label>

<label class="container"><input type="checkbox" name="check" value="Teman/Saudara"> Teman/Saudara
  
  <span class="checkmark"></span>
</label>

<label class="container"><input type="checkbox" name="check" value="Media Sosial"> Media Sosial
  
  <span class="checkmark"></span>
</label>

<label class="container">
	<input type="checkbox" name="check" value="Driver OM-JEK"> Driver OM-JEK
  <span class="checkmark" ></span>
</label> 

<span class="contact1-form-title">
	
	Mendaftarkan diri sebagai
				</span>
				<label class="container">OM-BIKE
  <input type="radio" checked="checked" name="radio" value="OM-BIKE">
  <span class="checkmark"></span>
</label>
<label class="container">OM-CAR
  <input type="radio" name="radio" value="OM-CAR">
  <span class="checkmark"></span>
</label>
<label class="container">OM-BOX
  <input type="radio" name="radio" value="OM-BOX">
  <span class="checkmark"></span>
</label>
<label class="container">OM-PARTNER
  <input type="radio" name="radio" value="OM-PARTNER">
  <span class="checkmark"></span>
</label>

<span class="contact1-form-title">
	Upload foto diri
				</span>
<input type="file" name="fileToUpload" id="fileToUpload">
    
    	<div class="select">
    		<span class="contact1-form-title">
				</span>
    		<span class="contact1-form-title">
	PENDIDIKAN TERAKHIR
				</span>
   <select class="input-mode" name="pend" placeholder="pend">
   	
     <option>- PILIH -</option>
      <option value="TK">TK</option>
      <option value="SD">SD</option>
      <option value="SMP">SMP</option>
      <option value="SMA">SMA</option>
      <option value="DIPLOMA/SARJANA">DIPLOMA/SARJANA</option>
   </select>
   </span>
</div>
<span class="contact1-form-title">
	
				</span>

				<div class="container-contact1-form-btn">
					<button type="submit" class="contact1-form-btn">
						<span>
							Kirimkan Pengajuan Form
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</button>
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
