var offset = 0;
var news_article_template;

$(function() {
    news_article_template = Handlebars.compile($('#news-feed-article-template').html());
    load_articles();

    $('#button-container button').click(function() {
        load_articles();
    });
});

/**
 * Calls an API to get a list of news articles and appends them to news feed.
 */
function load_articles() {
    $('#spinner').show();

    $.get('/home/getArticles', {
        offset: offset,
        limit: 3,
    }, function(data) {
        $('#spinner').hide();
        offset += 3;

        data = JSON.parse(data);
        
        for(var x = 0; x < data.length; x++) {
            data[x].date_created = 
                data[x].date_created.substring(0, data[x].date_created.indexOf('T'));
            var article = news_article_template(data[x]);            
            $('#news-feed').append(article);
        }
    });
}
