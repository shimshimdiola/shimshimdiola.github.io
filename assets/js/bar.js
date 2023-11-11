function showProgressBar() {
    var progressBar = document.querySelector(".progress-bar");
    progressBar.style.display = "block";

    var bar = document.querySelector(".progress-bar .bar");
    var width = 0;
    bar.style.width = "0%"; // Reset width to 0 before starting animation
    var interval = setInterval(frame, 20);

    function frame() {
        if (width >= 100) {
            clearInterval(interval);
            progressBar.style.display = "none";
        } else {
            width++;
            bar.style.width = width + "%";
        }
    }
}