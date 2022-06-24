<?php include("../../koneksi.php"); 

parse_str($_SERVER['QUERY_STRING'],$arrQuery);

//$param1=$arrQuery['id'];
$paramurl2=$arrQuery['idusr'];


$namatbl = "tbl_pinjam";

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
            <section class="container2">
                <div class="classContent">
                    <div class="containerJudul">
                         <h3>RENTAL MOTOR</h3>
                     </div>
                </div>
            </section>
		    <br>
		    <section class="container2">
		    	  	<div class="classForm">
		    	  		<div class="containerJudul">
		    	  			 <h3>FORM KEMBALIKAN</h3>
		    	  		</div>
		    	  	</div> 
                <div class="classFormTable">
		    	    <table class="table">
                        <thead>
                          <tr><th>Id Pinjam</th><th>Id Motor</th><th>Merek Motor</th><th>Plat No Motor</th><th>Status Motor</th><th>Tanggal Peminjaman</th><th>Tanggal Pengembalian</th><th>Id user Peminjam</th><th>pilih Kembalikan</th></tr>
                        </thead>
                        <tbody>
                            <?php
                              $sql = "SELECT * FROM $namatbl where id_user_peminjam=$paramurl2";
                              $query = mysqli_query($conn, $sql);
                              while($data = mysqli_fetch_array($query)){
                                  echo "<tr class='info'>";
                            
                                  echo "<td>".$data['id_pinjam']."</td>";
                                  echo "<td>".$data['id_motor']."</td>";
                                  echo "<td>".$data['merek_motor']."</td>";
                                  echo "<td>".$data['plat_no_motor']."</td>";
                                  echo "<td>".$data['status_motor']."</td>";
                                  echo "<td>".$data['tgl_peminjaman']."</td>";
                                  echo "<td>".$data['tgl_pengembalian']."</td>";
                                  echo "<td>".$data['id_user_peminjam']."</td>";
                            
                                  echo "<td>";
                                  $param1 = $data['id_motor'];
                                  $param2 = $paramurl2;
                                  $param3 = $data['id_pinjam'];
                                  echo "<a href='kembalikan.php?id=".$param1."&idusr=".$param2."&idpinjam=".$param3."'>Kembalikan</a>";
                                  echo "</td>";
                            
                                  echo "</tr>";
                              }
                            ?>
                        </tbody>
                    </table>
                </div>
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
