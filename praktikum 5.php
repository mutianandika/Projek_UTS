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
            <h1>Data Bank</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Layout</a></li>
                <li class="breadcrumb-item active">Praktikum 5</li>
            </ol>
            </div>
    </div>
    </div>
    </section>
    <section class="content">
    <table class="table">
            <thead class="table-active">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">No.Account</th>
                    <th scope="col">Pemilik</th>
                    <th scope="col">Saldo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require 'class_bank.php';
                $no = 1;
                foreach ($array1 as $arc) : ?>
                <tr>
                    <th scope="row"><?= $no++;?></th>
                    <td><?= $arc->nomor?></td>
                    <td><?= $arc->costumer?></td>
                    <td><?= $arc->saldo?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="col-sm-6">
            <h3>Strawberry</h3>
        </div>
        <div class="m-5 p-4 border border-primary rounded">
        <?php
use Strawberry as Strawberry;

require 'class_fruit2.php';

class Strawberry extends Fruit{
    public function message()
    {
        echo "Am I a fruit or berry? ";
    }
}

$set_straberry = new Strawberry("Strawberry", "red");
$set_straberry->message();
$set_straberry->intro();

?>
</div>
</section>
</div>
</body>

<?php
include_once 'footer.php';
?>