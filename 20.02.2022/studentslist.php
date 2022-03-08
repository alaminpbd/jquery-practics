<?php $db = new mysqli('localhost', 'root', '', 'crud_php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $sql = "SELECT * FROM rounds";
    $data = $db->query($sql);


    ?>

    <h1>All Rounds</h1>
    <select name="" id="">
        <option value="">Select One</option>
        <?php while($row = $data->fetch_object()){ ?>
            <option value="<?php echo $row->id; ?>"><?php echo $row->batchname ?></option>
        <?php } ?>
    </select>

    <script>
        $(document).ready(function(){
            $('#round').change(function(){
                var id = $(this).val();
                $.get('student.php')
            });
        });
    </script>
</body>
</html>