<?PHP
include_once 'header.php';
include_once 'aseid.php';
?>

<div class="content-wrapper">
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-3">
        <div class="col-sm-6">
            <h1>Form Nilai Ujian</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Layout</a></li>
                <li class="breadcrumb-item active">Praktikum 4</li>
            </ol>
        </div>
        </div>
    </div>
</section>
    <section class="content">
    <div class="container">
    <div class="row my-2">
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
            </div>
            <div class="row mt-3 ">
            </div>
            <div class="row mt-2 mb-5 justify-content-center">
                <div class="col-6 offset-1 justify-content-center">
                    <form method="POST" action="">
                        <div class="form-group row">
                            <label for="nim" class="col-4 col-form-label">NIM</label>
                            <div class="col-6">
                                <input id="nim" name="nim" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row pt-3">
                        <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                        <div class="col-6">
                        <select id="matkul" name="matkul" class="form-control" required="required">
                        <option value="pilih">Pilih Matkul</option>
                        <option value="DDP">Dasar dasar pemograman</option>
                        <option value="pemweb">Pemograman Web</option>
                        <option value="Jarkom">Jaringan Komputer</option>
                        </select>
                        </div>
                            </div>
                        <div class="form-group row pt-3">
                            <label for="nilai" class="col-4 col-form-label">Nilai</label>
                            <div class="col-6">
                                <input id="nilai" name="nilai" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-4 col-6 pt-3">
                                <button name="proses" type="submit" class="btn btn-primary w-100">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <hr>
            </div>
            <div class="row ms-2">
                <div class="khusus_php">
                </div>
                <?php
                require_once "class_nilaimahasiswa.php";
                if (isset($_POST['proses'])) {
                    $proses = $_POST['proses'];
                    $nim = $_POST['nim'];
                    $mata_kuliah = $_POST['matkul'];
                    $nilai = $_POST['nilai'];
                    $nilai_mahasiswa = new NilaiMahasiswa($mata_kuliah, $nilai, $nim);
                    echo "NIM : " . $nilai_mahasiswa->nim;
                    echo "<br>Nama Mata Kuliah : " . $nilai_mahasiswa->matakuliah;
                    echo "<br>Nilai : " . $nilai_mahasiswa->nilai;

                    $hasil_ujian = $nilai_mahasiswa->grade($nilai);
                    echo "<br>Hasil Ujian : $hasil_ujian <br>";

                    $hasil_grade = $nilai_mahasiswa->hasil($nilai);
                    echo "Grade : $hasil_grade";
                }
                ?>
            </div>
            <div class="row">
                <?php
                if (isset($_POST['proses'])) {
                    echo '<hr style="margin-top: 15px; margin-left:0;>';
                }
                ?>
            </div>
    <div class="content">
        <div class="container">
        <div class="col-sm-6">
            <h3>Data Mahasiswa</h3>
        </div>
            <div class="row mt-4">
                <div class="col-4">
                    <span><b>Show</b></span>
                    <div class="btn-group">
                        <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">10
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">1</a></li>
                            <li><a class="dropdown-item" href="#">2</a></li>
                            <li><a class="dropdown-item" href="#">3</a></li>
                            <li><a class="dropdown-item" href="#">4</a></li>
                            <li><a class="dropdown-item" href="#">5</a></li>
                            <li><a class="dropdown-item" href="#">6</a></li>
                            <li><a class="dropdown-item" href="#">7</a></li>
                            <li><a class="dropdown-item" href="#">8</a></li>
                            <li><a class="dropdown-item" href="#">9</a></li>
                            <li><a class="dropdown-item" href="#">10</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </div>
                    <span><b>entries</b></span>
                </div>
                <div class="col-8 d-flex justify-content-end">
                    <label for="" class=""><b>Search : </b></label>
                    <input type="text" class="ms-1">
                </div>
            </div>
            <div class="row">
                <?php
                require_once "class_mahasiswa.php";

                $ns1 = new Mahasiswa("012011", "Faiz Fikri", "TI", 2012, 3.8, "Cum Laude");
                $ns2 = new Mahasiswa("012012", "Alissa Khairunnisa", "TI", 2012, 3.9, "Cum Laude");
                $ns3 = new Mahasiswa("011011", "Rosalie Naurah", "SI", 2010, 3.46, "Memuaskan");
                $ns4 = new Mahasiswa("011012", "Defghi Muhammad", "SI", 2010, 3.2, "Memuaskan");

                $ar_nilai = [$ns1, $ns2, $ns3, $ns4];
                ?>
                
                <div class="container-fluid">
                <table class="table table-sm"><br>
                        <thead>
                            <tr>
                                <th scope="col">No<i class="bi bi-chevron-expand"></i></th>
                                <th scope="col">NIM <i class="bi bi-chevron-expand"></i></th>
                                <th scope="col">Nama <i class="bi bi-chevron-expand"></i></th>
                                <th scope="col">Prodi <i class="bi bi-chevron-expand"></i></th>
                                <th scope="col">Thn Angkatan <i class="bi bi-chevron-expand"></i></th>
                                <th scope="col">IPK <i class="bi bi-chevron-expand"></i></th>
                                <th scope="col">Predikat <i class="bi bi-chevron-expand"></i></th>
                                <th scope="col">Ubah <i class="bi bi-chevron-expand"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $nomor = 1;
                            foreach ($ar_nilai as $ns) {
                                echo '<tr><td>' . $nomor . '</td>';
                                echo '<td>' . $ns->nim . '</td>';
                                echo '<td>' . $ns->nama . '</td>';
                                echo '<td>' . $ns->prodi . '</td>';
                                echo '<td>' . $ns->thn_angkatan . '</td>';
                                echo '<td>' . $ns->ipk . '</td>';
                                echo '<td>' . $ns->predikat_ipk() . '</td>';
                                echo '<td> <a><i class="bi bi-eye" style="color: blue"></i> <i class="bi bi-pencil" style="color: blue"></i></a></td>';
                                $nomor++;
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-4">
                    <span>Showing 1 to 4 of 4 entries</span>
                </div>
                <div class="col-8 d-flex justify-content-end">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="m-5 p-4 border border-primary rounded">
            <div class="col-sm-6">
            <h3>Data Persegi Panjang</h3>
        </div>
            <?php
    require_once "class_persegipanjang.php";
    $persegi1 = new PersegiPanjang(10,15);
    $persegi2 = new PersegiPanjang(18,9);
    echo "<br> Luas Persegi Panjang Ke - 1 : " . $persegi1->luasPersegiPanjang();
    echo "<br> Luas Persegi Panjang Ke - 2 : " . $persegi2->luasPersegiPanjang();

    echo "<br> Keliling Persegi Panjang Ke - 1 : " . $persegi1->kllPersergiPanjang();
    echo "<br> Keliling Persegi Panjang Ke - 1 : " . $persegi2->kllPersergiPanjang();
    ?>
    </div>
    <div class="m-5 p-4 border border-primary rounded">
    <div class="col-sm-5">
            <h3>Data Lingkaran</h3>
        </div>
    <?php
    require_once "class_lingkaran.php";
    echo "NILAI PHI : " . Lingkaran::PHI;
    $lingkar1 = new Lingkaran(10);
    $lingkar2 = new Lingkaran(4);

    echo "<br>Luas Lingkaran I : " . $lingkar1->getLuas();
    echo "<br>Luas Lingkaran II : " . $lingkar2->getLuas();

    echo "<br>Keliling Lingkaran I : " . $lingkar1->getKeliling();
    echo "<br>Keliling Lingkaran II : " . $lingkar2->getKeliling();
    ?>
    </div>
    </div>
</section>
</div>

<?php
include_once 'footer.php';
?>