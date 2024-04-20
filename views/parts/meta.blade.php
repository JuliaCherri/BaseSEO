<title>{!! ($titl != '') ? $titl : $pagetitle !!} - {!! evo()->getConfig('site_name') !!}</title>
<meta name="description" content="{!! ($desc != '') ? $desc : $introtext !!}">
{!! $noIndex !!}
<link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon">
<link rel="icon" href="favicon.png" type="image/png">
@if ($image_src!='') <link rel="image_src" href="{!! $image_src !!}">
@elseif (isset($image) && $image!='') <link rel="image_src" href="{!! $image !!}">
@else <link rel="image_src" href="img/socials.png">
@endif
<meta http-equiv="Content-Type" content="text/html; charset={!! evo()->getConfig('modx_charset') !!}">
<base href="{!! evo()->getConfig('site_url') !!}">