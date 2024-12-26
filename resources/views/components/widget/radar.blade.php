<div class="radar">
    @php
        $json = file_get_contents('https://cluster.api.meteoplaza.com/v3/nowcast/tiles/radarnl-observations/');
        $data = json_decode($json, true);
    @endphp

   
    @for($index = 0; $index < count($data); $index++)
        <x-widget.radar.frame-item :data="$data" :index="$index" />
    @endfor
</div>