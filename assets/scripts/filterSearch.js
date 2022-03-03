// FILTER
$(document.body).ready(function(){
    $("#filterVid").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#lista div").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
$(document.body).ready(function(){
    $("#filterDoc").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#listaC div").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
$(document.body).ready(function(){
    $("#filterMan").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#listaM div").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
