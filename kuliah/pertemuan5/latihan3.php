<?php
// Representasi Data Mahasiswa

$mahasiswa = [
    ["Reza Dwi Pranata Iskandar", "213040139", "rezadwi.rdp72@gmail.com", "Teknik Informatika"],
    ["Wildan Nasrulloh", "213040140", "wil.rel@gmail.com", "Teknik Informatika"],
    ["Hansen Bipaldo", "hansen31@gmail.com", "213040132", "Teknik Informatika"]
];

?>

<?php foreach($mahasiswa as $mhs){ ?>
<ul>
    <li>Nama: <?php echo $mhs[0]; ?></li>
    <li>NPM: <?php echo $mhs[1]; ?></li>
    <li>Email: <?php echo $mhs[2]; ?></li>
    <li>Jurusan: <?php echo $mhs[3]; ?></li>
</ul>
<?php } ?>