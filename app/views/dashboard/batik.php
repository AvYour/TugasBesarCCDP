<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <!-- <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content flex-wrap">
                <div class="d-flex align-items flex-wrap">
<<<<<<< HEAD
                    <div class="container-fluid">
                        <div class="me-md-3 me-xl-5 mb-5">
                            <h1>Batik</h1>
                        </div>
                    </div>
                    <!--Content Card-->
                    <!-- Ganti pake database gan + pagination -->
                    <div class="d-flex flex-wrap justify-content-center">
                        <?php foreach($data['batik'] as $batik): ?>
                        <div class="card border-light mx-3" style="width: 20rem;">
                            <img src="<?= BASEURL ?>/img/wp6392619-batik-android-wallpapers.jpg" class="card-img-top"
                                alt="..." style="height: 200px;">
                            <div class="card-body border-light">
                                <h5 class="card-title">Title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="<?= BASEURL ?>/dashboard/detail/<?= $batik['id'] ?>"
                                    class="btn btn-primary">Baca
                                    Sekarang »</a>
                            </div>
                        </div>
                        <?php endforeach ?>
                    </div>
=======
                    <div class="me-md-3 me-xl-5">
                        <h1>Batik</h1>
                    </div>
>>>>>>> b54b8329c31794b49fc69d881fdefaf63c51f682
                </div>
            </div>
        </div>
    </div> -->

    <div class="row">
        <h1>Batik</h1>
    </div>

    <!--Content Card-->
    <!-- Ganti pake database gan + pagination -->
    <div class="row">
        <?php
        if (count($data['batik']) > 3)
            echo "<div class='d-flex flex-wrap justify-content-between'>";
        else echo "<div class='d-flex flex-wrap'>";
        ?>
        <?php foreach ($data['batik'] as $batik) : ?>
            <div class="card border-light mx-4 mt-3" style="width: 13rem;">
                <img src="<?= BASEURL ?>/img/wp6392619-batik-android-wallpapers.jpg" class="card-img-top" alt="..." style="height: 200px;">
                <div class="card-body border-light">
                    <h5 class="card-title"><?= $batik['nama'] ?></h5>
                    <a href="<?= BASEURL ?>/dashboard/detail/<?= $batik['id'] ?>" class="btn btn-primary">Baca
                        Sekarang »</a>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>

</div>
<!-- content-wrapper ends -->