	<!-- Standard SEO -->
	@isset($title)
		<title>{{ $title }}</title>
	@endisset
	<title>{{  config('app.name') }} - @yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="title" content="{{  config('app.name') }} - @yield('title')">

	<meta name="tag" content="{{ !empty($tag)? $tag : config('meta.tag') }}, @yield('meta_tag')">
    <meta name="author" content="{{ !empty($author)? $author : config('meta.author') }}">
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="referrer" content="{{ !empty($referrer)? $referrer : config('meta.referrer') }}">
	<meta name="robots" content="{{ !empty($robots)? $robots : config('meta.robots') }}">
	<meta name="description" content="@yield('description')">
	<meta name="keywords" content="{{ !empty($keywords)? $keywords : config('meta.keywords') }},@yield('keywords')">
	@if(config('meta.geo_region') !=='')
	<meta name="geo.region" content="{{ config('meta.geo_region') }}">
	@endif
	@if(config('meta.geo_position') !=='')
	<meta name="geo.position" content="{{ config('meta.geo_position') }}">
	<meta name="ICBM" content="{{ config('meta.geo_position') }}">
	@endif
	<meta name="geo.placename" content="{{  config('app.name') }}">

<!-- jsonld -->
<meta property="json-ld:title" content="{{  config('app.name') }} - @yield('title')">
	<meta property="json-ld:description" content="">
	<meta property="json-ld:image" content="@yield('image')">
	<meta property="json-ld:type" content="website">

	<!-- Dublin Core basic info -->
	<meta name="dcterms.Format" content="text/html">
	<meta name="dcterms.Language" content="{{ config('app.locale') }}">
	<meta name="dcterms.Identifier" content="{{ url()->current() }}">
	<meta name="dcterms.Relation" content="{{  config('app.name') }}">
	<meta name="dcterms.Publisher" content="{{  config('app.name') }}">
	<meta name="dcterms.Type" content="text/html">
	<meta name="dcterms.Coverage" content="{{ url()->current() }}">
	<meta name="dcterms.Title" content="{{  config('app.name') }} - @yield('title')">
	<meta name="dcterms.Subject" content="@yield('image')">
	<meta name="dcterms.Contributor" content="{{ !empty($author)? $author : config('meta.author') }}">
	<meta name="dcterms.Description" content="@yield('meta_description')">


	<!-- Facebook OpenGraph -->
	<meta property="og:locale" content="{{  config('app.locale') }}">
	<meta property="og:type" content="{{ !empty($type)? $type : config('meta.type') }}">
	<meta property="og:url" content="{{ url()->current() }}">
	<meta property="og:title" content="{{  config('app.name') }} - @yield('title')">
	<meta property="og:description" content="@yield('meta_description')">
	<meta property="og:image" content="@yield('image')">
	<meta property="og:site_name" content="{{  config('app.name') }}">

	@if(config('meta.fb_app_id') !=='')
	<meta property="fb:app_id" content="{{ config('meta.fb_app_id') }}"/>
	@endif

	<!-- Twitter Card -->
	@if(config('meta.twitter_card') !=='1')
	<meta name="twitter:card" content="{{ !empty($twitter_card)? $twitter_card : config('meta.twitter_card') }}">
	@endif
	@if(config('meta.twitter_site') !=='1' || !empty($twitter_site))
	<meta name="twitter:site" content="{{ !empty($twitter_site)? $twitter_site : config('meta.twitter_site') }}">
	@endif
	<meta name="twitter:title" content="{{  config('app.name') }} - @yield('title')">
	<meta name="twitter:description" content="@yield('meta_description')">
	<meta name="twitter:image" content="@yield('image')">

	<meta name="format-detection" content="telephone=no"/>
	




	<link rel="canonical" href="{{ url()->current() }}"/>
	<link rel="alternate" media="" href="{{ url()->current() }}"/>


	<link rel="dns-prefetch" href="//example.com/login"/>
	<link rel="dns-prefetch" href="//example.com/sitemap.xml" />



	


<!-- <meta name="referrer" content="origin"/>
<meta name="referrer" content="origin-when-crossorigin"/>
<meta name="referrer" content="origin-when-cross-origin"/> -->