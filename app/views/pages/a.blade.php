{{--{{App::setLocale('ru')}}--}}
{{--{{print_r(Session::get('lang'))}}--}}
{{App::getLocale()}}
<?php  use Illuminate\Support\Facades\Lang; echo  trans('pagination.previous') ; ?>
