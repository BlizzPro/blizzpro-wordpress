function latestNewsHandler() {

    var latest_news     = jQuery('#latest-news');
    var paged           = 1;
    var posts_per_page  = 10;

    jQuery('.load-more').on('click', function () {

        var self = jQuery(this);
        var original = self.html();
        self.html('Loading...');

        jQuery.ajax({
            type: 'GET',
            url: ajax_url,
            data : {
                action: 'latest_news',
                paged: paged,
                posts_per_page: posts_per_page
            }
        })
        .success(function (data) {
            if (data.length > 0) {
                latest_news.html(latest_news.html() + data);
                paged++;
            } else {
                // Remove "load more"
                self.hide();
            }
        })
        .done(function () {
            self.html(original);
        });

    }).trigger('click'); // Trigger on page load
};


jQuery(document).ready(function() {
    latestNewsHandler();
});