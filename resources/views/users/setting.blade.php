
@extends('layouts.master')
@section('content')
<div class="banner banner-profile">
    <div class="container">
        <div class="banner-profile_user">
            <img src="http://s.gravatar.com/avatar/dadf7c8caa83d70a97fbab018ff76971?s=100" class="profile_avatar" alt="{{ $user->name }}">
            <h1 class="banner-profile_name">{{ $user->name }}</h1>
            <p class="banner-profile_location"><i class="flag flag-mn"></i>Ulaanbaatar</p>
            @can('edit_forum')
            <button id="editProfile" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Засварлах</button>
            @endcan
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Өөрийн мэдээллийг засварлах</h4>
                        </div>
                        <form method="POST" action="{{ action('DashboardController@setting', [ 'id' => $user->id ])  }}">
                            <div class="modal-body">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="name" class="control-label">Нэр:</label>
                                        <input class="form-control" type="text" name="name" value="{{ $user->name  }}" >
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="control-label">Имэйл:</label>
                                        <input class="form-control" type="email" name="email" value="{{ $user->email }}">
                                    </div>
                                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                                    <!-- <div class="form-group">
                                        <label for="password" class="control-label">Мэргэжил:</label>
                                        <input class="form-control" type="text" name="occupation">
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="control-label">Байршил:</label>
                                        <input class="form-control" type="text" name="places">
                                    </div> -->
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Хаах</button>
                                <button type="submit" class="btn btn-primary">Өөрчлөлтийг хадгалах</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-profile_experience">
            <h4>
            400
            <span>ТУРШЛАГА</span>
            </h4>
        </div>
    </div>
</div>
<br>
<div class="container home">

        </div>
<script>
$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').focus()
})
</script>
@endsection