// cout up
const countUpElement = document.querySelector(".count-up");
const duration = 3000; // Durasi perhitungan (ms)
const target = 8000; // Angka target akhir
const interval = 10; // Interval penambahan (ms)
const step = target / (duration / interval);

let current = 0;

const timer = setInterval(() => {
    current += step;
    countUpElement.textContent = Math.round(current);

    if (current >= target) {
        clearInterval(timer);
        countUpElement.textContent = target;
    }
}, interval);
// Akhir cout up

// kode trix text area
document.addEventListener("trix-file-accept", function (e) {
    e.preventDefault();
});
// Akhir kode trix text area
