export class RadarAnimator {
    Radar;
    IsPlaying;

    constructor(radar) {
        this.Radar = radar;
        this.IsPlaying = false;

        let index = 0;
        const frames = this.Radar.querySelectorAll('.frame-item');

        setInterval(() => {
            frames.forEach(frame => {
                frame.classList.replace('active', 'hidden');
            });

            if (this.IsPlaying) {
                const frame = frames[index];
                frame.classList.replace('hidden', 'active');

                if (index == (frames.length - 1)) {
                    index = 0;
                }
                else {
                    index++;
                }
            }
        }, 300);
    }

    Start() {
        this.IsPlaying = true;
    }

    Stop() {
        this.IsPlaying = false;
    }
}