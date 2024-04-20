<title>{!! !empty($meta_title) ? $meta_title : $pagetitle !!} - {!! evo()->getConfig('site_name') !!}</title>
<meta name="description" content="{!! !empty($meta_description) ? $meta_description : $introtext !!}">
{!! $meta_noindex !!}
<link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon">
<link rel="icon" href="favicon.png" type="image/png">
@if ( !empty($image_src) ) <link rel="image_src" href="{!! $image_src !!}">
@elseif ( !empty($image) ) <link rel="image_src" href="{!! $image !!}">
@else <link rel="image_src" href="img/socials.png">
@endif
<meta http-equiv="Content-Type" content="text/html; charset={!! evo()->getConfig('modx_charset') !!}">
<base href="{!! evo()->getConfig('site_url') !!}">