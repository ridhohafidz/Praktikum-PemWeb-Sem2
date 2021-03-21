<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Form Nilai Siswa</title>
  </head>
  <body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h6>Sistem Penilaian</h6>
            </div>
            <div class="card-body">
                <h5>Form Nilai Siswa</h5>
                <hr/>

                <form method="POST" action="nilai_siswa.php">
                    <div class="row">
                        <div class="offset-2"></div>
                        <div class="col-md-8">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-9">
                                    <input type="text" name="nama" id="nama" class="form-control" value="" size="30" placeholder="Nama Lengkap">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">NIM</label>
                                <div class="col-sm-9">
                                    <input type="text" name="nim" id="nim" class="form-control" value="" size="30" placeholder="NIM">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Mata Kuliah</label>
                                <div class="col-sm-9">
                                  <select id="duration" name="matkul" class="form-control">
                                        <option value="Dasar - Dasar Pemrograman">Dasar - Dasar Pemrograman</option>
                                        <option value="Basis Data I">Basis Data I</option>
                                        <option value="Pemrograman Web">Pemrograman Web</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nilai UTS</label>
                                <div class="col-sm-9">
                                <input type="text" name="nilai_uts" id="nilai_uts" class="form-control" value="" size="6" placeholder="Nilai UTS">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nilai UAS</label>
                                <div class="col-sm-9">
                                <input type="text" name="nilai_uas" id="nilai_uas" class="form-control" value="" size="6" placeholder="Nilai UAS">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nilai Tugas Praktikum</label>
                                <div class="col-sm-9">
                                <input type="text" name="nilai_tugas" id="nilai_tugas" class="form-control" value="" size="6" placeholder="Nilai Tugas Praktikum">
                                </div>
                            </div>
                            <div class="offset-3 pl-2">
                                <input type="submit" class="btn btn-primary" value="SIMPAN" name="proses">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
      <div class="footer-copyright text-left py-3 ml-4">© 2021 Muhammad Ridho Hafidz
      </div>     
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>