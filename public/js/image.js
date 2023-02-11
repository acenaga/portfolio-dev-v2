document.addEventListener("DOMContentLoaded", () => {

    // var url = window.location.pathname;

    const myModal = new bootstrap.Modal('#modal-crop');

    const modalCrop = document.getElementById('modal-crop');

    var image = document.getElementById('sample_image');

    var cropper;

    document.getElementById("upload_image").addEventListener("change", function(event) {

        console.log(url);

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
            var ratio;
            if(url.includes('client-review')){
                ratio = 1/1;
            }else if(url.includes('some')){
                ratio = 16/9;
            }
            const cropper = new Cropper(image ,{
                aspectRatio: ratio,
                viewMode:2,
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



