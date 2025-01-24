async function survey_clientStore(formCount) {
  let completedRequests = 0; // Contador para las solicitudes completadas

  for (let i = 1; i <= formCount; i++) {
    let formData = new FormData(document.getElementById("survey_client" + i));

    let txtTratamientoDatos1 = document.getElementById("txtTratamientoDatos1");
    let txtTratamientoDatos2 = document.getElementById("txtTratamientoDatos2");

    let id = formData.get("survey_id");
    let requeridValue = formData.get("requerid");
    let answerValue = formData.get("answer");
    let selectValue = formData.get("selection_detail_id");

    let typeValue = formData.get("type");

    if (!txtTratamientoDatos1.checked) {
      alert("Debe aceptar la política de tratamiento de datos");
      return;
    }

    if (typeValue === "selection") {
      if (requeridValue === "yes" && selectValue == "0") {
        alert(`Debe responder la pregunta ${i}`);
        return;
      }
    }
    if (typeValue == "short_answer" || typeValue == "email" || typeValue == "multiple_option") {
      if (requeridValue === "yes" && !answerValue) {
        alert(`Debe responder la pregunta ${i}`);
        return;
      }
    }
    if (typeValue === "file") {
      if (requeridValue === "yes" && (!answerValue || answerValue.size === 0)) {
        alert(`Debe seleccionar un archivo para la pregunta ${i}`);
        return;
      }
    }

    // Enviar los datos del formulario actual
    axios({
      method: "post",
      url: "../../survey_clientStore",
      data: formData,
      headers: {
        "Content-Type": "multipart/form-data"
      }
    })
      .then(function(response) {
        //console.log(`Pregunta ${i} enviada con éxito`);
        completedRequests++;

        // Verificar si esta es la última solicitud
        if (completedRequests == formCount) {
          // Seleccionar el div con el ID específico
          const targetDiv = document.getElementById("targetDiv");

          // Reemplazar su contenido con el mensaje de agradecimiento
          targetDiv.innerHTML = `
                       <div class="container-fluid vh-100 d-flex justify-content-center align-items-center gradient-background"style="background: radial-gradient(circle, #023039 75%,black);">
        <div class="text-center">
            <h1 class="mb-4 ">🎉 Gracias por postular a una convocatoria de Aybar Corp 🎉</h1>
            <p class="fs-5 text-white">Estamos emocionados de recibir tu solicitud. 😊</p>
        </div>
    </div>`;
          executeWithoutBlocking(surveyNotify(id));
        }
      })
      .catch(function(error) {
        console.error(`Error en la pregunta ${i}:`, error);
      });
  }
}
function surveyNotify(id) {
  var formData = new FormData();
  formData.append("id", id);
  axios({
    method: "post",
    url: "../../surveyNotify",
    data: formData,
    headers: {
      "Content-Type": "multipart/form-data"
    }
  })
    .then(function(response) {
      //handle success
      console.log("Notificado con éxito");
    })
    .catch(function(response) {
      //handle error
      console.log(response);
    });
}
function refresh() {
  alert("¡Muchas Gracias por completar el cuestionario!");
  window.location.reload();
}
function executeWithoutBlocking(fn) {
  setTimeout(fn, 0);
}
function survey_clientEdit(id, student) {
  var formData = new FormData(document.getElementById("qualification"));
  formData.append("id", id);
  axios({
    method: "post",
    url: "survey_clientEdit",
    data: formData,
    headers: {
      "Content-Type": "multipart/form-data"
    }
  })
    .then(function(response) {
      //handle success
      var contentdiv = document.getElementById("student_description");
      contentdiv.innerHTML = student;
      qualification.id.value = response.data["id"];
      qualification.n1.value = response.data["n1"];
      qualification.n2.value = response.data["n2"];
      qualification.n3.value = response.data["n3"];
    })
    .catch(function(response) {
      //handle error
      console.log(response);
    });
}

function survey_clientUpdate() {
  var formData = new FormData(document.getElementById("qualification"));
  axios({
    method: "post",
    url: "survey_clientUpdate",
    data: formData,
    headers: {
      "Content-Type": "multipart/form-data"
    }
  })
    .then(function(response) {
      //handle success
      var contentdiv = document.getElementById("mycontent");
      contentdiv.innerHTML = response.data;
      //carga pdf- csv - excel
      datatable_load();
      alert("Modificado Correctamente");
    })
    .catch(function(response) {
      //handle error
      console.log(response);
    });
}

function survey_clientDestroy(id) {
  if (confirm("¿Quieres eliminar este registro?")) {
    var formData = new FormData(document.getElementById("survey_client"));
    formData.append("id", id);
    axios({
      method: "post",
      url: "survey_clientDestroy",
      data: formData,
      headers: {
        "Content-Type": "multipart/form-data"
      }
    })
      .then(function(response) {
        //handle success
        var contentdiv = document.getElementById("mycontent");
        contentdiv.innerHTML = response.data;
        //carga pdf- csv - excel
        datatable_load();
        alert("Eliminado Correctamente");
      })
      .catch(function(response) {
        //handle error
        console.log(response);
      });
  }
}

function registryShow() {
  var formData = new FormData(document.getElementById("show"));
  axios({
    method: "post",
    url: "registryShow",
    data: formData
  })
    .then(function(response) {
      //handle success
      var contentdiv = document.getElementById("mycontent");
      contentdiv.innerHTML = response.data;
      //carga pdf- csv - excel
      datatable_load();
    })
    .catch(function(response) {
      //handle error
      console.log(response);
    });
}
