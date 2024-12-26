<span class="frame-item hidden">
    @php
        $frame = $data[$index];
    @endphp

    <img class="country-background" src="/assets/img/Radar-1050-v2.jpg">
    <img class="country-borders" src="/assets/img/Radar-1050-borders-v2.png">
    <img class="reflectivity-layer"
        src="https://cluster.api.meteoplaza.com/v3/nowcast/tiles/radarnl-observations/{{ $frame['layername'] }}" />

    <span class="time">{{ $frame['nicetime'] }}</span>

</span>
