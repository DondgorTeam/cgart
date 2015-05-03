
<div class="form-group">
    {!! Form::label('title','Гарчиг:') !!}
    {!! Form::text('title',null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('content','Агуулга:') !!}
    {!! Form::textarea('content',null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('published_at','Нийтэлсэн хугацаа:') !!}
    {!! Form::input('date', 'published_at',$article->published_at, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('tag_list','Ангилал:') !!}
    {!! Form::select('tag_list[]', $tags, null, ['id' => 'tag_list', 'class'=>'form-control', 'multiple']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary ']) !!}
</div>

@section('footer')
    <script>
        $('#tag_list').select2({
            placeholder: 'Ангилалыг сонгох'
        });
    </script>
@endsection