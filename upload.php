<?php    
    // gets entire POST body
    $data = file_get_contents('php://input');
    // write the data out to the file
    $fp = fopen("video/".rand(100000,999999).".mp4", "wb");

    fwrite($fp, $data);
    fclose($fp);
?>