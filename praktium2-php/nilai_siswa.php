<!DOCTYPE html>
<html lang="en">


<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nilai Siswa</title>
</head>
<body>
  <div class="container">
    <div class="card">
      <div class="card-header">
      <h6>Sistem Penilaian</h6>
      </div>
      <div class="card-body">
        <h5>Nilai Siswa</h5>
      <hr/>      
    <table class="table table-bordered table-hover mt-2">
       <thead bgcolor="#d3d3d3">
       <tr>
         <th scope="col">No</th>
         <th scope="col">NAMA</th>
         <th scope="col">NIM</th>
         <th scope="col">MATA KULIAH</th>
         <th scope="col">UTS</th>
         <th scope="col">UAS</th>
         <th scope="col">Tugas</th>
         <th scope="col">Nilai Akhir</th>
         <th scope="col">Keterangan</th> 
         <th scope="col">Grade</th>                           
        </tr>
          </thead>
            <tbody>
                        <?php
                        $proses= $_POST['proses'];
                        $nama = $_POST['nama'];
                        $nim = $_POST['nim'];
                        $matkul = $_POST['matkul'];
                        $nilai_uts = $_POST['nilai_uts'];
                        $nilai_uas = $_POST['nilai_uas'];
                        $nilai_tugas = $_POST['nilai_tugas'];

                        $nilai_uts =  (int)$nilai_uts * 30 / 100;
                        $nilai_uas =  (int)$nilai_uas * 35 / 100;
                        $nilai_tugas =  (int)$nilai_tugas * 35 / 100;

                        $total_nilai = $nilai_uts + $nilai_uas + $nilai_tugas;
                            if ($total_nilai > 55) {
                              $keterangan = 'Lulus';
                            } else {
                              $keterangan = 'Tidak Lulus';
                            }                        

                            if($total_nilai >= 85){
                            $grade = "A";
                            }
                            elseif($total_nilai >= 80 && $total_nilai <= 84){
                            $grade = "B";
                            }
                            elseif($total_nilai >= 60 && $total_nilai < 80){
                                $grade = "C";
                            }
                            elseif($total_nilai >= 40 && $total_nilai < 60){
                                $grade = "D";
                            }
                            else{
                                $grade = "E";
                            }                            
                            
                        $nomor = 1;
                        if(!empty($proses)) {
                            // echo '<td>'.'Proses : '.$proses.'</td>';                          
                            echo '<tr><td>'.$nomor.'</td>';
                            echo '<td>'.' '.$nama.'</td>';
                            echo '<td>'.' '.$nim.'</td>';                            
                            echo '<td>'.' '.$matkul.'</td>';
                            echo '<td>'.' '.$nilai_uts.'</td>';
                            echo '<td>'.' '.$nilai_uas.'</td>';
                            echo '<td>'.' '.$nilai_tugas.'</td>';
                            echo '<td>'.' '.$total_nilai.'</td>';
                            echo '<td>'.' '.$keterangan.'</td>';                                                        
                            echo '<td>'.' '.$grade.'</td>';
                          }
                        ?>

                        
            </tbody>
      </table>
      <div class="footer-copyright text-left py-3 ml-4">© 2021 Muhammad Ridho Hafidz
      </div>      
  </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>