---
content_placeholder: {{ content }}
images_url: https://images.storage.ict.rocks
w3css_url: https://w3css.staticly.ict.rocks
---
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title><?php if( isset( $metadata['page_title'] ) && $metadata['page_title'] ) echo $metadata['page_title'] . " - "; ?>Tara McKale</title>
        
        <link rel="stylesheet" type="text/css" href="--- metadata.w3css_url ---/4.15/w3.css">
    </head>
    <body class="w3-sand">
        <header class="w3-white">
            <div class="w3-content w3-row">
                <div class="w3-col s6">
                    <h1 class="w3-xlarge w3-text-pink"><b><a href="/" class="w3-button w3-hover-none">Tara McKale</a></b></h1>
                </div>

                <div class="w3-large w3-padding w3-padding-16 w3-col s6">
                    <nav class="w3-bar">
                        <a href="/" class="w3-bar-item w3-button w3-right w3-hover-light-gray">Home</a>
                    </nav>
                </div>
            </div>
        </header>

        <section class="w3-padding-64">
            <div class="w3-content w3-row">
                {{ content }}
            </div>
        </section>

        <footer class="w3-tiny w3-padding w3-white">
            <div class="w3-content">
                <p style="color: #aaa">Tara McKale is a ficticious character originally created as a promotional mascot for Persona Clix.</p>
            </div>
        </footer>

        <script type="text/javascript" src="/assets/js/anti-email-harvesting.js"></script>
    </body>
</html>
