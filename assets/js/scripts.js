function toggleSection(section){
    $('section').hide();
    $("#"+section).show('slow');
}
// ======================================================================= //

document.querySelector('#items').addEventListener('wheel', event => {
    if(event.deltaY > 0){ //Scroll Top
        event.target.scrollBy(300,0);
    }else{ //Scroll Down
        event.target.scrollBy(-300,0);
    }
});

$(function(){
    setInterval(event => {
        width = +$('#items').css('width').replace('px','');
        count = $('#items img').length;
        currentScroll = $('#items').scrollLeft();
        if(currentScroll < ((width*count)-(width*1.3))){
            $('#items').scrollLeft(currentScroll+width);
        }else{
            $('#items').scrollLeft(0);            
        }
    }, 3000);
});


// ======================================================================== //

let time = 3000,
    currentImageIndex = 0,
    images = document.querySelectorAll('#slider img'),
    max = images.length;

function nextImage(){
    images[currentImageIndex].classList.remove('selected');

    currentImageIndex++;
    if(currentImageIndex >= max){ currentImageIndex = 0; }

    images[currentImageIndex].classList.add('selected');
}
function start(){
    setInterval(()=>{
        nextImage();
    }, time);
}

window.addEventListener('load', start);