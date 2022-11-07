@extends('layouts.main')

@section('styles')
<link rel="stylesheet" href="/css/member.css">
@endsection

@section('container')
<div class="title-member">MEMBER</div>

<div class="profile-area">
    <div class="jkt48-logo-2">
        <img src="/img/jkt48-logo-2.png" width="100px">
    </div>
    <div class="profile-set">
        <div class="img-member">
            <img class="member-image" src="/storage/{{ $member->image }}">
        </div>
        <div class="profile-info">
            <div class="name-set">
                <div class="title-jp-name pink">{{ $member->nickname_JP }}</div>
                <div class="title-name pink">{{ $member->name }}</div>
                <div class="title-nickname pink">{{ $member->nickname }}</div>
            </div>
        </div>
    </div>
</div>



@endsection