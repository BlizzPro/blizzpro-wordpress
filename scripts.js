function featuredArticleHeightHandler() {
    var maxHeight = Math.max.apply(null, $(".featured").map(function () {
        return $(this).height();
    }).get());

    // Make all featured divs the same height
    $(".featured").css("height", maxHeight + "px");
}

function articleHandler() {

    jQuery('[data-articles]').each(function () {

        var container = jQuery(this);
        var posts_per_page = jQuery(this).data('articles-posts') || 10;
        var author = jQuery(this).data('articles-author') || false;
        var category = jQuery(this).data('articles-category') || false;
        var tag = jQuery(this).data('articles-tag') || false;
        var action = 'article_ajax';
        var paged = 1;

        jQuery('.load-more').on('click', function () {

            var self = jQuery(this);
            var original = self.html();
            self.html('Loading...');

            var param = {
                action: action,
                paged: paged,
                posts_per_page: posts_per_page
            };

            if (author) param['author'] = author;
            if (category) param['cat'] = category;
            if (tag) param['tag'] = tag;

            jQuery.ajax({
                type: 'GET',
                url: ajax_url,
                data : param
            })
            .success(function (data) {
                if (data.length > 0) {
                    container.html(container.html() + data);
                    paged++;
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
    articleHandler();
});