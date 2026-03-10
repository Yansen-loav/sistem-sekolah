<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    <link rel="stylesheet" href="/css/output.css">
</head>
<body class="min-h-screen flex flex-col">
    <header class="bg-red-500 text-white container mx-auto p-4">
        <div class="flex items-center justify-between">
            <a href="/students" class="font-bold text-xl">Sistem Sekolah</a>
            <a href="/students/create" class="bg-white text-red-500 px-4 py-2 rounded-lg">+ Tambah Siswa</a>
        </div>
    </header>

    <main class="container mx-auto grow">
    <div class="mt-8">
        <div class="p-4 shadow">
            <h1 class="text-2xl font-bold">Daftar Siswa</h1>
            <p>Menampilkan data siswa yang terdaftar</p>
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