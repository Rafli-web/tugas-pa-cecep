<?php 
include("templete/header.php");
$students = [
    ["nama" => "Rafli",
    "kelas" => "XI",
    "jurusan" => "PPLG",
    "umur" => "17",
    "keterangan" => "Hadir"],
    [
    "nama" => "Azhar",
    "kelas" => "XI",
    "jurusan" => "PPLG",
    "umur" => "17",
    "keterangan" => "Sakit"
    ]
    ];
 $number = 1
 ?>

    <div class="main-content">
        
       
           
       
            <div class="col-xxl-12">
                <div class="panel">
                    <div class="panel-header py-4">
                           <h1>DAFTAR SISWA</h1>
                        <button class="btn btn-success"><i class="fa-solid fa-plus">Tambah</i></button>
                    </div>
                    <div class="panel-body">
                        <table class="table table-dashed recent-order-table" id="myTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>Jurusan</th>
                                    <th>Umur</th>
                                    <th>Keterangan</th>
                                    <th>Action</th>
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($students as $student) : ?> 

                                <tr>
                                    <td><?= $number++ ?></td>
                                    <td><?= $student['nama'] ?></td>
                                    <td><?= $student['kelas'] ?></td>
                                    <td><?= $student['jurusan'] ?></td>
                                    <td><?= $student['umur'] ?></td>
                                    <td ><?= 
                                            $student['keterangan'] == 'Hadir' ?
                                            '<span class="bg-success p-2 rounded text-light">Hadir</span>':
                                            '<span class="bg-danger p-2 rounded text-light">Sakit</span>'
                                             
                                    ?></td>
                                    <td>
                                        <div class="btn-box">
                                            <button><i class="fa-light fa-eye"></i></button>
                                            <button><i class="fa-light fa-pen"></i></button>
                                            <button><i class="fa-light fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                
                                     
                                <?php endforeach?>
                            </tbody>
                        </table>
                        <div class="table-bottom-control"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer start -->
        <div class="footer">
            <p>Copyright©
                <script>document.write(new Date().getFullYear())</script> All Rights Reserved By <span
                    class="text-primary">Digiboard</span>
            </p>
        </div>
        <!-- footer end -->
    </div>
    <!-- main content end -->

  

   
   <!-- <?php for ($i = 0; $i < count($students); $i++) {?>
    <ul style="margin-bottom: 20px;">
        <li>Nama: <?php echo $student ['nama']?></li>
        <li>Kelas: <?php echo $student ['kelas']?></li>
        <li>Jurusan: <?php echo $student ['jurusan']?></li>
        <li>Umur: <?php echo $student ['umur']?></li>
        <li>Keterangan: <?php echo $student ['keterangan']?></li>
    </ul>

   <?php }?> -->

  <?php include('templete/footer.php')?>