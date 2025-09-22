

// display Image
document.getElementById("image_input").addEventListener("change", function(){
    var reader = new FileReader();

    reader.onload = function(e){
        var imagePreview = document.getElementById("imagePreview");
        imagePreview.innerHTML = '<img src="' + e.target.result + '" width="100px" hight="100px" alt="Image Preview" /> ';
    }

    reader.readAsDataURL(this.files[0]);
})

// alert submit