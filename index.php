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
        <script type="text/javascript">
                var currentSessionValue = <?php echo $_SESSION['something']; ?>;
                // pseudo code
                setTimeout(checkVariableValue, 5000);
                function checkVariableValue() {
                        $.ajax({
                        url: 'checkMyValue.php',
                        success: function(newVal) {
                                if (newVal != currentSessionValue);
                                currentSessionValue = newVal;
                                alert('Value Has Changed.');
                                doSomethingDifferent_or_refreshPage();
                                }
                        });
                }
        </script>
</html>