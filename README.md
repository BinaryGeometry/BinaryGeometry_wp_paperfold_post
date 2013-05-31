A simple way to add the cool Paperfold CSS effect to your Wordpress themes.

Once you have installed the plugin from your Wordpress admin panel you will need to add the following call 
in your template file:

``php
<?php folding_post(); ?>
``

By default it's set to display your latest post and so far has no built in functionality to do anything else.

So far you should have a normal looking post. Just add the following snippet in your post content to activate
the coolness.

``php
[fold_post]
``

Your good to go. 

Customisation

I have kept the implementation deliberately simple, so out of the box it displays only the post content and
title. The paperfold-single-post.php file is where you want to look to add your required functions.

Likewise the css can be found /paperfold/css/paperfold.css . There is also an article.paperfold-post wrapper you can use in your theme stylesheet.

