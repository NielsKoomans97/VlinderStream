@switch($key)
    @case('temperature')
        <span class="{{ $key }}">
            <i class="fa-solid fa-thermometer"></i>
            <span>{{ $data[$key] }}°</span>
        </span>
    @break

    @case('stationname')
        <span class="{{ $key }}">
            <i class="fa-solid fa-tower-broadcast"></i>
            <span>{{ $data[$key] }}</span>
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
            <span>{{ $data['windspeedBft'] }} Bft</span>
        </span>
    @break

    @case('airpressure')
        <span class="{{ $key }}">
            <i class="fa-solid fa-gauge"></i>
            <span>{{ $data[$key] }} hPa</span>
        </span>
    @break

    @case('groundtemperature')
        <span class="{{ $key }}">
            <i class="fa-solid fa-seedling"></i>
            <span>{{ $data[$key] }}°</span>
        </span>
    @break

    @case('feeltemperature')
        <span class="{{ $key }}">
            <i class="fa-solid fa-hand"></i>
            <span>{{ $data[$key] }}°</span>
        </span>
    @break

    @case('visibility')
        <span class="{{ $key }}">
            <i class="fa-solid fa-eye-low-vision"></i>
            <span>{{ round(intval($data[$key]) / 1000, 1) }} km</span>
        </span>

    @break;
    @case('windgusts')
        <span class="{{ $key }}">
            <i class="fa-solid fa-wind"></i>
            <span>{{ $data[$key] }} km/h</span>
        </span>
    @break

    @case('humidity')
        <span class="{{ $key }}">
            <i class="fa-solid fa-droplet"></i>
            <span>{{ $data[$key] }}%</span>
        </span>
    @break

    @case('precipitationmm')
        <span class="{{ $key }}">
            <i class="fa-solid fa-chart-area"></i>
            <span>{{ $data[$key] }} mm</span>
        </span>
    @break

    @case('dewpoint')
        <span class="{{ $key }}">
            <i class="fa-solid fa-snowflake"></i>

            @php
                $temperature = intval($data['temperature']);
                $humidity = intval($data['humidity']);
                $dewpoint = round($temperature - (100 - $humidity) / 5, 1);
            @endphp

            <span>{{ $dewpoint }}°</span>
        </span>
    @break

    @default
@endswitch
