<x-Layouts.visitor-layout>
    <x-slot:title>Beranda | </x-slot:title>
    <header>
        <x-partials.frontend.hero />
    </header>

    <section class="font-inter mb-16">
        <div class="mb-8 text-4xl font-extrabold text-center">
            <h1 class="font-inter">Tempat Wisata</h1>
        </div>
        <div class="flex flex-wrap items-center justify-center gap-4 px-4 md:px-0">
            @forelse ($destinations as $destination)
                <div class="card-container">
                    <x-partials.frontend.card-destination :$destination />
                </div>
            @empty
                <p class="font-semibold text-center text-gray-500">Belum ada tempat wisata</p>
            @endforelse
        </div>
        <div class="mt-10 text-center">
            <a href="{{ route('destinations') }}"
                class="px-4 py-2 text-black transition-transform duration-300 transform border-2 border-gray-600 rounded-md hover:shadow-lg ">Lihat
                Semua</a>
        </div>
    </section>
    
    <section class="py-12"></section> <!-- Section kosong untuk spacing -->
    
    <section class="bg-black-1 pt-16">
        <div class="grid py-20 mx-auto md:grid-cols-2 max-w-7xl">
            <div class="pl-10 mb-8 space-y-10 text-white text-balance ">
                <h1 class="text-4xl font-extrabold font-inter">Info Acara</h1>
                <p class="w-3/4 font-inter text-justify">
                    Temukan informasi terbaru dan terlengkap seputar berbagai acara menarik yang berlangsung di kawasan wisata Pulisan dan Marinsow, Likupang. Mulai dari pertunjukan seni dan budaya lokal, festival kuliner khas pesisir, hingga kegiatan komunitas yang menggugah semangat kebersamaan — semua tersedia di sini.

                    Cari acara yang sesuai dengan minat dan waktu kunjungan Anda, lengkap dengan informasi jadwal, lokasi, dan cara berpartisipasi. Jangan lewatkan momen-momen spesial yang memperkaya pengalaman wisata Anda, dengan suasana lokal yang hangat dan penuh warna.

                    Jadikan kunjungan Anda ke Pulisan dan Marinsow semakin seru dan berkesan dengan bergabung dalam berbagai kegiatan yang menggambarkan keunikan budaya serta kehidupan masyarakat pesisir Likupang.
                </p>
                <div class="mt-6">
                    <a href="{{ route('events') }}"
                        class="px-4 py-2 transition-transform duration-300 transform border-2 border-white rounded-md font-inter hover:shadow-lg">Lihat
                        Semua</a>
                </div>
            </div>
            <div class="overflow-x-auto text-center no-scrollbar">
                <div class="">
                    <div class="inline-flex items-center justify-center gap-10 py-4">
                        @forelse ($events as $event)
                            <x-partials.frontend.card-event :event="$event" />
                        @empty
                            <p class="text-xl font-semibold text-center text-white">Tidak ada acara</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="relative px-3 md:px-0 mt-29">
        <div class="mb-8 text-4xl font-extrabold text-center">
            <h1 class="font-inter">Informasi Tentang Likupang</h1>
        </div>
        <div class="flex flex-wrap items-center justify-center gap-4 py-4">
            @forelse ($articles as $article)
                <div class="opacity-0 image-container">
                    <x-partials.frontend.card-article :article="$article" />
                </div>
            @empty
                <p class="text-xl font-semibold text-center text-gray-600">Belum ada artikel</p>
            @endforelse
        </div>
        <div class="mt-6 text-center">
            <a href="{{ route('articles') }}"
                class="px-4 py-2 text-black transition-transform duration-300 transform border-2 border-gray-600 rounded-md hover:shadow-lg">Lihat
                Semua</a>
        </div>
    </section>

    <section class="">
        <x-partials.frontend.advantages-brand />
    </section>
    
    <section class="relative">
        <div class="">

            <x-partials.frontend.logo />

        </div>

    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Daftarkan plugin ScrollTrigger
            gsap.registerPlugin(ScrollTrigger);


            // Buat animasi untuk elemen dengan kelas .image-container
            gsap.utils.toArray('.image-container').forEach(container => {
                gsap.to(container, {
                    scrollTrigger: {
                        trigger: container,
                        start: 'top 80%', // Mulai animasi saat elemen berada 80% dari bagian atas viewport
                        end: 'top 30%', // Selesai animasi saat elemen berada 30% dari bagian atas viewport
                        toggleActions: 'play none none reverse', // Animasi akan berbalik saat scroll ke atas
                    },
                    opacity: 1,
                    y: 0,
                    duration: 1

                });
            })
        });
    </script>

</x-Layouts.visitor-layout>
