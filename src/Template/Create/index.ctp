<?= $this->Html->css('Template/Create/index.css'); ?>
<div class='row'>
    <div class='col s12'>
        <h1>Create News Article</h1>
    </div>
</div>

<div class='row'>
    <?= $this->Form->create('Article', array(
        'class' => 'col s12 m10 l8 offset-m1 offset-l2',
        'type' => 'file'
    )); ?>
    <div class='row'> 
        <div class='col s12'>
            <p>You can only submit news articles via a JSON file. The proper format is as 
            follows:</p>
            <pre><code>
[
    {   
        "Articles": {
            "title": "Some Title",
            "subtitle": "Some Subtitle",
            "author": "Some Author",
            "text": "Some text"
        }
    }, 
    ...
]
            </code></pre>
        </div>
    </div>
    <div class="file-field input-field">
        <div class="btn">
            <span>JSON File</span>
            <input type="file" name='file'>
        </div>
        <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
        </div>
    </div>

    <?= $this->Form->submit('Submit', array(
        'class' => 'btn-large waves-effect waves-light'  
    )); ?>

    <?= $this->Form->end(); ?>
</div>
