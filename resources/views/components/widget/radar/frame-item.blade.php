<span class="frame-item">
    @php
        $frame = $data[$index];
    @endphp

    <img src="https://cluster.api.meteoplaza.com/v3/nowcast/tiles/radarnl-observations/{{ $frame['layername'] }}" />
</span>