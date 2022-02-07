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
                    <div class="me-md-3 me-xl-5">
                        <h1>Batik</h1>
                    </div>
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
            <div class="card border-light mx-3 mt-3" style="width: 13rem;">
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