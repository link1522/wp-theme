<?php

function card($attributes)
{
	$attrs = shortcode_atts(array(
		'title' => 'This is Card',
		'text' => 'hello world',
	), $attributes);

	return <<<HTML
		<div  class=" mb-2">
			<h3>{$attrs['title']}</h3>
			<p>{$attrs['text']}</p>
		</div>
	HTML;
}

add_shortcode('card', 'card');
