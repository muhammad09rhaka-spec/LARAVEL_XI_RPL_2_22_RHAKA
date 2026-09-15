<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home - Laravel Tailwind</title>

    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-blue-600 text-white">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between">

            <h1 class="text-xl font-bold">
                Laravel Website
            </h1>

            <div class="space-x-6">
                <a href="/" class="hover:text-blue-200">
                    Home
                </a>

                <a href="/about" class="hover:text-blue-200">
                    About
                </a>
            </div>

        </div>
    </nav>

    <!-- Content -->
    <main class="max-w-6xl mx-auto px-6 py-20">

        <div class="bg-white rounded-xl shadow-lg p-10 text-center">

            <h2 class="text-4xl font-bold text-gray-800 mb-4">
                Selamat Datang 👋
            </h2>

            <p class="text-gray-600 text-lg mb-8">
                Ini adalah halaman Home menggunakan Laravel dan Tailwind CSS.
            </p>

            <a href="/about"
               class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
                Tentang Kami
            </a>

        </div>

    </main>

</body>
</html>