<?php
session_start();
?>
<!DOCTYPE html>
<html>
        <head>
                <title>Web2  Softaims</title>

                <!-- css styles file -->
                <link rel="stylesheet" href="css/styles.css">

                <!-- js file for all functions -->
                <script src="js/scripts.js"></script>

                <!-- jquery cdn  -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        </head>
        <script>
        let socket = new WebSocket("wss://softaims-test.herokuapp.com/index.php");
        socket.onmessage = function(event) {
        alert(`[message] Data received from server: ${event.data}`);
        };
        function receiveMessage(event)
        {
                $("#colorInput").val(event.data);
                colorPicked();
                
        }
        window.addEventListener("message", receiveMessage, false);
        </script>
        
        <body onload="loadCookieValues()">

                <h3>Web2</h3>
                <!-- color input start -->
                <label>Select Color: </label>
                <input type="color" name="colorInput" id="colorInput" onchange="colorPicked()">
                <!-- color input end -->
                <br/>
                <br/>
                <!-- color display box -->
                <div id="colorBox" class="colorBox"></div>
                

        </body>
        
</html>