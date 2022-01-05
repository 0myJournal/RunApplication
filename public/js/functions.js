
function getImage(input, imageContainer){

    var files = input.files;
    if (FileReader && files && files.length) {
        var fr = new FileReader();
        fr.onload = function () {
            document.getElementById(imageContainer).src = fr.result;
            //console.log(fr.result);
            if(document.getElementById('coverLink')){
                setCoverLink('formimage','coverLink');
            }
        }
        fr.readAsDataURL(files[0]);
    }
    //getSrcFromImage(imageContainer);
}