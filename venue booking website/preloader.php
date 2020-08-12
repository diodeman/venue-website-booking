<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loading.....</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <style>
       *{
        
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Open Sans";
}


.loader-container{
    width: 100%;
    height: 100vh;
    background-color: #111;
    position: fixed;
    display: flex;
    align-items: center;
    justify-content: center;
}

.loader{
    width: 50px;
    height: 50px;
    border: 5px solid;
    color: #3498db;
    border-radius: 50%;
    border-top-color: transparent;
    animation: loader 1.2s linear infinite;
}

@keyframes loader{
    25%{
        color: #1E185C;
    }
    50%{
        color: #f1c40f;
    }
    75%{
        color: #176638;
    }
    to{
        transform: rotate(360deg);
    }
}

    </style>
</head>
<body>
    <div class="loader-container">
        <div class="loader"></div>
    </div>


    <script>
        $(window).on("load",function(){
            $(".loader-container").fadeOut(1000);
        });
    </script>
</body>
</html>