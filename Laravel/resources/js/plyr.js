import Plyr from 'plyr';
const videos = document.querySelectorAll('.imported-video');
let players = [];
videos.forEach(video => players.push(new Plyr(video, {
    settings: ['quality'],
    controls: ['play-large', 'current-time', 'mute', 'volume', 'fullscreen'],
    storage: { enabled: true, key: 'car-center-player' },
    autopause: true,
    autoplay: false,
    muted: true,
    clickToPlay: true,
    disableContextMenu: true,
    hideControls: true,
    fullscreen: { enabled: false, },
})));

export { players };
