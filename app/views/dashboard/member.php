<?php

//$getUser = getAllUser();

?>
<div class="content-wrapper ">
    <div class="row">
        <div class="me-md-3 me-xl-5">
            <h1>Member</h1>
            <table class="table table-striped mt-4" align="center">
                <thead>
                    <tr class="table-dark" align="center">
                        <td>Nama</td>
                        <td>Email</td>
                        <td>Hak Akses</td>
                        <td>Tanggal Lahir</td>
                        <td>Jenis Kelamin</td>
                        <td>Aksi </td>
                    </tr>
                </thead>
                <tbody>
                    <?php // foreach ($getUser as $data) :?>
                    <tr>
                        <td><?= $data['nama'] ?></td>
                        <td><?= $data['email'] ?></td>
                        <td><?= $data['hakAkses'] ?></td>
                        <td><?= $data['tgl_lahir'] ?></td>
                        <td><?= $data['jk'] ?></td>
                        <td><a href="#" class="mdi mdi-delete"></a></td>
                    </tr>
                <!-- Ganti pake database gan + pagination -->
                </tbody>
                    <?php //endforeach; ?>
            </table>
        </div>
    </div>
</div>
<!-- content-wrapper ends -->