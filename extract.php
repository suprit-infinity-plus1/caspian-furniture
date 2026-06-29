<?php

$html = file_get_contents('resources/views/pages/index.blade.php');

// Extract Banners
preg_match_all('/<div class="wrap-slider.*?<img.*?src="\{\{ asset\(\'(.*?)\'\) \}\}".*?<h1.*?>(.*?)<\/h1>.*?<p.*?>(.*?)<\/p>.*?<a.*?>(.*?)</s', $html, $banners);
echo "BANNERS:\n";
for($i=0; $i<count($banners[0]); $i++) {
    $img = basename($banners[1][$i]);
    $title = trim(strip_tags($banners[2][$i]));
    $subtitle = trim(strip_tags($banners[3][$i]));
    $btn = trim(strip_tags($banners[4][$i]));
    echo "- $title | $subtitle | $btn | $img\n";
}

// Extract Categories
preg_match_all('/<div class="cls-img-item hover-img">.*?<img.*?src="\{\{ asset\(\'(.*?)\'\) \}\}".*?<a class="link".*?>(.*?)<\/a>/s', $html, $cats);
echo "\nCATEGORIES:\n";
for($i=0; $i<count($cats[0]); $i++) {
    $img = basename($cats[1][$i]);
    $title = trim(strip_tags($cats[2][$i]));
    echo "- $title | $img\n";
}

// Extract Products
preg_match_all('/<div class="card-product style-1.*?>.*?<img class="lazyload img-product".*?src="\{\{ asset\(\'(.*?)\'\) \}\}".*?<a.*?class=" text-title title link">(.*?)<\/a>.*?<div class="price.*?>(.*?)<\/div>/s', $html, $prods);
echo "\nPRODUCTS:\n";
for($i=0; $i<count($prods[0]); $i++) {
    $img = basename($prods[1][$i]);
    $title = preg_replace('/\s+/', ' ', trim(strip_tags($prods[2][$i])));
    $priceHtml = $prods[3][$i];
    $oldPrice = '';
    $newPrice = '';
    if (preg_match('/<span.*?>(.*?)<\/span>(.*)/', $priceHtml, $p)) {
        $oldPrice = trim(strip_tags($p[1]));
        $newPrice = trim(strip_tags($p[2]));
    } else {
        $newPrice = trim(strip_tags($priceHtml));
    }
    
    // remove $
    $oldPrice = str_replace('$', '', $oldPrice);
    $newPrice = str_replace('$', '', $newPrice);

    echo "- $title | $newPrice | $oldPrice | $img\n";
}

