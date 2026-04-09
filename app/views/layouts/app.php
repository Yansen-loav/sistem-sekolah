<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar siswa</title>
    <link rel="stylesheet" href="/css/output.css">
</head>
<body>
 
    <style>
       
        body{
            animation: rgbBackground 1s infinite;
            overflow: hidden;
        }
@keyframes rgbBackground {
    0% { background-color: red; }
    10% { background-color: orange; }
    20% { background-color: yellow; }
    30% { background-color: lime; }
    40% { background-color: cyan; }
    50% { background-color: blue; }
    60% { background-color: indigo; }
    70% { background-color: purple; }
    80% { background-color: magenta; }
    90% { background-color: pink; }
    100% { background-color: red; }
}
        .isian{
            margin: 0;
            display: flex;
            flex-direction: column;
            gap: 10px;
            max-width: 20rem;
            background-color: blue;
            border-radius: 10px;
            margin: 20px;
            padding: 10px;
            animation: muter 3s linear infinite;
            position: absolute;
            top: 100px;
            left: 100px;
            position: absolute;
            width: 320px;
            box-sizing: border-box;
 
 
        }      
 
@keyframes muter{
    0% {
        transform: translate(0,0) rotate(0deg);
    }
    25% {
        transform: translate(100px,-50px) rotate(90deg);
    }
    50% {
        transform: translate(-100px,50px) rotate(180deg);
    }
    75% {
        transform: translate(50px,100px) rotate(270deg);
    }
    100% {
        transform: translate(0,0) rotate(360deg);
    }
}
        .isian > label{
            color: red;
            background-color: white;
            margin: 0;
            align-self: flex-start;
            padding-left: 10px;
            padding-right: 10px;
            align-items: center;
        }
        .isian > input{
            background-color: red ;
            border-radius: 5px;
        }
        .isian > button{
            font-family: Arial, Helvetica, sans-serif;
            background-color: black;
            color: blue;
            border-radius: 10px;
            padding: 10px;
           
        }
    </style>
 
 <!-- Header -->
 
 
 
 
<!-- Footer End -->
 
 

 
    <form action="" class="isian">
       <img src="/assets/Group 99 1.png" alt="">
    </form>
 
    <script>
 
const box = document.querySelector(".isian");
 
let x = 100;
let y = 100;
 
let dx = 2;
let dy = 2;
 
function animate(){
 
    const width = box.offsetWidth;
    const height = box.offsetHeight;
 
    const screenW = window.innerWidth;
    const screenH = window.innerHeight;
 
    x += dx;
    y += dy;
 
    if(x + width > screenW || x < 0){
        dx = -dx;
    }
 
    if(y + height > screenH || y < 0){
        dy = -dy;
    }
 
    box.style.left = x + "px";
    box.style.top = y + "px";
 
    requestAnimationFrame(animate);
}
 
animate();
 
</script>
</body>
    
<body class="min-h-screen flex flex-col bg-gray-100">
<?php require_once '../app/views/layouts/partials/header.php'; ?>

    <main class="container mx-auto grow">
    <?php require_once $content ?>
    </main>

   <?php require_once '../app/views/layouts/partials/footer.php'; ?>
</body>
</html>