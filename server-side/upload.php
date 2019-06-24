<?php
// Path to move uploaded files
$target_path = dirname(__FILE__).'/';

if (isset($_FILES['image']['name'])) {

    $ext = strrchr($_FILES['image']['name'],".");
    $name = $uploaddir . "input" . $ext;

    $target_path = $name;

    try {
        // Throws exception incase file is not being moved
        if (!move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) {
            // make error flag true
            echo json_encode(array('status'=>'fail', 'message'=>'could not move file'));
        }

        echo json_encode(array('status'=>'success', 'message'=>'Upload succesfully!'));


       /* exec('/usr/local/bin/python3 inference.py --model pretrained/photo2monet.pb --input input.* --output output.jpg --image_size 256');

         File successfully uploaded
        
        
        while( !file_exists('output.jpg') )
        {
            sleep(1);
        }
        
        exec('rm input.*');
        echo json_encode(array('status'=>'success', 'message'=>'Converted'));*/

    } catch (Exception $e) {
        // Exception occurred. Make error flag true
        echo json_encode(array('status'=>'fail', 'message'=>$e->getMessage()));
    }
} else {
    // File parameter is missing
    echo json_encode(array('status'=>'fail', 'message'=>'Not received any file'));
}
    


?>
