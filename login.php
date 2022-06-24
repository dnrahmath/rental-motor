<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./styles/style.css">
    <link rel="stylesheet" type="text/css" href="./styles/formStyle.css">
    <title>LOGIN</title>
</head>
<body>
    <section class="row">
        <div class="col-md-2 text-center"></div>

        <div class="col-md-8 text-center">

            <section class="container2">
                <div class="classContent">
                    <div class="containerJudul">
                         <h3>RENTAL MOTOR</h3>
                     </div>
                </div> 
                <form class="form-horizontal" action="./app/cek_login.php" method="POST">
                    <div class="classForm">
                        <div class="containerJudul">
                             <h3>LOGIN</h3>
                        </div>
                    </div> 

	                  <!-- cek pesan notifikasi -->
	                  <?php 
	                  if(isset($_GET['pesan'])){
		                  if($_GET['pesan'] == "gagal"){
			                  echo "Login gagal! username dan password salah!";
		                  }else if($_GET['pesan'] == "logout"){
			                  echo "Anda telah berhasil logout";
		                  }else if($_GET['pesan'] == "belum_login"){
			                  echo "Anda harus login untuk mengakses halaman admin";
		                  }
	                  }
	                  ?>
                    <br>

                    <div class="row p-2">
                      <div class="col-md-5 text-center"><p class="classA">Username<p></div>
                      <div class="col-md-2 text-center">:</div>
                      <div class="col-md-5 text-center" id="elemNameParent">
                        <input type="text" name="username" placeholder="Masukkan username">
                      </div>
                    </div>
                    <div class="row p-2">
                      <div class="col-md-5 text-center"><p class="classA">Password<p></div>
                      <div class="col-md-2 text-center">:</div>
                      <div class="col-md-5 text-center" id="elemAgeParent">
                        <input type="password" name="password" placeholder="Masukkan password">
                      </div>
                    </div>
                    <div class="row p-2">
                      <div class="col-md-4 text-center"></div>
                      <div class="col-md-4 text-center">
                        <div class="elemCenter">
                          <button type="submit" value="LOGIN" id="btnId" class="btnSize">LOGIN</button>
                        </div>
                      </div>
                      <div class="col-md-4 text-center"></div>
                    </div>
                </form>
            </section>
            <br><br>
            <section>
              <div style="float: left;width: 50%">
                <p>username : admin</p><br>
                <p>password : admin</p>
              </div>
              <div style="float: right;width: 50%">
                <p>username : user</p><br>
                <p>password : user</p>
              </div>
            </section>
            <br><br>
            <a href="https://github.com/dnrahmath">dnrahmath</a>
        </div>

        <div class="col-md-2 text-center"></div>
    </section>
</body>
</html>