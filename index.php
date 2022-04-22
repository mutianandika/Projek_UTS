<?PHP
include_once 'header.php';
include_once 'aseid.php';
?>
<?php
require_once "class_bmipasien.php";

$gender = $_POST['gender'];
$nama = $_POST['nama'];
$berat = $_POST['berat'];
$tinggi = $_POST['tinggi'];

$person1 = new BmiPasien(70, 179, date("d-m-Y"));
$person1->nama = "Kevin";
$person1->gender = "L";

$person2 = new BmiPasien(70, 165, date("d-m-Y"));
$person2->nama = "Sheyla";
$person2->gender = "P";

$person3 = new BmiPasien(40, 150, date("d-m-Y"));
$person3->nama = "Raihan";
$person3->gender = "L";

$person4 = new BmiPasien($berat, $tinggi, date("d-m-Y"));
$person4->nama = $nama;
$person4->gender = $gender;

$ar_person = [$person1, $person2, $person3, $person4];
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-3">
          <div class="col-sm-6">
            <h1>Data Pasien</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Data Pasien</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
    <div class="container">
    <div class="row my-5">
    </div>
    <form method="POST" action="#">
    <div class="row justify-content-center mb-4">
        <div class="col-lg-8">
        <div class="mb-3">
        <label class="form-label">Nama</label>
        <input name="nama" type="text" class="form-control" />
        </div>
        <div class="form-group row">
        <label class="col-4">Gender</label> 
        <div class="col-8">
        <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="L"> 
        <label for="gender_0" class="custom-control-label">Laki-laki</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="P"> 
        <label for="gender_1" class="custom-control-label">Perempuan</label>
        </div>
        </div>
        </div>
        <div class="mb-3">
        <label class="form-label">Berat Badan</label>
        <input name="berat" type="number" class="form-control" />
        </div>
        <div class="mb-3">
        <label class="form-label">Tinggi Badan</label>
        <input name="tinggi" type="number" class="form-control" />
        </div>
        <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
        </div>
    </div>

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
<div class="row mb-5">
      <div class="col text-center">
        <h2 class="display-6 text-black">Hasil BMI:</h2>
      </div>
    </div>
    <div class="row justify-content-center mt-3 mb-5">
      <div class="col table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr class="table table-active text-black text-center">
              <td>NO</td>
              <td>Tanggal Cek</td>
              <td>Kode Pasien</td>
              <td>Nama Pasien</td>
              <td>Gender</td>
              <td>Berat</td>
              <td>Tinggi</td>
              <td>Nilai BMI</td>
              <td>Status BMI</td>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($ar_person as $obj) :
            ?>
              <tr class="table-light text-center">

                <td><?= $no ?></td>
                <td><?= $obj->tanggal ?></td>
                <td><?= "P00" . $no ?></td>
                <td><?= $obj->nama ?></td>
                <td><?= $obj->gender ?></td>
                <td><?= $obj->berat ?></td>
                <td><?= $obj->tinggi ?></td>
                <td><?= $obj->nilaiBMI() ?></td>
                <td><?= $obj->statusBMI() ?></td>
              </tr>
            <?php
              $no++;
            endforeach;
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  </div>
</section>
</div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>

<?php
include_once 'footer.php';
?>
