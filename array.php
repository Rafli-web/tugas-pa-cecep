<?php

$student =  [
    [
        "nama" => "rafli"
        ,"kelas" => "XI",
        "jurusan" => "PPLG",
        "umur" => 17,
        "kete rangan" => "hadir"

    ],

    [
        "nama" => "kak gem",
        "kelas" => "XI",
        "jurusan" => "PPLG",
        "umur" => 17,
        "keterangan" => "sakit"

    ]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>DAFTAR SISWA</h1>
    <?php foreach ($student as $studen) {?>
        <ul style="margin-bottom: 20px;">
        <li> nama: <?php echo $studen ['nama']?></li>
        <li> kelas: <?php echo $studen['kelas']?></li>
        <li> jurusan: <?php echo $studen['jurusan']?></li>
        <li>umur: <?php echo $studen['umur']?></li>
        <li>keterangan: <?php echo $studen['keterangan']?></li>
    </ul>
        <?php }  ?>   

        <!-- <?php for($a =0; $a < count ($student); $a++) {?>
            <ul style="margin-bottom: 20px;">
        <li> nama: <?php echo $student ['nama']?></li>
        <li> kelas: <?php echo $student['kelas']?></li>
        <li> jurusan: <?php echo $student['jurusan']?></li>
        <li>umur: <?php echo $student['umur']?></li>
        <li>keterangan: <?php echo $student['keterangan']?></li>
    </ul>
        <?php }  ?>    -->

        
      
        
        
</body>
</html>