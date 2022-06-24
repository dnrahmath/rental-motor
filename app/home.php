<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../styles/style.css">
    <link rel="stylesheet" type="text/css" href="../styles/formStyle.css">
    <title>HOME</title>
</head>
<body>
    <section class="row">
        <div class="col-md-2 text-center"></div>

        <div class="col-md-8 text-center">
			<br>
			<?php 
			session_start();
			if($_SESSION['status']!="login"){
				header("location:../login.php?pesan=belum_login");
			}
			$idusr = $_SESSION['idusr'];
			?>

			<h4>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>
			<br>

            <section class="container2">
                <div class="classContent">
                    <div class="containerJudul">
                         <h3>RENTAL MOTOR</h3>
                     </div>
                </div>

				<br>

				<section class="container2">
					<div class="classForm">
						<div class="containerJudul">
							 <h3>Menu</h3>
						</div>
					</div> 

					<br>

					<div class="row p-2">
					  <div class="col-md-2 text-center"></div>
					  <div class="col-md-8 text-center">
						<div class="elemCenter">
							<button  onclick="location.href='./BaFormPinjam/index.php?idusr=<?php echo $idusr; ?>'"  class="btnSize">Menu Pinjam</button>
						</div>
					  </div>
					  <div class="col-md-2 text-center"></div>
					</div>

					<div class="row p-2">
					  <div class="col-md-2 text-center"></div>
					  <div class="col-md-8 text-center">
						<div class="elemCenter">
							<button onclick="location.href='./BbFormKembali/index.php?idusr=<?php echo $idusr; ?>'" class="btnSize">Menu Kembalikan</button>
						</div>
					  </div>
					  <div class="col-md-2 text-center"></div>
					</div>

				</section>
			</section>

			<br><br>

			<?php
			$user = $_SESSION['username'];
			if($user == "admin"){
				function menu_admin(){
					echo'<section class="container2">
            			    <div class="classForm">
            			        <div class="containerJudul">
            			             <h3>Menu Admin</h3>
            			        </div>
            			    </div> 

							<br>

            			    <div class="row p-2">
            			      <div class="col-md-2 text-center"></div>
            			      <div class="col-md-8 text-center">
            			        <div class="elemCenter">
									<button  onclick="location.href=`./AaDataUser/index.php?idusr=<?php echo $idusr; ?>`"  class="btnSize">Data User</button>
            			        </div>
            			      </div>
            			      <div class="col-md-2 text-center"></div>
            			    </div>

							<div class="row p-2">
							  <div class="col-md-2 text-center"></div>
							  <div class="col-md-8 text-center">
								<div class="elemCenter">
									<button onclick="location.href=`./AbDataMotor/index.php`" class="btnSize">Data Motor</button>
								</div>
							  </div>
							  <div class="col-md-2 text-center"></div>
							</div>

							<div class="row p-2">
							  <div class="col-md-2 text-center"></div>
							  <div class="col-md-8 text-center">
								<div class="elemCenter">
									<button onclick="location.href=`./AcDataPinjam/index.php?idusr=<?php echo $idusr; ?>`" class="btnSize">Data Pinjam</button>
								</div>
							  </div>
							  <div class="col-md-2 text-center"></div>
							</div>

							<div class="row p-2">
							  <div class="col-md-2 text-center"></div>
							  <div class="col-md-8 text-center">
								<div class="elemCenter">
									<button onclick="location.href=`./AdDataKotakSaran/index.php`" class="btnSize">Data Kotak Saran</button>
								</div>
							  </div>
							  <div class="col-md-2 text-center"></div>
							</div>

            			</section>';
				}
				menu_admin();
			}else {}
			?>
			</section>

			<br><br>

			<section class="container2">
				<div class="row p-2">
				  <div class="col-md-2 text-center"></div>
				  <div class="col-md-8 text-center">
					<div class="elemCenter">
						<button onclick="location.href='./logout.php'" class="btnSize">LOGOUT</button>
					</div>
				  </div>
				  <div class="col-md-2 text-center"></div>
				</div>
			</section>
				  
			<div style="text-align: center;">
				<a href="https://github.com/dnrahmath">dnrahmath</a>
			</div>

			<br><br>
        </div>

        <div class="col-md-2 text-center"></div>
    </section>
</body>
</html>
