<?php
	//memanggil file conn.php yang berisi koneski ke database
  	//dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
 
        include ('conn.php');
        $status = '';
        //melakukan pengecekan apakah ada form yang dipost
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$npm = $_POST['npm'];
			$nama = $_POST['nama'];
			$jenis_kelamin = $_POST['jenis_kelamin'];
			$tgl_lhr = $_POST['tanggal_lahir'];
		  //  $foto = $_POST['foto'];
			$agama = $_POST['agama'];
			$email = $_POST['email'];
			$alamat = $_POST['alamat'];
			//query SQL
			$query = "INSERT INTO mhs (npm, nama, jenis_kelamin, tanggal_lahir, agama, email, alamat)
			 VALUES('$npm', '$nama', '$jenis_kelamin', '$tanggal_lahir', '$agama', '$email', '$alamat')"; 
	  
			//eksekusi query
			$result = mysqli_query(connection(),$query);
			if ($result) {
			  $status = 'ok';
			}
			else{
			  $status = 'err';
			}
			header('Location: index.php?status='.$status);
		}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Form Tugas 6</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/yuk.css">
	</head>

	<body>
		<div class="wrapper" style="background-image: url('images/bg7.jpg');">
			<div class="inner">
				<div class="image-holder">
					<img src="images/img1.jpg" alt=""> <br>
				</div>
				<?php 
              if ($status=='ok') {
                echo '<br><br><div class="alert alert-success" role="alert">Data Mahasiswa berhasil disimpan</div>';
              }
              elseif($status=='err'){
                echo '<br><br><div class="alert alert-danger" role="alert">Data Mahasiswa gagal disimpan</div>';
              }
           ?> 
				<form action="form.php" method="POST">
					<h3>Write Your Profile</h3>
					<div class="form-wrapper">
                  <input type="text" class="form-control" placeholder="NPM" name="npm" required="required">
                </div>
					<div class="form-wrapper">
              			<input type="text" class="form-control" name="nama" placeholder="Student Name" name="nama" required="required">
           			</div>
					<div class="form-wrapper">
						<select name="jenis_kelamin" class="form-control">
							<option value="" disabled selected>Gender</option>
							<option value="M">Male</option>
							<option value="F">Female</option>
							<option value="O">Other</option>
						</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
					</div>
					<div class="form-wrapper">
                      <h4>Date Of Birth<h4> 
					  <input type="text" class="form-control" placeholder="MM-DD-YYYY" name="tanggal_lahir" required="required">

					<!--  <select name="tgl_lhr" class="form">
								<?php 
								for($tanggal = 1; $tanggal <= 31; $tanggal++) {
									if($tanggal < 10) {
										echo '<option value="0'. $tanggal .'">0'. $tanggal .'</option>';
									}
									else {
										echo '<option value="'. $tanggal .'">'. $tanggal .'</option>';
									}
									}
								?>
								</select>
						<select name="bln_lhr" class="form">
								<?php 
									for($bulan = 1; $bulan <= 12; $bulan++) {
										if($bulan < 10) {
											echo '<option value="0'. $bulan .'">0'. $bulan .'</option>';
										}
										else {
											echo '<option value="'. $bulan .'">'. $bulan .'</option>';
										}
									}
								?>
								</select>

						<select name="thn_lhr" class="form">
									<?php 
										for($tahun = date('Y'); $tahun >= 1980; $tahun--) {
											echo '<option value="'. $tahun .'">'. $tahun .'</option>';
										}
									?>
									</select>-->
					</div>

					<div class="form-wrapper">
					<h4>Religion<h4>
                	<select class="custom-select" name="agama" required="required">
                    <option value="" disabled selected>Option</option>
					<option value="Islam">Islam</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Kong Hu Cu">Kong Hu Cu</option>
                  </select>
            </div>
						<div class="form-wrapper">
              				<textarea class="form-control" placeholder="Address"name="alamat" required="required"></textarea>
           				 </div>
                    <div class="form-row">
                            <h4>Photo<h4>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="file_cv" id="file">
                                    <label class="label--file" for="file">Choose file</label>
                                    <span class="input-file__info">No file chosen</span>
                                </div>
                                <!-- <div class="label--desc">Max file size 50 MB</div>-->
								<button type="submit" class="btn btn-primary">Save</button>
         
                            </div>
                        </div>
				</form>

				<div>
                                <ul class="nav flex-column" style="margin-top:100px;">
                        <li class="nav-item">
                            <a class="nav-link active" href="<?php echo "index.php"; ?>">Data Mahasiswa</a>
                        </li>
                     <!--  <li class="nav-item">
                            <a class="nav-link active" href="<?php echo "form.php"; ?>">Tambah Data</a>
                        </li>-->
                        </ul>
                                    <!--<button>Submit
						            <i class="zmdi zmdi-arrow-right"></i>
                                     </button> 
                                      <button>Data
						            <i class="zmdi zmdi-arrow-right"></i>
                                    </button> -->
                                    </div>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>