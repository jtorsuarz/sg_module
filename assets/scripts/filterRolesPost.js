console.log('Filter Onload');

$("#metodos").change(function () {

    var metodos = $("#metodos")[0].checked;

    if (metodos) {

        //console.log("Activado");
        metodosTest(metodos);


    } else {

        //console.log("Desactivado");
        metodosTest(metodos);

    }

});

function metodosTest(data) {


    // si metodos no esta activado desactivo todas sus opciones
    var metodosC = document.getElementsByName('metodosCrear')[0];
    var metodosE = document.getElementsByName('metodosEditar')[0];
    var metodosV = document.getElementsByName('metodosVisualizar')[0];
    var metodosB = document.getElementsByName('metodosBorrar')[0];
    var metodosG = document.getElementsByName('metodosGestion')[0];

    // si es verdad
    if (data) {

        metodosC.disabled = false;
        metodosE.disabled = false;
        metodosV.disabled = false;
        metodosB.disabled = false;
        metodosG.disabled = false;


        metodosC.checked = true;
        metodosE.checked = true;
        metodosV.checked = true;
        metodosB.checked = true;
        metodosG.checked = true;

    }

    if (!data) {

        metodosC.disabled = true;
        metodosE.disabled = true;
        metodosV.disabled = true;
        metodosB.disabled = true;
        metodosG.disabled = true;

        metodosC.checked = false;
        metodosE.checked = false;
        metodosV.checked = false;
        metodosB.checked = false;
        metodosG.checked = false;


    }

}

$("#personas").change(function () {

    var personas = $("#personas")[0].checked;

    if (personas) {

        //console.log("Activado");
        personasTest(personas);

    } else {

        //console.log("Desactivado");
        personasTest(personas);

    }

});

function personasTest(data) {

    // si personas no esta activado desactivo todas sus opciones
    var personasC = document.getElementsByName('personasCrear')[0];
    var personasE = document.getElementsByName('personasEditar')[0];
    var personasV = document.getElementsByName('personasVisualizar')[0];
    var personasB = document.getElementsByName('personasBorrar')[0];
    var personasG = document.getElementsByName('personasGestion')[0];

    if (data) {

        personasC.disabled = false;
        personasE.disabled = false;
        personasV.disabled = false;
        personasB.disabled = false;
        personasG.disabled = false;

        personasC.checked = true;
        personasE.checked = true;
        personasV.checked = true;
        personasB.checked = true;
        personasG.checked = true;


    }
    if (!data) {

        personasC.disabled = true;
        personasE.disabled = true;
        personasV.disabled = true;
        personasB.disabled = true;
        personasG.disabled = true;

        personasC.checked = false;
        personasE.checked = false;
        personasV.checked = false;
        personasB.checked = false;
        personasG.checked = false;

    }

}

$("#empresa").change(function () {

    var empresa = $("#empresa")[0].checked;

    if (empresa) {

        //console.log("Activado");
        empresaTest(empresa);

    } else {

        //console.log("Desactivado");
        empresaTest(empresa);

    }

});

function empresaTest(data) {

    // si empresa no esta activado desactivo todas sus opciones
    var empresaC = document.getElementsByName('empresaCrear')[0];
    var empresaE = document.getElementsByName('empresaEditar')[0];
    var empresaV = document.getElementsByName('empresaVisualizar')[0];
    var empresaB = document.getElementsByName('empresaBorrar')[0];
    var empresaG = document.getElementsByName('empresaGestion')[0];

    if (data) {


        empresaC.disabled = false;
        empresaE.disabled = false;
        empresaV.disabled = false;
        empresaB.disabled = false;
        empresaG.disabled = false;

        empresaC.checked = true;
        empresaE.checked = true;
        empresaV.checked = true;
        empresaB.checked = true;
        empresaG.checked = true;



    }

    if (!data) {


        empresaC.disabled = true;
        empresaE.disabled = true;
        empresaV.disabled = true;
        empresaB.disabled = true;
        empresaG.disabled = true;

        empresaC.checked = false;
        empresaE.checked = false;
        empresaV.checked = false;
        empresaB.checked = false;
        empresaG.checked = false;

    }

}

$("#estudio").change(function () {

    var estudio = $("#estudio")[0].checked;

    if (estudio) {

        //console.log("Activado");
        estudioTest(estudio);

    } else {

        //console.log("Desactivado");
        estudioTest(estudio);

    }

});

