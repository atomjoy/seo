# SEO

SEO Przewodnik dla początkujących.

## Linki

```sh
https://ogp.me
https://developer.x.com/en/docs/x-for-websites/cards/overview/markup
https://schema.org/Article
https://schema.org/AboutPage
https://schema.org/ContactPage
https://schema.org/LocalBusiness
https://developers.google.com/search/docs/fundamentals/seo-starter-guide?hl=pl
https://developers.google.com/search/docs/appearance/site-names?hl=pl
https://developers.google.com/search/docs/appearance/visual-elements-gallery?hl=pl
https://developers.google.com/search/docs/appearance/structured-data/breadcrumb?hl=pl
https://developers.google.com/search/docs/appearance/structured-data/article?hl=pl
https://developers.google.com/search/docs/appearance/structured-data/search-gallery?hl=pl
https://pagespeed.web.dev/
https://search.google.com/test/rich-results
```

## Title

```html
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Short description goes here." />
<meta name="keywords" content="one, two" />
<title>Example: Short title goes here | Web Developer</title>
<link rel="canonical" href="https://example.com/" />

<!-- Allow bots -->
<meta name="robots" content="index, follow" />

<!-- Remove from goole -->
<meta name="googlebot" content="noindex, nofollow" />
```

## Favicon, geo

```html
<link rel="icon" type="image/png" sizes="192x192" href="/favicon/android-icon-192x192.png" />
<link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png" />

<link rel="shortcut icon" href="/favicon/favicon.ico" type="image/x-icon" />
<link rel="icon" href="/favicon/favicon.ico" type="image/x-icon" />

<meta name="geo.position" content="53.017850;20.904640" />
<meta name="geo.placename" content="Warszawa" />
```

## Schema org

```html
<!-- OpenGraph -->
<meta property="og:url" content="https://example.com" />
<meta property="og:locale" content="pl_PL" />
<meta property="og:type" content="website" />
<meta property="og:site_name" content="Example.com" />
<meta property="og:title" content="Strony internetowe Warszawa" />
<meta property="og:description" content="Tworzenie stron internetowych i sklepów internetowych, kodowanie stron produktów oraz szablonów e-mail newslettera w HTML, projektowanie logo, administracja serwerami VPS i hostingiem, identyfikacja wizualna, modelowanie 3D, rendering 3d, wizualizacje wnętrz, produktów i animacje 3d dla stron www." />
<meta property="og:image" content="https://example.com/img/logo.png" />
<meta property="og:image:width" content="700" />
<meta property="og:image:height" content="700" />

<!-- Optional -->
<meta property="business:contact_data:country_name" content="Poland" />
<meta property="business:contact_data:locality" content="Warsaw" />
<meta property="business:contact_data:region" content="Ursynów" />
<meta property="business:contact_data:postal_code" content="00100" />
<meta property="business:contact_data:street_address" content="99 Street" />
```

## Twitter

```html
<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image" />
<meta property="twitter:site" content="@username" />
<meta property="twitter:title" content="Strony internetowe Warszawa" />
<meta property="twitter:description" content="Tworzenie stron internetowych i sklepów internetowych, kodowanie stron produktów oraz szablonów e-mail newslettera w HTML, projektowanie logo, administracja serwerami VPS i hostingiem, identyfikacja wizualna, modelowanie 3D, rendering 3d, wizualizacje wnętrz, produktów i animacje 3d dla stron www." />
<meta property="twitter:image" content="https://example.com/img/logo.png" />
<meta property="twitter:image:alt" content="Example.com" />
```

## GTag

```html
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
        dataLayer.push(arguments);
    }
    gtag("consent", "default", {
        ad_user_data: "granted",
        ad_personalization: "granted",
        ad_storage: "granted",
        analytics_storage: "granted",
        // 'wait_for_update': 500,
    });
    gtag("js", new Date());
    gtag("config", "G-XXXXXXXXXX");
</script>
```

## Structured Data

