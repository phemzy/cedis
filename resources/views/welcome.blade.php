
<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">

<title>Crypto2Cedis</title>
<meta name="description" content="Crypto2Cedis">
<meta name="author" content="pixelcave">
<meta name="robots" content="noindex, nofollow">
<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

<link rel="stylesheet" id="css-main" href="assets/css/oneui.min-3.2.css">
</head>
<body><div class="content bg-white text-center pulldown overflow-hidden">
<div class="row">
<div class="col-sm-6 col-sm-offset-3">
<h1 class="font-s128 font-w300 text-smooth animated rollIn">Hi</h1>
<h2 class="h3 font-w300 push-50 animated fadeInUp">We are launching soon!</h2>
<h2><small></small></h2>
<form class="form-horizontal push-50" action="{{ route('subscribe') }}" method="post">
{{ csrf_field() }}
<div class="form-group">
<div class="col-sm-6 col-sm-offset-3">
<div class="input-group input-group-lg">
<input class="form-control" type="text" placeholder="Enter email">
<div class="input-group-btn">
<button class="btn btn-default"><i class="fa fa-search"></i></button>
@if(count($errors))
    @foreach($errors->all() as $e)
        <span class="help-block">{{ $e }}</span>
    @endforeach
@endif
@if(session()->has('success'))
    <span class="label label-primary">{{ session()->get('success') }}</span>
@endif
</div>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
<div class="content pulldown text-muted text-center">
Powered By:<br>
<a class="link-effect" href="/">Crypto2Cedis</a>
</div>
<script src="assets/js/oneui.min-3.2.js"></script><script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-16158021-6', 'auto');ga('send', 'pageview');</script>
</body>
</html>