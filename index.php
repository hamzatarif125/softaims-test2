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
        <!-- receive message from web1 -->
        <script>
        function receiveMessage(event)
        {
                $("#colorBox").css("background-color", event.data);
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
                <!-- <iframe style="display:none;" src="https://softaims-test2.herokuapp.com/getlocalstorage.html" id="ifr"></iframe> -->

        </body>

         
        
</html>