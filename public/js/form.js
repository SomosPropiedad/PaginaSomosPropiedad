// document.getElementById("form").addEventListener("submit", function(e) {
//     e.preventDefault();
//     var form = document.getElementById("form");
//     var formData = new FormData(form);

//     axios.post('publicar_formulario', formData)
//         .then(function(response) {
//             //console.log(response.data);
//         })
//         .catch(function(error) {
//             console.log(error);
//         });
// });


document.getElementById("inmueble").addEventListener("submit", function(e) {
    e.preventDefault();
    //e.stopPropagation();
    var form = document.getElementById("inmueble");
   var formData = new FormData(form);

    axios.post('form_create', formData)
        .then(function(response) {
            //console.log(response.data);
        })
        .catch(function(error) {
            console.log(error);
        });
});






// document.getElementById("comodidades").addEventListener("submit", function(e) {
//     e.preventDefault();
//     var form = document.getElementById("comodidades");
//     var formData = new FormData(form);

//     axios.post('formulario_create', formData)
//         .then(function(response) {
//             //console.log(response.data);
//         })
//         .catch(function(error) {
//             console.log(error);
//         });
// });


// document.getElementById("my-awesome-dropzone").addEventListener("submit", function(e) {
//     e.preventDefault();
//     var form = document.getElementById("my-awesome-dropzone");
//     var formData = new FormData(form);

//     axios.post('inmueble/{inmueble}/files', formData)
//         .then(function(response) {
//             //console.log(response.data);
//         })
//         .catch(function(error) {
//             console.log(error);
//         });
// });


