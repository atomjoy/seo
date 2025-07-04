# SEO & Schema

A beginner's guide to SEO and Structured Data.

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

- https://schema.org
- https://developers.google.com/search/docs/appearance/structured-data/local-business

## Validators
- https://classyschema.org/Visualisation
- https://validator.schema.org
- https://search.google.com/test/rich-results

## Website, subdomains, page menu, aboutpage contactpage, faqs

https://github.com/atomjoy/seo/blob/main/website-subdomains-graph.html

```html
<html>

<head>
    <title>Atomjoy</title>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@graph": [
            {
                "@context": "https://schema.org",
                "@type": [
                    "Person"
                ],
                "@id": "https://atomjoy.test/#founder",
                "name": "Alex Lukas",
                "image": {
                    "@type": "ImageObject",
                    "url": "https://atomjoy.test/default/founder/alex-lukas.webp",
                    "height": 125,
                    "width": 125
                },
                "contactPoint": {
                    "@type": "ContactPoint",
                    "contactType": "customer service",
                    "telephone": "+1-100-200-300",
                    "email": "alex@atomjoy.test"
                }
            },
            {
                "@context": "https://schema.org",
                "@type": [
                    "Organization"
                ],
                "@id": "https://atomjoy.test/#organization",
                "name": "Atomjoy",
                "image": {
                    "@type": "ImageObject",
                    "url": "https://atomjoy.test/default/organization/atomjoy.webp",
                    "height": 125,
                    "width": 125
                },
                "contactPoint": {
                    "@type": "ContactPoint",
                    "contactType": "customer service",
                    "telephone": "+1-100-200-300",
                    "email": "contact@atomjoy.test"
                },
                "foundingDate": "2000",
                "founder": {
                    "@id": "https://atomjoy.test/#founder"
                }
            },
            {
                "@context": "https://schema.org",
                "@type": "WebSite",
                "@id":"https://atomjoy.test/#website",
                "url": "https://atomjoy.test",
                "image": "https://atomjoy.test/default/logo/logo.webp",
                "inLanguage": "en-US",
                "name": "Atomjoy",
                "potentialAction": {
                    "@type": "SearchAction",
                    "target": "https://atomjoy.test/search/?q={query}",
                    "query-input": "required name=query"
                },
                "publisher": {
                    "@id": "https://atomjoy.test/#organization"
                },
                "mainEntity": {
                    "@context": "http://schema.org",
                    "@type": "LocalBusiness",
                    "name": "Atomjoy Studio",
                    "image":"https://atomjoy.test/default/company/logo.webp",
                    "priceRange":"$$$",
                    "telephone":"+1-100-200-300",
                    "address": {
                        "@type": "PostalAddress",
                        "streetAddress": "ul. Klasyczna 44",
                        "addressLocality": "Warsaw",
                        "addressRegion": "Mazowieckie",
                        "addressCountry": "PL",
                        "postalCode": "00-100"
                    },
                    "aggregateRating": {
                        "@type": "AggregateRating",
                        "ratingValue": "5.0",
                        "reviewCount": "900"
                    }
                },
                "keywords":[
                    "Social Networking",
                    "Social Media",
                    "Web",
                    "Technology",
                    "Web 3.0",
                    "Tech",
                    "Blog",
                    "Facebook",
                    "YouTube",
                    "Google"
                ]
            },
            {
                "@context": "https://schema.org",
                "@type": "WebSite",
                "@id":"https://jobs.atomjoy.test/#website",
                "url": "https://jobs.atomjoy.test",
                "image": "https://jobs.atomjoy.test/default/logo/logo.webp",
                "inLanguage": "en-US",
                "name": "Jobs Site",
                "potentialAction": {
                    "@type": "SearchAction",
                    "target": "https://jobs.atomjoy.test/search/?q={query}",
                    "query-input": "required name=query"
                },
                "isPartOf": {
                    "@id":"https://atomjoy.test/#website"
                }
            },
            {
                "@context": "https://schema.org",
                "@type": "WebSite",
                "@id":"https://support.atomjoy.test/#website",
                "url": "https://support.atomjoy.test",
                "image": "https://support.atomjoy.test/default/logo/logo.webp",
                "inLanguage": "en-US",
                "name": "Support Site",
                "potentialAction": {
                    "@type": "SearchAction",
                    "target": "https://support.atomjoy.test/search/?q={query}",
                    "query-input": "required name=query"
                },
                "isPartOf": {
                    "@id":"https://atomjoy.test/#website"
                }
            },
            {
                "@context": "https://schema.org",
                "@type": "WebPage",
                "@id": "https://atomjoy.test/plugins/#webpage",
                "url": "https://atomjoy.test/plugins",
                "inLanguage": "en-US",
                "name": "Atomjoy - Plugins",
                "description": "Plugins page description.",
                "isPartOf": {
                    "@id": "https://atomjoy.test/#website"
                },
                "hasPart":{
                    "@context": "https://schema.org",
                    "@type": "WebPage",
                    "@id": "https://atomjoy.test/plugins/best-plugin/#webpage",
                    "url": "https://atomjoy.test/plugins/best-plugin",
                    "inLanguage": "en-US",
                    "name": "Best Php Plugin - Atomjoy",
                    "description": "Excelent php plugin description.",
                    "isPartOf": {
                        "@id": "https://atomjoy.test/plugins/#webpage"
                    }
                }
            },
            {
                "@context": "https://schema.org",
                "@type": "WebPage",
                "@id": "https://atomjoy.test/blog/#webpage",
                "url": "https://atomjoy.test/blog",
                "inLanguage": "en-US",
                "name": "Atomjoy - Blog",
                "description": "Blog articles.",
                "isPartOf": {
                    "@id": "https://atomjoy.test/#website"
                },
                "hasPart": {
                    "@context": "https://schema.org",
                    "@type": "WebPage",
                    "@id": "https://atomjoy.test/blog/first-article/#webpage",
                    "url": "https://atomjoy.test/blog/first-article",
                    "inLanguage": "en-US",
                    "name": "Blog First Article - Atomjoy",
                    "isPartOf": {
                        "@id": "https://atomjoy.test/blog/#webpage"
                    }
                }
            },
            {
                "@context": "https://schema.org",
                "@type": "ContactPage",
                "@id": "https://atomjoy.test/contact/#webpage",
                "url": "https://atomjoy.test/contact",
                "inLanguage": "en-US",
                "name": "Atomjoy - Contact",
                "description": "Contact page.",
                "isPartOf": {
                    "@id": "https://atomjoy.test/#website"
                }
            },
            {
                "@context": "https://schema.org",
                "@type": "AboutPage",
                "@id": "https://atomjoy.test/about/#webpage",
                "url": "https://atomjoy.test/about",
                "inLanguage": "en-US",
                "name": "Atomjoy - About Us",
                "description": "About page.",
                "isPartOf": {
                    "@id": "https://atomjoy.test/#website"
                }
            },
            {
                "@context": "http://schema.org",
                "@type": "FAQPage",
                "@id": "https://atomjoy.test/faqs/#webpage",
                "url": "https://atomjoy.test/faqs",
                "inLanguage": "en-US",
                "name": "Schema markup for your website hierarchy",
                "description": "This is example of how to use Schema markup to define your website hierachy",
                "isPartOf": {
                    "@id": "https://atomjoy.test/#website"
                },
                "mainEntity": [
                    {
                        "@type": "Question",
                        "name": "Your first Question",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Your answer to the first Question"
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Your second Question",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Your answer to the second Question"
                        }
                    }
                ]
            },
            {
                "@context": "https://schema.org",
                "@type": "WebSite",
                "@id": "https://pl.atomjoy.test/#website",
                "url": "https://pl.atomjoy.test",
                "name": "Atomjoy",
                "isPartOf": {
                    "@id": "https://atomjoy.test/#website"
                },
                "inLanguage": "pl-PL",
                "hasPart": {
                    "@context": "https://schema.org",
                    "@type": "WebPage",
                    "@id": "https://pl.atomjoy.test/blog/#webpage",
                    "url": "https://pl.atomjoy.test/blog",
                    "name": "Atomjoy Blog",
                    "isPartOf": {
                        "@id": "https://pl.atomjoy.test/#website"
                    },
                    "inLanguage": "pl-PL",
                    "hasPart": {
                        "@context": "https://schema.org",
                        "@type": "WebPage",
                        "@id": "https://pl.atomjoy.test/blog/first-article/#webpage",
                        "url": "https://pl.atomjoy.test/blog/first-article",
                        "name": "Pierwszy Artykuł - Atomjoy",
                        "isPartOf": {
                            "@id": "https://pl.atomjoy.test/blog/#webpage"
                        },
                        "inLanguage": "pl-PL"
                    }
                }
            },
            {
                "@context": "http://schema.org",
                "@type": "ItemList",
                "name": "Main Menu",
                "itemListElement": [
                    {
                        "@type": "SiteNavigationElement",
                        "@id": "https://atomjoy.test",
                        "position": 1,
                        "name": "Home",
                        "description": "Atomjoy home page.",
                        "url": "https://atomjoy.test"
                    },
                    {
                        "@type": "SiteNavigationElement",
                        "@id": "https://atomjoy.test/#login",
                        "position": 2,
                        "name": "Sign Up",
                        "description": "Create your example profile.",
                        "url": "https://atomjoy.test/login"
                    },
                    {
                        "@type": "SiteNavigationElement",
                        "@id": "https://atomjoy.test/#about",
                        "position": 3,
                        "name": "About",
                        "description": "Read more about example company",
                        "url": "https://atomjoy.test/about"
                    },
                    {
                        "@type": "SiteNavigationElement",
                        "@id": "https://atomjoy.test/#search",
                        "position": 4,
                        "name": "Search",
                        "description": "Search answers.",
                        "url": "https://atomjoy.test/search"
                    },
                    {
                        "@type": "SiteNavigationElement",
                        "@id": "https://atomjoy.test/#contact",
                        "position": 5,
                        "name": "Contact Us",
                        "description": "Contact us for any queries",
                        "url": "https://atomjoy.test/contact"
                    },
                    {
                        "@type": "SiteNavigationElement",
                        "@id": "https://atomjoy.test/#faqs",
                        "position": 6,
                        "name": "FAQS",
                        "description": "Frequently asked questions and answers.",
                        "url": "https://atomjoy.test/faqs"
                    }
                ]
            },
            {
                "@context": "http://schema.org",
                "@type": "ItemList",
                "name": "Main Menu",
                "itemListElement": [
                    {
                        "@type": "SiteNavigationElement",
                        "@id": "https://pl.atomjoy.test",
                        "position": 1,
                        "name": "Atomjoy",
                        "description": "Atomjoy home page.",
                        "url": "https://pl.atomjoy.test"
                    },
                    {
                        "@type": "SiteNavigationElement",
                        "@id": "https://pl.atomjoy.test/#login",
                        "position": 2,
                        "name": "Sign Up",
                        "description": "Create your example profile.",
                        "url": "https://pl.atomjoy.test/login"
                    },
                    {
                        "@type": "SiteNavigationElement",
                        "@id": "https://pl.atomjoy.test/#about",
                        "position": 3,
                        "name": "About us",
                        "description": "Read more about example company",
                        "url": "https://pl.atomjoy.test/about"
                    },
                    {
                        "@type": "SiteNavigationElement",
                        "@id": "https://pl.atomjoy.test/#search",
                        "position": 4,
                        "name": "Search artists",
                        "description": "Search artists",
                        "url": "https://pl.atomjoy.test/search"
                    },
                    {
                        "@type": "SiteNavigationElement",
                        "@id": "https://pl.atomjoy.test/#contact",
                        "position": 5,
                        "name": "Contact Us",
                        "description": "Contact us for any queries",
                        "url": "https://pl.atomjoy.test/contact"
                    },
                    {
                        "@type": "SiteNavigationElement",
                        "@id": "https://pl.atomjoy.test/#faqs",
                        "position": 6,
                        "name": "FAQS",
                        "description": "Frequently asked questions and answers.",
                        "url": "https://pl.atomjoy.test/faqs"
                    }
                ]
            }
        ]
    }
    </script>
</head>

<body>
</body>

</html>
```

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
<title>How to implement Schema Markup in Example</title>

