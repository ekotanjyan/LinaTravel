@include('admin.header')

@if(Session::has('login'))


@if(Input::get('r')=='tours')
    @include('admin.tour')
@elseif(Input::get('r')=='partners')
    @include('admin.partners')
    @else
    @include('admin.ap')
@endif


@else
    <div class="main-login main-center">
    {{ Form::open(array('url' => 'login_form','class'=>'form-horizontal')) }}
        <div class="form-group">
    {{ Form::label('Name',null,['class'=>'cols-sm-2 control-label'])}}
            <div class="cols-sm-10">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
    {{ Form::text('name',null,['class'=>'form-control','placeholder'=>'admin'])}}
                </div>
            </div>
        </div>
        <div class="form-group">
    {{ Form::label('Password',null,['class'=>'cols-sm-2 control-label'])}}
            <div class="cols-sm-10">
                <div class="input-group">
 <span class="input-group-addon"><i class="glyphicon glyphicon-lock" aria-hidden="true"></i></span>
    {{ Form::password('password',['class'=>'form-control','placeholder'=>'admin'])}}
        </div>
            </div>
        </div>
        <div class="form-group ">
    {{ Form::submit('Login',['class'=>'btn btn-primary btn-lg btn-block login-button']) }}
        </div>
    {{ Form::close() }}
    </div>
@endif


@include('admin.footer')