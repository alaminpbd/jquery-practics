<?php $conn = new mysqli('localhost', 'root', '', 'pwad50_div_dist') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upzilla Information </title>
    <script src="../js/jquery.min.js"></script>
</head>
<body>
    <script>
        $(document).ready(function(){
            $('#divid').change(function(){
                var id = $(this).val();
                $.get('get_district.php', {divid:id}, function(data){
                    alert($('#disid').html(data));
                });
            });
        });
    </script>
    <h2>Division wise Upazilla Information</h2>
    <form action="">
        <?php 
            $data = $conn->query("SELECT * FROM divisions");
        ?>
        <select id="divid">
            <option value="" disabled selected>Select Division</option>
            <?php while($row = $data->fetch_object()){ ?>
                <option value="<?php echo $row->id; ?>"><?php echo $row->divName; ?></option>
            <?php } ?>
        </select>
        <select id="disid">
            <option value="">Select District</option>
        </select>
        <select name="upazila">
            <option value="">Select Upazila</option>
        </select>
    </form>
</body>
</html>