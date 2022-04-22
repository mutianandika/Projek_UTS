<?PHP
include_once 'header.php';
include_once 'aseid.php';
?>

<body>
<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-3">
          <div class="col-sm-6">
            <h1>Daftar Nilai Siswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Praktikum 1</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
    <?php
    $ns1 = ['id'=> 1, 'nim'=> '011022', 'uts'=> 75, 'uas'=> 85, 'tugas'=> 77];
    $ns2 = ['id'=> 2, 'nim'=> '011010', 'uts'=> 70, 'uas'=> 80, 'tugas'=> 85];
    $ns3 = ['id'=> 3, 'nim'=> '011031', 'uts'=> 80, 'uas'=> 85, 'tugas'=> 80];
    $ns4 = ['id'=> 4, 'nim'=> '011001', 'uts'=> 85, 'uas'=> 90, 'tugas'=> 97];
    $ar_nilai = [$ns1, $ns2, $ns3, $ns4];
    ?>
    
    <table class="table table-striped text-center display-10 my-10">
    <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>Tugas</th>
            <th>Nilai akhir</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor = 1;
        foreach ($ar_nilai as $ns) {
            echo '<tr><td>' .$nomor. '</td>';
            echo '<td>' .$ns['nim']. '</td>';
            echo '<td>' .$ns['uts']. '</td>';
            echo '<td>' .$ns['uas']. '</td>';
            echo '<td>' .$ns['tugas']. '</td>';
            $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas'])/3;
            echo '<td>' .number_format($nilai_akhir,2,',','.').'</td>';
            echo'<tr/>';
            $nomor++;
            }
        ?>
    </tbody>
    </table>
    </div>
</section>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>

<?php
include_once 'footer.php';
?>