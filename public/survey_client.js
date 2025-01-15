function survey_clientStore(formCount) {
  let completedRequests = 0; // Contador para las solicitudes completadas

  for (let i = 1; i <= formCount; i++) {
      let formData = new FormData(document.getElementById("survey_client" + i));

      let txtTratamientoDatos1=  document.getElementById("txtTratamientoDatos1");
      let txtTratamientoDatos2=  document.getElementById("txtTratamientoDatos2");
      

      let requeridValue = formData.get("requerid");
      let answerValue = formData.get("answer");
      let optionValue = formData.get("option");

      if (!txtTratamientoDatos1.checked || !txtTratamientoDatos2.checked) {
        alert("Debe aceptar la política de tratamiento de datos");
        return;
      }
      

      if (requeridValue === "yes" && !answerValue) {
          alert(`Debe responder la pregunta ${i}`);
          return; // Termina la función si hay un campo obligatorio vacío
      } else if (optionValue === "no_respondido") {
          alert(`Debe marcar una opción en la pregunta ${i}`);
          return; // Termina la función si no se marcó una opción
      }

      // Enviar los datos del formulario actual
      axios({
          method: "post",
          url: "../survey_clientStore",
          data: formData,
          headers: {
              "Content-Type": "multipart/form-data",
          },
      })
          .then(function (response) {
              //console.log(`Pregunta ${i} enviada con éxito`);
              completedRequests++;
              
              // Verificar si esta es la última solicitud
              if (completedRequests == formCount) {
                  alert("Muchas Gracias por la participacion, un mensaje se le ha enviado a su correo.");
                  window.location.reload();
              }
          })
          .catch(function (error) {
              console.error(`Error en la pregunta ${i}:`, error);
          });
  }
}



function refresh() {
  alert("¡Muchas Gracias por completar el cuestionario!");
  window.location.reload();
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
