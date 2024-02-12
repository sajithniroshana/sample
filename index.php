<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cat</title>
    <link rel="stylesheet" href="bootstrap.css">
    <script>
        function makeRequest() {
            var inputText = document.getElementById("inputText").value;
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("response").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "otherpage.php?inputText=" + inputText, true); 
            xhttp.send();
        }
    </script>
</head>

<body class="bg-dark">

    <div class="d-flex justify-content-center align-items-center"><input type="text" id="inputText" placeholder="Enter text">
    <button type="button" onclick="makeRequest();" class="btn btn-primary">Make Request</button></div>
    
    <div id="response"></div>

</body>

</html>