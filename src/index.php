<?php

$page_content = function()
{
?>

<div class="w3-col s3 w3-show-small w3-hide-medium w3-hide-large">&nbsp;</div>
                
<div class="w3-center w3-padding w3-col s6 m5 l4">
    <img src="https://images.staticly.ict.rocks/avatars/taramckale_original_400x600.jpg" class="w3-image w3-round-xlarge w3-topbar w3-rightbar w3-bottombar w3-leftbar w3-border-pink" alt="Tara McKale Photo">
</div>

<div class="w3-padding-large w3-col m7 l8">
    <h2 class="w3-xxlarge w3-text-pink"><b>About Me</b></h2>
    <p>I'm a young and fairly simple female individual, with blonde hair and light blue eyes, 5' 1" (155 centimeters), 160.7 pounds (72.89 kilograms).</p>
    <p>When not busy, I like to chill out with some music playing in the background and a cool glass of water.</p>

    <h2 class="w3-xxlarge w3-text-pink"><b>Contact Me</b></h2>
    <p>Send me an email anytime. I read them all.</p>

    <p id="email_address"><b class="w3-padding w3-text-pink">contact [at] taramckale [dot] ict [dot] rocks</b></p>

    <script>
        var email_address = document.getElementById( 'email_address' );

        email_address.innerHTML = '<a href="mailto:contact' + '@' + 'taramckale' + '.' + 'ict' + '.' + 'rocks" target="_blank" class="w3-button w3-sand w3-hover-none w3-text-pink w3-hover-text-pink"><b>contact' + '@' + 'taramckale' + '.' + 'ict' + '.' + 'rocks</b></a>';
    </script>
</div>

<?php
};

include __DIR__ . DIRECTORY_SEPARATOR . "_includes" . DIRECTORY_SEPARATOR . "base.php";
