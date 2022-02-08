<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <!--Content Card-->
                    <div class="container-fluid d-flex justify-content-start mt-2">
                        <div class="col">
                            <button class="btn btn-primary rounded-pill view-edit"
                                data-id="<?=$data['batik']['id_batik'] ?>" style="font-size: 12pt;"
                                type="button">Edit</button>
                        </div>
                    </div>
                    <div class="container-fluid d-flex justify-content-end mb-2">
                        <div class="row">
                            <!-- <div class="col">
                                <button class="btn btn-danger rounded-pill" style="font-size: 12pt;"
                                    type="button">Hapus</button>
                            </div> -->
                        </div>
                    </div>

                    <!-- Modal Edit -->
                    <div class="modal fade" id="modal-edit" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group mt-2 d-flex">
                                        <div class="container-fluid d-flex flex-column mt-4 ms-3 align-items-center">
                                            <img src="<?= BASEURL ?>/img/3.jpg" class="img-fluid me-3 rounded id"
                                                name="gambar-batik" alt="..." style="width:140pt; height: 140pt;">
                                            <div id="preview"></div>
                                            <input type="file" id="ubah-gambar" name="ubah-gambar"
                                                style="display: none;" accept="image/*" />
                                            <label for="ubah-gambar" class="text-primary  text-center"
                                                style="font-size: 16px; font-weight: 500;">Ubah
                                                Gambar</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama-batik" style="font-size: 12pt">Nama Batik</label>
                                        <input type="text" class="form-control rounded-pill" id="edit-batik"
                                            name="edit-batik" />
                                    </div>
                                    <div class="form-group">
                                        <label for="nama-anggota" style="font-size: 12pt">Provinsi</label>
                                        <input type="text" class="form-control rounded-pill" id="edit-provinsi"
                                            name="edit-provinsi" />
                                    </div>
                                    <div class="form-group">
                                        <label for="nama-anggota" style="font-size: 12pt">Kota</label>
                                        <input type="text" class="form-control rounded-pill" id="edit-kota"
                                            name="edit-kota" />
                                    </div>
                                    <div class="form-group">
                                        <label for="nama-anggota" style="font-size: 12pt">Deskripsi</label>
                                        <textarea class="form-control rounded" name="edit-deskripsi" id="edit-deskripsi"
                                            cols="30" rows="10"></textarea>
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
                    <div class="container-fluid d-flex justify-content-center">
                        <img src="http://localhost/rpl2/public/img/wp6392619-batik-android-wallpapers.jpg"
                            class="img-fluid me- rounded" alt="..." style="height: 350px; width:500px">
                    </div>
                    <div class="container-fluid d-flex justify-content-start mt-4">
                        <article class="blog-post">
                            <h5 class="display-3"><?=$data['batik']['nama'] ?></h5>
                            <p class="blog-post-meta text-secondary">January 1, 2021 by Mark</p>
                            <p class="font-weight-light">Vivamus sagittis lacus vel augue laoreet rutrum faucibus
                                dolor
                                auctor. Duis mollis, est
                                non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                                Morbi
                                leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>