### WebPage

```html
<script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "WebPage",
        "name": "Example Company",
        "url": "https://example.com/"
    }
</script>
```

### WebSite Search Input

```html
<title>Example: A Site about Examples</title>
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "Example Company",
        "url": "https://example.com/"
        "alternateName": "EC",
        "potentialAction": {
            "@type": "SearchAction",
            "target": "https://example.com/search/?q={search_string}",
            "query-input": "required name=search_string"
        }
    }
</script>
```

### Breadcrumbs

```html
<!--
Książki › Science Fiction › Laureaci
Literatura › Laureaci
-->
<title>Award Winners</title>
<script type="application/ld+json">
    [
        {
            "@context": "https://schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": [
                {
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Books",
                    "item": "https://example.com/books"
                },
                {
                    "@type": "ListItem",
                    "position": 2,
                    "name": "Science Fiction",
                    "item": "https://example.com/books/sciencefiction"
                },
                {
                    "@type": "ListItem",
                    "position": 3,
                    "name": "Award Winners"
                }
            ]
        },
        {
            "@context": "https://schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": [
                {
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Literature",
                    "item": "https://example.com/literature"
                },
                {
                    "@type": "ListItem",
                    "position": 2,
                    "name": "Award Winners"
                }
            ]
        }
    ]
</script>
```

### Breadcrumbs Blog

```html
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            {
                "@type": "ListItem",
                "position": 1,
                "item": {
                    "@id": "https://example.com/",
                    "name": "Home"
                }
            },
            {
                "@type": "ListItem",
                "position": 2,
                "item": {
                    "@id": "https://example.com/blog/",
                    "name": "Blog"
                }
            },
            {
                "@type": "ListItem",
                "position": 3,
                "item": {
                    "@id": "https://example.com/blog/how-to-implement-schema-markup-in-example/",
                    "name": "How to implement Schema Markup in Example"
                }
            }
        ]
    }
</script>
```

### Organization

```html
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Example",
        "url": "https://example.com/",
        "logo": "https://example.com/media/social/example_social_og.png",
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+48000000000",
            "contactType": "customer service",
            "availableLanguage": ["English", "Danish"]
        },
        "sameAs": ["https://www.facebook.com/example", "https://twitter.com/example", "https://www.instagram.com/example", "https://www.youtube.com/channel/example", "https://www.linkedin.com/company/example", "https://en.wikipedia.org/wiki/example", "https://github.com/example"]
    }
</script>
```

### Local Business

```html
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "logo": "https://example.com/logo/company_logo.webp",
        "image": ["https://example.com/services/service1.webp", "https://example.com/services/service3.webp", "https://example.com/services/service4.webp", "https://example.com/services/service5.webp", "https://example.com/services/service6.webp"],
        "name": "Example: Space Company | Wed Dev",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "99 Street",
            "addressLocality": "Warsaw",
            "addressRegion": "Mazowieckie",
            "postalCode": "00100",
            "addressCountry": "PL"
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "5",
            "reviewCount": "1"
        },
        "review": [
            {
                "@type": "Review",
                "reviewRating": {
                    "@type": "Rating",
                    "ratingValue": "5",
                    "bestRating": "5"
                },
                "author": {
                    "@type": "Person",
                    "name": "Mioco Pico"
                }
            }
        ],
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 52.88049,
            "longitude": 21.31857
        },
        "description": "Page description goes here.",
        "url": "https://example.com",
        "telephone": "+48-000-000-000",
        "email": "example@gmail.com",
        "priceRange": "$$$",
        "openingHours": ["Mo-Sa 08:00-17:00"]
    }
</script>
```

### Local Business Restaurant

