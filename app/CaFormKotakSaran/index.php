<?php include("../../koneksi.php"); 

parse_str($_SERVER['QUERY_STRING'],$arrQuery);
//$arrQuery['idusr'];

$namatbl = "tbl_kotaksaran";

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
    <title>HOME</title>
</head>
<body>
    <section class="row">
        <div class="col-md-2 text-center"></div>

        <div class="col-md-8 text-center">
            <br>
            <h4>Motor telah dikembalikan.</h4>
			<br>
            <section class="container2">
                <div class="classContent">
                    <div class="containerJudul">
                         <h3>RENTAL MOTOR</h3>
                     </div>
                </div>

                <form class="form-horizontal" action="insert.php" method="POST">
                      <div class="classForm">
                          <div class="containerJudul">
                               <h3>FORM DATA KOTAK SARAN</h3>
                          </div>
                      </div> 
                    <br>
                    <div class="row p-2">
                      <div class="col-md-5 text-center"><p class="classA">nama<p></div>
                      <div class="col-md-2 text-center">:</div>
                      <div class="col-md-5 text-center" id="elemNameParent">
                        <input type="text" name="nama" name="nama">
                      </div>
                    </div>
                    <div class="row p-2">
                      <div class="col-md-5 text-center"><p class="classA">saran<p></div>
                      <div class="col-md-2 text-center">:</div>
                      <div class="col-md-5 text-center" id="elemAgeParent">
                        <input style="height: 100px" type="text" name="saran" name="saran">
                      </div>
                    </div>
                    <div class="row p-2">
                      <div class="col-md-4 text-center"></div>
                      <div class="col-md-4 text-center">
                        <div class="elemCenter">
                          <button type="submit" value="LOGIN" id="btnId" class="btnSize" name="TAMBAH">INSERT</button>
                        </div>
                      </div>
                      <div class="col-md-4 text-center"></div>
                    </div>
                </form>
            </section>

			<br><br>

			<section class="container2">
				<div class="row p-2">
				  <div class="col-md-2 text-center"></div>
				  <div class="col-md-8 text-center">
					<div class="elemCenter">
						<button onclick="location.href='../home.php'" class="btnSize">KEMBALI</button>
					</div>
				  </div>
				  <div class="col-md-2 text-center"></div>
				</div>
			</section>

			<br><br>
        </div>

        <div class="col-md-2 text-center"></div>
    </section>
</body>
</html>
