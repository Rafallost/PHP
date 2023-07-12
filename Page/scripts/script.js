function openPage() {
    var obj = document.getElementById("pages");
    var selectedValue = obj.value;
    window.location.href = `../parts/${selectedValue}.php`;
}

function backHome() {
    window.location.href = '../parts/index.php';
}