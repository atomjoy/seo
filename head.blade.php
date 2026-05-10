<title>{{ config('settings.title') ?? 'Dj Events' }}</title>
<meta name="description" content="{{ config('settings.description') }}">
<meta name="keywords" content="{{ config('settings.keywords') }}">
<link rel="canonical" href="{{ config('settings.url') }}/" />
<link rel="alternate" href="{{ config('settings.url') }}/" hreflang="x-default" />

<!-- Favicon -->
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="apple-touch-icon" href="/favicon-96x96.png" type="image/png" />

{{--
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
--}}

<!-- Css, links -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@if (config('settings.gtag') != '')
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id={{ config('settings.gtag') }}"></script>
<script>
    window.dataLayer = window.dataLayer || []
    function gtag() {
        dataLayer.push(arguments)
    }
    gtag('consent', 'default', {
        ad_user_data: 'granted',
        ad_personalization: 'granted',
        ad_storage: 'granted',
        analytics_storage: 'granted',
        // 'wait_for_update': 500,
    })
    gtag('js', new Date())
    gtag('config', '{{ config('settings.gtag') }}')
</script>
@endif

<!-- OpenGraph -->
<meta property="og:url" content="{{ config('settings.url') }}" />
<meta property="og:type" content="website" />
<meta property="og:site_name" content="{{ config('settings.title') }}" />
<meta property="og:title" content="{{ config('settings.title') }}" />
<meta property="og:description" content="{{ config('settings.description') }}" />
<meta property="og:locale" content="{{ config('settings.locale') }}" />
<meta property="og:image" content="{{ config('settings.image_url') }}" />
<meta property="og:image:width" content="512" />
<meta property="og:image:height" content="512" />

@if (config('settings.x_username') != '')
<!-- Twitter -->
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="{{ config('settings.x_username') }}" />
<meta name="twitter:title" content="{{ config('settings.x_title') }}" />
<meta name="twitter:description" content="{{ config('settings.x_description') }}" />
<meta name="twitter:image:alt" content="{{ config('settings.x_title') }}" />
<meta name="twitter:image" content="{{ config('settings.image_url') }}" />
@endif

<!-- Schema -->
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "{{ config('settings.title') }}",
        "url": "{{ config('settings.url') }}",
        "alternateName": ["EX", "Example Shop", "example.com"]
    }
</script>

<!-- Schema Place -->
<script type="application/ld+json">
{
    "@type": "Place",
    "@id": "https://example.com/#place",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "123 Cherry Lane",
        "addressLocality": "Long Beach",
        "addressRegion": "California",
        "postalCode": "90802",
        "addressCountry": "USA"
    }
}
</script>

<!-- WebPage Breadcrumbs for (Award Winners) -->
<meta property="og:title" content="Example: Award Winner | SciFi Movie Awards">
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Books",
        "item": "https://example.com/books"
    },{
        "@type": "ListItem",
        "position": 2,
        "name": "Science Fiction",
        "item": "https://example.com/books/sciencefiction"
    },{
        "@type": "ListItem",
        "position": 3,
        "name": "Award Winners"
    }]
}
</script>

<!-- Schema Blog Image -->
<meta property="og:image" content="https://example.com/images/awards.png">
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BlogPosting",
    "mainEntityOfPage": "https://example.com/url",
    "image": "https://example.com/images/awards.png"
}
</script>

<!-- Main page navigation -->
<script type="application/ld+json">
{
    "@context": "https://schema.org/",
    "@type": "SiteNavigationElement",
    "name": "Main navigation",
    "url": "https://www.example.com",
    "description": "Home page",
    "mainEntity": {
        "@type": "ItemList",
        "itemListElement": [
            {
                "@type": "WebSite",
                "@id": "#website",
                "name": "Home Page",
                "url": "https://example.com",
                "position": 1
            },
            {
                "@type": "WebPage",
                "@id": "#services-page",
                "name": "Services page",
                "url": "https://example.com/services",
                "position": 2
            },
            {
                "@type": "WebPage",
                "@id": "#contact-page",
                "name": "Contact page",
                "url": "https://example.com/contact",
                "position": 2
            },
            {
                "@type": "WebPage",
                "@id": "#about-page",
                "name": "About page",
                "url": "https://example.com/about",
                "position": 2
            },
            {
                "@type": "WebPage",
                "@id": "#faq-page",
                "name": "FAQ page",
                "url": "https://example.com/faq",
                "position": 2
            }
        ]
    }
}
</script>
