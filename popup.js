jQuery(document).ready(function($) {
    // Pop-up'ın belirli süre sonra açılması
    setTimeout(function() {
        $('#popup-image-container').fadeIn();
    }, 3000); // 3 saniye sonra pop-up açılır

    // Pop-up kapatma butonu
    $('#popup-close-btn, #popup-overlay').on('click', function() {
        $('#popup-image-container').fadeOut();
    });
});
