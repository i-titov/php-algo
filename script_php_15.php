<?php
$homepage = file_get_contents('https://fr.wikipedia.org/wiki/Wikip%C3%A9dia:Accueil_principal');
$page = fopen('./files/page.html', 'w');
fwrite($page, $homepage);
fclose($page);



