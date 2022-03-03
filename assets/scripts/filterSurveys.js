
// FILTER INDEX CUESTIONARIOS

$(document.body).ready(function(){
    $("#searchName").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("tbody tr").filter(function() {
            var text = $(this).text().toLowerCase().trim().split("\n").join("").toLowerCase();
            $(this).toggle($(this).text().toLowerCase().trim().split("\n").join("").indexOf(value) > -1)
        });
    });
});
$(document.body).ready(function(){
    $("#searchEmpresa").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("tbody tr").filter(function() {
            var text = $(this).text().toLowerCase().trim().split("\n").join("").toLowerCase();
            $(this).toggle($(this).text().toLowerCase().trim().split("\n").join("").indexOf(value) > -1)
        });
    });
});

/*
if(document.getElementById('searchName')){
        // 
    $(document.body).ready(function(){
        $("#searchName").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#nameList").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });

}

if(document.getElementById('searchEmpresa')){
        // 
    $(document.body).ready(function(){
        $("#searchEmpresa").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#nameList #empresaList").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });

}
*/