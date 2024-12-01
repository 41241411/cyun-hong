@extends('layouts.app')

@section('title', '群鴻的服務')

@section('custom-css')
<style>
    
</style>
@endsection

@section('content')
<!-- Swiper -->
<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide"
            style="background-image: url('https://static.iyp.tw/40416/system/page-banner-19c33.jpg');"></div>
        <div class="swiper-slide"
            style="background-image: url('https://static.iyp.tw/40416/system/page-banner-8e47c.jpg');"></div>
    </div>
    <div class="swiper-pagination"></div>
</div>

<!-- Main Section -->
<section class="my-5 main-container">
    <h2>群鴻的服務</h2>
    <hr class="mb-5">
    <div class="row">
        <div class="col-md-4">
            <ul>
                <li><a class="nav-link" href="#">稅務記帳服務</a></li>
                <li><a class="nav-link" href="#">工商登記服務</a></li>
                <li><a class="nav-link" href="#">營利事業例行性稅務事項</a></li>
                <li><a class="nav-link" href="#">營利事業所得稅申報方式</a></li>
            </ul>
        </div>
        <div class="col-md-4">
            <img style="margin-right: auto; margin-left: auto; display: block;" alt="稅務記帳服務.jpg"
                src="https://static.iyp.tw/40416/files/1f3874a8-6bf5-44e0-882a-c51e1f3cca53.jpg">
        </div>
        <div class="col-md-4">
            <img style="margin-right: auto; margin-left: auto; display: block;" alt="工商登記.jpg"
                src="https://static.iyp.tw/40416/files/2a6081a5-5f98-4474-a945-da1332750afb.jpg">
        </div>
    </div>
</section>
@endsection

@section('custom-js')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var swiper = new Swiper('.swiper-container', {
            direction: 'vertical',
            effect: 'fade',
            loop: true,
            autoplay: { delay: 3000, disableOnInteraction: false },
            pagination: { el: '.swiper-pagination', clickable: true },
        });
    });
</script>
@endsection