function showLoader() {
    let loader = document.getElementById("loader");
    loader.classList.remove("d-none");
}

function hideLoader() {
    let loader = document.getElementById("loader");
    loader.classList.add("d-none");
}

function successToast(msg) {
    Toastify({
        text: msg,
        gravity: "bottom",
        position: "center",
        className: "mb-5",
        style: {
            background: "green",
        },
    }).showToast();
}
function errorToast(msg) {
    Toastify({
        text: msg,
        gravity: "bottom",
        position: "center",
        className: "mb-5",
        style: {
            background: "red",
        },
    }).showToast();
}
