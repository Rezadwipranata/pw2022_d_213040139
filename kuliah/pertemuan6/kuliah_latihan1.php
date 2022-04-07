<?php
// Array Associative
// Array yang key nya ber-asosiasi / berpasangan dengan string

$mahasiswa = [
    [
      "nama" => "Reza Dwi Pranata Iskandar",
      "npm" => "213040139", 
      "email" => "rezadwi.rdp72@gmail.com", 
      "jurusan" => "Teknik Informatika"
    ],

    [
      "nama" =>"Wildan Nasrulloh", 
      "npm" => "213040140", 
      "email" => "wil.rel@gmail.com", 
      "jurusan" => "Teknik Informatika"
    ],

    [
      "nama" =>"Hansen Bipaldo", 
      "email" => "hansen31@gmail.com", 
      "npm" => "213040132", "jurusan" => 
      "Teknik Informatika"
    ]

];

// var_dump($mahasiswa);
?>

<?php foreach($mahasiswa as $mhs){ ?>
<ul>
    <li>Nama: <?php echo $mhs["nama"]; ?></li>
    <li>NPM: <?php echo $mhs["npm"]; ?></li>
    <li>Email: <?php echo $mhs["email"]; ?></li>
    <li>Jurusan: <?php echo $mhs["jurusan"]; ?></li>
</ul>
<?php } ?>