<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            {
                "@type": "ListItem",
                "position": 1,
                "item": {
                    "@id": "https://example.com",
                    "name": "Home"
                }
            },
            {
                "@type": "ListItem",
                "position": 2,
                "item": {
                    "@id": "https://example.com/blog",
                    "name": "Blog"
                }
            },
            {
                "@type": "ListItem",
                "position": 3,
                "item": {
                    "@id": "https://example.com/blog/how-to-implement-schema-markup-in-example",
                    "name": "How to implement Schema Markup in Example"
                }
            }
        ]
    }
</script>
```

### Person

```html
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Person",
  "name": "Alex Space",
  "url": "https://example.com",
  "alternateName": "Alexander Space",
  "familyName": "Space",
  "nationality": "Poland",
  "birthDate": "2020-01-01",
  "email": "email@example.com",
  "brand": "Złota Rybka",
  "knowsAbout": "AI, content writing, digital media, programing.",
  "jobTitle": "CEO",
  "worksFor": {
    "@type": "Organization",
    "name": "Złota Rybka"
  }
  "description": "Defender of Truth",
  "sameAs": [
    "https://youtube.com/@username",
    "https://github.com/username",
    "https://example.com"
  ],
  "address": {
    "@type": "PostalAddress",
    "addressCountry": "Country",
    "addressRegion": "Region",
    "postalCode": "1010101",
    "streetAddress": "Address",
    "email": "mail@example.com",
    "telephone": "00123457869"
  },
  "contactPoint": {
      "@type": "ContactPoint",
      "contactType": "customer service",
      "telephone": "+1-100-200-300",
      "email": "alex@example.com"
  },
  "image": "https://example.com/image.webp",
  "logo": {
    "url": "https://example.com/icon.jpg",
    "width": "512",
    "@context": "http://schema.org",
    "@type": "ImageObject"
  },
  "hasPart": [{
    "@type": "Article",
    "headline": "Things to see in NJ",
    "url": "https://example.com/things-to-see-nj",
    "datePublished": "2014-02-23T18:34:00Z",
    "author": { "@id": "#main-author" }
  }],
  "identifier": "123475623",
  "interactionStatistic": [{
    "@type": "InteractionCounter",
    "interactionType": "https://schema.org/FollowAction",
    "userInteractionCount": 1
  },{
    "@type": "InteractionCounter",
    "interactionType": "https://schema.org/LikeAction",
    "userInteractionCount": 5
  }],
  "agentInteractionStatistic": {
    "@type": "InteractionCounter",
    "interactionType": "https://schema.org/WriteAction",
    "userInteractionCount": 2346
  },
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

