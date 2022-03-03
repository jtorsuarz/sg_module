
function añadirPregunta() {
    var seleccion = document.querySelector('#tiposRespuesta').value;
    var numeroDeRespuestas = document.querySelector('#numeroRespuesta').value;

    if (seleccion == 3) {
        numeroDeRespuestas = 1;
    }

    if (numeroDeRespuestas > 0 && seleccion > 0) {
        asd = asd + 1;

        var idDivPregunta = "contentP" + asd;

        var elementNew = document.createElement("div");

        elementNew.innerHTML += `<br><br>
                        <div  id="${idDivPregunta}" class="col-md-12">
                            <div >
                                <div class="col-md-12 col-12 container-sm">
                                    <div class="col-md-12 col-12 container-sm">
                                       <div class="input-group">
                                           <span class="input-group-addon">
                                               <i class="fa fa-angle-double-right"></i>
                                           </span>
                                           <input type="text" class="form-control" placeholder="Escribe tu pregunta" aria-label="Username"
                                           aria-describedby="basic-addon1" name="pregunta[${asd}][texto_pregunta]"/>
                                           <span class="input-group-addon">
                                              <a role="button" class="danger" onclick="borrarGeneral(this)">
                                                 <i class="fa fa-trash"></i>
                                              </a>
                                           </span>
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div><div class="row"></div>`;

        document.getElementById('insertarQRcuestionario').appendChild(elementNew);

        respuestas(seleccion, numeroDeRespuestas, idDivPregunta);


    }

    document.querySelector('#tiposRespuesta').value = 0;
    document.querySelector('#numeroRespuesta').value = '';
}

function borrarGeneral(boton) {
    var borrardiv = boton.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode;
    document.getElementById("insertarQRcuestionario").removeChild(borrardiv);
}

function borrarRespuesta(boton) {
    console.log(boton.parentNode.parentNode.parentNode.parentNode.parentNode);
    var borrardiv = boton.parentNode.parentNode.parentNode.parentNode;
    var id = borrardiv.parentElement.getAttribute("id");
    console.log(id)
    document.getElementById(id).remove(borrardiv);
}

function respuestas(seleccion, numeroDeRespuestas, idDivPregunta) {

    if (seleccion == 1) {


        for (let i = 0; i < numeroDeRespuestas; i++) {

            var element1 = document.createElement("div");

            j = i + 1;

            // RADIO BUTTONS
            element1.innerHTML += `<br><br>
                        <div class="align-center" id="contentRespuesta${j}">
                            <div class="col-md-12 col-12 container-sm">
                                <div class="col-md-12 col-12 container-sm">
                                       <div class="input-group">
                                           <span class="input-group-addon">
                                               <i class="fa fa-dot-circle-o"></i>
                                           </span>
                                           <input name="pregunta[${asd}][tipoPregunta]" value="1" class="hidden">
                                           <div class="row">
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="Escribe la respuesta ${j}"
                                                   aria-describedby="basic-addon1" name="pregunta[${asd}][texto_respuesta][]" required/>
                                                </div>
                                                <div class="col-sm-2">
                                                     <input type="double" class="form-control" id="basic-addon1" placeholder="Valor"  name="pregunta[${asd}][valores][]" required/>
                                                </div>
                                           </div>
                                           <span class="input-group-addon">
                                              <a role="button" class="danger" onclick="borrarRespuesta(this)">
                                                 <i class="fa fa-trash"></i>
                                              </a>
                                           </span>
                                       </div>                                 
                                </div>
                            </div>
                        </div>`;

            document.getElementById(idDivPregunta).appendChild(element1);

        }

    } else if (seleccion == 2) {

        var element2 = document.createElement("div");

        for (let i = 0; i < numeroDeRespuestas; i++) {

            j = i + 1;

            // CHECK BOX
            element2.innerHTML += `<br><br>
                        <div class="d-flex justify-content-center p-2" id="contentR${asd}">
                            <div class="col-md-12 col-12 container-sm">
                                <div class="col-md-12 col-12 container-sm">
                                       <div class="input-group">
                                           <span class="input-group-addon">
                                               <i class="fa fa-check-square-o"></i>
                                           </span>
                                           <input name="pregunta[${asd}][tipoPregunta]" value="2" class="hidden">
                                           <div class="row">
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="Escribe la respuesta ${j}"
                                                   aria-describedby="basic-addon1" name="pregunta[${asd}][texto_respuesta][]" required/>
                                                </div>
                                                <div class="col-sm-2">
                                                     <input type="double" class="form-control" id="basic-addon1" placeholder="Valor"  name="pregunta[${asd}][valores][]" required/>
                                                </div>
                                           </div>
                                           <span class="input-group-addon">
                                              <a role="button" class="danger" onclick="borrarRespuesta(this)">
                                                 <i class="fa fa-trash"></i>
                                              </a>
                                           </span>
                                       </div>
                                </div>
                            </div>
                        </div>`;

            document.getElementById(idDivPregunta).appendChild(element2);

        }

    } else if (seleccion == 3) {

        var element3 = document.createElement("div");

        // CAJONES TEXTO
        element3.innerHTML += `<br><br>
                        <div class="text-center" id="contentR${asd}">
                            <div class="col-md-12 col-12 container-sm">
                                <div class="col-md-12 col-12 container-sm">
                                       <div class="input-group">
                                           <label disabled>
                                             Ingrese la pregunta, el area de texto se mostrara al generar el cuestionario.
                                           </label>         
                                           <input name="pregunta[${asd}][tipoPregunta]" value="3" class="hidden">
                                           <input type="text" class="form-control hidden" name="pregunta[${asd}][texto_respuesta][]"/>                                                                          
                                       </div>
                                </div>
                            </div>
                        </div>`;
        document.getElementById(idDivPregunta).appendChild(element3);
    }

    document.querySelector('#tiposRespuesta').value = 0;
    document.querySelector('#numeroRespuesta').value = '';
}

