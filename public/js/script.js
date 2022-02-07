$(document).ready(function () {
  const baseurl = "http://localhost/rpl2/public/";
  $("#data-member").DataTable({
    language: {
      zeroRecords: "Tidak ada data yang ditampilkan",
    },
  });
  $("#data-member").on("click", ".hapus", function () {
    let url = $(this).attr("id");
    console.log(url);
    Swal.fire({
      title: "Apakah anda yakin menghapus data user?",
      icon: "warning",
      allowOutsideClick: false,
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Hapus!",
    }).then((result) => {
      if (result.isConfirmed) {
        document.location.href = url;
      }
    });
  });

  $(".view-edit").on("click", function () {
    let id = $(this).data("id");
    $.ajax({
      url: baseurl + "dashboard/getUbahBatik",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#edit-batik").val(data.nama);
        $("#edit-provinsi").val(data.provinsi);
        $("#edit-kota").val(data.kota);
        $("#edit-deskripsi").val(data.deskripsi);
      },
    });

    $("#modal-edit").modal("show");
  });
});
