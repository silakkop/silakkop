const swal = $('.swal').data('swal');

if(swal){
    Swal.fire({
        title: 'Berhasil',
        text: swal,
        icon: 'success',
        showConfirmButton: false,
        timer: 2000
        }
    )
}

const swal2 = $('.swal2').data('swal');

if(swal2){
    Swal.fire({
        title: 'Gagal',
        text: swal2,
        icon: 'error',
        showConfirmButton: false,
        timer: 2000
        }
    )
}

$(document).on('click', '.btn_hapus', function(e){

    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: 'Apakah anda yakin?',
        text: "Data yang telah dihapus tidak bisa dikembalikan!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#268a49',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus!',
        cancelButtonText: 'Batal',
      }).then((result) => {
        if (result.isConfirmed) {
          document.location.href= href;
          
        }
      })
})

$(document).on('click', '.btn_konfirmasi', function(e){

  e.preventDefault();
  const href = $(this).attr('href');

  Swal.fire({
      title: 'Konfirmasi Pembayaran?',
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Konfirmasi'
    }).then((result) => {
      if (result.isConfirmed) {
        document.location.href= href;
        
      }
    })
})

$(document).on('click', '.btn_tolak', function(e){

  e.preventDefault();
  const href = $(this).attr('href');

  Swal.fire({
      title: 'Tolak Pembayaran?',
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Tolak'
    }).then((result) => {
      if (result.isConfirmed) {
        document.location.href= href;
        
      }
    })
})



