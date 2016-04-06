<?= $this->Html->css('Template/Home/article.css'); ?>
<?= $this->Html->script('Home/article.js'); ?>

<div class='row'>
    <div class='col s12 m10 l8 offset-m1 offset-l2'>
        <h1 class='title'><?= $article->title; ?></h1>
        <p class='subtitle'><?= $article->subtitle; ?></p>
        <div id='author-date-created-container'>
            <span class='author'>
                <span class='material-icons'>perm_identity</span>
                <?= $article->author; ?>
            </span>
            <span class='date-created'>
                <span class='material-icons'>today</span>
                <?= $article->date_created; ?>
            </span>
        </div>

        <div id='text'>
            <span id='less-text'> <?= substr($article->text, 0, 500); ?></span><?php if(strlen($article->text) > 500):?><span id='more-text' style='display: none;'><?= substr($article->text, 500); ?></span><?php endif; ?>
        </div>

        <?php if(strlen($article->text) > 500): ?>
        <div class='button-container'>
            <button class='btn-large waves-effect' id='read-more'>
                Read More...
            </button>
        </div>
        <?php endif; ?>
    </div>
</div>
