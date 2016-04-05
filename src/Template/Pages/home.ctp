<?php $this->layout = false; ?>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Townsquare Interactive - Candidates Test</title>
        <?= $this->Html->css('materialize.min.css') ?>
        <?= $this->Html->css('base.css'); ?>
        <?= $this->Html->css('Template/Pages/home.css'); ?>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' 
            type='text/css'>
    </head>

    <body>
        <?= $this->Element('nav'); ?>
        <div class='container'>
            <div id='test-info' class='row'>
                <div class='col s12 m10 l8 offset-m1 offset-l2'>
                    <h1>Candidate Test</h1>
                </div>
                <div class='col s12 m10 l8 offset-m1 offset-l2 test-info-sect'>
                    <h2>OBJECTIVE</h2>
                    <p>Demonstrate the ability to understand and follow directions. Research and 
                    solve the given problem.</p>
                </div>
                <div class='col s12 m10 l8 offset-m1 offset-l2 test-info-sect'>
                    <h2>DESCRIPTION</h2>
                    <p><span class='test-info-num'>1.</span>Mini-CMS: Write a simple tool to enter 
                    news articles. The tool should interact with a custom API that saves/reads data
                    to/from a plain JSON file.</p>
                    <p><span class='test-info-num'>2.</span>Make a simple responsive front-end site 
                    composed of two pages that interacts with your custom API to read the news 
                    articles:</p>
                    <p class='test-info-sub'><span class='test-info-num'>2.1.</span>Home page 
                    with the first 3 news articles sorted by date from newest to 
                    oldest, with a “load more” button to load 3 more news till the end.</p>
                    <p class='test-info-sub'><span class='test-info-num'>2.2.</span>Inner page 
                    triggered by clicking the title of the news in the home page, 
                    this page contains the full “news”; title, sub-header, date, author and 
                    abstract of the content that expands on clicking “read more”.</p>
                </div>
                <div id='test-info-button-container' class='col s12'>
                    <a class='button main-button' href='/home'>Go Home</a>
                </div>
            </div>
        </div>
    </body>
</html>
