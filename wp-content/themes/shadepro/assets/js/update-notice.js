(function ($) {
    "use strict";
    jQuery(window).load(function() {
        
        $('.shadepro-notice.is-dismissible .notice-dismiss').on('click', function () {
            console.log('clicked')
            var data = {
                action: 'shadepro_dismiss_notice',
            };

            $.post(notice_params.ajaxurl, data, function (response) {
                console.log(response, 'DONE!');
            });
        })
    });
})(jQuery);