<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Viewer</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 text-white">

    <!-- Main Container -->
    <div class="flex flex-col items-center min-h-screen py-10">
        <!-- Media Container -->
        <div class="w-full max-w-3xl bg-gray-800 p-6 rounded-lg shadow-lg">
            <!-- Back Button -->
            <div class="mb-4">
                <a href="/modul" class="inline-flex items-center space-x-2 text-gray-300 hover:text-white">
                    <img src="{{ URL('pictures/back button.png') }}" class="w-8 h-8" alt="Back">
                    <span>Kembali</span>
                </a>
            </div>

            <!-- Media Display -->
            <div id="media-container">
                @if (pathinfo($modules->media, PATHINFO_EXTENSION) == 'mp3' ||
                     pathinfo($modules->media, PATHINFO_EXTENSION) == 'wav' ||
                     pathinfo($modules->media, PATHINFO_EXTENSION) == 'ogg')
                    <!-- Audio Player -->
                    <audio id="audio-player" controls class="w-full rounded-lg">
                        <source src="{{ asset('storage/' . $modules->media) }}" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                @elseif (pathinfo($modules->media, PATHINFO_EXTENSION) == 'mp4' ||
                         pathinfo($modules->media, PATHINFO_EXTENSION) == 'mov' ||
                         pathinfo($modules->media, PATHINFO_EXTENSION) == 'mpg')
                    <!-- Video Player -->
                    <video id="video-player" controls class="w-full rounded-lg">
                        <source src="{{ asset('storage/' . $modules->media) }}" type="video/mp4">
                        Your browser does not support the video element.
                    </video>
                @elseif (pathinfo($modules->media, PATHINFO_EXTENSION) == 'jpg' ||
                         pathinfo($modules->media, PATHINFO_EXTENSION) == 'png' ||
                         pathinfo($modules->media, PATHINFO_EXTENSION) == 'jpeg')
                    <!-- Image Display -->
                    <img id="image-display" src="{{ asset('storage/' . $modules->media) }}" alt="Media" class="w-full rounded-lg">
                @elseif (pathinfo($modules->media, PATHINFO_EXTENSION) == 'pdf')
                    <!-- PDF Viewer -->
                    <embed id="pdf-viewer" src="{{ asset('storage/' . $modules->media) }}" type="application/pdf"
                           class="w-full h-[500px] rounded-lg">
                @else
                    <p class="text-center text-gray-400">Unsupported media type</p>
                @endif
            </div>

            <!-- Additional Features for Video -->
            @if (pathinfo($modules->media, PATHINFO_EXTENSION) == 'mp4' ||
                 pathinfo($modules->media, PATHINFO_EXTENSION) == 'mov' ||
                 pathinfo($modules->media, PATHINFO_EXTENSION) == 'mpg')
                <div class="flex flex-row justify-between w-full h-fit mt-5 gap-5">
                    <div class="flex items-center space-x-4">
                        <button onclick="playPause()" class="p-2 rounded hover:bg-gray-700">
                            <img id="play-button" src="{{ URL('pictures/play.png') }}" class="w-8 h-8" alt="Play/Pause">
                        </button>
                        <input id="slider" type="range" min="0" max="100" value="0" step="1"
                               class="hidden sm:block w-40" oninput="Setvideo(this.value)">
                        <span id="time-elapsed" class="text-gray-400">0:00</span>
                    </div>
                    <div class="flex items-center space-x-4">
                        <button onclick="toggleMute()" class="p-2 rounded hover:bg-gray-700">
                            <img id="sound-icon" src="{{ URL('pictures/soundon.png') }}" class="w-8 h-8" alt="Mute/Unmute">
                        </button>
                        <input id="vol-control" type="range" min="0" max="100" step="1" value="50"
                               class="hidden sm:block w-40" oninput="SetVolume(this.value)">
                        <button onclick="openFullscreen()" class="p-2 rounded hover:bg-gray-700">
                            <img src="{{ URL('pictures/fullscreen.png') }}" class="w-8 h-8" alt="Fullscreen">
                        </button>
                    </div>
                </div>
            @endif
        </div>
    </div>

    <!-- Scripts -->
    <script>
        const video = document.getElementById("video-player");
        const playButton = document.getElementById("play-button");
        const soundIcon = document.getElementById("sound-icon");
        const slider = document.getElementById("slider");
        const volControl = document.getElementById("vol-control");
        const timeElapsed = document.getElementById("time-elapsed");

        // Play/Pause Video
        function playPause() {
            if (video.paused) {
                video.play();
                playButton.src = "{{ URL('pictures/pause.png') }}";
            } else {
                video.pause();
                playButton.src = "{{ URL('pictures/play.png') }}";
            }
        }

        // Update Slider and Time
        video.ontimeupdate = () => {
            const minutes = Math.floor(video.currentTime / 60);
            const seconds = Math.floor(video.currentTime % 60).toString().padStart(2, "0");
            timeElapsed.textContent = `${minutes}:${seconds}`;
            slider.value = (video.currentTime / video.duration) * 100;
        };

        slider.oninput = () => {
            video.currentTime = (slider.value / 100) * video.duration;
        };

        // Volume Control
        volControl.oninput = () => {
            video.volume = volControl.value / 100;
            soundIcon.src = video.volume === 0 ? "{{ URL('pictures/soundoff.png') }}" : "{{ URL('pictures/soundon.png') }}";
        };

        // Mute/Unmute
        function toggleMute() {
            video.muted = !video.muted;
            soundIcon.src = video.muted ? "{{ URL('pictures/soundoff.png') }}" : "{{ URL('pictures/soundon.png') }}";
            volControl.value = video.muted ? 0 : video.volume * 100;
        }

        // Fullscreen
        function openFullscreen() {
            if (video.requestFullscreen) video.requestFullscreen();
            else if (video.webkitRequestFullscreen) video.webkitRequestFullscreen();
            else if (video.msRequestFullscreen) video.msRequestFullscreen();
        }
    </script>
</body>

</html>
