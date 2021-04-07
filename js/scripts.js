
// when color input change then this function is used to change box color and set cookie 
function colorPicked()
{
    var color = document.getElementById("colorInput").value;
    document.getElementById("colorBox").style.backgroundColor = color;
        
}

// when page loads then this function is called to set color
function loadCookieValues()
{
    var color = "";
    if(color!=null && color!="")
    {
        document.getElementById("colorBox").style.backgroundColor = color;
    }
}