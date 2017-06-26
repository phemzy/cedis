
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
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" id="css-main" href="assets/css/oneui.css">
</head>
<body><div class="content bg-white text-center pulldown overflow-hidden">
<div class="row">
<div class="col-sm-6 col-sm-offset-3">
<h1 class="font-s128 font-w300 text-smooth animated rollIn">Hi</h1>
<h2 class="h3 font-w300 push-50 animated fadeInUp">We are launching soon!</h2>
<h2><small>Enter your email to subscribe:</small></h2>
<form class="form-horizontal push-50" action="{{ route('subscribe') }}" method="post">
{{ csrf_field() }}
<div class="form-group">
<div class="col-sm-6 col-sm-offset-3">
<div class="input-group input-group-lg">
<input class="form-control" type="text" placeholder="Enter email" name="email">
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
</html>