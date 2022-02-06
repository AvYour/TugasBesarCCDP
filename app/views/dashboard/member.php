<div class="content-wrapper ">
    <div class="row">
        <div class="me-md-3 me-xl-5">
            <h1>Data Member</h1>
            <table class="table table-striped mt-4 align=" center">
                <tr class="table-dark" align="center">
                    <td>Nama</td>
                    <td>Email</td>
                    <td>Tanggal Lahir</td>
                    <td>Jenis Kelamin</td>
                    <td>Aksi </td>
                </tr>
                <!-- Ganti pake database gan + pagination -->
                <?php for ($i = 0; $i < 6; $i++) { ?>
                    <tr align="center">
                        <td>John Doe</td>
                        <td>john.doe07@mail.com</td>
                        <td>01 Januari 2022</td>
                        <td>Laki</td>
                        <td><a href="#" class="mdi mdi-delete"></a></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>
<!-- content-wrapper ends -->