```html
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Restaurant",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Sunnyvale",
            "addressRegion": "CA",
            "postalCode": "94086",
            "streetAddress": "1901 Lemur Ave"
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4",
            "reviewCount": "250"
        },
        "name": "ExampleFood",
        "openingHours": ["Mo-Sa 11:00-14:30", "Mo-Th 17:00-21:30", "Fr-Sa 17:00-22:00"],
        "priceRange": "$$",
        "servesCuisine": ["Middle Eastern", "Mediterranean"],
        "telephone": "(48) 000-000-000",
        "url": "http://www.example.com"
    }
</script>
```

### Article

```html
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Article",
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "https://example.com/knowledge/deployment/"
        },
        "headline": "What is Deployment?",
        "description": "Software and web development with <p>tags</p> ...",
        "image": "https://example.com/media/knowledge/deployment.png",
        "author": {
            "@type": "Organization",
            "name": "Example"
        },
        "publisher": {
            "@type": "Organization",
            "name": "Example",
            "logo": {
                "@type": "ImageObject",
                "url": "https://example.com/media/social/example_social_og.png"
            }
        },
        "datePublished": "2023-01-01",
        "dateModified": "2025-01-21"
    }
</script>
```

### Blog Post

```html
<script type="application/ld+json">
    {
        "@context": "http://schema.org/",
        "@type": "BlogPosting",
        "headline": "How to implement Schema markup in Example",
        "datePublished": "2023-01-01 20:01:10",
        "dateModified": "2025-03-21 23:02:20",
        "description": "Schema markup helps to improve your content’s visibility and click-through rate.",
        "image": {
            "@type": "ImageObject",
            "height": "1080",
            "width": "1920",
            "url": "https://example.com/media/blog/dsc-123.jpg"
        },
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "https://example.com/blog/how-to-implement-schema-markup-in-example/",
            "name": "How to implement Schema markup in Example"
        },
        "author": {
            "Bambi Donut",
            "@type": "Person”,
            "url”: "https://example.com/team/bambi-bloggs/”
        },
        "publisher": {
            "@type": "Organization",
            "logo": {
                "@type": "ImageObject",
                "url": "https://example.com/media/social/example_social_og.png"
            },
            "name": "Example"
        }
    }
</script>
```

### FAQ

```html
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "QUESTION 1",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "ANSWER 1"
                }
            },
            {
                "@type": "Question",
                "name": "QUESTION 2",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "ANSWER 2"
                }
            },
            {
                "@type": "Question",
                "name": "QUESTION 3",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "ANSWER 3"
                }
            },
            {
                "@type": "Question",
                "name": "QUESTION 4",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "ANSWER 4"
                }
            }
        ]
    }
</script>
```

## Page Structured Data

```html
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "Example.com",
        "url": "https://example.com"
    }
</script>

<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "logo": "https://example.com/img/logo.png",
        "image": ["https://example.com/gallery/folio-6.webp", "https://example.com/gallery/folio-3.webp", "https://example.com/gallery/folio-2.webp", "https://example.com/gallery/folio-4.webp"],
        "name": "Example.com Strony Internetowe",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Street 99",
            "addressLocality": "Warszawa",
            "postalCode": "00100",
            "addressCountry": "PL"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 53.01785,
            "longitude": 20.90464
        },
        "description": "Tworzenie stron internetowych i sklepów internetowych, kodowanie stron produktów oraz szablonów e-mail newslettera w HTML, projektowanie logo, administracja serwerami VPS i hostingiem, identyfikacja wizualna, modelowanie 3D, rendering 3d, wizualizacje wnętrz, produktów i animacje 3d dla stron www.",
        "url": "https://example.com",
        "telephone": "+48-000-000-000",
        "email": "email@example.com",
        "priceRange": "$$$",
        "openingHours": ["Mo-Fr 09:00-15:00"]
    }
</script>
```

## Indexing robots.txt

## Index

```sh
User-agent: *
Disallow:
Sitemap: https://example.com/sitemap.xml
```

### No index

```sh
User-agent: Googlebot
User-agent: AdsBot-Google
User-agent: Googlebot-Image
Disallow: /

Sitemap: https://example.com/sitemap.xml
```
