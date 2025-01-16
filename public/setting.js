function settingStore() {
  var formData = new FormData(document.getElementById("setting"));
  axios({
    method: "post",
    url: "settingStore",
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

function settingEdit(id) {
  var formData = new FormData(document.getElementById("setting"));
  formData.append("id", id);
  axios({
    method: "post",
    url: "settingEdit",
    data: formData,
    headers: {
      "Content-Type": "multipart/form-data"
    }
  })
    .then(function(response) {
      //handle success
      var contentdiv = document.getElementById("mycontent");
      // contentdiv.innerHTML = response.data["description"];
      setting.id.value = response.data["id"];
      setting.description.value = response.data["description"];
      setting.detail.value = response.data["detail"];
    })
    .catch(function(response) {
      //handle error
      console.log(response);
    });
}

function settingUpdate() {
  var formData = new FormData(document.getElementById("setting"));
  axios({
    method: "post",
    url: "settingUpdate",
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

function settingDestroy(id) {
  if (confirm("¿Quieres eliminar este registro?")) {
    var formData = new FormData(document.getElementById("setting"));
    formData.append("id", id);
    axios({
      method: "post",
      url: "settingDestroy",
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

function settingShow() {
  var formData = new FormData(document.getElementById("show"));
  axios({
    method: "post",
    url: "settingShow",
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
