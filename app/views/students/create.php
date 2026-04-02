<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
    <link rel="stylesheet" href="/css/output.css">
</head>

<body class="min-h-screen flex flex-col bg-gray-100">
    <!-- Header Start -->
    <header class="bg-blue-500 text-white">
        <div class="flex items-center justify-between container mx-auto p-4">
            <a href="/students" class="font-bold text-xl">Sistem Sekolah</a>
            <a href="/students/create" class="bg-white text-blue-500 px-4 py-2 rounded-lg">+ Tambah Siswa</a>
        </div>
    </header>
    <!-- Header End -->

    <!-- Main Start -->
    <main class="container mx-auto grow">
        <div class="mt-8 space-y-2">
            <!-- Card Header Start -->
            <div class="p-4 shadow rounded-lg bg-white">
                <h1 class="text-2x1 font-bold">Tambah Siswa</h1>
                <p>Menambahkan siswa ke dalam sistem</p>

            </div>
            <!-- Card Header End -->

            <!-- card body Start -->
            <div class="bg-white shadow rounded-lg bg-white p-4">
                <form action="" class="grid grid-cols-2 gap-4">
                    <div class="space-y-2">
                        <label class="block font-bold" for="name">Nama</label>
                        <input class="w-full px-4 py-2 border rounded-lg" type="text" id="name"
                            placeholder="Masukan nama" name="name">
                    </div>

                    <div class="bg-white shadow rounded-lg bg-white p-4">


                        <div class="bg-white shadow rounded-lg bg-white p-4">
                            <form action="">
                                <div class="space-y-2">
                                    <label class="block font-bold" for="nis">NIS</label>
                                    <input class="w-full px-4 py-2 border rounded-lg" type="text" id="nis"
                                        placeholder="Masukan NIS" name="nis">
                                </div>
                                <div class="space-y-2">
                                    <label class="block font-bold" for="class">Kelas</label>
                                    <input class="w-full px-4 py-2 border rounded-lg" type="text" id="class"
                                        placeholder="Masukan nama" name="class">
                                </div>

                                <div class="bg-white shadow rounded-lg bg-white p-4">
                                    <form action="">
                                        <div class="space-y-2">
                                            <label class="block font-bold" for="phone_number">No Telepon</label>
                                            <input class="w-full px-4 py-2 border rounded-lg" type="text"
                                                id="number_phone" placeholder="Masukan No Telepon" name="phone_number">
                                        </div>
                                    </form>
                                </div>
                                <!-- card body End -->
                        </div>

                    </div>
    </main>
    <!-- Main End -->

    <!-- Footer Start -->
    <footer class="bg-gray-800 text-white">
        <div class="text-center p-4">
            &copy <?= date(format: 'Y') ?> Sistem Sekolah - SMK Kristen Immanuel
        </div>
    </footer>
    <!-- Footer End -->


</body>

</html>