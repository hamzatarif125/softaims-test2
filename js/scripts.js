
// when color input change then this function is used to change box color and set cookie 
function colorPicked()
{
    var color = document.getElementById("colorInput").value;
    document.getElementById("colorBox").style.backgroundColor = color;

    $.ajax({
        type: "POST",
        url: "./request.php", 
        data:{
                color: color
        },
        success: function(response){
        }
        });
        
}

// when page loads then this function is called to set color
function loadCookieValues()
{
    var color = "";
    $.ajax({
        type: "GET",
        url: "./request.php", 
        data:{
                getColor: "Yes"
        },
        success: function(response){
                color = response;
        }
        });
    if(color!=null && color!="")
    {
        document.getElementById("colorBox").style.backgroundColor = color;
    }
}