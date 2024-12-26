export class RadarUpdater {
    Radar;
    RadarAnimator;

    constructor(radar, radarAnimator) {
        this.Radar = radar;
        this.RadarAnimator = radarAnimator;
    }

    async UpdateAsync() {
        const frames = this.Radar.querySelectorAll('.frame-item');
        const data = await fetch('https://cluster.api.meteoplaza.com/v3/nowcast/tiles/radarnl-observations/');
        const json = await data.json();

        for (let i = 0; i < frames.length; i++) {
            const frame = frames[i];
            const item = json[i];

            const time = frame.querySelector('.time');
            const img = frame.querySelector('.reflectivity-layer');

            time.innerText = item['nicetime'];
            img.setAttribute('src', `https://cluster.api.meteoplaza.com/v3/nowcast/tiles/radarnl-observations/${item['layername']}`);
        }
    }
}
