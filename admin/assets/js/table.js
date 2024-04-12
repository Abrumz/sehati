// JavaScript
window.addEventListener('resize', function() {
    var width = window.innerWidth;

    // Sembunyikan semua elemen terlebih dahulu
    var elementsPatient = document.getElementsByClassName('table-cell-patient');
    var elementsJadwal = document.getElementsByClassName('table-cell-jadwal');
    for (var i = 0; i < elementsPatient.length; i++) {
        elementsPatient[i].style.display = 'none';
    }
    for (var i = 0; i < elementsJadwal.length; i++) {
        elementsJadwal[i].style.display = 'none';
    }

    // Tampilkan elemen berdasarkan lebar layar
    if (width >= 1025) {
        // Desktop: tampilkan 4 elemen
        for (var i = 0; i < 4; i++) {
            if(elementsPatient.item(i)) elementsPatient.item(i).style.display = 'block';
            if(elementsJadwal.item(i)) elementsJadwal.item(i).style.display = 'block';
        }
    } else if (width >= 768) {
        // Tablet: tampilkan 2 elemen
        for (var i = 0; i < 2; i++) {
            if(elementsPatient.item(i)) elementsPatient.item(i).style.display = 'block';
            if(elementsJadwal.item(i)) elementsJadwal.item(i).style.display = 'block';
        }
    } else {
        // Phone: tampilkan 1 elemen
        if(elementsPatient.item(0)) elementsPatient.item(0).style.display = 'block';
        if(elementsJadwal.item(0)) elementsJadwal.item(0).style.display = 'block';
    }
});

// Panggil fungsi saat halaman dimuat
window.dispatchEvent(new Event('resize'));
