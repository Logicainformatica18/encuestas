function surveyStore() {
  var formData = new FormData(document.getElementById("survey"));
  axios({
    method: "post",
    url: "surveyStore",
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
      alert("Registrado Correctamente");
    })
    .catch(function(response) {
      //handle error
      console.log(response);
    });
}

function surveyEdit(id) {
  var formData = new FormData(document.getElementById("survey"));
  formData.append("id", id);
  axios({
    method: "post",
    url: "surveyEdit",
    data: formData,
    headers: {
      "Content-Type": "multipart/form-data"
    }
  })
    .then(function(response) {
      //handle success
      var contentdiv = document.getElementById("mycontent");
      // contentdiv.innerHTML = response.data["description"];
      survey.id.value = response.data["id"];
      survey.title.value = response.data["title"];
      survey.detail.value = response.data["detail"];
      survey.state.value = response.data["state"];
      survey.date_start.value = response.data["date_start"];
      survey.date_end.value = response.data["date_end"];
      survey.type.value = response.data["type"];
      survey.url.value = response.data["url"];
      survey.password.value = response.data["password"];
      if (response.data["email_confirmation"]=="1") {
        survey.email_confirmation.checked = true;
      }
      else{
        survey.email_confirmation.checked = false;
      }
      if (response.data["visible"]=="1") {
        survey.visible.checked = true;
      }
      else{
        survey.visible.checked = false;
      }
    

      // JavaScript para establecer el contenido del textarea
      document.getElementsByClassName("note-editable")[0].innerHTML = response.data["description"];
    })
    .catch(function(response) {
      //handle error
      console.log(response);
    });
}

function surveyUpdate() {
  var formData = new FormData(document.getElementById("survey"));
  axios({
    method: "post",
    url: "surveyUpdate",
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

function surveyDestroy(id) {
  if (confirm("¿Quieres eliminar este registro?")) {
    var formData = new FormData(document.getElementById("survey"));
    formData.append("id", id);
    axios({
      method: "post",
      url: "surveyDestroy",
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

function SurveyDetail(id) {
  var formData = new FormData(document.getElementById("survey"));
  formData.append("id", id);
  axios({
    method: "post",
    url: "survey_detail",
    data: formData,
    headers: {
      "Content-Type": "multipart/form-data"
    }
  })
    .then(function(response) {
      //handle success
      window.location.href = "encuestas_mantenimiento";
      // var contentdiv = document.getElementById("mycontent");
      // contentdiv.innerHTML = response.data;
      //  alert("hola");
    })
    .catch(function(response) {
      //handle error
      console.log(response);
    });
}
