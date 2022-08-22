
function popupWindows() {
    var person;
    if(confirm("Вы уверены, что хотите нажать на кнопку?")) {
        person = prompt("Отлично, тогда введите своё имя");
        alert("Добро пожаловать, " + person);
    } else {
        alert("Тогда я выдам Вам ошибку");
    }
}

function clickBTN1(button){
    alert("Вы нажали на эту кнопку! Кнопка имеет имя " + button.name);
}

var counter = 0;
function mouseCounter(element) {
    counter++;
    element.innerHTML = "На этот текст было наведено " + counter + " раз(а)"
}

function checkMyVideo()
{
    window.open("my_video.html", "_blank");
}

function playPause()
{
    var myVideo = document.getElementById('myvideo');

    if (myVideo.paused) {
        myVideo.play();
    }
    else {
        myVideo.pause();
    }
}