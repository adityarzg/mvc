$(function() {

    $('.tombolTambahData').on('click', function () {
        $('#judulModalUtama').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#nim').val('');
        $('#nama').val('');
        $('#jurusan').val('');
})
   
    $('.tampilModalUbah').on('click', function () {
        $('#judulModalUtama').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/mvc/public/mahasiswa/ubah');     

        const nim = $(this).data('nim');

        $.ajax({
            url: 'http://localhost/mvc/public/mahasiswa/getUbah',
            data: {nim : nim},
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#id').val(data.id);
                $('#nim').val(data.nim);
                $('#nama').val(data.nama);
                $('#jurusan').val(data.jurusan);
            }
        });
    });
    
});