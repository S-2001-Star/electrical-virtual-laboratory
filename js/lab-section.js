function intro_body(){
    document.getElementById("para").style.display = "block";
    document.getElementById("para1").style.display = "none";
    document.getElementById("para2").style.display = "none";
}
function object_body(){
    document.getElementById("para").style.display = "none";
    document.getElementById("para1").style.display = "block";
    document.getElementById("para2").style.display = "none";
}
function list_body(){
    document.getElementById("para").style.display = "none";
    document.getElementById("para1").style.display = "none";
    document.getElementById("para2").style.display = "block";
}