$(document).ready(function () {
    console.log('succes');
});

function bookData() {
    $.get('/book', function (data) {
        $("#content").html(data)
    });
}

function buyingData() {
    $.get('/buying', function (data) {
        $("#content").html(data)
    });
}

function sellingData() {
    $.get('/selling', function (data) {
        $("#content").html(data)
    });
}
