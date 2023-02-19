<?php

$page_title = "Not Found (404)";
$friendly_urls = false;

$page_content = function()
{
?>

<div style="max-width: 600px; margin: 0 auto;">
    <h2 class="w3-xxlarge w3-text-pink"><b>Not Found (404)</b></h2>
    <p>Oops, looks like there is nothing there!</p>
    <p>Not to worry, head on over to the <a href="/">main page</a> and I am sure you will find what you are looking for from there.</p>
</div>

<?php
};

include __DIR__ . DIRECTORY_SEPARATOR . "_includes" . DIRECTORY_SEPARATOR . "base.php";