function estudioTest(data) {

    // si estudio no esta activado desactivo todas sus opciones
    var estudioC = document.getElementsByName('estudioCrear')[0];
    var estudioE = document.getElementsByName('estudioEditar')[0];
    var estudioV = document.getElementsByName('estudioVisualizar')[0];
    var estudioB = document.getElementsByName('estudioBorrar')[0];
    var estudioG = document.getElementsByName('estudioGestion')[0];

    if (data) {

        estudioC.disabled = false;
        estudioE.disabled = false;
        estudioV.disabled = false;
        estudioB.disabled = false;
        estudioG.disabled = false;

        estudioC.checked = true;
        estudioE.checked = true;
        estudioV.checked = true;
        estudioB.checked = true;
        estudioG.checked = true;

    }
    if (!data) {

        estudioC.disabled = true;
        estudioE.disabled = true;
        estudioV.disabled = true;
        estudioB.disabled = true;
        estudioG.disabled = true;

        estudioC.checked = false;
        estudioE.checked = false;
        estudioV.checked = false;
        estudioB.checked = false;
        estudioG.checked = false;
    }
}

$("#cuestionarios").change(function () {

    var cuestionarios = $("#cuestionarios")[0].checked;

    if (cuestionarios) {

        //console.log("Activado");
        cuestionariosTest(cuestionarios);

    } else {

        //console.log("Desactivado");
        cuestionariosTest(cuestionarios);

    }

});

function cuestionariosTest(data) {

    // si cuestionarios no esta activado desactivo todas sus opciones
    var cuestionariosC = document.getElementsByName('cuestionariosCrear')[0];
    var cuestionariosE = document.getElementsByName('cuestionariosEditar')[0];
    var cuestionariosV = document.getElementsByName('cuestionariosVisualizar')[0];
    var cuestionariosB = document.getElementsByName('cuestionariosBorrar')[0];
    var cuestionariosG = document.getElementsByName('cuestionariosGestion')[0];
    var cuestionariosR = document.getElementsByName('cuestionariosRepositorio')[0];

    if (data) {

        cuestionariosC.disabled = false;
        cuestionariosE.disabled = false;
        cuestionariosV.disabled = false;
        cuestionariosB.disabled = false;
        cuestionariosG.disabled = false;
        cuestionariosR.disabled = false;

        cuestionariosC.checked = true;
        cuestionariosE.checked = true;
        cuestionariosV.checked = true;
        cuestionariosB.checked = true;
        cuestionariosG.checked = true;
        cuestionariosR.checked = true;

    }


    if (!data) {

        cuestionariosC.disabled = true;
        cuestionariosE.disabled = true;
        cuestionariosV.disabled = true;
        cuestionariosB.disabled = true;
        cuestionariosG.disabled = true;
        cuestionariosR.disabled = true;

        cuestionariosC.checked = false;
        cuestionariosE.checked = false;
        cuestionariosV.checked = false;
        cuestionariosB.checked = false;
        cuestionariosG.checked = false;
        cuestionariosR.checked = false;

    }


}

$("#biblioteca").change(function () {

    var biblioteca = $("#biblioteca")[0].checked;

    if (biblioteca) {

        //console.log("Activado");
        bibliotecaTest(biblioteca);

    } else {

        //console.log("Desactivado");
        bibliotecaTest(biblioteca);

    }

});

function bibliotecaTest(data) {

    // si biblioteca no esta activado desactivo todas sus opciones
    var bibliotecaC = document.getElementsByName('bibliotecaSubir')[0];
    var bibliotecaV = document.getElementsByName('bibliotecaVisualizar')[0];
    var bibliotecaB = document.getElementsByName('bibliotecaBorrar')[0];
    var bibliotecaVVid = document.getElementsByName('bibliotecaVideos')[0];
    var bibliotecaVerDoc = document.getElementsByName('bibliotecaDocumentacion')[0];
    var bibliotecaVerMan = document.getElementsByName('bibliotecaManuales')[0];



    if (data) {

        bibliotecaC.disabled = false;
        bibliotecaV.disabled = false;
        bibliotecaB.disabled = false;
        bibliotecaVVid.disabled = false;
        bibliotecaVerDoc.disabled = false;
        bibliotecaVerMan.disabled = false;

        bibliotecaC.checked = true;
        bibliotecaV.checked = true;
        bibliotecaB.checked = true;
        bibliotecaVVid.checked = true;
        bibliotecaVerDoc.checked = true;
        bibliotecaVerMan.checked = true;

    }
    if (!data) {

        bibliotecaC.disabled = true;
        bibliotecaV.disabled = true;
        bibliotecaB.disabled = true;
        bibliotecaVVid.disabled = true;
        bibliotecaVerDoc.disabled = true;
        bibliotecaVerMan.disabled = true;

        bibliotecaC.checked = false;
        bibliotecaV.checked = false;
        bibliotecaB.checked = false;
        bibliotecaVVid.checked = false;
        bibliotecaVerDoc.checked = false;
        bibliotecaVerMan.checked = false;

    }

}

// funcion onload

$(document).ready(function(){

    metodosTest($("#metodos")[0].checked);
    personasTest($("#personas")[0].checked);
    empresaTest($("#empresa")[0].checked);
    estudioTest($("#estudio")[0].checked);
    cuestionariosTest($("#cuestionarios")[0].checked);
    bibliotecaTest($("#biblioteca")[0].checked);

});