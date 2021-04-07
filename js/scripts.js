// function to check if there is any change in cookies to display change without page reload
function listenCookieChange(callback, interval = 1000) 
{
        let lastCookie = document.cookie;
        setInterval(()=> 
        {
                let cookie = document.cookie;
                if (cookie !== lastCookie) 
                {
                        try 
                        {
                                callback({oldValue: lastCookie, newValue: cookie});
                        } 
                        finally 
                        {
                                lastCookie = cookie;
                        }
                }
        }, 
        interval);
}

// listening to cookie changes
listenCookieChange(({oldValue, newValue})=> 
{
        loadCookieValues()

}, 1000);


// setting cookies function when color changes
function setCookie(cname,cvalue,exdays) 
{

        var d = new Date();

        d.setTime(d.getTime() + (exdays*24*60*60*1000));

        var expires = "expires=" + d.toGMTString();

        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";

}


// getting cookies values function 
function getCookie(cname) 
{

        var name = cname + "=";

        var decodedCookie = decodeURIComponent(document.cookie);

        var ca = decodedCookie.split(';');

        for(var i = 0; i < ca.length; i++) 
        {

                var c = ca[i];

                while (c.charAt(0) == ' ') 
                {

                        c = c.substring(1);

                }

                if (c.indexOf(name) == 0) 
                {

                        return c.substring(name.length, c.length);

                }

        }

        return "";

}

// when color input change then this function is used to change box color and set cookie 
function colorPicked()
{
    var color = document.getElementById("colorInput").value;
    document.getElementById("colorBox").style.backgroundColor = color;

    //calling function to set cookie with name of boxColor & passing input value with 8 days expiry for cookies
    setCookie("boxColor", color, 8);
}

// when page loads then this function is called to set color
function loadCookieValues()
{
    var color = getCookie("boxColor");
    if(color!=null && color!="")
    {
        document.getElementById("colorBox").style.backgroundColor = color;
    }
}