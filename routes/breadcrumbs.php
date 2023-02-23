<?php

use Diglactic\Breadcrumbs\Breadcrumbs;

use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;


Breadcrumbs::for('/', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('product.index'));
});

Breadcrumbs::for('show', function (BreadcrumbTrail $trail, $product) {
    $trail->parent('/');

    $trail->push($product->title, route('product.show', $product));
});
