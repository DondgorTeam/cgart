@extends('layouts.master') @section('content')
<div class="container">
    <div id="from">
        <h1>Бүтээл оруулах</h1>
        <form method="POST" action="{{ action('PicturesController@store')}}" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <div class="form_row">
                <input placeholder="Зургийн нэр:" type="text" name="name" value="{{ old('name') }}">
            </div>
            <div class="form_row">
                <input type="file" name="file" placeholder="Зураг оруулах:" id="file-browse">
            </div>
            <div class="form_row">
                <img id="image" alt="Picture" width="512px" />
            </div>
            <div class="form_row">
                <label for="sel1">Зургийн зориулалт:</label><br />
                <select name="category-list" placeholder="Зургийн зориулалт:" id="sel1">
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form_row">
                <input type="hidden" name="cropData" id="putData" />
                <button type="submit" class="btn">Үүсгэх</button>
            </div>
        </form>
    </div>
</div>
<script>
    $('#myModal').on('shown.bs.modal', function () {
    $('#myInput').focus()
});

 //check if browser supports file api and filereader features
if (window.File && window.FileReader && window.FileList && window.Blob) {


  function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
    
            reader.onload = function (e) {
                $('#image').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#file-browse").change(function(){
        readURL(this);
        setTimeout(function() {
            $(function () {
                $('#image').cropper({
                    aspectRatio: 213 / 151,
                    minWidth: 213,
                    minHeight: 151,
                    viewMode: 1,
                    dragMode: 'move',
                    
                    restore: false,
                    guides: false,
                    highlight: false,
                    cropBoxMovable: false,
                    cropBoxResizable: false,
                    crop: function(e) {
                        $("#putData").val(JSON.stringify(e));
                    }
                });
            });
        }, 1000);
    });

} else {

  alert('The File APIs are not fully supported in this browser.');

}

</script>
@endsection