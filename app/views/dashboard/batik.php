<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <!--Content Card-->
                    <div class="row">
                        <div class="col-lg-6">
                            <?php Flasher::flash(); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <div class="d-flex justify-content-between flex-wrap">
                                <div class="container-fluid">
                                    <div class="d-flex align-items-end flex-wrap">
                                        <div class="me-md-3 me-xl-5">
                                            <h2>Data Batik Nusantara</h2>
                                        </div>
                                    </div>
                                    <div class="container-fluid mt-3 mb-3">
                                        <div class="row">
                                            <div class="col-12 d-flex flex-row-reverse">
                                                <button type="button" class="btn btn-primary rounded-pill" style="font-size: 12pt;" data-bs-toggle="modal" data-bs-target="#modalTambah">Tambah</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Content Card-->
                                    <!-- Pake data batik yang status nya pending(belum disetujui) -->
                                    <!--Content Card-->
                                </div>
                                <div class="d-flex flex-wrap justify-content-center">
                                    <?php foreach ($data['batik'] as $batik) : ?>
                                        <div class="card border mx-3 mt-4" style="width: 18rem;">
                                            <img src="<?= BASEURL ?>/img/wp6392619-batik-android-wallpapers.jpg" class="card-img-top" alt="..." style="height: 200px;">
                                            <div class="card-body border-light">
                                                <h5 class="card-title"><?= $batik['nama'] ?></h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the
                                                    bulk of the card's content.</p>
                                                <a href="<?= BASEURL ?>/dashboard/detail/<?= $batik['id_batik'] ?>" class="btn btn-primary">Baca
                                                    Sekarang »</a>
                                            </div>
                                        </div>
                                    <?php endforeach ?>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="formTambahBatik">Form Tambah Batik</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body mt-2">
                                                <div class="form-group mt-2">
                                                    <label for="nama-batik" style="font-size: 12pt">Nama Batik</label>
                                                    <input type="text" class="form-control" id="tambah-batik" name="tambah-batik" />
                                                    <label id="info-id"></label>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nama-anggota" style="font-size: 12pt">Provinsi</label>
                                                    <input type="text" class="form-control" id="tambah-provinsi" name="tambah-provinsi" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="nama-anggota" style="font-size: 12pt">Kota</label>
                                                    <input type="text" class="form-control" id="tambah-kota" name="tambah-kota" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="nama-anggota" style="font-size: 12pt">Deskripsi</label>
                                                    <textarea class="form-control" name="tambah-deskripsi" id="tambah-deskripsi" cols="30" rows="10"></textarea>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="submit" name="tambah-batik" class="btn btn-primary" value="Simpan" />
                                                <input type="reset" class="btn btn-danger" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Modal -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- content-wrapper ends -->