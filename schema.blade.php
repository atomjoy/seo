{{--
# All schemas
https://validator.schema.org
https://classyschema.org/Visualisation

# Only google schemas
https://search.google.com/test/rich-results
--}}

{{-- Breadcrumbs for (Award Winners) subpage --}}
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

{{-- Main page navigation --}}
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

{{-- Schema WebPage Image --}}
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "url": "https://example.com/url",
    "primaryImageOfPage": "https://example.com/images/cat.png"
}
</script>

{{-- Schema WebPage Image --}}
<meta property="og:image" content="https://example.com/images/cat.png">

{{-- Schema Blog Image --}}
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BlogPosting",
    "mainEntityOfPage": "https://example.com/url",
    "image": "https://example.com/images/cat.png"
}
</script>

{{-- Schema WebPage Title --}}
<meta property="og:title" content="Example: A Site about Examples">

{{-- Google Page Title --}}
<title>Example: A Site about Examples</title>
<title>Example: Strony internetowe Przasnysz | Web Developer</title>
<script type="application/ld+json">
{
    "@context" : "https://schema.org",
    "@type" : "WebSite",
    "name" : "Example Company",
    "url" : "https://example.com/",
    "alternateName": ["EXC", "Example Shop", "example.com"]
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

<!-- Schema Organization -->
<script type="application/ld+json">
{
    "@type": "Organization",
    "url": "https://www.example.com",
    "sameAs": [
        "https://facebook.com/myprofile",
        "https://instagram.org/myprofile",
        "https://pinterest.org/myprofile",
    ],
    "logo": "https://www.example.com/images/logo.webp",
    "name": "Your Company Name",
    "description": "The description of your company",
    "email": "contact@example.com",
    "telephone": "1-555-000-000",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "123 Cherry Street",
        "addressLocality": "Long Beach",
        "addressRegion": "California",
        "postalCode": "90802"
        "addressCountry": "USA",
    },
}
</script>

<!-- Schema Website -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebSite",
    "name": "{{ config('settings.title') }}",
    "url": "{{ config('settings.url') }}"
}
</script>

<!-- Schema Website Search -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebSite",
    "name": "{{ config('settings.title') }}",
    "url": "{{ config('settings.url') }}",
    "publisher": {
        "@id": "https://example.com/#organization"
    },
    "inLanguage": "en-US",
    "potentialAction": {
        "@type": "SearchAction",
        "target": "https://yoursite.com?s={search_term_string}",
        "query-input": "required name=search_term_string"
  }
}
</script>

{{-- Website --}}
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebSite",
    "@id": "#website",
    "name": "Nice App",
    "url": "https://example.com",
    "hasPart": [{
        "@type": "WebPage",
        "@id": "#services",
        "name": "Services",
        "url": "https://example.com/services",
        "hasPart": [{
            "@type": "WebPage",
            "@id": "#services-coding",
            "name": "Coding Service",
            "url": "https://example.com/services/coding"
        },{
            "@type": "WebPage",
            "@id": "#services-modeling",
            "name": "Modeling Service",
            "url": "https://example.com/services/modeling"
        }]
    },
    {
        "@type": "AboutPage",
        "@id": "#about",
        "name": "About",
        "url": "https://example.com/about"
    },
    {
        "@type": "ContactPage",
        "@id": "#contact",
        "name": "contact",
        "url": "https://example.com/contact"
    }]
}
</script>

{{-- WebPage --}}
<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "WebPage",
    "@id": "#services",
    "url": "https://example.com/services",
    "isPartOf": {
        "@type": "WebSite",
        "@id": "#website"
    }
}
</script>

{{-- ContactPage --}}
<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "ContactPage",
    "@id": "#contact",
    "url": "https://example.com/contact",
    "isPartOf": {
        "@type": "WebSite",
        "@id": "#website"
    }
}
</script>

{{-- AboutPage --}}
<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "AboutPage",
    "@id": "#about",
    "url": "https://example.com/about",
    "isPartOf": {
        "@type": "WebSite",
        "@id": "#website"
    }
}
</script>

{{-- Page with categories links --}}
<script type="application/ld+json">
{
    "@context": "https://schema.org/",
    "@type": "CollectionPage",
    "name": "Main categories",
    "url": "https://www.example.com/category",
    "description": "Categories page",
    "mainEntity": {
        "@type": "ItemList",
        "itemListElement": [
            {
                "@type": "WebPage",
                "name": "Category Kids",
                "url": "https://example.com/category/kids",
                "position": 2
            },
            {
                "@type": "WebPage",
                "name": "Category Man",
                "url": "https://example.com/category/man",
                "position": 2
            },
            {
                "@type": "WebPage",
                "name": "Category Woman",
                "url": "https://example.com/category/woman",
                "position": 2
            }
        ]
    }
}
</script>

{{-- Manu navigacyjne (fake) --}}
<script type="application/ld+json">
{
    "@context": "https://schema.org/",
    "@type": "BreadcrumbList",
    "@id": "#website",
    "url": "https://www.example.com",
    "name": "Homepage",
    "description": "NiceApp homepage",
    "itemListElement": [{
        "@type": "ListItem",
        "@id": "#home",
        "name": "Home page",
        "item": "https://example.com",
        "position": 1
    },
    {
        "@type": "ListItem",
        "@id": "#contact",
        "name": "Contact page",
        "item": "https://example.com/contact",
        "position": 2
    },
    {
        "@type": "ListItem",
        "@id": "#about",
        "name": "About page",
        "item": "https://example.com/about",
        "position": 2
    },
    {
        "@type": "ListItem",
        "@id": "#faq",
        "name": "FAQ page",
        "item": "https://example.com/faq",
        "position": 2
    },
    {
        "@type": "ListItem",
        "@id": "#service",
        "name": "Services page",
        "item": "https://example.com/service",
        "position": 2
    },
    {
        "@type": "ListItem",
        "@id": "#service-coding",
        "name": "Coding Service",
        "item": "https://example.com/service/coding",
        "position": 3
    }]

}
</script>

{{-- Product --}}
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Product",
    "name": "Sample Product",
    "image": "https://www.example.com/product-image.jpg",
    "description": "Product description",
    "brand": {
        "@type": "Brand",
        "name": "Brand Name"
    },
    "sku": "12345",
    "offers": {
        "@type": "Offer",
        "url": "https://www.example.com/product-page",
        "priceCurrency": "USD",
        "price": "99.99",
        "availability": "https://schema.org/InStock"
    },
    "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.5",
        "reviewCount": "11"
    },
    "review": [{
        "@type": "Review",
        "reviewRating": {
            "@type": "Rating",
            "ratingValue": "4",
            "bestRating": "5"
        },
        "author": {
            "@type": "Person",
            "name": "Jane Smith"
        },
        "reviewBody": "Review text goes here"
    }]
}
</script>

