<?php
$tel = '0800 534 5019';
$sitename = env('APP_NAME');
$siteloc = 'United Kingdom';
$email = env('MAIL_USERNAME');
return [

    //SITE METADATA
    'meta' => [
        'sitename' => $sitename,
        'siteloc' => $siteloc,
        'logoalt' => "$siteloc Cheap Mover",
        'contact_number' => $tel,
        'contact_email' => $email,
        'contact_address' => 'Imperial Court, 2 Exchange Quay, Salford M5 3EB',
        'mapurl' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9555284.553987384!2d-13.43127550010351!3d54.21844203866018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x25a3b1142c791a9%3A0xc4f8a0433288257a!2sUnited+Kingdom!5e0!3m2!1sen!2suk!4v1564674637930!5m2!1sen!2suk',
        'fb' => '#',
        'insta' => '#',
        'gplus' => '#',
        'twitter' => '#',
        'url' => env('APP_URL'),
    ],

    'home' => [
        'title' => "Cheap House Office or Rubbish Remover Service $siteloc",
        'description' => "Cheap House Office or Rubbish Remover Service in $siteloc. We move apartments, condominiums, homes, businesses, and everything in between – from single items to full, very large moves.",
        'tags' => "Cheap House Mover, Office Mover, Commercial Removal, Rubbish Remover, Waste Collector",
    ],

    'about' => [
        'title' => "About Us - Cheap House Office or Rubbish Remover Service $siteloc",
        'page_title' => 'About Us',
        'page_subtitle' => 'Who We Are',
        'page_breadcrumbs' => 'About Us',
        'img_alt' => "$sitename about image",       
    ],

    'services' => [
        'title' => "Our Services - Cheap House Office or Rubbish Remover Service $siteloc",
        'page_title' => 'Moving Solutions',
        'page_subtitle' => 'Services',
        'page_breadcrumbs' => 'Our Services',       
    ],

    'rates' => [
        'title' => "Cost Guide - Cheap House Office or Rubbish Remover Service $siteloc",
        'page_title' => 'Our Rates',
        'page_subtitle' => 'Pricing',
        'page_breadcrumbs' => 'Cost Guide',      
    ],

    'thanks' => [
        'title' => "Thanks - Cheap House Office or Rubbish Remover Service $siteloc",
        'page_title' => 'Message Sent!',
        'page_subtitle' => 'Thank You',
        'page_breadcrumbs' => 'Thanks',      
    ],

    'blogs' => [
        'title' => "Our Blogs - Cheap House Office or Rubbish Remover Service $siteloc",
        'page_title' => 'Our Latest News',
        'page_subtitle' => 'Our Blogs',
        'page_breadcrumbs' => 'Our Blogs',      
    ],

    'contact' => [
        'title' => "Contact Us - Cheap House Office or Rubbish Remover Service $siteloc",
        'page_title' => 'Contact Us',
        'page_subtitle' => 'Contacts',
        'page_breadcrumbs' => 'Contact Us',      
    ],

    'faqs' => [
        'title' => "FAQs - Cheap House Office or Rubbish Remover Service $siteloc",
        'page_title' => 'FAQs',
        'page_subtitle' => 'Frequently Asked Questions',
        'page_breadcrumbs' => 'FAQs',
        
        'list' => [
            '1' => [
                'Q' => "Do you provide nation-wide service?",
                'A' => "Yes, we provide service all over the UK, covering all cities and town nation-wide.",
            ],
            '2' => [
                'Q' => "Do you do international moves?",
                'A' => "Yes! We provide both nation-wide and international moves.",
            ],
            '3' => [
                'Q' => "How long before the move do I have to book?",
                'A' => "The shortest booking we can do for you is 24 hours, no matter how big the move is.",
            ],
            '4' => [
                'Q' => "Do you provide both residential and commercial moves?",
                'A' => "Yes, whether you are moving home or your company we are here to do it for you.",
            ],
            '5' => [
                'Q' => "How will I know you provide the best price?",
                'A' => "We guarantee to beat any like 4 like price by 10%, which is how you can be sure our price will be the
                best on the market.",
            ],
            '6' => [
                'Q' => "How do you calculate the price of the removal service?",
                'A' => "We calculate our prices depending on the inventory list and distance between locations, in some
                cases additional information is taken into account such as waiting times and congestion charges.
                Based on all those information we estimate how long the job will take, how many people you will
                need, and the size of the vehicle to ensure we can do it as quickly and efficiently as possible.",
            ],
            '7' => [
                'Q' => "Is insurance included in the price?",
                'A' => "In the very unlikely situation that something happens to your goods in transit, you are covered with
                insurance for up to £10,000.",
            ],   
            '8' => [
                'Q' => "Do you accept card/cash payments?",
                'A' => "Yes, we accept both card and cash payments, whichever is more suitable for you.",
            ],          
            '9' => [
                'Q' => "Do you have tracking system?",
                'A' => "Yes, as soon as the vehicle is on the road you can easily track it using GPS system, so you know
                exactly where your belongings are.",
            ],          
            '10' => [
                'Q' => "Are you able to move single items, if so at what cost?",
                'A' => "Of course, we provide both full and single item moves, pricing depend on what the item is and the
                location.",
            ],       
            '11' => [
                'Q' => "Do you provide dismantling and reassembling service?",
                'A' => "Yes we do, depending on what the items need dismantling there may be extra charges involved.",
            ],       
            '12' => [
                'Q' => "Do you provide packing service/packaging materials?",
                'A' => "We do provide both packing service as well as packaging materials for our customers, depending on
                your needs. Packing service as well as packaging materials will come at an additional cost.",
            ],                   
        ],
    ],

    'footer' => [
        'desc' => "$sitename",
        'column2title' => 'Contact Us',
        'column3title' => 'Newsletter',
        'column3desc' => "Sign Up to $sitename Newsletter Today..",
    ]
];