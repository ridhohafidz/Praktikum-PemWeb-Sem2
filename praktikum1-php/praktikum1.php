<?php  
     $name='';
     $nim='';
     $prodi='';
     $matkul='';
     $uts='';
     $uas='';
     $tugas='';          
     $sks='';     
     $grade='';     
if(isset($_GET['submit'])){
     $name=$_GET['name'];
     $nim=$_GET['nim'];
     $prodi=$_GET['prodi'];
     $matkul=$_GET['matkul'];
     $sks=$_GET['sks'];
     $uts=$_GET['uts'];
     $uas=$_GET['uas'];
     $tugas=$_GET['tugas'];          
     $total=(30*$uts/100)+(35*$uas/100)+(35*$tugas/100);
            if($total >= 85){
              $grade = "A";
           }
          elseif($total >= 80 && $total <= 84){
              $grade = "B";
          }
          elseif($total >= 60 && $total < 80){
              $grade = "C";
          }
          elseif($total >= 40 && $total < 60){
              $grade = "D";
          }
          else{
              $grade = "E";
          }     
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Praktikum 1 - Form Nilai</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  panel-default > .panel-heading {
    color: #333333;
    background-color: #f5f5f5;
    border-color: #ddd;
  }

  .panel-heading {
    padding: 10px 15px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;

  }

  .panel-body {
    padding: 15px;
    border:10px
  }

  .tile {
    width: 100%;
    background: #fff;
    box-shadow: 0px 2px 3px -1px rgb(151 171 187 / 70%);
    float: left;
    transform-style: preserve-3d;
}
  </style>
</head>
<body>
  
<div class="container">
  <form class="form-horizontal">
  <fieldset>
<!-- Form Name -->
<div class="panel panel-default">
			<div class="panel-heading tile">
				<h3 class="panel-title"><i class="fa fa-book-reader"></i>  &nbsp; <strong> Tugas Praktikum 1 - Form Nilai Mahasiswa </strong></h3>
			</div>
</div>

<!-- Text input-->
<div class="panel-body tile">
  <div class="form-group col-sm-6">
    <label class="col-md-4 control-label" for="Masukkan Nama">Name</label>  
    <div class="col-md-8">
    <input id="name" name="name" placeholder="Masukkan Nama" class="form-control input-md" type="text">
    
    </div>
  </div>

  <div class="form-group col-sm-6">
    <label class="col-md-4 control-label" for="Masukkan NIM">NIM</label>
    <div class="col-md-8">
    <input id="email" name="nim" placeholder="Masukkan NIM" class="form-control input-md" required="" type="search">
    
    </div>
  </div>

<!-- Select Basic -->
  <div class="form-group col-sm-6">
    <label class="col-md-4 control-label" for="duration">Prodi</label>
    <div class="col-md-8">
      <select id="duration" name="prodi" class="form-control">
        <option value="Teknik Informatika">Teknik Informatika</option>
        <option value="Sistem Informasi">Sistem Informasi</option>
      </select>
    </div>
  </div>

<!-- Select Basic -->
  <div class="form-group col-sm-6">
    <label class="col-md-4 control-label" for="duration">Mata Kuliah</label>
    <div class="col-md-8">
      <select id="duration" name="matkul" class="form-control">
        <option value="Basis Data">Basis Data</option>
        <option value="Pemrograman Web">Pemrograman Web</option>
        <option value="Dasar-dasar Pemrograman">Bahasa Inggris</option>      
      </select>
    </div>
  </div>

<!-- Select Basic -->
  <div class="form-group col-sm-6">
    <label class="col-md-4 control-label" for="duration">SKS</label>
    <div class="col-md-8">
      <select id="duration" name="sks" class="form-control">
        <option value="4">4</option>
        <option value="3">3</option>
        <option value="2">2</option>      
      </select>
    </div>
  </div>

<!-- Text input-->
  <div class="form-group col-sm-6">
    <label class="col-md-4 control-label" for="date">Nilai UTS</label>  
    <div class="col-md-8">
    <input id="date" name="uts" placeholder="Masukkan Nilai UTS" class="form-control input-md" required="" type="text">    
    </div>
  </div>

  <div class="form-group col-sm-6">
    <label class="col-md-4 control-label" for="date">Nilai UAS</label>  
    <div class="col-md-8">
    <input id="date" name="uas" placeholder="Masukkan Nilai UAS" class="form-control input-md" required="" type="text">    
    </div>
  </div>

  <div class="form-group col-sm-6">
    <label class="col-md-4 control-label" for="date">Nilai Tugas</label>  
    <div class="col-md-8">
    <input id="date" name="tugas" placeholder="Masukkan Nilai Tugas" class="form-control input-md" required="" type="text">    
    </div>
  </div>



<!-- Button -->
<div class="form-group col-sm-12">
  <div class="card">
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Nama: <?php echo $name; ?></li>
      <li class="list-group-item">NIM: <?php echo $nim; ?></li>
      <li class="list-group-item">Prodi: <?php echo $prodi; ?></li>
      <li class="list-group-item">Mata Kuliah: <?php echo $matkul; ?></li>
      <li class="list-group-item">Nilai UTS: <?php echo $uts; ?></li>
      <li class="list-group-item">Nilai UAS: <?php echo $uas; ?></li>
      <li class="list-group-item">Nilai Tugas: <?php echo $tugas; ?></li>            
      <li class="list-group-item">SKS: <?php echo $sks; ?></li>
      <li class="list-group-item">Predikat: <?php echo $grade; ?></li>    
      <li class="list-group-item">Total: <?php echo $total; ?></li>          
    </ul>
  </div>
  <div class="footer">
    <button type="reset" name="reset" class="btn btn-danger">Reset</button>
    <button type="submit" name="submit" class="btn btn-success">Input Data</button>
  </div>
  </div>

</fieldset>
</form>
</div>

</body>
</html>