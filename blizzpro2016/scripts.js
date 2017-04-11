function featuredArticleHeightHandler() {
    var maxHeight = Math.max.apply(null, $(".featured .wrap").map(function () {
        return $(this).height();
    }).get());

    // Make all featured divs the same height
    $(".featured").css("height", maxHeight + "px");
}

function articleHandler() {

    jQuery('[data-articles]').each(function () {

        var container = jQuery(this);
        var posts_per_page = jQuery(this).data('posts') || 10;
        var author = jQuery(this).data('author') || false;
        var category = jQuery(this).data('category') || false;
        var tag = jQuery(this).data('tag') || false;
        var action = 'article_ajax';

        jQuery('.load-more').on('click', function () {

            var self = jQuery(this);
            var original = self.html();
            self.html('Loading...');

            var param = {
                action: action,
                posts_per_page: posts_per_page
            };

            var date = jQuery('[data-date]:last').data('date');

            if (author) param['author'] = author;
            if (category) param['cat'] = category;
            if (tag) param['tag'] = tag;
            if (date) param['date'] = date;

            jQuery.ajax({
                type: 'GET',
                url: ajax_url,
                data : param
            })
            .success(function (data) {
                if (data.length > 0) {
                    container.html(container.html() + data);
                }

                // Remove "load more"
                if (data.length == 0  || $(".media", container).length < posts_per_page) {
                    self.hide();
                }
            })
            .done(function () {
                self.html(original);
            });

        }).trigger('click'); // Trigger on page load
    });
};


jQuery(document).ready(function() {

    featuredArticleHeightHandler();
    jQuery(window).resize(featuredArticleHeightHandler);

    articleHandler();


    // Add responsive class to all images
    $("article img").addClass("img-responsive");
    $("article img").closest(".wp-caption").addClass("img-responsive");
});