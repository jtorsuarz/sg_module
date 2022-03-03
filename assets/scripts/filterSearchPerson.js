// FILTER
$(document.body).ready(function(){
    $(".filter").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("tbody tr").filter(function() {
            var text = $(this).text().toLowerCase().trim().split("\n").join("").toLowerCase();
            $(this).toggle($(this).text().toLowerCase().trim().split("\n").join("").indexOf(value) > -1)
        });
    });
});