import './bootstrap';
import Dropzone from 'dropzone';


Dropzone.autoDiscover = false; 
const dropzone = new Dropzone('#dropzone', {
    dictDefaultMessage: 'Select an image for the post',
    acceptedFiles: ".png, .jpg, .jpeg, .gif",
    addRemoveLinks: true,
    dictRemoveFile: 'Remove file',
    maxFiles: 1,
    uploadMultiple: false,

    init: () => {
        if (document.querySelector('[name="imagePath"]').ariaValueMax.trim() != '/') {
            const imageUpload = {}
            imageUpload.size = 1234;
            imageUpload.name = document.querySelector('[name="imagePath"]').value
            
            this.options.addedfile.call(this, imageUpload)
            this.options.thumbnail.call(this, imageUpload, `/uploads/${imageUpload.name}`)
    
            imageUpload.previewElement.classList.add('dz-success', 'dz-complete')
        }
    }
})


dropzone.on('success', (file, response) => {
    console.log('UPLOAD SUCCESS')
    document.querySelector('[name="imagePath"]').value = response.imageUpload
})

dropzone.on('removedfile', () => {
    console.log('REMOVED SUCCESS')
    document.querySelector('[name="imagePath"]').value = '/'
})