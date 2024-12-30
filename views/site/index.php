<?php

/** @var yii\web\View $this */

$this->title = 'Sistem Penilaian Akreditasi';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">Selamat Datang!</h1>
        <p class="lead">Selamat datang di sistem penilaian dan akreditasi program studi</p>
    </div>

    <div class="body-content">

        <div class="container">
            <div class="row justify-content-center">
                <!-- Card for Penilaian Prodi -->
                <div class="col-lg-4 mb-3 text-center">
                    <div class="card shadow-sm rounded">
                        <div class="card-body">
                            <h2 class="card-title"><a href="/index.php?r=penilaian-prodi" class="btn btn-primary btn-lg w-100">Cek Penilaian Prodi</a></h2>
                        </div>
                    </div>
                </div>
                <!-- Card for Akreditasi Prodi -->
                <div class="col-lg-4 mb-3 text-center">
                    <div class="card shadow-sm rounded">
                        <div class="card-body">
                            <h2 class="card-title"><a href="/index.php?r=akreditasi-prodi" class="btn btn-success btn-lg w-100">Cek Akreditasi Prodi</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>