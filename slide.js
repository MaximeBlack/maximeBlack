var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
    showDivs(slideIndex += n , classe);
}

function currentDiv(n) {
  showDivs(slideIndex = n, classe);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("collection");
    if (n > x.length) {slideIndex = 1} 
    if (n < 1) {slideIndex = x.length} ;
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none"; 
    }
    x[slideIndex-1].style.display = "block";
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

