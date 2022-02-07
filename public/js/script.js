$(document).ready(function () {
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
});
