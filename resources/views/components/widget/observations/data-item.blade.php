@switch($key)
    @case('temperature')
        <span class="{{ $key }}">
            <i class="fa-solid fa-thermometer"></i>
            {{ $data[$key] }}°
        </span>
    @break

    @case('stationname')
        <span class="{{ $key }}">
            <i class="fa-solid fa-tower-broadcast"></i>
            {{ $data[$key] }}
        </span>
    @break

    @case('iconcode')
        <span class="{{ $key }}">
            <img src="https://cdn.buienradar.nl/resources/images/icons/weather/116x116/{{ $data[$key] }}.png">
        </span>
    @break

    @case('winddirection')
        <span class="{{ $key }}">
            <i class="fa-solid fa-arrow-down-long" style="transform: rotate({{ $data['winddirectiondegrees'] }}deg);"></i>
            {{ $data['windspeedBft'] }} Bft
        </span>
    @break

    @case('airpressure')
        <span class="{{ $key }}">
            <i class="fa-solid fa-gauge"></i>
            {{ $data[$key] }} hPa
        </span>
    @break

    @case('groundtemperature')
        <span class="{{ $key }}">
            <i class="fa-solid fa-seedling"></i>
            {{ $data[$key] }}°
        </span>
    @break

    @case('feeltemperature')
        <span class="{{ $key }}">
            <i class="fa-solid fa-hand"></i>
            {{ $data[$key] }}°
        </span>
    @break

    @case('visibility')
        <span class="{{ $key }}">
            <i class="fa-solid fa-eye-low-vision"></i>
            {{ round(intval($data[$key]) / 1000, 1) }} km
        </span>

    @break;
    @case('windgusts')
        <span class="{{ $key }}">
            <i class="fa-solid fa-wind"></i>
            {{ $data[$key] }} km/h
        </span>
    @break

    @case('humidity')
        <span class="{{ $key }}">
            <i class="fa-solid fa-droplet"></i>
            {{ $data[$key] }}%
        </span>
    @break

    @case('precipitationmm')
        <span class="{{ $key }}">
            <i class="fa-solid fa-chart-area"></i>
            {{ $data[$key] }} mm
        </span>
    @break

    @case('dewpoint')
        <span class="{{ $key }}">
           <i class="fa-solid fa-hand-holding-droplet"></i>

            @php
                $temperature = intval($data['temperature']);
                $humidity = intval($data['humidity']);
                $dewpoint = round($temperature - ((100 - $humidity) / 5), 1);
            @endphp

            {{ $dewpoint }}°
        </span>
    @break

    @default
@endswitch
