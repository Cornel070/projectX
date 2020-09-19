@if(session('success'))
    <div class="alert alert-success outline alert-dismissible show" role="alert">
        <p> {!! session('success') !!}</p>
        <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
    </div>
@endif

@if(session('error'))
    <div class="alert alert-warning outline alert-dismissible show" role="alert">
        <p> {!! session('error') !!}</p>
        <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
    </div>
@endif
