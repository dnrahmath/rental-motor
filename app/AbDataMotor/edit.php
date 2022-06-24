<?php include("../../koneksi.php"); 

$namatbl = "tbl_motor";

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: ./index.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM $namatbl WHERE id_motor=$id";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../styles/style.css">
    <link rel="stylesheet" type="text/css" href="../../styles/formStyle.css">
    <title>EDIT</title>
</head>
<body>
    <section class="row">
        <div class="col-md-2 text-center"></div>

        <div class="col-md-8 text-center">
			<br>
            <section class="container2">
                <div class="classContent">
                    <div class="containerJudul">
                         <h3>RENTAL MOTOR</h3>
                     </div>
                </div>

                <form class="form-horizontal" action="./edit2-proses.php" method="POST">
                      <div class="classForm">
                          <div class="containerJudul">
                               <h3>EDIT</h3>
                          </div>
                      </div> 
                    <br>

                    <input type="hidden" name="id" value="<?php echo $data['id_motor'] ?>" />

                    <div class="row p-2">
                      <div class="col-md-5 text-center"><p class="classA">Merek Motor<p></div>
                      <div class="col-md-2 text-center">:</div>
                      <div class="col-md-5 text-center" id="elemNameParent">
                        <input type="text" placeholder="Masukkan Merek Motor" name="merekmotor" value="<?php echo $data['merek_motor'] ?>">
                      </div>
                    </div>
                    <div class="row p-2">
                      <div class="col-md-5 text-center"><p class="classA">Plat No Motor<p></div>
                      <div class="col-md-2 text-center">:</div>
                      <div class="col-md-5 text-center" id="elemAgeParent">
                        <input type="text" placeholder="Masukkan Plat No Motor" name="platnomotor"value=" <?php echo $data['plat_no_motor'] ?>">
                      </div>
                    </div>
                    <div class="row p-2">
                      <div class="col-md-5 text-center"><p class="classA">Tahun Motor<p></div>
                      <div class="col-md-2 text-center">:</div>
                      <div class="col-md-5 text-center" id="elemAgeParent">
                        <input type="text" placeholder="Masukkan Tahun Motor" name="tahunmotor" value="<?php echo $data['tahun_motor'] ?>">
                      </div>
                    </div>
                    <div class="row p-2">
                      <div class="col-md-4 text-center"></div>
                      <div class="col-md-4 text-center">
                        <div class="elemCenter">
                          <button type="submit" value="LOGIN" id="btnId" class="btnSize" name="PERBARUI">PERBARUI</button>
                        </div>
                      </div>
                      <div class="col-md-4 text-center"></div>
                    </div>
                </form>
            </section>

			<br><br>

			<section class="container2">
				<div class="row p-2">
				  <div class="col-md-2 text-center border"></div>
				  <div class="col-md-8 text-center border">
					<div class="elemCenter">
						<button onclick="location.href='../home.php'" class="btnSize">KEMBALI</button>
					</div>
				  </div>
				  <div class="col-md-2 text-center border"></div>
				</div>
			</section>

			<br><br>
        </div>

        <div class="col-md-2 text-center"></div>
    </section>
</body>
</html>
