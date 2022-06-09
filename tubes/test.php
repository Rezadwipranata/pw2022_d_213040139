<?php
session_start();

 ?>


 <!DOCTYPE html>
 <head>
   <meta charset="utf-8">
   <title>Registrasi</title>
   <link rel="stylesheet" href="user.css" type="text/css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 </head>
 <body>
   <header>
     <div class="container-fluid">
       <nav class="navbar navbar-expand-md navbar-dark bg-dark">
           <a href="login.php" class="navbar-brand"> <img src="images/logo.png" alt=""> </a>
           <span class="navbar-text">NeonFlix</span>

          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="user-login.php" class="nav-link"> Sign In</a>
            </li>
          </ul>
       </nav>

       <div class="container">

         <div class="jumbotron">
           <h1>Buat Akun</h1>
           <p>INI GRATIS!!!</p> <br>

           <form class="" action="user.php" method="POST">
             <div class="row">
               <div class="col">
                 <input type="text" class="form-control" placeholder="Nama Depan" name="fname" value="">

               </div>
               <div class="col">
                 <input type="text" class="form-control" placeholder="Nama Belakang" name="lname" value="">
               </div>

             </div> <br>
             <input type="text" class="form-control" placeholder="Nomer Telepon" name="phn" value="">
             <br>
             <input type="email" class="form-control" placeholder="Alamat Email" name="mail" value="">
             <br>
             <input type="password" class="form-control" placeholder="Password" name="pass" value="">

             <div class="form-group col-md-8" >
               <label for="dob"> <br> Tanggal Lahir </label>
               <div class="row">
                 <div class="col">
                   <select class="form-control" name='date'>


                     <option selected>Tanggal..</option>
                     <option value='1'>1</option>
                     <option value='2'>2</option>
                     <option value='3'>3</option>
                     <option value='4'>4</option>
                     <option value='5'>5</option>
                     <option value='6'>6</option>
                     <option value='7'>7</option>
                     <option value='8'>8</option>
                     <option value='9'>9</option>
                     <option value='10'>10</option>
                     <option value='11'>11</option>
                     <option value='12'>12</option>
                     <option value='13'>13</option>
                     <option value='14'>14</option>
                     <option value='15'>15</option>
                     <option value='16'>16</option>
                     <option value='17'>17</option>
                     <option value='18'>18</option>
                     <option value='19'>19</option>
                     <option value='20'>20</option>
                     <option value='21'>21</option>
                     <option value='22'>22</option>
                     <option value='23'>23</option>
                     <option value='24'>24</option>
                     <option value='25'>25</option>
                     <option value='26'>26</option>
                     <option value='27'>27</option>
                     <option value='28'>28</option>
                     <option value='29'>29</option>
                     <option value='30'>30</option>
                     <option value='31'>31</option>

                 </select>
               </div>
                 <div class="col">
                     <select class="form-control" name='month'>
                       <option selected>Bulan...</option>
                       <option value='01'>Januari</option>
                       <option value='02'>Februari</option>
                       <option value='03'>Maret</option>
                       <option value='04'>April</option>
                       <option value='05'>Mei</option>
                       <option value='06'>Juni</option>
                       <option value='07'>Juli</option>
                       <option value='08'>Agustus</option>
                       <option value='09'>September</option>
                       <option value='10'>Oktober</option>
                       <option value='11'>November</option>
                       <option value='12'>Desember</option>
                     </select>
                 </div>
                 <div class="col">
                   <select class="form-control" name='year'>
                     <option selected>Tahun...</option>
                     <option value='1980'>1980</option>
                     <option value='1981'>1981</option>
                     <option value='1982'>1982</option>
                     <option value='1983'>1983</option>
                     <option value='1984'>1984</option>
                     <option value='1985'>1985</option>
                     <option value='1986'>1986</option>
                     <option value='1987'>1987</option>
                     <option value='1988'>1988</option>
                     <option value='1989'>1989</option>
                     <option value='1990'>1990</option>
                     <option value='1991'>1991</option>
                     <option value='1992'>1992</option>
                     <option value='1993'>1993</option>
                     <option value='1994'>1994</option>
                     <option value='1995'>1995</option>
                     <option value='1996'>1996</option>
                     <option value='1997'>1997</option>
                     <option value='1998'>1998</option>
                     <option value='1999'>1999</option>
                     <option value='2000'>2000</option>
                     <option value='2001'>2001</option>
                     <option value='2002'>2002</option>
                     <option value='2003'>2003</option>
                     <option value='2004'>2004</option>
                     <option value='2005'>2005</option>
                     <option value='2006'>2006</option>
                     <option value='2007'>2007</option>
                     <option value='2008'>2008</option>
                     <option value='2009'>2009</option>
                     <option value='2010'>2010</option>
                     <option value='2011'>2011</option>
                     <option value='2012'>2012</option>
                     </select>
                 </div>

                   </div>

                 </div>
                 <div class="signupbutton">
                   <br><br>
                   <button type="submit" class="btn btn-success btn-lg" name="sub" value="submit">Sign Up</button>
                 </div>

             </div>
           </form>




         </div>

       </div>


   </div>

 </header>
 <footer class="page-footer font-small blue">
    <div class="footer-copyright text-center py-3">Copyright © 2022 Neonflix Movie</div>
 </footer>
   </body>
 </html>
