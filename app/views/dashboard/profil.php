<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                    <div class="container-fluid">
                        <div class="me-md-3 me-xl-5">
                            <h2>Halaman Profil</h2>
                        </div>
                    </div>
                    <!--Change Picture-->
                    <div class="container-fluid ps-5 mt-3">
                        <div class="container-fluid d-flex flex-column mt-4 ms-3">
                            <input type="file" id="ubah-gambar" name="ubah-gambar" style="display: none;"
                                accept="image/*" />
                            <label for="ubah-gambar" class="text-primary hover"
                                style="margin: 6px; font-size: 16px; font-weight: 500; margin-left:34px">Ubah
                                Gambar</label>
                        </div>
                        <div class="container-fluid ms-3">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="<?= BASEURL ?>/img/wp6392619-batik-android-wallpapers.jpg"
                                        class="img-fluid me- rounded-circle" id="gambar-profil" alt="..."
                                        style="width:140pt; height: 140pt;">
                                    <div id="preview"></div>
                                </div>
                                <!--Form Control Edit Profil-->
                                <div class="col-md-7 col-sm-6 col-xs-6 ms-5" style="margin-left:50px;">
                                    <form action="" method="">
                                        <div class="mb-3">
                                            <label for="Nama">Nama</label>
                                            <input type="text" class="form-control rounded-pill" id="nama"
                                                aria-describedby="nama" name="nama">
                                        </div>
                                        <div class="mb-3">
                                            <label for="Email">Email</label>
                                            <input type="email" class="form-control rounded-pill" id="email"
                                                aria-describedby="email" name="email">
                                        </div>
                                        <div class="mb-3">
                                            <label for="Password">Password</label>
                                            <input type="password" class="form-control rounded-pill" id="password"
                                                aria-describedby="password" name="password">
                                        </div>
                                        <div class="mb-3">
                                            <label for="Password">Tanggal Lahir</label>
                                            <input type="date" class="form-control rounded-pill" id="tgl_lahir"
                                                aria-describedby="date" name="tgl_lahir">
                                        </div>
                                        <div class="col-6">
                                            <p>Jenis Kelamin</p>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="jk" id="jk"
                                                            value="L">
                                                        Laki - Laki
                                                        <i class="input-helper"></i></label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="jk" id="jk"
                                                            value="P">
                                                        Perempuan
                                                        <i class="input-helper"></i></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 text-center responsive">
                                            <button class="btn btn-danger rounded-pill" style="font-size: 14pt;"
                                                type="submit">Reset</button>
                                            <button class="btn btn-primary rounded-pill" style="font-size: 14pt;"
                                                type="submit">Edit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- content-wrapper ends -->