<div class="observations-widget">
    @php
        $json = file_get_contents('https://observations.buienradar.nl/1.0/actual/weatherstation/6340');
        $data = json_decode($json, true);
    @endphp

    @foreach($data as $key => $value)
        <x-widget.observations.data-item :data="$data" :key="$key" />
    @endforeach
    
    <x-widget.observations.data-item :data="$data" key="dewpoint" />
</div>