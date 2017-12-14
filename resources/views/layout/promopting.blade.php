
@if( session('message') == 'remark-success')
<div class="alert alert-success" style= 'width:60%' role="alert">已成功留言！</div>
@endif


@if( session('message') == 'email-success')
<div class="alert alert-success" style= 'width:60%' role="alert">请查收邮箱信息！</div>
@endif
