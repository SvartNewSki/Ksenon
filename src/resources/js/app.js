import "./bootstrap";
document
    .getElementById("open-modal-btn")
    .addEventListener("click", function () {
        document.getElementById("my-modal").classList.add("open");
    });

document
    .getElementById("close-modal-btn")
    .addEventListener("click", function () {
        document.getElementById("my-modal").classList.remove("open");
    });
