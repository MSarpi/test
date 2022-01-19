<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button id="btn">indexar</button>

    <div id="response">

    </div>

    <script>
        function ajax(){
            const http=new XMLHttpRequest();
            const url = 'http://127.0.0.1:8000/test';

            http.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    console.log(this.responseText);
                    document.getElementById("response").innerHTML = this.responseText;
                }
            }
            http.open("GET", url);
            http.send();
        }
        document.getElementById("btn").addEventListener("click", function(){
            ajax();
        });
    </script>
</body>
</html>