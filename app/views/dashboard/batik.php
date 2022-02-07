<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content flex-wrap">
                <div class="d-flex align-items flex-wrap">
                    <div class="container-fluid">
                        <div class="me-md-3 me-xl-5">
                            <h1>Batik</h1>
                        </div>
                    </div>
                    <!--Content Card-->
                    <!-- Ganti pake database gan + pagination -->
                    <div class="d-flex flex-wrap justify-content-center">
                        <?php foreach ($data['batik'] as $batik) : ?>
                            <div class="card border-light mx-3 mt-4" style="width: 17rem;">
                                <img src="<?= BASEURL ?>/img/wp6392619-batik-android-wallpapers.jpg" class="card-img-top" alt="..." style="height: 200px;">
                                <div class="card-body border-light">
                                    <h5 class="card-title"><?= $batik['nama'] ?></h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk of the card's content.</p>
                                    <a href="<?= BASEURL ?>/dashboard/detail/<?= $batik['id'] ?>" class="btn btn-primary">Baca
                                        Sekarang »</a>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- content-wrapper ends -->