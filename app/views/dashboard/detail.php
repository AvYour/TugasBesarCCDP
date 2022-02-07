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
                    <!-- Button trigger modal -->
                    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
                        Launch static backdrop modal
                    </button> -->

                    <!-- Modal -->
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
                                    isi field nya
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Understood</button>
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
                            <p class="font-weight-light">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                auctor. Duis mollis, est
                                non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi
                                leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>