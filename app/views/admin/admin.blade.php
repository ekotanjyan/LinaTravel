@if(Session::has('login'))

@include('admin.header')
@if(Input::get('r')=='tours')
    @include('admin.tour')
@else
    @include('admin.ap')
@endif
@include('admin.footer')


@else
    {{ Form::open(array('url' => 'login_form')) }}
    {{ Form::label('Name')}}
    {{ Form::text('name')}}
    {{ Form::label('Password')}}
    {{ Form::text('password')}}
    {{ Form::submit('Login') }}
    {{ Form::close() }}
@endif