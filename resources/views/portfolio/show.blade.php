<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CV - {{ $data->nama }}</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        @media print {
            body {
                background: white !important;
            }

            .no-print {
                display: none !important;
            }

            .cv-paper {
                box-shadow: none !important;
                margin: 0 !important;
                width: 100% !important;
                max-width: none !important;
            }

            @page {
                size: A4;
                margin: 12mm;
            }
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen py-10">

    <div class="max-w-4xl mx-auto px-4">

        <div class="flex justify-between items-center mb-6 no-print">
            <a href="{{ route('portfolio.index') }}"
               class="text-gray-600 hover:text-gray-900">
                &larr; Kembali ke tabel
            </a>

            <button onclick="window.print()"
                    class="bg-blue-600 hover:bg-blue-700 text-white
                           px-5 py-2 rounded-lg">
                Cetak / Simpan PDF
            </button>
        </div>

        <main class="cv-paper max-w-4xl mx-auto bg-white shadow-xl
                     rounded-xl overflow-hidden">

            <!-- Header CV -->

<!-- Header CV -->
<header class="bg-slate-900 text-white px-10 py-12">
    <div class="flex flex-col-reverse sm:flex-row
                justify-between items-center gap-6">

        <!-- Informasi Nama -->
        <div class="flex-1 text-center sm:text-left">
            <p class="text-blue-300 text-sm tracking-[0.3em] mb-3">
                CURRICULUM VITAE
            </p>

            <h1 class="text-4xl md:text-5xl font-bold break-words">
                {{ $data->nama }}
            </h1>

            <p class="text-slate-300 mt-3">
                Personal Profile
            </p>
        </div>

        <!-- Foto Profil -->
        <div class="shrink-0">
            @if (!empty($data->foto))
                <img
                    src="{{ asset('storage/' . $data->foto) }}"
                    alt="Foto {{ $data->nama }}"
                    class="w-32 h-40 object-cover rounded-lg
                           border-4 border-white shadow-lg"
                >
            @else
                <div class="w-32 h-40 bg-slate-700 rounded-lg
                            border-4 border-white flex items-center
                            justify-center text-slate-300 text-sm">
                    Foto Profil
                </div>
            @endif
        </div>

    </div>
</header>


            <div class="grid md:grid-cols-3">

                <!-- Sidebar -->
                <aside class="bg-slate-50 p-8 md:col-span-1">
                    <h2 class="text-lg font-bold text-slate-800
                               border-b-2 border-blue-600 pb-3 mb-5">
                        INFORMASI KONTAK
                    </h2>

                    <div class="mb-5">
                        <p class="text-xs uppercase tracking-wider
                                  text-gray-500 mb-1">
                            Email
                        </p>
                        <p class="text-sm text-gray-800 break-words">
                            {{ $data->email }}
                        </p>
                    </div>

                    <div class="mb-5">
                        <p class="text-xs uppercase tracking-wider
                                  text-gray-500 mb-1">
                            Nomor Telepon
                        </p>
                        <p class="text-sm text-gray-800">
                            {{ $data->phone }}
                        </p>
                    </div>

                    <div class="mb-5">
                        <p class="text-xs uppercase tracking-wider
                                  text-gray-500 mb-1">
                            Tanggal Lahir
                        </p>
                        <p class="text-sm text-gray-800">
                            {{ \Carbon\Carbon::parse($data->birthday)
                                ->format('d F Y') }}
                        </p>
                    </div>

                    <div class="mb-5">
                        <p class="text-xs uppercase tracking-wider
                                  text-gray-500 mb-1">
                            Jenis Kelamin
                        </p>
                        <p class="text-sm text-gray-800">
                            {{ $data->gender }}
                        </p>
                    </div>
                </aside>

                <!-- Konten utama -->
                <section class="p-8 md:col-span-2">

                    <div class="mb-10">
                        <h2 class="text-xl font-bold text-slate-800
                                   border-b border-gray-200 pb-3 mb-4">
                            Tentang Saya
                        </h2>

                        <p class="text-gray-600 leading-7">
                            {{ $data->nama }} adalah individu yang memiliki
                            semangat untuk terus belajar, berkembang,
                            dan meningkatkan kemampuan diri.
                        </p>
                    </div>

                    <div class="mb-10">
                        <h2 class="text-xl font-bold text-slate-800
                                   border-b border-gray-200 pb-3 mb-4">
                            Data Pribadi
                        </h2>

                        <div class="space-y-4">
                            <div class="flex gap-4">
                                <span class="w-32 text-gray-500 shrink-0">
                                    Nama Lengkap
                                </span>
                                <span class="text-gray-800 font-medium">
                                    {{ $data->nama }}
                                </span>
                            </div>

                            <div class="flex gap-4">
                                <span class="w-32 text-gray-500 shrink-0">
                                    Tanggal Lahir
                                </span>
                                <span class="text-gray-800">
                                    {{ \Carbon\Carbon::parse($data->birthday)
                                        ->format('d F Y') }}
                                </span>
                            </div>

                            <div class="flex gap-4">
                                <span class="w-32 text-gray-500 shrink-0">
                                    Jenis Kelamin
                                </span>
                                <span class="text-gray-800">
                                    {{ $data->gender }}
                                </span>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h2 class="text-xl font-bold text-slate-800
                                   border-b border-gray-200 pb-3 mb-4">
                            Informasi Tambahan
                        </h2>

                        <p class="text-gray-600 leading-7">
                            Informasi mengenai pendidikan, pengalaman kerja,
                            keahlian, dan pencapaian dapat ditambahkan
                            pada bagian ini sesuai data yang tersedia.
                        </p>
                    </div>

                </section>
            </div>

            <footer class="bg-slate-900 text-slate-300 text-center
                           text-sm py-4">
                Curriculum Vitae &mdash; {{ $data->nama }}
            </footer>

        </main>
    </div>

</body>
</html>
