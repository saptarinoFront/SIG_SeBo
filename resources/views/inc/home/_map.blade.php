<section id="maps" class="w-full h-full pt-20 pb-10 bg-[#F8F9FE]">
    <div class="cont">
        <div class="flex flex-col gap-2 md:w-1/2">
            <div class="mb-4">
                <span class="bg-[#F5F5F5] py-3 px-6 tracking-widest text-primary font-medium">MAPS</span>
            </div>
            <h1 class="text-2xl font-semibold leading-snug md:text-3xl md:leading-normal text-title">Pemetaan Sekolah
                Bontang
            </h1>
            <p class="leading-normal text-text">Map kumpulan sekolah - sekolah yang ada di kota Bontang</p>
        </div>
        <div id="map" class="my-8 rounded-lg shadow-md h-96"></div>
    </div>
</section>

@push('script')
    <script>
        let map = L.map('map', {
            attributionControl: false
        }).setView([0.124673, 117.480012], 13);
        var popup = L.popup();
        let e = [
            [0.120819, 117.480044, "sd"],
            [0.112209, 117.462220, "smp"],
            [0.133137, 117.473283, "sma"],
            [0.130121, 117.486671, "smk"]
        ];
        for (let i = 0; i < e.length; i++) {
            let icon;
            if (e[i][2] == "sd") {
                icon = new L.Icon({
                    iconUrl: "{{ URL::asset('img/Marker/building-fill-sd.png') }}"
                });
            } else if (e[i][2] == "smp") {
                icon = new L.Icon({
                    iconUrl: "{{ URL::asset('img/Marker/building-2-fill-smp.png') }}"
                });
            } else if (e[i][2] == "sma") {
                icon = new L.Icon({
                    iconUrl: "{{ URL::asset('img/Marker/building-4-fill-sma.png') }}"
                });
            } else if (e[i][2] == "smk") {
                icon = new L.Icon({
                    iconUrl: "{{ URL::asset('img/Marker/building-4-fill-smk.png') }}"
                });
            }
            marker = new L.marker([e[i][0], e[i][1]], {
                    icon
                })
                .addTo(map);
            marker.on('click', onMapClick);
        }

        function onMapClick(e) {
            popup
                .setLatLng(e.latlng)
                .setContent("You clicked the map")
                .openOn(map);
        }




        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);
    </script>
@endpush
