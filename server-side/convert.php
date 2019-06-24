<?php

    $style = $_GET['style'];
    echo $style;
    
    if (!strcmp($style, "monet"))
    {
        exec('/usr/local/bin/python3 inference.py --model pretrained/photo2monet.pb --input input.* --output output.jpg --image_size 256');
    }
     if(!strcmp($style, "ukiyoe"))
    {
        exec('/usr/local/bin/python3 inference.py --model pretrained/photo2ukiyoe.pb --input input.* --output output.jpg --image_size 256');
    }
    if(!strcmp($style, "vangogh"))
    {
        exec('/usr/local/bin/python3 inference.py --model pretrained/photo2vangogh.pb --input input.* --output output.jpg --image_size 256');
    }

    ?>
