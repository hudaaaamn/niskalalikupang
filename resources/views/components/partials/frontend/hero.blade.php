{{-- Hero --}}

<section class="pt-10 bg-white">
    <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 id="slogan"
                class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight font-inter md:text-5xl xl:text-6xl">
            </h1>
            <p class="max-w-2xl mb-6 font-inter font-light text-gray-700 lg:mb-8 md:text-lg lg:text-xl text-justify indent-8">WISATA LIKUPANG,
                Selamat datang di destinasi eksotis Pulisan dan Marinsow, permata pariwisata di pesisir utara Likupang!

                Terletak di Kabupaten Minahasa Utara, Sulawesi Utara, kawasan wisata Pulisan dan Marinsow merupakan bagian dari pengembangan pariwisata super prioritas nasional. Kedua desa ini menyajikan perpaduan sempurna antara pesona pantai berpasir putih, bukit hijau yang menawan, serta kekayaan budaya lokal yang autentik.

                Rasakan kehangatan masyarakat, keindahan alam yang memukau, dan pengalaman wisata yang tak terlupakan hanya di Pulisan dan Marinsow – pilihan tepat untuk petualangan dan relaksasi Anda di jantung Likupang.
            </p>
            <div class="space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
                <a href="{{ route('destinations') }}"
                    class="inline-flex justify-center font-inter px-4 py-2 text-base font-medium text-center text-white rounded bg-green-new hover:bg-opacity-90 focus:ring-4 focus:ring-purple-300 ">TEMPAT
                    WISATA</a>
            </div>
        </div>
        <div class="mt-8 lg:mt-0 lg:col-span-5 lg:flex lg:items-center">
            <div class="w-full">
                <div class="relative w-full h-64 md:h-80 lg:h-96">
                    <iframe loading="lazy" title="Pesona Likupang" 
                        class="absolute inset-0 w-full h-full rounded-lg"
                        src="https://www.youtube.com/embed/vUgjsuRi2Go?si=Bguadrek2Z7JueXo" 
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen="">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        gsap.registerPlugin(TextPlugin)
        const myElement = document.getElementById('slogan');

        gsap.to(myElement, {
            text: "Explore <br> Likupang",
            duration: 3,
            repeat: 0,
            ease: "none",
        });

    })
</script>