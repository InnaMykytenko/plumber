jQuery(document).ready(function($) {

    $(".ajax-contact-form").submit(function() {
        var str = $(this).serialize();

        $.ajax({
            type: "POST",
            url: "https://sanprofi.kiev.ua/contact.php",
            data: str,
            success: function(msg) {
                if(msg == 'OK') {
                    result = '<div class="details-section">Спасибо за отправку сообщения. <br>Мы свяжемся с вами в ближайшее время.</div>';
                    $(".fields").hide();
                } else {
                    result = msg;
                }
                $('.note').html(result);
            }
        });
        return false;
    });
});