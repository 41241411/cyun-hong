<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// 設定首頁 breadcrumb
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('首頁', route('home'));
});

// 設定稅務頁面 breadcrumb
Breadcrumbs::for('tax', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('稅務記帳服務', route('tax'));
});

Breadcrumbs::for('commercial', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('工商登記服務', route('commercial'));
});