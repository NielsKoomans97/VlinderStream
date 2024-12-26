export class ObservationsUpdater {
    Observations;

    constructor(observations) {
        this.Observations = observations;
    }


    async UpdateAsync() {
        const spans = document.querySelectorAll('span');
        const data = await fetch('https://observations.buienradar.nl/1.0/actual/weatherstation/6340');
        const json = await data.json();
        const keys = Object.keys(json);

        function roundToTwo(num) {
            return +(Math.round(num + "e+2") + "e-2");
        }

        keys.forEach(key => {
            spans.forEach(span => {
                if (span.className == key) {
                    const innerSpan = span.querySelector('span');

                    const itemData = json[key];

                    if (innerSpan != null) {
                        switch (key) {
                            case 'temperature':
                                innerSpan.innerText = `${itemData}°`;
                                break;

                            case 'groundtemperature':
                                innerSpan.innerText = `${itemData}°`;
                                break;

                            case 'feeltemperature':
                                innerSpan.innerText = `${itemData}°`;
                                break;

                            case 'humidity':
                                innerSpan.innerText = `${itemData}%`;
                                break;

                            case 'winddirection':
                                innerSpan.innerText = `${json['windspeedBft']} bft`;
                                break;
                            
                            case 'windgusts':
                                innerSpan.innerText = `${itemData} km/h`;
                                break;

                            case 'airpressure':
                                innerSpan.innerText = `${itemData} hPa`;
                                break;

                            case 'visibility':
                                const visibility = roundToTwo(parseInt(itemData) / 1000);

                                innerSpan.innerText = `${visibility} km`;
                                break;

                            case 'precipitationmm':
                                innerSpan.innerText = `${itemData} mm`;
                                break;

                            case 'dewpoint':
                                const temperature = parseInt(json['temperature']);
                                const humidity = parseInt(json['humidity']);
                                const dewpoint = roundToTwo(temperature - (100 - humidity) / 5);

                                innerSpan.innerText = `${dewpoint}°`;
                                break;

                            default:
                                innerSpan.innerText = itemData;
                        }
                    }

                    if (key == 'iconcode') {
                        const innerImg = span.querySelector('img');
                        innerImg.setAttribute('src', `https://cdn.buienradar.nl/resources/images/icons/weather/116x116/${itemData}.png`);
                    }

                    if (key == 'winddirection') {
                        const arrow = span.querySelector('i.fa-arrow-down-long');
                        arrow.setAttribute('style', `transform: rotate(${parseInt(json['winddirectiondegrees'])}deg);`);
                    }
                }
            });
        });


    }
}