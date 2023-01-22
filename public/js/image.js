document.getElementById("upload_image").addEventListener("change", function(event) {

    const myModal = new bootstrap.Modal('#modal-crop');

    const modalCrop = document.getElementById('modal-crop');

    var image = document.getElementById('sample_image');

    var files = event.target.files;

    var done = function(url){
        image.src = url;
        myModal.show(modalCrop);
    };

    if(files && files.length > 0){
        reader = new FileReader();
        reader.onload = function(event){
            done(reader.result);
        };
        reader.readAsDataURL(files[0]);
    }

    modalCrop.addEventListener('show.bs.modal', function () {
        const cropper = new Cropper(image ,{
            aspectRatio: 1/1,
            viewMode:3,
            preview: '.preview'
        });
    }).addEventListener('hidden.bs.modal', function (){
        cropper.destroy();
        cropper = null;
    });

    // myModal.on('show.bs.modal', function (){
    //     const cropper = new Cropper(img ,{
    //         aspectRatio: 1/1,
    //         viewMode:3,
    //         preview: '.preview'
    //     });
    // }).on('hidden.bs.modal', function (){
    //     cropper.destroy();
    //     cropper = null;
    // });

});
