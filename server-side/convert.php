<?php

    $style = $_GET['style'];
    exec("/usr/local/bin/python3 inference.py --model pretrained/$style.pb --input input.* --output output.jpg --image_size 256");

    ?>
