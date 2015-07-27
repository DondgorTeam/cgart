@extends('layouts.admin')

@section('content')
<div class="banner banner-profile">
<div class="container">
    <div class="banner-profile_user">
        <img src="//www.gravatar.com/avatar/dadf7c8caa83d70a97fbab018ff76971?size=200" class="profile_avatar" alt="Odhuu">
        <h1 class="banner-profile_name">Odhuu</h1>
        <p class="banner-profile_location"><i class="flag flag-mn"></i>Ulaanbaatar</p>
            
        <button id="editProfile" class="btn btn-primary">Edit Profile</button>
    </div>
    <div class="banner-profile_experience">
            <h4>
                400
                <span>EXPERIENCE</span>
            </h4>
	</div>
</div>
@endsection