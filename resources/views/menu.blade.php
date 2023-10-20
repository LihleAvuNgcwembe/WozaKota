<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- website title -->
    <title>Woza Woza Kota Place</title>
    <!-- css hyperlink -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- external css icon link -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!-- tab icon -->
    <link rel="icon" type="image/x-icon"
        href="{{ asset('assets/img/images/WhatsApp Image 2023-09-18 at 21.31.03.jpeg') }}">

    <style>
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
        *,
        ::after,
        ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        ::after,
        ::before {
            --tw-content: ''
        }

        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, sans-serif;
            font-feature-settings: normal
        }

        body {
            margin: 0;
            line-height: inherit
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b,
        strong {
            font-weight: bolder
        }

        code,
        kbd,
        pre,
        samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button,
        select {
            text-transform: none
        }

        [type=button],
        [type=reset],
        [type=submit],
        button {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote,
        dd,
        dl,
        figure,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        p,
        pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        menu,
        ol,
        ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        [role=button],
        button {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        audio,
        canvas,
        embed,
        iframe,
        img,
        object,
        svg,
        video {
            display: block;
            vertical-align: middle
        }

        img,
        video {
            max-width: 100%;
            height: auto
        }

        [hidden] {
            display: none
        }

        *,
        ::before,
        ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::-webkit-backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        .relative {
            position: relative
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .mx-6 {
            margin-left: 1.5rem;
            margin-right: 1.5rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-16 {
            margin-top: 4rem
        }

        .mt-6 {
            margin-top: 1.5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .mr-1 {
            margin-right: 0.25rem
        }

        .flex {
            display: flex
        }

        .inline-flex {
            display: inline-flex
        }

        .grid {
            display: grid
        }

        .h-16 {
            height: 4rem
        }

        .h-7 {
            height: 1.75rem
        }

        .h-6 {
            height: 1.5rem
        }

        .h-5 {
            height: 1.25rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-auto {
            width: auto
        }

        .w-16 {
            width: 4rem
        }

        .w-7 {
            width: 1.75rem
        }

        .w-6 {
            width: 1.5rem
        }

        .w-5 {
            width: 1.25rem
        }

        .max-w-7xl {
            max-width: 80rem
        }

        .shrink-0 {
            flex-shrink: 0
        }

        .scale-100 {
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .gap-6 {
            gap: 1.5rem
        }

        .gap-4 {
            gap: 1rem
        }

        .self-center {
            align-self: center
        }

        .rounded-lg {
            border-radius: 0.5rem
        }

        .rounded-full {
            border-radius: 9999px
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-red-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(254 242 242 / var(--tw-bg-opacity))
        }

        .bg-dots-darker {
            background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")
        }

        .from-gray-700\/50 {
            --tw-gradient-from: rgb(55 65 81 / 0.5);
            --tw-gradient-to: rgb(55 65 81 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }

        .via-transparent {
            --tw-gradient-to: rgb(0 0 0 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), transparent, var(--tw-gradient-to)
        }

        .bg-center {
            background-position: center
        }

        .stroke-red-500 {
            stroke: #ef4444
        }

        .stroke-gray-400 {
            stroke: #9ca3af
        }

        .p-6 {
            padding: 1.5rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .text-center {
            text-align: center
        }

        .text-right {
            text-align: right
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem
        }

        .font-semibold {
            font-weight: 600
        }

        .leading-relaxed {
            line-height: 1.625
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .underline {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .shadow-2xl {
            --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
            --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow-gray-500\/20 {
            --tw-shadow-color: rgb(107 114 128 / 0.2);
            --tw-shadow: var(--tw-shadow-colored)
        }

        .transition-all {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .selection\:bg-red-500 *::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white *::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .selection\:bg-red-500::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .hover\:text-gray-900:hover {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .hover\:text-gray-700:hover {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .focus\:rounded-sm:focus {
            border-radius: 0.125rem
        }

        .focus\:outline:focus {
            outline-style: solid
        }

        .focus\:outline-2:focus {
            outline-width: 2px
        }

        .focus\:outline-red-500:focus {
            outline-color: #ef4444
        }

        .group:hover .group-hover\:stroke-gray-600 {
            stroke: #4b5563
        }

        .z-10 {
            z-index: 10
        }

        @media (prefers-reduced-motion: no-preference) {
            .motion-safe\:hover\:scale-\[1\.01\]:hover {
                --tw-scale-x: 1.01;
                --tw-scale-y: 1.01;
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-800\/50 {
                background-color: rgb(31 41 55 / 0.5)
            }

            .dark\:bg-red-800\/20 {
                background-color: rgb(153 27 27 / 0.2)
            }

            .dark\:bg-dots-lighter {
                background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")
            }

            .dark\:bg-gradient-to-bl {
                background-image: linear-gradient(to bottom left, var(--tw-gradient-stops))
            }

            .dark\:stroke-gray-600 {
                stroke: #4b5563
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:shadow-none {
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
            }

            .dark\:ring-1 {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .dark\:ring-inset {
                --tw-ring-inset: inset
            }

            .dark\:ring-white\/5 {
                --tw-ring-color: rgb(255 255 255 / 0.05)
            }

            .dark\:hover\:text-white:hover {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .group:hover .dark\:group-hover\:stroke-gray-400 {
                stroke: #9ca3af
            }
        }

        @media (min-width: 640px) {
            .sm\:fixed {
                position: fixed
            }

            .sm\:top-0 {
                top: 0px
            }

            .sm\:right-0 {
                right: 0px
            }

            .sm\:ml-0 {
                margin-left: 0px
            }

            .sm\:flex {
                display: flex
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-center {
                justify-content: center
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:gap-8 {
                gap: 2rem
            }

            .lg\:p-8 {
                padding: 2rem
            }
        }
    </style>
</head>

<body>
    <!-- header section -->
    <header>
        <a href="#" class="logo"><i class='bx bxs-baguette'></i>Woza Woza Kota Place</a>
        <ul class="navbar">
            <li><a href="#home" class="active">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#shop">Menu</a></li>
            <li><a href="#information">Business Details</a></li>
            @if (Route::has('login'))
                @auth
                    <li><a href="{{ route('dashboard') }}">{{ Auth::user()->name }}</a></li>
                    @else
                    <li><a href="{{ route('dashboard') }}">Login/Sign-Up</a></li>
                @endauth
            @endif
        </ul>
        <div class="icons px-2">
            <a href="#"><i class='bx bx-search'></i></a>
            <a href="#"><i class='bx bx-cart'></i></a>
            <div class="bx bx-menu" id="menu"></div>
        </div>
    </header>

    <!-- home page -->
    <section class="home" id="home">
        <div class="text">
            <h1>We offer various ways for you to <span>enjoy your meal</span>, pick one below</h1>
            <a href="#" class="button">Collection <i class='bx bx-chair'></i></a>
            <a href="https://www.ubereats.com/za/store/woza-woza-kota-place-glen-austin/giGq8iNHS4-klM_Su6c0Og "
                class="button2">Delivery<i class='bx bx-package'></i></a>
        </div>
        <div class="image">
            <img src="{{ asset('assets/img/images/unnamed.jpg') }}">
        </div>
    </section>
    <!-- adress, times and number -->
    <section class="container">
        <div class="box">
            <img src="{{ asset('assets/img/images/symbole-de-l-horloge-jaune.png') }}">
            <h3>08:00 - 21:00</h3>
            <a href="#">Operating Hours</a>
        </div>

        <div class="box">
            <img src="{{ asset('assets/img/images/home-7-512.png') }}">
            <h3>10 Ridge Glen Austin</h3>
            <a href="#">Address</a>
        </div>

        <div class="box">
            <img src="{{ asset('assets/img/images/pngegg.png') }}">
            <h3>076 588 6061 / 076 270 2780 </h3>
            <a href="#">Get In Contact</a>
        </div>
    </section>

    <!-- about section -->
    <section class="about" id="about">
        <div class="about-photo">
            <img src="{{ asset('assets/img/images/WhatsApp Image 2023-09-18 at 18.10.09.jpeg') }}">
        </div>

        <div class="about-text">
            <h2>Come to Woza Woza and enjoy <br> the best </h2>
            <p>Opened in 2021, Woza Woza Kota Place was made with the goal
                of giving as many young students around the Midrand area the
                chance of being able to buy fresh kotas full of taste and that
                will allow you to enjoy your day whether you going, already at or
                coming back from school. Ceejay and his team come together every day
                to provide the best service possible to the youth at the best possible
                price for you to enjoy.
            </p>
        </div>
    </section>

    <!-- Menu section -->
    <section class="shop" id="shop">
        <div class="menu-text">
            <h4>Menu</h4>
            <h2>Kotas</h2>
        </div>

        <div class="menu-items">
            <div class="row">
                <img src="{{ asset('assets/img/images/DSC_7814-scaled.jpg') }}">
                <h3>Gugza</h3>
                <p>Chips, Atchaar, Polony, Lettuce & Cheese</p>
                <div class="in-text">
                    <div class="price">
                        <h6>R25,00</h6>
                    </div>
                    <div class="btn">
                        <a href="#">Add to Order</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <img src="{{ asset('assets/img/images/DSC_7814-scaled.jpg') }}">
                <h3>Gugza Junior</h3>
                <p>Chips, Atchaar, Polony, Special, Chesse & Lettuce</p>
                <div class="in-text">
                    <div class="price">
                        <h6>R30,00</h6>
                    </div>
                    <div class="btn">
                        <a href="#">Add to Order</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <img src="{{ asset('assets/img/images/DSC_7814-scaled.jpg') }}">
                <h3>KB</h3>
                <p>Chips, Atchaar, Polony, Lettuce, Vienna & Cheese</p>
                <div class="in-text">
                    <div class="price">
                        <h6>R30,00</h6>
                    </div>
                    <div class="btn">
                        <a href="#">Add to Order</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <img src="{{ asset('assets/img/images/DSC_7814-scaled.jpg') }}">
                <h3>KB Junior</h3>
                <p>Atchaar, Polony, Special, Lettuce, Vienna & Cheese</p>
                <div class="in-text">
                    <div class="price">
                        <h6>R30,00</h6>
                    </div>
                    <div class="btn">
                        <a href="#">Add to Order</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <img src="{{ asset('assets/img/images/DSC_7814-scaled.jpg') }}">
                <h3>Lebza</h3>
                <p>Chips, Atchaar, Polony, Lettuce, Russian & Cheese</p>
                <div class="in-text">
                    <div class="price">
                        <h6>R35,00</h6>
                    </div>
                    <div class="btn">
                        <a href="#">Add to Order</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <img src="{{ asset('assets/img/images/DSC_7814-scaled.jpg') }}">
                <h3>Lebza Junior</h3>
                <p>Chips, Atchaar, Polony, Lettuce, Special, Russian & Cheese</p>
                <div class="in-text">
                    <div class="price">
                        <h6>R35,00</h6>
                    </div>
                    <div class="btn">
                        <a href="#">Add to Order</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <img src="{{ asset('assets/img/images/DSC_7814-scaled.jpg') }}">
                <h3>MB-B</h3>
                <p>Chips, Atchaar, Polony, Special, Lettuce, Russian, Vienna & Cheese</p>
                <div class="in-text">
                    <div class="price">
                        <h6>R40,00</h6>
                    </div>
                    <div class="btn">
                        <a href="#">Add to Order</a>
                    </div>
                </div>
            </div>


            <div class="row">
                <img src="{{ asset('assets/img/images/DSC_7814-scaled.jpg') }}">
                <h3>MB-B Junior</h3>
                <p>Chips, Atchaar, Polony, Special, Lettuce, Russian, Vienna & Cheese</p>
                <div class="in-text">
                    <div class="price">
                        <h6>R45,00</h6>
                    </div>
                    <div class="btn">
                        <a href="#">Add to Order</a>
                    </div>
                </div>
            </div>


            <div class="row">
                <img src="{{ asset('assets/img/images/DSC_7814-scaled.jpg') }}">
                <h3>MB-A All</h3>
                <p>Chips, Atchaar, Polony, Lettuce, Russian, Vienna, Egg, Beef Patty & Cheese</p>
                <div class="in-text">
                    <div class="price">
                        <h6>R60,00</h6>
                    </div>
                    <div class="btn">
                        <a href="#">Add to Order</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <img src="{{ asset('assets/img/images/DSC_7814-scaled.jpg') }}">
                <h3>MA-B All Junior</h3>
                <p>Chips, Atchaar, Polony, Special, Lettuce, Polony, Special, Lettuce, Russian, Vienna, Egg</p>
                <div class="in-text">
                    <div class="price">
                        <h6>R65,00</h6>
                    </div>
                    <div class="btn">
                        <a href="#">Add to Order</a>
                    </div>
                </div>
            </div>
        </div>



        <div class="menu-text">
            <h2>Sandwiches (3 Slices)</h2>
        </div>

        <div class="menu-items">
            <div class="row">
                <img
                    src="{{ asset('assets/img/images/cucumber-caprese-sandwich-6343482dece14c3d876bc7bac317ecd8.jpg') }}">
                <h3>Nene</h3>
                <p>Polony, Cucumber, Onion, Tomato, Lettuce, Eggs, Cheese & Vienna</p>
                <div class="in-text">
                    <div class="price">
                        <h6>R35,00</h6>
                    </div>
                    <div class="btn">
                        <a href="#">Add to Order</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <img
                    src="{{ asset('assets/img/images/cucumber-caprese-sandwich-6343482dece14c3d876bc7bac317ecd8.jpg') }}">
                <h3>Kea</h3>
                <p>Polony, Cucumber, Onion, Tomato, Lettuce, Half Russian, Eggs, Cheese, Half Vienna</p>
                <div class="in-text">
                    <div class="price">
                        <h6>R40,00</h6>
                    </div>
                    <div class="btn">
                        <a href="#">Add to Order</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <img
                    src="{{ asset('assets/img/images/cucumber-caprese-sandwich-6343482dece14c3d876bc7bac317ecd8.jpg') }}">
                <h3>Khanzo</h3>
                <p>Polony, Cucumber, Onion, Tomato, Lettuce, Half Russian, Eggs, Cheese, Half Vienna</p>
                <div class="in-text">
                    <div class="price">
                        <h6>R50,00</h6>
                    </div>
                    <div class="btn">
                        <a href="#">Add to Order</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <img
                    src="{{ asset('assets/img/images/cucumber-caprese-sandwich-6343482dece14c3d876bc7bac317ecd8.jpg') }}">
                <h3>Mini</h3>
                <p>Polony, Cucumber, Onion, Tomato, Lettuce, Half Russian, Half Vienna, Beef Patty, Egg, Cheese</p>
                <div class="in-text">
                    <div class="price">
                        <h6>R65,00</h6>
                    </div>
                    <div class="btn">
                        <a href="#">Add to Order</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <img
                    src="{{ asset('assets/img/images/cucumber-caprese-sandwich-6343482dece14c3d876bc7bac317ecd8.jpg') }}">
                <h3>Vic</h3>
                <p>Bacon, Egg and Cheese (2 Slices)</p>
                <div class="in-text">
                    <div class="price">
                        <h6>R35,00</h6>
                    </div>
                    <div class="btn">
                        <a href="#">Add to Order</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <img
                    src="{{ asset('assets/img/images/cucumber-caprese-sandwich-6343482dece14c3d876bc7bac317ecd8.jpg') }}">
                <h3>Titi</h3>
                <p>Cheese and Tomato</p>
                <div class="in-text">
                    <div class="price">
                        <h6>R30,00</h6>
                    </div>
                    <div class="btn">
                        <a href="#">Add to Order</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <img
                    src="{{ asset('assets/img/images/cucumber-caprese-sandwich-6343482dece14c3d876bc7bac317ecd8.jpg') }}">
                <h3>Tshiazozo</h3>
                <p>Ham, Cheese and Tomato (2 Slices)</p>
                <div class="in-text">
                    <div class="price">
                        <h6>R40,00</h6>
                    </div>
                    <div class="btn">
                        <a href="#">Add to Order</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="menu-text">
            <h2>Hot Beverages</h2>
        </div>

        <div class="menu-items">
            <div class="row">
                <img src="{{ asset('assets/img/images/1648675206726.jpeg') }}">
                <h3>Tea</h3>
                <div class="in-text">
                    <div class="price">
                        <h6>R12,00</h6>
                    </div>
                    <div class="btn">
                        <a href="#">Add to Order</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="menu-items">
            <div class="row">
                <img src="{{ asset('assets/img/images/1648675206726.jpeg') }}">
                <h3>Milo / Hot Chocolate</h3>
                <div class="in-text">
                    <div class="price">
                        <h6>R12,00</h6>
                    </div>
                    <div class="btn">
                        <a href="#">Add to Order</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="menu-items">
            <div class="row">
                <img src="{{ asset('assets/img/images/1648675206726.jpeg') }}">
                <h3>Coffee</h3>
                <div class="in-text">
                    <div class="price">
                        <h6>R15,00</h6>
                    </div>
                    <div class="btn">
                        <a href="#">Add to Order</a>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- footer section -->
    <section class="information" id="information">
        <div class="contacts">
            <div class="contacts-text">
                <h2>Make Sure You Check Out Our Socials</h2>
                <p>We'd love to keep you up to date with all our happenings</p>
            </div>
            <!-- socail media icons -->
            <div class="socials">
                <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                <a href="#"><i class='bx bxl-facebook'></i></a>
                <a href="#"><i class='bx bxl-twitter'></i></a>
            </div>

            <!-- location icons and details -->
            <div class="details">
                <div class="main">
                    <a href="#"><i class='bx bxs bx-location-plus'></i> 10 Ridge Glen Austin</a>
                </div>

                <div class="main">
                    <a href="#"><i class='bx bx-phone-call'></i> 076 588 6061 / 076 270 2780</a>
                </div>

                <div class="main">
                    <a href="#"><i class='bx bx-time'> </i> 08:00 - 21:00</a>
                </div>
            </div>
        </div>
    </section>

    <!-- scrolling to top effect -->
    <a href="#" class="scroll">
        <i class="bx bx-up-arrow-alt"></i>
    </a>

    <!-- javascript link -->
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
</body>

</html>
