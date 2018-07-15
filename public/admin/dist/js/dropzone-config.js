/*
 * Copyright (c) 2018. Arash Hatami
 */

var total_photos_counter = 0;
var name = "";
Dropzone.options.myDropzone = {
  uploadMultiple: false,
  parallelUploads: 1,
  maxFilesize: 16,
  maxFiles: 1,
  previewTemplate: document.querySelector('#preview').innerHTML,
  addRemoveLinks: false,
  dictRemoveFile: 'Remove file',
  dictFileTooBig: 'Image is larger than 16MB',
  timeout: 0,
  renameFile: function (file) {
    name = new Date().getTime() + Math.floor((Math.random() * 100) + 1) + '_' + file.name;
    return name;
  },

  init: function () {
    this.on("removedfile", function (file) {
      $.post({
        url: '/images-delete',
        data: {id: file.customName, _token: $('[name="_token"]').val()},
        dataType: 'json',
        success: function (data) {
          total_photos_counter--;
          $("#counter").text("# " + total_photos_counter);
        }
      });
    });
  },
  success: function (file, response) {
    total_photos_counter++;
    $("#counter").text("# " + total_photos_counter);
    file["customName"] = name;
    document.getElementById("videoID").value = "" + response.id;
    document.getElementById("confirm").style.display = 'block';
    document.getElementById("uploadError").style.display = 'none';
  }
};
