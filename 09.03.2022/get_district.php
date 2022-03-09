<?php 
    $conn = new mysqli('localhost', 'root', '', 'pwad50_div_dist'); 



    $id = $_GET['divid'];
    echo $id;
    

    $data = $conn->query('SELECT * FROM districts WHERE divId = "$id"');
    echo '<option value="" disabled selected>Select District</option>';

    while($row = $data->fetch_object()){
        echo "<option>" . $row->disName . "</option>";
    }


?>

