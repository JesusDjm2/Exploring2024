<meta name="description" content="{{$tour->descripcion}}">
<meta name="keywords" content="{{ $tour->keywords}}"/>
<link rel="canonical" href="{{ request()->fullUrl() }}">
<link rel="image_src" content="{{ asset('img/buscador/' . $tour->img)  }}">

<meta name="og:image" content="{{ asset('img/buscador/' . $tour->img)  }}"/>
<meta name="og:secureImage" content="{{ asset('img/buscador/' . $tour->img)  }}"/>

<meta property="og:title" content="{{ $tour->nombre }}"/>
<meta property="og:description" content="{{ $tour->descripcion}}"/>
<meta property="og:url" content="{{ request()->fullUrl() }}"/>
<meta name="twitter:card" content="summary"/>
<meta name="robots" content="index,follow" />
