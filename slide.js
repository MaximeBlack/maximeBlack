var slideIndex = 1;
showDivs(slideIndex,1);

function plusDivs(n, classe) {
    showDivs(slideIndex += n , classe);
}

function currentDiv(n, classe) {
  showDivs(slideIndex = n, classe);
}

function showDivs(n, classe) {
    var i;
    if(classe == 0)
    {
        var x = document.getElementsByClassName("collection");
    }
    else
    {
        var x = document.getElementsByClassName("histoire-img");
    }
    var dots = document.getElementsByClassName("badge");
    if (n > x.length) {slideIndex = 1} 
    if (n < 1) {slideIndex = x.length} ;
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none"; 
    }
    for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace("white", "");
  	}
    x[slideIndex-1].style.display = "block"; 
    dots[slideIndex-1].className += " white";
}

var myIndex = 0;

function carousel(classe) {
    var i;
    if(classe == 1)
    {
        var x = document.getElementsByClassName("univers");
    }
    else if(classe == 2)
    {
        var x = document.getElementsByClassName("menu");
    }
    else
    {
        var x = document.getElementsByClassName("histoire-img");
    }

    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 9000);    
}

