<?php
    // Check if file is uploaded
    if(isset($_FILES['timeTable'])) {
        // Target directory
        $target_dir = "file/";

        // Specify the path to save
        $target_file = $target_dir . "timeTable." . pathinfo($_FILES['timeTable']['name'], PATHINFO_EXTENSION);

        // Remove existing files in the folder
        $files = glob($target_dir.'*'); 
        foreach($files as $file) {
            if(is_file($file)) {
                unlink($file); 
            }
        }

        // Attempt to move the uploaded file to target directory
        if(move_uploaded_file($_FILES['timeTable']['tmp_name'], $target_file)) {
            echo "File uploaded successfully.";
        } else {
            echo "There was an error uploading the file.";
        }
    } else {
        echo "No file uploaded.";
    }
?>
