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
      setting.title.value = response.data["title"];
      setting.description.value = response.data["description"];
      setting.color_1.value = response.data["color_1"];
      setting.color_2.value = response.data["color_2"];
      setting.color_3.value = response.data["color_3"];
      setting.color_4.value = response.data["color_4"];
      setting.color_5.value = response.data["color_5"];
      setting.color_6.value = response.data["color_6"];
      setting.color_7.value = response.data["color_7"];
      setting.color_8.value = response.data["color_8"];
      setting.color_9.value = response.data["color_9"];
      setting.color_10.value = response.data["color_10"];
      setting.color_11.value = response.data["color_11"];
      setting.color_12.value = response.data["color_12"];
      setting.color_13.value = response.data["color_13"];
      setting.color_14.value = response.data["color_14"];
      setting.color_15.value = response.data["color_15"];
      

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
    
    
    axios({
      method: "get",
      url: "settingDestroy/"+id, 
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
