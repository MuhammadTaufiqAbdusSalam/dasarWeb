$(document).ready(function() {
    $('#bookingForm').submit(function(e) {
        // Validasi input sebelum mengirimkan formulir
        var nama = $('#nama').val().trim();
        var tujuan = $('#tujuan').val().trim();
        var tanggal = $('#tanggal').val().trim();

        if (nama === '' || tujuan === '' || tanggal === '') {
            alert('Silakan lengkapi semua kolom.');
            e.preventDefault(); // Mencegah pengiriman formulir
        }
    });
});

