{{--{{App::setLocale('ru')}}--}}
{{--{{print_r(Session::get('lang'))}}--}}
{{--{{App::getLocale()}}--}}
<?php


?>
{{ Form::open(array('url' => 'admin/update','method'=>'post','enctype'=>'multipart/form-data')) }}
{{Form::hidden('id', null,['id'=>'id','class'=>'form-control'])}}
{{Form::hidden('table', 'Mostpopulartours',['class'=>'form-control'])}}
<div class="form-group">
    {{Form::Label('name', 'Name:',['class'=>'form-control-label'])}}
    {{Form::text('name', null,['id'=>'name','class'=>'form-control'])}}
</div>
<div class="form-group">
    {{Form::Label('price', 'Price:',['class'=>'form-control-label'])}}
    {{Form::text('price', null,['id'=>'price','class'=>'form-control'])}}
</div>
<div class="form-group">
    {{Form::Label('imgurl', 'Image:',['class'=>'form-control-label'])}}
    {{Form::text('imgurl', null,['id'=>'imgurl','class'=>'form-control'])}}
</div>
{{Form::file('file',['id'=>'file','class'=>'form-control','accept'=>'image/jpeg'])}}
{{Form::submit('Send message!',['class'=>'btn btn-primary'])}}
{{ Form::close() }}
