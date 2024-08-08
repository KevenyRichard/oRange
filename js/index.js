/* ----- Slide Show - Créditos a (Sujeito Programador - Youtube) -----*/
let count = 1;
let isManualChange = false;
document.getElementById("radio1").checked = true;

setInterval( function(){
    if (!isManualChange) {
        nextImage();
    }
    isManualChange = false;
}, 5000)

function nextImage() {
    count++;
    if(count>4) {
        count = 1;
    }
    document.getElementById("radio"+count).checked = true;
}

function selectSlide(index) {
    count = index;
    isManualChange = true;
  }