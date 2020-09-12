@extends('beautymail::templates.widgets')

@section('content')
@include('beautymail::templates.widgets.articleStart', ['color' => 'black'])
<h2> Staff Verification Code</h2>

	Dear {{ $user['full_name'] }}, below is your 5-digit verification code, please copy and enter into the app to complete your account setup.
@include('beautymail::templates.widgets.articleEnd')

@include('beautymail::templates.widgets.newfeatureStart', ['color'=>'#ffbf00'])
<h2 style="margin: 0 auto; text-align: center;" >{{ $code }}</h2><br>
<strong>Please do note that this verification code is only valid for 10mins.</strong>
@include('beautymail::templates.widgets.newfeatureEnd')
@stop



