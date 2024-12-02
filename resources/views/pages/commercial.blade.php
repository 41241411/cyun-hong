@extends('layouts.app')

@section('title', '工商登記服務')

@section('custom-css')
<style>
    .col-4 {
        padding: 15px;
    }
</style>
@endsection

@section('content-title')
{{ Breadcrumbs::render('commercial') }}
<h2 class="mt-5">工商登記服務</h2>
@endsection

@section('content')
<div class="row">
    <div class="col-4">
        <strong>
            <span style="color: #008080;">公司及商號設立登記</span>
        </strong>
    </div>
    <div class="col-4">
        <strong>
            <span style="color: #008080;">公司及商號變更登記</span>
        </strong>
    </div>
    <div class="col-4">
        <strong>
            <span style="color: #008080;">公司及商號停業及歇業登記</span>
        </strong>
    </div>
</div>
<div class="row">
    <div class="col-4">
        <strong>
            <span style="color: #33cccc;">營造業設立登記</span>
        </strong>
    </div>
    <div class="col-4">
        <strong>
            <span style="color: #33cccc;">營造業晉升等級及其他變更事項登記</span>
        </strong>
    </div>
    <div class="col-4">
        <strong>
            <span style="color: #33cccc;">營造業工程承攬總額申報</span>
        </strong>
    </div>
</div>
<div class="row">
    <div class="col-4">
        <strong>
            <span style="color: #008080;">工廠設立登記</span>
        </strong>
    </div>
    <div class="col-4">
        <strong>
            <span style="color: #008080;">工廠變更登記</span>
        </strong>
    </div>
    <div class="col-4">
        <strong>
            <span style="color: #008080;">工廠停業及歇業登記</span>
        </strong>
    </div>
</div>
<div class="row">
    <div class="col-4">
        <strong>
            <span style="color: #33cccc;">華僑及外國人投資申請</span>
        </strong>
    </div>
    <div class="col-4">
        <strong>
            <span style="color: #33cccc;">境外公司申請及規劃</span>
        </strong>
    </div>
    <div class="col-4">
        <strong>
            <span style="color: #33cccc;">承辦各項環保業務</span>
        </strong>
    </div>
</div>
<div class="row">
    <div class="col-4">
        <strong>
            <span style="color: #008080;">各類許可執照之申請</span>
        </strong>
    </div>
    <div class="col-4">
        <strong>
            <span style="color: #008080;">進出口業務之申請</span>
        </strong>
    </div>
    <div class="col-4">
        <strong>
            <span style="color: #008080;">勞保健保業務之申請</span>
        </strong>
    </div>
</div>
@endsection

@section('custom-js')

@endsection