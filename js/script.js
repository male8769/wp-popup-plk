document.addEventListener("DOMContentLoaded", () => {
  const closeBtn = document.querySelector(".popupCloseButton");
  const popup = document.getElementById("popup-container");
  const video = document.getElementById("video-container");
  const ctaBtn = document.getElementById("newUrl");
  

  // Luk popup
  closeBtn.addEventListener("click", () => {
    popup.style.display = 'none';
    muteVideo();
  });
  
  // Open new Url
  ctaBtn.addEventListener("click", function() {
    window.open("https://thlangshf-vuc.dk/", "_blank", "noopener");
    muteVideo()
  });
  
  // Funktion der muter og pauser videoen
  function muteVideo(){
    if (video) {
      video.muted = true;
      video.pause(); // (valgfrit, men smart at stoppe afspilningen også)
    }
  }

});

/*
jQuery(document).ready(function( $ ) {  
    $('.popupCloseButton').on('click', function() {    
        $('#popup-container').hide();
    })
});

*/