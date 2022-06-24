<?php include("../../koneksi.php"); 

$namatbl = "tbl_kotaksaran";

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: ./index.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM $namatbl WHERE id=$id";
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

                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />


                    <div class="row p-2">
                      <div class="col-md-5 text-center"><p class="classA">nama<p></div>
                      <div class="col-md-2 text-center">:</div>
                      <div class="col-md-5 text-center" id="elemNameParent">
                        <input type="text" name="nama" name="nama" value="<?php echo $data['nama'] ?>">
                      </div>
                    </div>
                    <div class="row p-2">
                      <div class="col-md-5 text-center"><p class="classA">saran<p></div>
                      <div class="col-md-2 text-center">:</div>
                      <div class="col-md-5 text-center" id="elemAgeParent">
                        <input style="height: 100px" type="text" name="saran" name="saran" value="<?php echo $data['saran'] ?>">
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
