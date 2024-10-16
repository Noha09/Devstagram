import Dropzone from "dropzone";

Dropzone.autoDiscover = false;

const dropzone = new Dropzone("#dropzone", {
    dictDefaultMessage: 'Sube aqui tu imagen',
    acceptedFiles: ".png, .jpg, .jpeg, .gif",
    addRemoveLinks: true,
    dictRemoveFile: 'Borrar archivo',
    maxFiles: 1,
    uploadMultiple: false
});

dropzone.on('sending', (file, xhr, frormData) => {
    console.log(frormData);
});

dropzone.on('success', (file, response) => {
    console.log(response);
});

dropzone.on('error', (file, message) => {
    console.log(message);
});

dropzone.on('removedfile', (file, message) => {
    console.log("Archivo eliminado");
});