<template>
<div>
    <label class="d-flex">Foto:</label>
    <div class="dropzone" ref="fotoDropzone"></div>
</div>
</template>

<script>
import Dropzone from 'dropzone';

export default {
mounted() {
    Dropzone.autoDiscover = false;
    this.initDropzone();
},
methods: {
    initDropzone() {
    const options = {
        url: 'caminho/do/upload',
        acceptedFiles: 'image/*',
        maxFiles: 1,
        maxFilesize: 2,
        addRemoveLinks: true,
        dictDefaultMessage: 'Arraste e solte a imagem aqui ou clique para selecionar',
        dictRemoveFile: 'Remover imagem',
        dictFileTooBig: 'A imagem é muito grande ({{filesize}} MB). Tamanho máximo permitido: {{maxFilesize}} MB.',
        dictInvalidFileType: 'Formato de arquivo inválido. Apenas imagens são permitidas.',
        dictResponseError: 'Erro ao enviar o arquivo ({{statusCode}})',
        init: function() {
        this.on('maxfilesexceeded', function(file) {
            this.removeAllFiles();
            this.addFile(file);
        });
        }
    };

    this.dropzone = new Dropzone(this.$refs.fotoDropzone, options);
    }
},
beforeDestroy() {
    if (this.dropzone) {
    this.dropzone.destroy();
    }
}
};
</script>

<style>
/* Estilos opcionais para o campo de escolher imagem personalizado */
.dropzone {
    border: 2px dashed #ccc;
    height: 37.6px;
    padding: 20px;
    display: flex;
    align-items: center;
    text-align: center;
    font-size: 12px;
}
</style>
