<?php
session_start();

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
 <head>
   <meta charset="utf-8">
   <title>NeonFlix</title>
   <link rel="stylesheet" href="homepage.css" type="text/css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 </head>
   <body>
     <header>

         <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="homepage.php" class="navbar-brand"> <img src="images/logo.png" alt=""></a>
            <span class="navbar-text">NeonFlix</span>
            <ul class="navbar-nav">
              <li class="nav-item"> 
                <a href="homepage.php" class="nav-link">Home</a> 
              </li>
              <li class="nav-item"> 
                <a href="logout.php" class="nav-link">Logout</a>
              </li>
            </ul>


         </nav>

      </header>

      <div class="container">
        <?php
              include 'dbh.php';
              $id = $_SESSION['id'];
              $sql = "SELECT * FROM user1 WHERE id = $id ";
              $newrecords = mysqli_query($conn,$sql);
              $result = mysqli_fetch_assoc($newrecords);

      echo"  <form  action='update.php' method='POST'>

          <br><br><input type='text' class='form-control' placeholder='Masukkan Nama Lengkap' name='fname' value='".ucwords($result['name'])."'>
          <br>
          <input type='text' class='form-control' placeholder='Masukkan Nomer HP' name='phn' value='".$result['phone']."'>
          <br>
          <label><b>Date of Birth : </b></label>
          <input type='text' class='from-control' placeholder='Masukkan Tanggal Lahir' name='dob' value='".$result['DOB']."'><br>

              <div class='signupbutton'>
                <br><br>
                <button type='submit' class='btn btn-success' name='sub' value='submit'>Detail Update</button>

              </div>
              </form>


              <br><br>
              <label><b>Email Id : </b>".$result['email']."</label>
              <br><br>
              <form class='' action='updatep.php' method='post'>
                <input type='password' class='form-control' placeholder='Masukkan Password lama' name='oldp'><br>
                <input type='password' class='form-control' placeholder='Masukkan Password Baru' name='newp'><br>
                <button type='submit' class='btn btn-success ' name='subpass' value='submit'>Ganti Password</button><br>


              </form>


              ";
         ?>




      </div>

    </body>

  </html>