## Navigation

### Graph

```json
{
    "@context": "https://schema.org",
    "@graph": [
        {
            "@type": "SiteNavigationElement",
            "position": 1,
            "name": "Main",
            "description": "Create your profile.",
            "url": "https://example.com"
        },
        {
            "@type": "SiteNavigationElement",
            "position": 2,
            "name": "About us",
            "description": "Read more about example company",
            "url": "https://example.com/about"
        },
        {
            "@type": "SiteNavigationElement",
            "position": 3,
            "name": "Contact Us",
            "description": "Contact us for any queries",
            "url": "https://example.com/contact"
        },
        {
            "@type": "SiteNavigationElement",
            "position": 4,
            "name": "Search",
            "description": "Search queries.",
            "url": "https://example.com/search"
        }
    ]
}
```

### ItemList

```json
{
    "@context": "http://schema.org",
    "@type": "ItemList",
    "itemListElement": [
        {
            "@type": "SiteNavigationElement",
            "position": 1,
            "name": "Sign Up",
            "description": "Create your example profile.",
            "url": "https://example.com"
        },
        {
            "@type": "SiteNavigationElement",
            "position": 2,
            "name": "About us",
            "description": "Read more about example company",
            "url": "https://example.com/about"
        },
        {
            "@type": "SiteNavigationElement",
            "position": 3,
            "name": "Search artists",
            "description": "Search artists",
            "url": "https://example.com/search"
        },
        {
            "@type": "SiteNavigationElement",
            "position": 4,
            "name": "Contact Us",
            "description": "Contact us for any queries",
            "url": "https://example.com/contact"
        }
    ]
}
```

