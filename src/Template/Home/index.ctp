<?= $this->Html->css('Template/Home/index.css'); ?>
<?= $this->Html->script('Home/index.js'); ?>
<div class='row'>
    <div class='col s12 m10 l8 offset-m1 offset-l2'>
        <h1>News Feed</h1>
    </div>
</div>

<div class='row'>
    <div id='news-feed' class='col s12 m10 l8 offset-m1 offset-l2'>
    </div>

    <div id='spinner' class='col s12 m10 l8 offset-m1 offset-l2'>
        <div class="preloader-wrapper small active">
            <div class="spinner-layer spinner-blue-only">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </div>

    <div id='button-container' class='col s12 m10 l8 offset-m1 offset-l2'>
        <button class='btn-large waves-effect'>Load more</button>
    </div>
</div>

<script id='news-feed-article-template' type='text/x-handlebars-template'>
    <div class='row news-feed-article'>
        <div class='col s12 m3 news-feed-article-icon-container'>
            <span class='news-feed-article-icon material-icons'>description</span>
        </div>
        <div class='col s12 m9 news-feed-article-info-container'>
            <h2 class='title'><a href='/home/article/{{id}}'>{{title}}</a></h2>
            <p class='subtitle'>{{subtitle}}</p>
            <div>
                <span class='author'>
                    <span class='material-icons'>perm_identity</span>
                    {{author}}
                </span>
                <span class='date-created'>
                    <span class='material-icons'>today</span>
                    {{date_created}}
                </span>
            </div>
        </div>
    </div>
</script>
