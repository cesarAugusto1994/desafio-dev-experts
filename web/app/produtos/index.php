<?php

require __DIR__ . '/../../bootstrap.php';

echo twig_render('produtos/index.html.twig', ['debug' => true]);