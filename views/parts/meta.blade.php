<title>{!! !empty($meta_title) ? $meta_title : $pagetitle !!} - {!! evo()->getConfig('site_name') !!}</title>
<meta property="og:title" content="{!! !empty($meta_title) ? $meta_title : $pagetitle !!} - {!! evo()->getConfig('site_name') !!}">
<meta name="description" content="{!! !empty($meta_description) ? $meta_description : $introtext !!}">
<meta property="og:description" content="{!! !empty($meta_description) ? $meta_description : $introtext !!}">
{!! $meta_noindex !!}
<link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon">
<link rel="icon" href="favicon.png" type="image/png">
@if ( !empty($image_src) ) 
    <link rel="image_src" href="{!! $image_src !!}">
    <meta property="og:image" content="{!! $image_src !!}">
@elseif ( !empty($image) ) 
    <link rel="image_src" href="{!! $image !!}">
    <meta property="og:image" content="{!! $image !!}">
@else 
    <link rel="image_src" href="img/socials.png">
    <meta property="og:image" content="img/socials.png">
@endif
<meta property="og:type" content="website">
<meta property="og:site_name" content="{!! evo()->getConfig('site_name') !!}">

<meta http-equiv="Content-Type" content="text/html; charset={!! evo()->getConfig('modx_charset') !!}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<base href="{!! evo()->getConfig('site_url') !!}">
