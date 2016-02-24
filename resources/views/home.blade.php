@extends('layouts.master') @section('content')
<!--<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="loginmodal-container">
            <h1>Login to Your Account</h1>
            <br>
            <form>
                <input type="text" name="user" placeholder="Username">
                <input type="password" name="pass" placeholder="Password">
                <input type="submit" name="login" class="login loginmodal-submit" value="Login">
            </form>

            <div class="login-help">
                <a href="#">Register</a> - <a href="#">Forgot Password</a>
            </div>
        </div>
    </div>
</div>-->
<div class="display">
<div class="container">
    <section  id="images">
    <header>
        
    </header>
    <div class="wrap clear-fix">
        @foreach($pictures as $picture)
        <figure class="row figure">
            
            <a href="{{ url('artwork', $picture->id) }}">
                <img src="images/{{ $picture->path_thumb }}" alt="#" width="100%">
            </a>
            <figcaption>
                <a class="artist" href="{{ App\User::find($picture->user_id)->name }}" title="#">{{ App\User::find($picture->user_id)->name }}</a>
                <a class="vote" href="#"><i class="material-icons md-18">grade</i></a>
            </figcaption>
            <!-- <div class="figure_title"><a href="{{ url('artwork', $picture->id) }}">{{ $picture->name }}</a></div> -->
        </figure>
        @endforeach
    </div>
    </section>
</div>
<br>

<!--<h2>First gallery:</h2>-->
<!--<div class="wrap clear-fix">-->
  <!--<div class="my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
    @foreach($pictures as $picture)
        <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
            <a class="artist" href="/user/2">{{ App\User::find($picture->user_id)->name }}</a>
            <a href="{{ url('artwork', $picture->id) }}" itemprop="contentUrl" width="100%" data-size="1024x1024">
                <img src="images/{{ $picture->path_thumb }}"   itemprop="thumbnail" alt="Image description" />
            </a>
            <figcaption itemprop="caption description">{{ $picture->name }}</figcaption>                                  
        </figure>
    @endforeach
  </div>-->
  <!--</div>-->


<div class="container">
    <h4><center> <a href="http://gardenturtle.blogspot.com/">Tyson Murphy</a> бол Artist болон Animator мэргэжилтэй. Blizzard Entertainment-ын World of Warcraft тоглоомны Character Artist ахлах мэргэжилд ажилладаг</center></h4>
        </div>
</div>
@endsection