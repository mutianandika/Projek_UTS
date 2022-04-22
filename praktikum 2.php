<?php
include_once 'header.php';
include_once 'aseid.php';
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
<div class="content-wrapper">
<section class="content-header">
        <div class="container-fluid">
        <div class="row mb-3">
            <div class="col-sm-6">
            <h1>Form Belanja</h1>
            </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Layout</a></li>
                <li class="breadcrumb-item active">Praktikum 2</li>
            </ol>
        </div>
        </div>
        </div>
</section>
    <section class="content">
        <div class="container-fluid">
        <div class="row">
        <div class="col-12">
        <div class="m-5 p-5 border border-primary rounded">
        <form method="POST" action="praktikum 2.php">
<div class="form-group row">
    <label for="customer" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
    <div class="input-group">
        <div class="input-group-prepend">
        <div class="input-group-text">
        <i class="fa fa-address-card"></i>
        </div>
        </div> 
        <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control" required="required">
    </div>
    </div>
    </div>
    <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
    <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv" required="required"> 
        <label for="produk_0" class="custom-control-label">TV</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas" required="required"> 
        <label for="produk_1" class="custom-control-label">KULKAS</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin_cuci" required="required"> 
        <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
    </div>
    </div>
    </div>
    <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
        <div class="input-group">
        <div class="input-group-prepend">
            <div class="input-group-text">
            <i class="fa fa-adjust"></i>
            </div>
        </div> 
        <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control" required="required">
        </div>
    </div>
    </div> 
    <div class="form-group row">
    <div class="offset-4 col-8">
    <button name="simpan" type="simpan" class="btn btn-primary w-100">Simpan</button>
    </div>
    </div>
</form>
<?php
$_nama = $_POST['customer'];
$_produk = $_POST['produk'];
$_jumlah = $_POST['jumlah'];

if ($_produk == 'tv') {
    $belanja_total = $_jumlah * 4200000;
} elseif($_produk == 'kulkas') {
    $belanja_total = $_jumlah * 3100000;
} elseif($_produk == 'mesin_cuci') {
    $belanja_total = $_jumlah * 3800000;
}else {
    "Invalid";
}

echo 'Nama Customer : '. $_nama;
echo '<br>Produk Pilihan : '. $_produk;
echo '<br>Jumlah Beli : '. $_jumlah;
echo '<br>Total Belanja : '. number_format($belanja_total);
?>
</div>
<div class="m-5 p-5 border border-primary rounded">
    <form method="POST" autocomplete="off" action="praktikum 2.php">
        <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text">
                <i class="fa fa-address-card"></i>
                </div>
                </div> 
            <input id="nama" name="nama" placeholder="Masukan Nama Lengkap Anda" type="text" class="form-control" required="required">
            </div>
        </div>
        </div>
            <div class="form-group row">
        <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
        <div class="col-8">
            <select id="matkul" name="matkul" class="custom-select" required="required">
            <option value="pilih">Pilih Matkul</option>
            <option value="DDP">Dasar dasar pemograman</option>
            <option value="pemweb">Pemograman Web</option>
            <option value="Jarkom">Jaringan Komputer</option>
            </select>
        </div>
            </div>
        <div class="form-group row">
        <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
        <div class="col-8">
            <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                <i class="fa fa-adjust"></i>
            </div>
            </div> 
            <input id="nilai_uts" name="nilai_uts" placeholder="Masukan Nilai UTS Anda" type="number" class="form-control" required="required">
            </div>
        </div>
        </div>
        <div class="form-group row">
        <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
        <div class="col-8">
            <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                <i class="fa fa-adjust"></i>
                </div>
            </div> 
            <input id="nilai_uas" name="nilai_uas" placeholder="Masukan Nilai UAS Anda" type="number" class="form-control" required="required">
            </div>
        </div>
        </div>
        <div class="form-group row">
        <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
        <div class="col-8">
            <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                <i class="fa fa-adjust"></i>
                </div>
            </div> 
            <input id="nilai_tugas" name="nilai_tugas" placeholder="Masukan Nilai Tugas/Praktkum Anda" type="number" class="form-control" required="required">
            </div>
        </div>
        </div> 
        <div class="form-group row">
        <div class="offset-4 col-8">
            <button name="simpan" type="simpan" class="btn btn-primary w-100">Simpan</button>
        </div>
        </div>
    </form>
        <?php
        $nama=$_POST["nama"];
        $matkul=$_POST["matkul"];
        $nilai_tugas=$_POST["nilai_tugas"];
        $nilai_uts=$_POST["nilai_uts"];
        $nilai_uas=$_POST["nilai_uas"];
        $_nilai=($nilai_tugas * 0.3) + ($nilai_uas * 0.4) + ($nilai_uts * 0.3);
        $_hasil=($nilai_tugas * 0.3) + ($nilai_uas * 0.4) + ($nilai_uts * 0.3);
        echo "Nama Lengkap : $nama <br>" ;
        echo "Nilai UTS : $nilai_uts <br>" ;
        echo "Nilai UAS : $nilai_uas <br>" ;
        echo "Nilai Tugas/Praktikum : $nilai_tugas <br>" ;
        echo "Nilai : $_nilai <br>" ;

        if ($_nilai >= 85 && $_nilai <= 100) {
            echo "Grade : A <br>" ;
            echo "Kelulusan : LULUS <br>" ;
        } elseif ($_nilai >= 74 && $_nilai <= 84) {
            echo "Grade : B <br> <br>" ;
            echo "Kelulusan : LULUS <br>" ;
        } elseif ($_nilai >= 56 && $_nilai <= 69) {
            echo "Grade : C <br>" ;
            echo "Kelulusan : LULUS <br>" ;
        } elseif ($_nilai >= 36 && $_nilai <= 55) {
            echo "Grade : D <br>" ;
            echo "Kelulusan : TIDAK LULUS <br>" ;
        } elseif ($_nilai >= 0 && $_nilai <= 35) {
            echo "grade : E <br>" ;
            echo "Kelulusan : TIDAK LULUS <br>" ;
        } else {
            echo "Grade : I" ;
        }

        switch($_hasil) {
        case $_hasil >= 85 && $_hasil <= 100 ;
            echo "Sangat Memuaskan" ;
            break ;
        case $_hasil >= 74 && $_hasil <= 84 ;
            echo "Memuaskan" ;
            break ;
        case $_hasil >= 56 && $_hasil <= 69 ;
            echo "Cukup" ;
            break ;
        case $_hasil >= 36 && $_hasil <= 55 ;
            echo "Kurang" ;
            break ;
        case $_hasil >= 0 && $_hasil <= 35 ;
            echo "Sangat Kurang" ;
            break ;
        default :
            echo "Tidak Ada" ;
            break ;
        }
        ?>
    </div>
</section>
</div>
</body>
<?php
include_once 'footer.php';
?>