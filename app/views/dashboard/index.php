<?php
if (!session_id()) session_start();
?>
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                    <div class="me-md-3 me-xl-5">
                        <h2>Selamat Datang Kembali</h2>
                        <p class="mb-md-0">berikut adalah data yang dikelola saat ini.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="d-flex justify-content-start">
            <div class="card mx-4 mb-3 rounded" style="min-width: 260px;">
                <div class="row g-0">
                    <div class="col-md-4 text-center">
                        <i class="mdi mdi-account-multiple" style="font-size: 400%;"></i>
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h2 class="card-title fs-5">Member</h2>
                            <p class="card-text fs-5">20</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3 rounded" style="min-width: 260px;">
                <div class="row g-0">
                    <div class="col-md-4 text-center">
                        <i class="mdi mdi-texture" style="font-size: 400%;"></i>
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h2 class="card-title fs-5">Batik</h2>
                            <p class="card-text fs-5">15</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between flex-wrap">
                    <div class="d-flex align-items-end flex-wrap">
                        <div class="contaiener-fluid">
                            <div class="me-md-3 me-xl-5">
                                <h2>Pengajuan Konten</h2>
                            </div>
                        </div>
                        <!--Content Card-->
                        <!-- Pake data batik yang status nya pending(belum disetujui) -->
                        <!--Content Card-->
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="d-flex flex-wrap justify-content-center">
                <?php foreach ($data['batik'] as $batik) : ?>
                    <div class="card border-light mx-3 mt-2" style="width: 18rem;">
                        <img src="<?= BASEURL ?>/img/wp6392619-batik-android-wallpapers.jpg" class="card-img-top" alt="..." style="height: 200px;">
                        <div class="card-body border-light">
                            <h5 class="card-title"><?= $batik['nama'] ?></h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                            <a href="<?= BASEURL ?>/dashboard/detail/<?= $batik['id_batik'] ?>" class="btn btn-primary">Baca
                                Sekarang »</a>
                            <div class="mt-2 mx-1 text-center">
                                <a href="" class="btn btn-danger">Tolak</a>
                                <a href="" class="btn btn-success">Setujui</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->