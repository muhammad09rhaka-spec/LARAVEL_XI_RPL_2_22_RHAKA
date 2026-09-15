<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>About - Laravel Tailwind</title>

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

        <div class="bg-white rounded-xl shadow-lg p-10">

            <h2 class="text-4xl font-bold text-gray-800 mb-6">
                Tentang Website
            </h2>

            <p class="text-gray-600 text-lg leading-relaxed mb-6">
                Website ini dibuat menggunakan framework Laravel
                dan Tailwind CSS. Website memiliki dua halaman,
                yaitu Home dan About.
            </p>

            <p class="text-gray-600 text-lg leading-relaxed mb-8">
                Laravel digunakan untuk mengatur struktur aplikasi
                dan routing, sedangkan Tailwind CSS digunakan untuk
                membuat tampilan website.
            </p>

            <a href="/"
               class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
                Kembali ke Home
            </a>

        </div>

    </main>

</body>
</html>