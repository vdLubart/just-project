<div id="twitter_{{ $block->id }}" class="row">
    <a class="twitter-timeline"  href="https://twitter.com/{{ @$block->parameters->account }}" data-widget-id="{{ @$block->parameters->widgetId }}">Tweets by {{ '@'. @$block->parameters->account }}</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0], p = /^http:/.test(d.location)?'http':'https'; if (!d.getElementById(id)){js = d.createElement(s); js.id = id; js.src = p + "://platform.twitter.com/widgets.js"; fjs.parentNode.insertBefore(js, fjs); }}(document, "script", "twitter-wjs");</script>
</div>