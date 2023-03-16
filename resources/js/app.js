import './bootstrap';
import Dropzone from 'dropzone';

Dropzone.autoDiscover = false; 
const dropzone = new Dropzone('#dropzone', {
    dictDefaultMessage: 'Select an image for the post',
    acceptedFiles: ".png, .jpg, .jpeg, .gif",
    addRemoveLinks: true,
    dictRemoveFile: 'Remove file',
    maxFiles: 1,
    uploadMultiple: false
});