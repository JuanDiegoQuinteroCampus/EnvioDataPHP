<?php
     move_uploaded_file($_FILES["archivo"]["tmp_name"], $_FILES["archivo"]["name"]);
     echo '<a href="index.html">Atras</a>'
?>