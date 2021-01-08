<section class="top-nav-padding homepage-banner">
    <div id="home_banner" class="carousel slide" data-ride="carousel" data-interval="0" data-pause="">
        <div class="carousel-inner" role="listbox">
             <div class="carousel-item active">
                <div class="responsive-block">
                     <div class="video-wrapper">
                         <video frameborder="0" allowfullscreen loop src="/videos/VAIO-Launch-Date.mp4" ></video>
                    </div>
              
               </div>
        </div>
    </div>
</section>

@section('js')
<script type="text/javascript">
var videoPlayButton,
	videoWrapper = document.getElementsByClassName('video-wrapper')[0],
    video = document.getElementsByTagName('video')[0],
    videoMethods = {
        renderVideoPlayButton: function() {
            if (videoWrapper.contains(video)) {
				this.formatVideoPlayButton()
                video.classList.add('has-media-controls-hidden')
                videoPlayButton = document.getElementsByClassName('video-overlay-play-button')[0]
                videoPlayButton.addEventListener('click', this.hideVideoPlayButton)
            }
        },

        formatVideoPlayButton: function() {
            videoWrapper.insertAdjacentHTML('beforeend', '\
                <svg class="video-overlay-play-button" viewBox="0 0 200 200" alt="Play video">\
                    <circle cx="100" cy="100" r="90" fill="none" stroke-width="5" stroke="#fff"/>\
                    <polygon points="70, 55 70, 145 145, 100" fill="#fff"/>\
                </svg>\
            ')
        },

        hideVideoPlayButton: function() {
            video.play()
            videoPlayButton.classList.add('is-hidden')
            video.classList.remove('has-media-controls-hidden')
            video.setAttribute('controls', 'controls')
        }
	}

videoMethods.renderVideoPlayButton()
</script>
@endsection

@section('css')
    <style type="text/css">
.video-wrapper {
    position: relative;
    padding: 30px 0;
}

.video-wrapper > video {
    width: 100%;
    vertical-align: middle;
}

.video-wrapper > video.has-media-controls-hidden::-webkit-media-controls {
    display: none;
}

.video-overlay-play-button {
    box-sizing: border-box;
    width: 100%;
    height: 100%;
    padding: 10px calc(50% - 50px);
    position: absolute;
    top: 0;
    left: 0;
    display: block;
    opacity: 0.95;
    cursor: pointer;
    background-color:#000;
    transition: opacity 150ms;
}

.video-overlay-play-button:hover {
    opacity: 1;
}

.video-overlay-play-button.is-hidden {
    display: none;
}
      
   
    </style>
@endsection