function genPreguntasType(json) {

    $.each(json, function (i, item) {

        asd = asd + 1;

        var idDivPregunta = "contentP" + asd;

        var elementNew = document.createElement("div");

        elementNew.innerHTML += `<br><br>
            <div  id="${idDivPregunta}" class="col-md-12">
                <div >
                    <div class="col-md-12 col-12 container-sm">
                        <div class="col-md-12 col-12 container-sm">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-angle-double-right"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Escribe tu pregunta" aria-label="Username"
                            aria-describedby="basic-addon1" name="pregunta[${asd}][texto_pregunta]" value="${item.nombre}"/>
                            <span class="input-group-addon">
                                <a role="button" class="danger" onclick="borrarGenP(this)">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </span>
                        </div>
                        </div>
                    </div>
                </div>
            </div><div class="row"></div>`;

        document.getElementById('inserDataNew').appendChild(elementNew);

        respuestasGenType(item, idDivPregunta);

    });
}

function respuestasGenType(item, idDivPregunta) {

    var seleccion = item.tipoSeleccion;

    if (item.respuestas != undefined) {


        $.each(item.respuestas, function (i, item1) {
            
            j = i + 1;

            if (seleccion == 1) {

                var element1 = document.createElement("div");

                // RADIO BUTTONS
                element1.innerHTML += `<br><br>
                            <div class="align-center" id="contentRespuesta${j}">
                                <div class="col-md-12 col-12 container-sm">
                                    <div class="col-md-12 col-12 container-sm">
                                           <div class="input-group">
                                               <span class="input-group-addon">
                                                   <i class="fa fa-dot-circle-o"></i>
                                               </span>
                                               <input name="pregunta[${asd}][tipoPregunta]" value="1" class="hidden">
                                               <div class="row">
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" placeholder="Escribe la respuesta ${j}"
                                                        value="${item1.respuesta}"
                                                       aria-describedby="basic-addon1" name="pregunta[${asd}][texto_respuesta][]" required/>
                                                    </div>
                                                    <div class="col-sm-2">
                                                         <input type="double" class="form-control" id="basic-addon1" placeholder="Valor"  name="pregunta[${asd}][valores][]" 
                                                         value="${item1.valor}" required/>
                                                    </div>
                                               </div>
                                               <span class="input-group-addon">
                                                  <a role="button" class="danger" onclick="borrarRespuesta(this)">
                                                     <i class="fa fa-trash"></i>
                                                  </a>
                                               </span>
                                           </div>                                 
                                    </div>
                                </div>
                            </div>`;

                document.getElementById(idDivPregunta).appendChild(element1);

            }
            if (seleccion == 2) {

                var element2 = document.createElement("div");

                // CHECK BOX
                element2.innerHTML += `<br><br>
                            <div class="d-flex justify-content-center p-2" id="contentR${asd}">
                                <div class="col-md-12 col-12 container-sm">
                                    <div class="col-md-12 col-12 container-sm">
                                           <div class="input-group">
                                               <span class="input-group-addon">
                                                   <i class="fa fa-check-square-o"></i>
                                               </span>
                                               <input name="pregunta[${asd}][tipoPregunta]" value="2" class="hidden">
                                               <div class="row">
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" placeholder="Escribe la respuesta ${j}"
                                                        value="${item1.respuesta}"
                                                       aria-describedby="basic-addon1" name="pregunta[${asd}][texto_respuesta][]" required/>
                                                    </div>
                                                    <div class="col-sm-2">
                                                         <input type="double" class="form-control" id="basic-addon1" placeholder="Valor"  name="pregunta[${asd}][valores][]"
                                                         value="${item1.valor}" required/>
                                                    </div>
                                               </div>
                                               <span class="input-group-addon">
                                                  <a role="button" class="danger" onclick="borrarRespuesta(this)">
                                                     <i class="fa fa-trash"></i>
                                                  </a>
                                               </span>
                                           </div>
                                    </div>
                                </div>
                            </div>`;

                document.getElementById(idDivPregunta).appendChild(element2);
            }

        });

    } else {


            var element3 = document.createElement("div");

            // CAJONES TEXTO
            element3.innerHTML += `<br><br>
                            <div class="text-center" id="contentR${asd}">
                                <div class="col-md-12 col-12 container-sm" style="margin-left: 20%;">
                                    <div class="col-md-12 col-12 container-sm">
                                           <div class="input-group">
                                               <label>
                                                 Ingrese la pregunta, el area de texto se mostrara al generar el cuestionario.
                                               </label>         
                                               <input name="pregunta[${asd}][tipoPregunta]" value="3" class="hidden">
                                               <input type="text" class="form-control hidden" name="pregunta[${asd}][texto_respuesta][]"/>                                                                          
                                           </div>
                                    </div>
                                </div>
                            </div>`;
            document.getElementById(idDivPregunta).appendChild(element3);

    }


    document.querySelector('#tiposRespuesta').value = 0;
    document.querySelector('#numeroRespuesta').value = '';
}

function borrarGenP(boton) {
    var borrardiv = boton.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode;
    document.getElementById("inserDataNew").removeChild(borrardiv);
}