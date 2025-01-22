<?php
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "@id": "https://perspective-marine.com#organization",
      "name": "Perspective Marine",
      "url": "https://perspective-marine.com",
      "logo": "https://perspective-marine.com/assets/d7dda307a1db4effa91ee7845b0c6b10/logo.webp",
      "description": "Expert marine services for yacht and boat owners, including maintenance, cleaning, and consulting.",
      
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "954-533-2717",
        "contactType": "Customer Service",
        "areaServed": "US",
        "availableLanguage": ["English"]
      }
    },
    {
      "@type": "LocalBusiness",
      "@id": "https://perspective-marine.com#localbusiness",
      "name": "Perspective Marine",
      "url": "https://perspective-marine.com",
      "description": "Providing top-notch marine services in Fort Lauderdale and beyond.",
      "image": "https://perspective-marine.com/assets/d7dda307a1db4effa91ee7845b0c6b10/logo.webp",
      "telephone": "954-533-2717",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "3100 West State Road 84 BAY 304",
        "addressLocality": "Fort Lauderdale",
        "addressRegion": "FL",
        "postalCode": "33021",
        "addressCountry": "US"
      },
      "openingHours": ["Mo-Fr 08:00-18:00", "Sa-Su Closed"],
      "PriceRange": "$$",
	  "areaServed": [
        {"@type": "Place", "name": "Fort Lauderdale"}
      ],
      "makesOffer": [
        {
          "@type": "Offer",
          "name": "Outboard Engine Services",
          "description": "We specialize in servicing and repairing outboard engines from the industry's leading brands. You can trust our experienced specialists with any boat engine repairs.",
          "areaServed": {"@type": "Place", "name": "Fort Lauderdale"},
          "offeredBy": {
            "@type": "LocalBusiness",
            "@id": "https://perspective-marine.com#localbusiness"
          }
        },
        {
          "@type": "Offer",
          "name": "Marine Electronics Services",
          "description": "Our services include battery installation and maintenance, wiring and rewiring, charging systems, lighting solutions, and troubleshooting and marine electrical repairs.",
          "areaServed": [
            {"@type": "Place", "name": "Fort Lauderdale"}
          ],
          "offeredBy": {
            "@type": "LocalBusiness",
            "@id": "https://perspective-marine.com#localbusiness"
          }
        },
        {
          "@type": "Offer",
          "name": "Marine-Electronics-Installations",
          "description": "Our team of experts ensures seamless integration and optimal performance of all electronic components, providing you with the latest technology and peace of mind on the water.",
          "areaServed": {"@type": "Place", "name": "Fort Lauderdale"},
          "offeredBy": {
            "@type": "LocalBusiness",
            "@id": "https://perspective-marine.com#localbusiness"
          }
        }
      ]
    }
  ]
}
</script>
?>