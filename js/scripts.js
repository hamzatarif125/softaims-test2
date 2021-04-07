


// when color input change then this function is used to change box color and set cookie 
function colorPicked()
{
    var color = document.getElementById("colorInput").value;
    document.getElementById("colorBox").style.backgroundColor = color;

    //calling function to set cookie with name of boxColor & passing input value with 8 days expiry for cookies
    localStorage.setItem("boxColor", color);
}

// when page loads then this function is called to set color
function loadCookieValues()
{
    var color = localStorage.getItem("boxColor");
    if(color!=null && color!="")
    {
        document.getElementById("colorBox").style.backgroundColor = color;
    }
}