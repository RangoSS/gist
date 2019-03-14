
$(document).ready(function () {
    var names = $(".labs").keyup(function () {
        if (names == "" || names == Number) {
            alert("text cannont be emty or number");
        }
    });
});


