<!-- js file for all functions -->
<script src="js/scripts.js"></script>
<?php 
if(isset($_POST['boxColor']))
{ ?>
        <script>
            setCookie("boxColor", "<?php echo $_POST['boxColor']; ?>", 8);
        </script>
<?php
} ?>