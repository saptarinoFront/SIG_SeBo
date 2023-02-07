<!DOCTYPE html>
<html lang="en">

<head>
    @include('inc.core._head')
</head>

<body>

    @include('inc.core._navbar')
    <main>
        <section id="detail-school" class="w-full min-h-screen py-4 bg-gray-100">
            <div class="grid grid-cols-1 gap-4 cont">
                <div class="p-4 bg-white rounded-lg">
                    <h1 class="mb-4 text-xl font-semibold text-title">Sekolah Kreatif SD Muhammadiyah 2
                        Bontang</h1>
                    {{-- <p class="inline-flex items-center gap-2 text-text">
                        Jl. Bandung 4 No.88, RT.23, Gn. Telihan, Kec. Bontang Bar., Kota Bontang, Kalimantan Timur 75321
                    </p> --}}
                </div>

                <div class="flex flex-col w-full gap-4 p-4 bg-white rounded-lg">
                    <h1 class="items-center text-lg font-semibold leading-relaxed inlne text-title">
                        <ion-icon name="map" size="small"></ion-icon> Peta
                    </h1>
                    <div id="mapDetail" class="h-96 "></div>
                    <a href=""
                        class="inline-flex items-center justify-center w-full gap-2 py-2 text-sm tracking-wide text-white uppercase rounded-md shadow bg-primary">
                        <ion-icon name="navigate" size="small"></ion-icon> Arahkan saya
                    </a>
                    <div class="flex flex-col gap-4 py-6 border-t-2">
                        <div>
                            <h2 class="font-semibold text-title">ALAMAT</h2>
                            <p class="inline-flex items-center gap-2 text-sm italic text-text">
                                Jl. Bandung 4 No.88, RT.23, Gn. Telihan, Kec. Bontang Bar., Kota Bontang, Kalimantan
                                Timur 75321
                            </p>
                        </div>
                        <div>
                            <h2 class="font-semibold text-title">PELAYANAN</h2>
                            <p class="inline-flex items-center gap-2 text-sm italic text-text">
                                Senin s/d Jumat Jam 07.00 - 16.00
                            </p>
                        </div>
                        <div>
                            <h2 class="font-semibold text-title">TELEPON</h2>
                            <p class="inline-flex items-center gap-2 text-sm italic text-text">
                                08115812226
                            </p>
                        </div>
                        <div>
                            <h2 class="font-semibold text-title">SITUS WEB</h2>
                            <a href="https://kreatifmuda.sch.id/"
                                class="inline-flex items-center gap-2 text-sm italic text-text">
                                kreatifmuda.sch.id
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('inc.core._footer')

    <script>
        var mapDetail = L.map('mapDetail', {
            attributionControl: false
        }).setView([0.1375516, 117.4511885], 18);
        var marker = L.marker([0.1372276, 117.4510551]).addTo(mapDetail);
        marker.bindPopup(
                "<p class='text-base font-semibold leading-normal'>Sekolah Kreatif SD <br> Muhammadiyah 2 Bontang</p>")
            .openPopup();


        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(mapDetail);
    </script>

</body>

</html>