### SinglePage sections

```json
{
    "@context": "https://schema.org",
    "@graph": [
        {
            "@type": "SiteNavigationElement",
            "@id": "#table-of-contents",
            "name": "Section 1",
            "url": "https://www.example.com/page#sec-1"
        },
        {
            "@type": "SiteNavigationElement",
            "@id": "#table-of-contents",
            "name": "Section 2",
            "url": "https://www.example.com/page#tsec-2"
        },
        {
            "@type": "SiteNavigationElement",
            "@id": "#table-of-contents",
            "name": "Section 3",
            "url": "https://www.example.com/page#sec-3"
        },
        {
            "@type": "SiteNavigationElement",
            "@id": "#pagination",
            "name": "Previous page",
            "url": "https://www.example.com/page1"
        },
        {
            "@type": "SiteNavigationElement",
            "@id": "#pagination",
            "name": "Next page",
            "url": "https://www.example.com/page2"
        }
    ]
}
```

## Events

### Music event

```html
<html>

<head>
    <title>The Adventures of Kira and Morrison</title>
    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "MusicEvent",
      "location": {
        "@type": "MusicVenue",
        "name": "Chicago Symphony Center",
        "address": "220 S. Michigan Ave, Chicago, Illinois, USA"
      },
      "name": "Shostakovich Leningrad",
      "offers": {
        "@type": "Offer",
        "url": "/examples/ticket/12341234",
        "price": "40",
        "priceCurrency": "USD",
        "availability": "http://schema.org/InStock"
      },
      "performer": [
        {
          "@type": "MusicGroup",
          "name": "Chicago Symphony Orchestra",
          "sameAs": [
            "http://cso.org/",
            "http://en.wikipedia.org/wiki/Chicago_Symphony_Orchestra"
          ]
        },
        {
          "@type": "Person",
          "image": "/examples/jvanzweden_s.jpg",
          "name": "Jaap van Zweden",
          "sameAs": "http://www.jaapvanzweden.com/"
        }
      ],
      "startDate": "2014-05-23T20:00",
      "workPerformed": [
        {
          "@type": "CreativeWork",
          "name": "Britten Four Sea Interludes and Passacaglia from Peter Grimes",
          "sameAs": "http://en.wikipedia.org/wiki/Peter_Grimes"
        },
        {
          "@type": "CreativeWork",
          "name": "Shostakovich Symphony No. 7 (Leningrad)",
          "sameAs": "http://en.wikipedia.org/wiki/Symphony_No._7_(Shostakovich)"
        }
      ]
    }
    </script>
</head>

<body>
</body>

</html>
```

