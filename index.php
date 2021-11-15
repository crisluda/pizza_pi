<?php
$name = "nthc";
$names = [
    ["name"=>"john","age"=>"25"],
    ["name"=>"jane","age"=>"24"],
    ["name"=>"joe","age"=>"23"],
    ["name"=>"jim","age"=>"22"],
    ["name"=>"jill","age"=>"21"],
];
echo $names[0]["name"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorials</title>
</head>
<body>
    <h1>Names</h1>
    <ul>
    <!-- <?php
foreach($names as $name){?>
<?php
    if($name["name"] == "jim"){
        echo "<li>".$name["name"]."</li>";
    }
    ?>
<?php
}?> -->
    </ul>
    
</body>
</html>

