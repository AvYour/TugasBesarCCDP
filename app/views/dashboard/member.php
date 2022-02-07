<div class="content-wrapper ">
    <div class="row">
        <div class="me-md-3 me-xl-5">
            <h1>Member</h1>
            <div class="col-6">
                <?=Flasher::flash(); ?>
            </div>
            <div class="table-responsive">
                <table id="data-member" class="table table-striped mt-4 table-paginate" align="center">
                    <thead>
                        <tr class="table-dark" align="center">
                            <td>Nama</td>
                            <td>Email</td>
                            <td>Hak Akses</td>
                            <td>Tanggal Lahir</td>
                            <td>JK</td>
                            <td>Aksi </td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['member'] as $data) :?>
                        <tr align="center">
                            <td><?= $data['nama'] ?></td>
                            <td><?= $data['email'] ?></td>
                            <td><?= $data['hakAkses'] ?></td>
                            <td><?= $data['tgl_lahir'] ?></td>
                            <td><?= $data['jk'] ?></td>
                            <td>
                                <button type="button" id="<?= BASEURL ?>/dashboard/hapusUser/<?=$data['id']?>"
                                    class="btn btn-danger hapus">Hapus</button>
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- content-wrapper ends -->
<script>
$(document).ready(function() {
    $("#data-member").DataTable({
        language: {
            "zeroRecords": "Tidak ada data yang ditampilkan",
        }
    })
    $("#data-member").on("click", ".hapus", function() {
        let url = $(this).attr("id");
        console.log(url);
        Swal.fire({
            title: 'Apakah anda yakin menghapus data user?',
            icon: 'warning',
            allowOutsideClick: false,
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = url;
            }
        })
    })
})
</script>