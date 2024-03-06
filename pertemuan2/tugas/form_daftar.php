<!DOCTYPE html>
<html lang="en">
<head>
	<title>Form Pendaftaran</title>
	<!-- Load Bootstrap CSS from CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style>
		
		body {
			background-color :#87CEEB ;
        }
		form{
			background-color: #f2f2f2;
		}
        h1 {
            font-family: Georgia, serif; 
		}
		label{
			font-family: Arial, sans-serif; 
		}
		input[type="submit"] {
			background: linear-gradient(to bottom, #87CEEB, #BA55D3);
            color: white; /* Warna teks putih */
            padding: 10px 20px; /* Padding tombol */
            border: none; /* Tanpa border */
            border-radius: 5px; /* Border radius */
            cursor: pointer; /* Pointer cursor ketika diarahkan */
        }

	</style>

	<div>
		<form method="POST" action="hasil_daftar.php" class="w-75 mt-5 mx-auto p-4 border shadow-sm">
		<h1>Form Pendaftaran</h1>
			<div class="form-group">
				<label for="nama_lengkap">Nama Lengkap</label>
				<input name="nmleng" type="text" class="form-control" id="nama_lengkap">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input name="email" type="email" class="form-control" id="email">
			</div>
			<div class="form-group">
				<label for="alamat">Alamat</label>
				<textarea name="almt" class="form-control" id="alamat"></textarea>
			</div>
			<div class="form-group">
				<label for="telepon">Telepon</label>
				<input name="notlp" type="tel" class="form-control" id="telepon">
			</div>
			<input type="submit" name="submit" value="submit" class="btn btn-primary">
		</form>
	</div>
</body>
</html>