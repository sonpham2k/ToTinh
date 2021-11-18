var b = document.querySelector("button.no");
b.addEventListener("mouseover",change);
function change()
{
    var i = Math.floor(Math.random()*500)+1;
    var j = Math.floor(Math.random()*500)+1;
    b.style.left = i+"px";
    b.style.top = j+"px";
}