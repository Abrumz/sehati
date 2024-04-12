document.addEventListener('DOMContentLoaded', (event) => {
    // Fungsi untuk mendapatkan warna acak
    function getRandomColor() {
      const letters = '0123456789ABCDEF';
      let color = '#';
      for (let i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
      }
      return color;
    }
  
    // Mengatur warna acak untuk setiap elemen dengan class 'line-color'
    const lineColors = document.querySelectorAll('.line-color');
    lineColors.forEach((lineColor) => {
      lineColor.style.backgroundColor = getRandomColor();
    });
  });
  