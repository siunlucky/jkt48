@extends('layouts.main')

@section('styles')
<link rel="stylesheet" href="css/members.css">
@endsection

@section('container')

<div class="container">
    <div class="title-member">MEMBER</div>
</div>
<div class="member-list">
    <div class="row">
        @foreach ($members as $member)
        <a href="/members/{{ $member->slug }}" class="wrap-members">
            <div class="member-card">
                <div>
                    <img class="member-photo" src="storage/{{ $member->image }}" width="200px" alt="">
                </div>
                <div class="info-member">
                    <div class="title-nickname pink">{{ $member->nickname_JP }}</div>
                    <div class="title-name pink">{{ $member->name }}</div>
                    <div class="title-birth pink">{{ $member->birthdate }}</div>
                </div>
            </div>
        </a>

        @endforeach

    </div>
</div>
@endsection