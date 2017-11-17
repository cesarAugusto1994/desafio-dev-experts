<?php

require __DIR__ . '/bootstrap.php';

echo twig_render('index.html.twig', ['debug' => true]);

?>