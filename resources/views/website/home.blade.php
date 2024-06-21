@extends('layouts.website')
@section('metatags')

	<title>Samana Properties | Luxury Apartments, Villas, Townhouses in Dubai </title>

    <meta name="title" content="Samana Properties | Luxury Apartments, Villas, Townhouses in Dubai">
    <meta name="description" content="Discover Samana Properties, a leader in luxury real estate, offering sophisticated homes with world-class amenities in prime Dubai locations. Explore more today!">
    <meta name="keywords" content="Discover Samana Properties, a leader in luxury real estate, offering sophisticated homes with world-class amenities in prime Dubai locations. Explore more today!">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What types of properties does Samana Properties offer?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Samana Properties offers a range of luxury properties including residential apartments, villas, and townhouses located in prime areas of Dubai."
          }
        },
        {
          "@type": "Question",
          "name": "Where are Samana Properties located?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Samana Properties are primarily located in prime Dubai locations, such as Jumeirah Village Circle, Arjan, and other high-demand areas."
          }
        },
        {
          "@type": "Question",
          "name": "What amenities are available in Samana Properties?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Samana Properties offer world-class amenities including swimming pools, fitness centers, landscaped gardens, and 24/7 security services."
          }
        },
        {
          "@type": "Question",
          "name": "How can I contact Samana Properties for more information?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "You can contact Samana Properties through their website's contact form, by phone at +971 4 248 3400, or via email at info@samanaproperties.ae."
          }
        },
        {
          "@type": "Question",
          "name": "Does Samana Properties offer financing options?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, Samana Properties provides various financing options to facilitate the purchase of their luxury properties. Details can be obtained by contacting their sales team."
          }
        }
      ]
    }
    </script>

@endsection
@section('content')
 
 	@include('components.hero_section')

 	@include('components.idk')

 	@include('components.properties_list')

 	@include('components.video_section')

 	@include('components.about_section')

 	@include('components.contact_us_section')

    @include('components.home_modal')

@endsection
