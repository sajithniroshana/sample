<?php
if(isset($_GET['inputText'])) {
    $inputText = $_GET['inputText'];

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <img src="<?php echo $inputText?>.jpg" alt="">
    <img src="<?php echo $inputText?>.png" alt="">
</body>
</html>
