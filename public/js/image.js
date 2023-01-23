document.addEventListener("DOMContentLoaded", () => {


    const myModal = new bootstrap.Modal('#modal-crop');

    const modalCrop = document.getElementById('modal-crop');

    var image = document.getElementById('sample_image');

    var cropper;

    document.getElementById("upload_image").addEventListener("change", function(event) {


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

    });

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


        document.getElementById('crop').addEventListener('click', function(){

            alert('im here mother fucker');

        });

        function cropImage(){
            console.log('passing right here my friend');
            canvas = cropper.getCroppedCanvas({
                width:400,
                height:400
            });

            canvas.toBlob(function(blob){
                url = URL.createObjectURL(blob);
                var reader = new FileReader();
                reader.readAsDataURL(blob);
                reader.onloadend = function(){
                    var base64data = reader.result;
                    $.ajax({
                        url:'upload.php',
                        method:'POST',
                        data:{image:base64data},
                        success:function(data)
                        {
                            $modal.modal('hide');
                            $('#uploaded_image').attr('src', data);
                        }
                    });
                };
            });
        }



});