### Event

```html
<html>

<head>
    <title>The Adventures of Kira and Morrison</title>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Event",
      "name": "The Adventures of Kira and Morrison",
      "startDate": "2025-07-21T19:00-05:00",
      "endDate": "2025-07-21T23:00-05:00",
      "eventStatus": "https://schema.org/EventScheduled",
      "location": {
        "@type": "Place",
        "name": "Snickerpark Stadium",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "100 West Snickerpark Dr",
          "addressLocality": "Snickertown",
          "postalCode": "19019",
          "addressRegion": "PA",
          "addressCountry": "US"
        }
      },
      "image": [
        "https://example.com/photos/1x1/photo.jpg",
        "https://example.com/photos/4x3/photo.jpg",
        "https://example.com/photos/16x9/photo.jpg"
       ],
      "description": "The Adventures of Kira and Morrison is coming to Snickertown in a can't miss performance.",
      "offers": {
        "@type": "Offer",
        "url": "https://www.example.com/event_offer/12345_202403180430",
        "price": 30,
        "priceCurrency": "USD",
        "availability": "https://schema.org/InStock",
        "validFrom": "2024-05-21T12:00"
      },
      "performer": {
        "@type": "PerformingGroup",
        "name": "Kira and Morrison"
      },
      "organizer": {
        "@type": "Organization",
        "name": "Kira and Morrison Music",
        "url": "https://kiraandmorrisonmusic.com"
      }
    }
    </script>
</head>

<body>
</body>

</html>
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
