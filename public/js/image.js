const imgPreview = (event) => {
    document.getElementById('outputPreview').src = URL.createObjectURL(event.target.files[0]);
}
