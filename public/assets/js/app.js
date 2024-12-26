import { ObservationsUpdater } from "./observationsupdater.js";
import { RadarAnimator } from "./radaranimator.js";
import { RadarUpdater } from "./radarupdater.js";

const animator = new RadarAnimator(document.querySelector('.radar'));
animator.Start();

const radarUpdater = new RadarUpdater(document.querySelector('.radar'), animator);
const observationsUpdater = new ObservationsUpdater(document.querySelector('.observations-widget'));

setInterval(async () => {
    await radarUpdater.UpdateAsync();
    await observationsUpdater.UpdateAsync();
}, 900000);