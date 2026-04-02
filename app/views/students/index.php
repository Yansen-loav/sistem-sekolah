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
        <label for="">Frii robaks</label>
 
        <label for="">username</label>
        <input type="text" name="nama" id="usn">
       
        <label for="">password</label>
        <input type="text" name = "password">
        <button onclick="alert('Free RObux in acount')">Submit</button>
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
    <header class="bg-gradient-to-r from-blue-600 to-blue-800 text-white shadow-lg">    
        <div class="flex justify-between items-center container mx-auto py-6 px-4">
            <a href="/students" class="font-bold text-2xl hover:text-blue-200 transition">Sistem Sekolah</a>
            <a href="/students/create" class="bg-white text-blue-600 px-6 py-2 rounded-lg font-semibold hover:bg-blue-50 transition shadow-md">+ Tambah Siswa</a>
        </div>
    </header>

    <main class="container mx-auto grow">
    <div class="mt-8 space-y-2">
        <div class="p-4 shadow rounded-lg bg-white">
            <h1 class="text-2xl font-bold">Daftar Siswa</h1>
            <p>Menampilkan data siswa yang terdaftar</p>
    </div>

    <div class="bg-white shadow rounded-lg">
        <table class="w-full">
            <thead class="bg-gray-200">
                <tr>
                <th class="px-4 py-2 text-left">No</th>
                <th class="px-4 py-2 text-left">Nama</th>
                <th class="px-4 py-2 text-left">NIS</th>
                <th class="px-4 py-2 text-left">Kelas</th>
                <th class="px-4 py-2 text-left">No Telepon</th>
                <th class="">Aksi</th>
            </tr>
        </thead>
            <tbody>
                <tr>
                    <td class="px-4 py-2 text-left">1</td>
                    <td class="px-4 py-2 text-left">Darill</td>
                    <td class="px-4 py-2 text-left">1234</td>
                    <td class="px-4 py-2 text-left">XI TKJ 2</td>
                    <td class="px-4 py-2 text-left">085849264487</td>
                    <td class="px-4 py-2">
                        <div class="flex justify-center items-center gap-4">
                            <a href="" class="text-blue-500 hover:text-blue-700">Detail</a>
                            <a href="" class="text-green-500 hover:text-green-700">Edit</a>
                            <a href="" class="text-red-500 hover:text-red-700">Hapus</a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

        </div>
    </main>

    <footer class="bg-gray-600 text-white">
        <div class="text-center p-4">
            &copy <?= date('Y')?> Sistem Sekolah - SMK Kristen Immanuel
        </div>
    </footer>
</body>
</html>