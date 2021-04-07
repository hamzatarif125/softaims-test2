function postCrossDomainMessage(msg) {
        var win = document.getElementById('ifr').contentWindow;
        win.postMessage(msg, "https://softaims-test2.herokuapp.com/");
        win.postMessage(msg, "https://softaims-test.herokuapp.com/");
      }
      


// when color input change then this function is used to change box color and set cookie 
function colorPicked()
{
    var color = document.getElementById("colorInput").value;
    document.getElementById("colorBox").style.backgroundColor = color;

    //calling function to set cookie with name of boxColor & passing input value with 8 days expiry for cookies
    var postMsg = {"boxColor": color};
    postCrossDomainMessage(postMsg);
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