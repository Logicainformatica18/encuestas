// function module(id) {
//   // Obtener el div con id "my_content"
//   const contentDiv = document.getElementById("my_content");

//   if (!contentDiv) {
//     console.error("El div con id 'my_content' no existe.");
//     return;
//   }

//   // Verificar si ya existe un iframe dentro del div
//   let iframe = contentDiv.querySelector("iframe");

//   if (!iframe) {
//     // Crear un nuevo iframe si no existe
//     iframe = document.createElement("iframe");
//     iframe.width = "100%";
//     iframe.height = "500px"; // Puedes ajustar la altura según lo necesites
//     iframe.frameBorder = "0";
//     contentDiv.appendChild(iframe);
//   }

//   // Actualizar la URL del iframe en base al ID
//   // Aquí puedes definir la lógica de la URL
//   iframe.src = `http://encuestas.test/encuesta/${id}`;
// }
