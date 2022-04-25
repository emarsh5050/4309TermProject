
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
    content.style.display = "none";
    } else {
    content.style.display = "block";
    }
}); }

function changeStyleNone(){
    var element = document.getElementById("sidebar");
    element.style.display = "none";
}    

function changeStyleBlock(){
    var element = document.getElementById("sidebar");
    element.style.display = "block";
}


var navOpener = document.getElementById("navbar-open");
var navbar = document.getElementById("main-navigation");

navOpener.onclick = function(){
    navbar.classList.add("open");
}

window.onClick = function(event) {
    if (!event.target.matches("navbar")) {
        navbar.classList.remove("open");
    }
}

var navCloser = document.getElementById("navbar-close");

navCloser.onclick = function(){
    navbar.classList.remove("open");
}