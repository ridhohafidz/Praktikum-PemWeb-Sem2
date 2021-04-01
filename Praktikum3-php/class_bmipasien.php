<?php
class bimPasien
{
  public $nama;
  public $umur;
  public $jenisKelamin;
  public $beratBadan;
  public $tinggiBadan;
  public $resultBMI;
  public $statusBMI;

  public function __construct($nama, $umur, $beratBadan, $tinggiBadan, $jenisKelamin)
  {
    $this->nama = $nama;
    $this->umur = $umur;
    $this->beratBadan = $beratBadan;
    $this->tinggiBadan = $tinggiBadan;
    $this->jenisKelamin = $jenisKelamin;    
  }

  public function hasilBMI() {
    $this->tinggiBadan = $this->tinggiBadan / 100;
    $this->resultBMI = $this->beratBadan / ($this->tinggiBadan * $this->tinggiBadan);
    return $this->resultBMI;
    }

  public function statusBMI() {
    if($this->resultBMI < 18.5) {
    return $this->statusBMI = 'Kekurangan berat badan';
    } else if ($this->resultBMI >= 18.5 && $this->resultBMI <= 24.9) {
    return $this->statusBMI = 'Berat Normal';
    } else if ($this->resultBMI >= 25.0 && $this->resultBMI <= 29.9) {
    return $this->statusBMI = 'Kelebihan berat badan';
    } else {
    return $this->statusBMI = 'Kegemukan (Obesitas)';
    }
    }

}

?>
