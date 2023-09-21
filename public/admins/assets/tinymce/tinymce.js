tinymce.init({
    selector: '.editor',
    height: 300,
    menubar: false,
    plugins: [
        'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
        'searchreplace', 'wordcount', 'visualblocks', 'code', 'fullscreen', 'insertdatetime', 'media',
        'table', 'template', 'codesample'
    ],  
    toolbar: 'undo redo styles bold italic underline alignleft aligncenter alignright alignjustify bullist numlist outdent indent image preview media fullscreen code link forecolor backcolor',

    content_style: 'body { font-family: Arial, Helvetica, sans-serif; font-size: 14px; }',
    images_upload_url: '/upload-image', // Use a named route for the image upload
    images_upload_credentials: true,
    file_picker_types: 'image',
    file_picker_callback: function (cb, value, meta) {
        var input = document.createElement('input');
        input.setAttribute('type', 'file');
        input.setAttribute('accept', 'image/*');

        input.onchange = function () {
            var file = this.files[0];
            var reader = new FileReader();

            reader.onload = function () {
                var id = 'blobid' + (new Date()).getTime();
                var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                var base64 = reader.result.split(',')[1];
                var blobInfo = blobCache.create(id, file, base64);
                blobCache.add(blobInfo);

                cb(blobInfo.blobUri(), { title: file.name });
            };

            reader.readAsDataURL(file);
        };

        input.click();
    },
});
