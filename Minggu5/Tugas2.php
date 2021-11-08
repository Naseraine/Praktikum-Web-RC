<?php 

    function passing(&$data){
        sort($data);
    }


    $data = array("larine", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat");

    echo "Data yang diacak : <br>";
    $i = 0;
    foreach($data as $new_data){
        if($i < count($data)-1){
            echo $new_data.", ";
        }else{
            echo $new_data;
        }
        $i++;
    }

    echo "<br><br>";

    echo "Data yang dilakukan pengurutan : <br>";
    passing($data);

    $i = 0;
    foreach($data as $new_data){
        if($i < count($data)-1){
            echo $new_data.", ";
        }else{
            echo $new_data;
        }
        $i++;
    }
?>