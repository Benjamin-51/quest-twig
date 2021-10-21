<?php

require_once __DIR__ . '/../config/twig.php';
$products = ['guitare', 'bass', 'banjo', 'cithare', 'lyre', 'harpe', 'piano'];


echo $twig->render('products.html.twig', ['products' => $products]);
