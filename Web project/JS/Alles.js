function togglepopup()
{
    document.getElementById("popup1").classList.toggle("active");
}

function togglepopup2()
{
    document.getElementById("popup2").classList.toggle("active1");
}
function togglepopup3()
{
    document.getElementById("popup3").classList.toggle("active2");
}

function togglepopup4()
{
    document.getElementById("popup4").classList.toggle("active3");
}
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
  function handleChange(checkbox) {
    if(checkbox.checked == true){
        document.getElementById("body").style.overflow = "hidden";
    }
    if(checkbox.checked ==false)
    {
        document.getElementById("body").style.overflow = "scroll";

    }
}
