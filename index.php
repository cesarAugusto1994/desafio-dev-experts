<?php

require __DIR__ . '/web/bootstrap.php';

echo twig_render('login.html.twig', ['debug' => true]);

?>
