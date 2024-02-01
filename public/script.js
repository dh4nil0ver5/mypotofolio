function toggleMenu(){
    const menu = document.querySelector(".menu-links");
    const icon = document.querySelector(".hamburger-icon");
    menu.classList.toggle("open");
    icon.classList.toggle("open");
}
// function downloadcv(){
    const btnDownloadCV = document.querySelector("#btnDownloadCV");
    btnDownloadCV.addEventListener('click', function () {
        location.href='https://drive.google.com/file/d/1tXbGzo03PgxgN61fMK69inNwjusf24jO/view?usp=sharing';
    });
// }
// function mywa(){
    const mywa = document.querySelector("#mywa");
    btnDownloadCV.addEventListener('click', function () {
        location.href = 'https://wa.me/08979452329'
    });
// }
