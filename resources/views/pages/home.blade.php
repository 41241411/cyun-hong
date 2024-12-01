@extends('layouts.app')

@section('title', '首頁')

@section('custom-css')
<style>
    /* 讓內容左右延伸 */
    .container {
            max-width: 100%;
            padding-left: 0;
            padding-right: 0;
        }

        .navbar {
            width: 100%;
            height: 110px;
            position: absolute;
            top: 0;
            left: 0;
            background: rgba(255, 255, 255, 0.3) !important;
            /* Green background with 30% opacity */
            /* 透明背景，0.5 代表50%的透明度 */
            z-index: 10;
            /* 確保 navbar 在 swiper 之上 */
        }

        .navbar-brand {
            margin-left: auto;
            margin-right: auto;
            display: block;
        }


        .swiper-container {
            width: 100%;
            height: 80vh;
            position: relative;
            z-index: 1;
            /* 背景圖片在 navbar 下方 */
        }

        .swiper-slide {
            background-size: cover;
            background-position: center;
            height: 500px;
        }

        .main-container {
            width: 60%;
            margin-left: auto;
            margin-right: auto;
        }

        .footer {
            background-color: #005050;
            color: white;
        }

        .footer-container {
            width: 60%;
            margin-left: auto;
            margin-right: auto;
        }

        .contact-list {
            list-style: none;
            /* 移除點點 */
            padding: 0;
            /* 去除內部間距 */
            margin: 0;
            /* 去除外部間距 */
        }

        #fans-follow i,
        #post-share i {
            color: rgba(255, 255, 255, 1);
            /* 按鈕顏色 */
            transition: color 0.3s ease;
        }

        #fans-follow i:hover,
        #post-share i:hover {
            color: #007bff;
            /* 滑鼠懸停時的顏色 */
        }
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