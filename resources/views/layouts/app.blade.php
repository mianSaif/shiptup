<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <title>Shiftup &#8211; Car Repair &amp; Auto Services Theme </title>
    <meta name='robots' content='max-image-preview:large' />
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style type="text/css">

    </style>

    <style id="material-icons-css" media="all">
        /* fallback */


    </style>
    <link rel='stylesheet' id='simple-line-icons-css' href='{{ asset("wp-content/plugins/shiftup-core/inc/icons/simple-line-icons/assets/css/simple-line-icons.min.css?ver=6.0") }}' type='text/css' media='all' />

    <link rel='stylesheet' id='swiper-css' href='{{ asset("wp-content/plugins/qi-addons-for-elementor/assets/plugins/swiper/swiper.min.css?ver=6.0") }}' type='text/css' media='all' />
    <link rel='stylesheet' id='qi-addons-for-elementor-grid-style-css' href='{{ asset("wp-content/plugins/qi-addons-for-elementor/assets/css/grid.min.css?ver=6.0") }}' type='text/css' media='all' />
    <link rel='stylesheet' id='qi-addons-for-elementor-helper-parts-style-css' href='{{ asset("wp-content/plugins/qi-addons-for-elementor/assets/css/helper-parts.min.css?ver=6.0") }}' type='text/css' media='all' />
    <link rel='stylesheet' id='qi-addons-for-elementor-style-css' href='{{ asset("wp-content/plugins/qi-addons-for-elementor/assets/css/main.min.css?ver=6.0") }}' type='text/css' media='all' />
    <link rel='stylesheet' id='perfect-scrollbar-css' href='{{ asset("wp-content/plugins/shiftup-core/assets/plugins/perfect-scrollbar/perfect-scrollbar.css?ver=6.0") }}' type='text/css' media='all' />
    <link rel='stylesheet' id='shiftup-main-css' href='{{ asset("wp-content/themes/shiftup/assets/css/main.min.css?ver=6.0") }}' type='text/css' media='all' />
    <link rel='stylesheet' id='shiftup-core-style-css' href='{{ asset("wp-content/plugins/shiftup-core/assets/css/shiftup-core.min.css?ver=6.0") }}' type='text/css' media='all' />
    <style id="shiftup-google-fonts-css" media="all">
        /* latin-ext */

        @font-face {
            font-family: 'Oxanium';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url({{ asset("/wp-content/source/fonts/RrQQboN_4yJ0JmiMe2zE0YBB.woff2")}})
         format('woff2');
        unicode-range: U+0100-024F,U+0259,U+1E00-1EFF,
        U+2020,
        U+20A0-20AB,
        U+20AD-20CF,
        U+2113,
        U+2C60-2C7F,
        U+A720-A7FF;
        }

        /* latin */

        @font-face {
            font-family: 'Oxanium';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url({{ asset("wp-content/source/fonts/RrQQboN_4yJ0JmiMe2LE0Q.woff2")}})
         format('woff2');
        unicode-range: U+0000-00FF,
        U+0131,
        U+0152-0153,
        U+02BB-02BC,
        U+02C6,
        U+02DA,
        U+02DC,
        U+2000-206F,
        U+2074,
        U+20AC,
        U+2122,
        U+2191,
        U+2193,
        U+2212,
        U+2215,
        U+FEFF,
        U+FFFD;
        }

        /* latin-ext */

        @font-face {
            font-family: 'Oxanium';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(/fonts.gstatic.com/s/oxanium/v13/RrQQboN_4yJ0JmiMe2zE0YBB.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin  */

         @font-face {
            font-family: 'Oxanium';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url({{ asset("wp-content/source/fonts/RrQQboN_4yJ0JmiMe2LE0Q.woff2")}})
        format('woff2');
        unicode-range: U+0000-00FF,
        U+0131,
        U+0152-0153,
        U+02BB-02BC,
        U+02C6,
        U+02DA,
        U+02DC,
        U+2000-206F,
        U+2074,
        U+20AC,
        U+2122,
        U+2191,
        U+2193,
        U+2212,
        U+2215,
        U+FEFF,
        U+FFFD;
        }

        /* latin-ext */

        @font-face {
            font-family: 'Oxanium';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(/fonts.gstatic.com/s/oxanium/v13/RrQQboN_4yJ0JmiMe2zE0YBB.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */

        @font-face {
            font-family: 'Oxanium';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url({{ asset("wp-content/source/fonts/RrQQboN_4yJ0JmiMe2LE0Q.woff2")}})
         format('woff2');
        unicode-range: U+0000-00FF,
        U+0131,
        U+0152-0153,
        U+02BB-02BC,
        U+02C6,
        U+02DA,
        U+02DC,
        U+2000-206F,
        U+2074,
        U+20AC,
        U+2122,
        U+2191,
        U+2193,
        U+2212,
        U+2215,
        U+FEFF,
        U+FFFD;
        }

        /* latin-ext */

        @font-face {
            font-family: 'Oxanium';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(/fonts.gstatic.com/s/oxanium/v13/RrQQboN_4yJ0JmiMe2zE0YBB.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */

        @font-face {
            font-family: 'Oxanium';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url({{ asset("wp-content/source/fonts/RrQQboN_4yJ0JmiMe2LE0Q.woff2")}})
        format('woff2');
        unicode-range: U+0000-00FF,
        U+0131,
        U+0152-0153,
        U+02BB-02BC,
        U+02C6,
        U+02DA,
        U+02DC,
        U+2000-206F,
        U+2074,
        U+20AC,
        U+2122,
        U+2191,
        U+2193,
        U+2212,
        U+2215,
        U+FEFF,
        U+FFFD;
        }

        /* latin-ext */

        @font-face {
            font-family: 'Oxanium';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(/fonts.gstatic.com/s/oxanium/v13/RrQQboN_4yJ0JmiMe2zE0YBB.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */

        @font-face {
            font-family: 'Oxanium';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url({{ asset("wp-content/source/fonts/RrQQboN_4yJ0JmiMe2LE0Q.woff2")}})
         format('woff2');
        unicode-range: U+0000-00FF,
        U+0131,
        U+0152-0153,
        U+02BB-02BC,
        U+02C6,
        U+02DA,
        U+02DC,
        U+2000-206F,
        U+2074,
        U+20AC,
        U+2122,
        U+2191,
        U+2193,
        U+2212,
        U+2215,
        U+FEFF,
        U+FFFD;
        }

        /* thai */

        @font-face {
            font-family: 'Sarabun';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(/fonts.gstatic.com/s/sarabun/v13/DtVmJx26TKEr37c9YL5rik8s6zDX.woff2) format('woff2');
            unicode-range: U+0E01-0E5B, U+200C-200D, U+25CC;
        }

        /* vietnamese */

        @font-face {
            font-family: 'Sarabun';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(/fonts.gstatic.com/s/sarabun/v13/DtVmJx26TKEr37c9YL5rilQs6zDX.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */

        @font-face {
            font-family: 'Sarabun';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(/fonts.gstatic.com/s/sarabun/v13/DtVmJx26TKEr37c9YL5rilUs6zDX.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */

        @font-face {
            font-family: 'Sarabun';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(/fonts.gstatic.com/s/sarabun/v13/DtVmJx26TKEr37c9YL5rilss6w.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* thai */

        @font-face {
            font-family: 'Sarabun';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(/fonts.gstatic.com/s/sarabun/v13/DtVjJx26TKEr37c9aAFJn2QN.woff2) format('woff2');
            unicode-range: U+0E01-0E5B, U+200C-200D, U+25CC;
        }

        /* vietnamese */

        @font-face {
            font-family: 'Sarabun';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(/fonts.gstatic.com/s/sarabun/v13/DtVjJx26TKEr37c9aBpJn2QN.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */

        @font-face {
            font-family: 'Sarabun';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(/fonts.gstatic.com/s/sarabun/v13/DtVjJx26TKEr37c9aBtJn2QN.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */

        @font-face {
            font-family: 'Sarabun';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url({{ asset("wp-content/source/fonts/DtVjJx26TKEr37c9aBVJnw.woff2")}})

        format('woff2');
        unicode-range: U+0000-00FF,
        U+0131,
        U+0152-0153,
        U+02BB-02BC,
        U+02C6,
        U+02DA,
        U+02DC,
        U+2000-206F,
        U+2074,
        U+20AC,
        U+2122,
        U+2191,
        U+2193,
        U+2212,
        U+2215,
        U+FEFF,
        U+FFFD;
        }

        /* thai */

        @font-face {
            font-family: 'Sarabun';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(/fonts.gstatic.com/s/sarabun/v13/DtVmJx26TKEr37c9YOZqik8s6zDX.woff2) format('woff2');
            unicode-range: U+0E01-0E5B, U+200C-200D, U+25CC;
        }

        /* vietnamese */

        @font-face {
            font-family: 'Sarabun';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(/fonts.gstatic.com/s/sarabun/v13/DtVmJx26TKEr37c9YOZqilQs6zDX.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */

        @font-face {
            font-family: 'Sarabun';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(/fonts.gstatic.com/s/sarabun/v13/DtVmJx26TKEr37c9YOZqilUs6zDX.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */

        @font-face {
            font-family: 'Sarabun';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(/fonts.gstatic.com/s/sarabun/v13/DtVmJx26TKEr37c9YOZqilss6w.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* thai */

        @font-face {
            font-family: 'Sarabun';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(/fonts.gstatic.com/s/sarabun/v13/DtVmJx26TKEr37c9YMptik8s6zDX.woff2) format('woff2');
            unicode-range: U+0E01-0E5B, U+200C-200D, U+25CC;
        }

        /* vietnamese */

        @font-face {
            font-family: 'Sarabun';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(/fonts.gstatic.com/s/sarabun/v13/DtVmJx26TKEr37c9YMptilQs6zDX.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */

        @font-face {
            font-family: 'Sarabun';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(/fonts.gstatic.com/s/sarabun/v13/DtVmJx26TKEr37c9YMptilUs6zDX.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */

        @font-face {
            font-family: 'Sarabun';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(/fonts.gstatic.com/s/sarabun/v13/DtVmJx26TKEr37c9YMptilss6w.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* thai */

        @font-face {
            font-family: 'Sarabun';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(/fonts.gstatic.com/s/sarabun/v13/DtVmJx26TKEr37c9YK5sik8s6zDX.woff2) format('woff2');
            unicode-range: U+0E01-0E5B, U+200C-200D, U+25CC;
        }

        /* vietnamese */

        @font-face {
            font-family: 'Sarabun';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(/fonts.gstatic.com/s/sarabun/v13/DtVmJx26TKEr37c9YK5silQs6zDX.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */

        @font-face {
            font-family: 'Sarabun';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(/fonts.gstatic.com/s/sarabun/v13/DtVmJx26TKEr37c9YK5silUs6zDX.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */

        @font-face {
            font-family: 'Sarabun';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(/fonts.gstatic.com/s/sarabun/v13/DtVmJx26TKEr37c9YK5silss6w.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
    </style>
    <link rel='stylesheet' id='shiftup-grid-css' href='{{ asset("wp-content/themes/shiftup/assets/css/grid.min.css?ver=6.0") }}' type='text/css' media='all' />
    <link rel='stylesheet' id='shiftup-style-css' href='{{ asset("wp-content/themes/shiftup/style.css?ver=6.0") }}' type='text/css' media='all' />
    <style id='shiftup-style-inline-css' type='text/css'>
        #qodef-page-outer {
            margin-top: -100px;
        }

        @media only screen and (max-width: 1024px) {
            #qodef-page-outer {
                margin-top: -70px;
            }
        }

        #qodef-page-footer-top-area {
            border-top-color: #000000;
            border-top-width: 5px;
            border-top-style: solid;
        }

        #qodef-page-inner {
            padding: 0px;
        }

        @media only screen and (max-width: 1024px) {
            #qodef-page-inner {
                padding: 0px;
            }
        }

        #qodef-top-area {
            background-color: #000000;
        }

        #qodef-top-area-inner {
            height: 40px;
        }

        #qodef-page-mobile-header .qodef-mobile-header-logo-link {
            height: 17px;
        }

        #qodef-page-mobile-header .qodef-mobile-header-logo-link.qodef-source--svg-path svg {
            width: 150px;
        }

        .qodef-page-title {
            height: 111px;
            background-color: #f3f3f3;
        }

        .qodef-page-title .qodef-m-content {
            padding-top: 100px;
        }

        @media only screen and (max-width: 1024px) {
            .qodef-page-title .qodef-m-content {
                padding-top: 70px;
            }
        }

        .qodef-header--standard #qodef-page-header {
            background-color: rgba(255, 255, 255, 0);
        }

        .qodef-header--standard #qodef-page-header-inner {
            padding-left: 50px;
            padding-right: 50px;
        }

        .qodef-mobile-header--standard #qodef-page-mobile-header-inner:not(.qodef-content-grid) {
            padding-left: 7%;
            padding-right: 7%;
        }

        .qodef-mobile-header--standard .qodef-mobile-header-navigation>ul:not(.qodef-content-grid) {
            padding-left: 7%;
            padding-right: 7%;
        }

        @media only screen and (max-width: 768px) {

            h2,
            .qodef-h2 {
                font-size: 39px;
            }
        }

        @media only screen and (max-width: 680px) {

            h1,
            .qodef-h1 {
                font-size: 60px;
            }

            h2,
            .qodef-h2 {
                font-size: 40px;
            }
        }
    </style>
    <link rel='stylesheet' id='elementor-frontend-css' href='{{ asset("wp-content/uploads/elementor/css/custom-frontend-lite.min.css?ver=1643117676") }}' type='text/css' media='all' />
    <style id='elementor-frontend-inline-css' type='text/css'>
        .elementor-kit-5 {
            --e-global-color-primary: #6EC1E4;
            --e-global-color-secondary: #54595F;
            --e-global-color-text: #7A7A7A;
            --e-global-color-accent: #61CE70;
            --e-global-typography-primary-font-family: "Roboto";
            --e-global-typography-primary-font-weight: 600;
            --e-global-typography-secondary-font-family: "Roboto Slab";
            --e-global-typography-secondary-font-weight: 400;
            --e-global-typography-text-font-family: "Roboto";
            --e-global-typography-text-font-weight: 400;
            --e-global-typography-accent-font-family: "Roboto";
            --e-global-typography-accent-font-weight: 500;
        }

        .elementor-section.elementor-section-boxed>.elementor-container {
            max-width: 1140px;
        }

        .elementor-widget:not(:last-child) {
            margin-bottom: 0px;
        }

        h1.entry-title {
            display: var(--page-title-display);
        }

        @media (max-width: 1024px) {
            .elementor-section.elementor-section-boxed>.elementor-container {
                max-width: 1024px;
            }
        }

        @media (max-width: 767px) {
            .elementor-section.elementor-section-boxed>.elementor-container {
                max-width: 767px;
            }
        }

        .elementor-21 .elementor-element.elementor-element-13a8e2e {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin-top: 6px;
            margin-bottom: 6px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-21 .elementor-element.elementor-element-13a8e2e>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-21 .elementor-element.elementor-element-9ffd830>.elementor-element-populated {
            margin: 0px 0px 0px 0px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 0px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-21 .elementor-element.elementor-element-15e1c1c {
            margin-top: 160px;
            margin-bottom: 135px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-21 .elementor-element.elementor-element-30b7d71>.elementor-element-populated {
            margin: 0px 0px 0px 0px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 0px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-21 .elementor-element.elementor-element-7a7e1bc {
            margin-top: 0px;
            margin-bottom: 0px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-bc-flex-widget .elementor-21 .elementor-element.elementor-element-7fec3c6.elementor-column .elementor-widget-wrap {
            align-items: center;
        }

        .elementor-21 .elementor-element.elementor-element-7fec3c6.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }

        .elementor-21 .elementor-element.elementor-element-7fec3c6.elementor-column>.elementor-widget-wrap {
            justify-content: center;
        }

        .elementor-21 .elementor-element.elementor-element-7fec3c6:not(.elementor-motion-effects-element-type-background)>.elementor-widget-wrap,
        .elementor-21 .elementor-element.elementor-element-7fec3c6>.elementor-widget-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #161616;
        }

        .elementor-21 .elementor-element.elementor-element-7fec3c6>.elementor-element-populated {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin: 0px 6px 6px 0px;
            --e-column-margin-right: 6px;
            --e-column-margin-left: 0px;
            padding: 0% 15% 0% 15%;
        }

        .elementor-21 .elementor-element.elementor-element-7fec3c6>.elementor-element-populated>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-21 .elementor-element.elementor-element-a528e31>.elementor-widget-container {
            margin: 0px 0px 40px 0px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-21 .elementor-element.elementor-element-e1c786e>.elementor-widget-container {
            margin: 0px 0px 40px 0px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-21 .elementor-element.elementor-element-83f2bd7>.elementor-element-populated {
            margin: 0px 0px 6px 6px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 6px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-21 .elementor-element.elementor-element-250c143 {
            margin-top: 0px;
            margin-bottom: 0px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-21 .elementor-element.elementor-element-1f4a805>.elementor-element-populated {
            margin: 6px 6px 0px 0px;
            --e-column-margin-right: 6px;
            --e-column-margin-left: 0px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-bc-flex-widget .elementor-21 .elementor-element.elementor-element-3d14cd2.elementor-column .elementor-widget-wrap {
            align-items: center;
        }

        .elementor-21 .elementor-element.elementor-element-3d14cd2.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }

        .elementor-21 .elementor-element.elementor-element-3d14cd2.elementor-column>.elementor-widget-wrap {
            justify-content: center;
        }

        .elementor-21 .elementor-element.elementor-element-3d14cd2:not(.elementor-motion-effects-element-type-background)>.elementor-widget-wrap,
        .elementor-21 .elementor-element.elementor-element-3d14cd2>.elementor-widget-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #161616;
        }

        .elementor-21 .elementor-element.elementor-element-3d14cd2>.elementor-element-populated {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin: 6px 0px 0px 6px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 6px;
            padding: 0% 15% 0% 15%;
        }

        .elementor-21 .elementor-element.elementor-element-3d14cd2>.elementor-element-populated>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-21 .elementor-element.elementor-element-490088d>.elementor-widget-container {
            margin: 10px 0px 0px 0px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-21 .elementor-element.elementor-element-4a1b788 {
            margin-top: 155px;
            margin-bottom: 155px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-21 .elementor-element.elementor-element-c3baab4>.elementor-element-populated {
            margin: 0% 0% 0% 0%;
            --e-column-margin-right: 0%;
            --e-column-margin-left: 0%;
            padding: 0px 0px 0px 0px;
        }

        .elementor-21 .elementor-element.elementor-element-b1a2d27>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-21 .elementor-element.elementor-element-b1a2d27 {
            width: 305px;
            max-width: 305px;
        }

        .elementor-21 .elementor-element.elementor-element-334296b>.elementor-element-populated {
            margin: 0% 0% 0% 0%;
            --e-column-margin-right: 0%;
            --e-column-margin-left: 0%;
            padding: 0px 0px 0px 0px;
        }

        .elementor-21 .elementor-element.elementor-element-6cb10b9 {
            margin-top: 0px;
            margin-bottom: 0px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-21 .elementor-element.elementor-element-7ae1930>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
            margin-bottom: 0px;
        }

        .elementor-21 .elementor-element.elementor-element-7ae1930>.elementor-element-populated {
            margin: 0px 0px 0px 0px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 0px;
            padding: 0% 22% 0% 0%;
        }

        .elementor-21 .elementor-element.elementor-element-5e0350b>.elementor-widget-container {
            margin: 60px 0px 0px 0px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-21 .elementor-element.elementor-element-7944e2d>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
            margin-bottom: 0px;
        }

        .elementor-21 .elementor-element.elementor-element-7944e2d>.elementor-element-populated {
            margin: 0px 0px 0px 0px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 0px;
            padding: 0% 22% 0% 0%;
        }

        .elementor-21 .elementor-element.elementor-element-f2d849e>.elementor-widget-container {
            margin: 60px 0px 0px 0px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-21 .elementor-element.elementor-element-95657bd>.elementor-element-populated {
            margin: 0% 0% 0% 0%;
            --e-column-margin-right: 0%;
            --e-column-margin-left: 0%;
            padding: 0% 22% 0% 0%;
        }

        .elementor-21 .elementor-element.elementor-element-48a5012 {
            margin-top: 0px;
            margin-bottom: 0px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-21 .elementor-element.elementor-element-645b053>.elementor-element-populated {
            margin: 0px 0px 0px 0px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 0px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-21 .elementor-element.elementor-element-89a9fbd {
            margin-top: 155px;
            margin-bottom: 150px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-21 .elementor-element.elementor-element-0f6d153>.elementor-element-populated {
            margin: 0px 0px 0px 0px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 0px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-21 .elementor-element.elementor-element-eb85867>.elementor-element-populated {
            margin: 0px 0px 0px 0px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 0px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-21 .elementor-element.elementor-element-01fece1:not(.elementor-motion-effects-element-type-background),
        .elementor-21 .elementor-element.elementor-element-01fece1>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #161616;
        }

        .elementor-21 .elementor-element.elementor-element-01fece1 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin-top: 0px;
            margin-bottom: 0px;
            padding: 146px 0px 160px 0px;
        }

        .elementor-21 .elementor-element.elementor-element-01fece1>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-21 .elementor-element.elementor-element-46aefb6>.elementor-element-populated {
            margin: 0px 0px 0px 0px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 0px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-21 .elementor-element.elementor-element-78a526b {
            margin-top: 66px;
            margin-bottom: 0px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-21 .elementor-element.elementor-element-27f6ecb>.elementor-element-populated {
            margin: 15px 0px 0px 0px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 0px;
            padding: 0% 11% 0% 0%;
        }

        .elementor-21 .elementor-element.elementor-element-b4c3d7b>.elementor-element-populated {
            margin: 0px 0px 0px 0px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 0px;
            padding: 0% 16% 0% 0%;
        }

        .elementor-21 .elementor-element.elementor-element-eed8929>.elementor-widget-container {
            padding: 0px 0px 0px 0px;
        }

        .elementor-21 .elementor-element.elementor-element-4a6085f:not(.elementor-motion-effects-element-type-background),
        .elementor-21 .elementor-element.elementor-element-4a6085f>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #FF4D24;
        }

        .elementor-21 .elementor-element.elementor-element-4a6085f {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin-top: 0px;
            margin-bottom: 0px;
            padding: 80px 0px 45px 0px;
        }

        .elementor-21 .elementor-element.elementor-element-4a6085f>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-21 .elementor-element.elementor-element-3c4cc30>.elementor-element-populated {
            margin: 0px 0px 0px 0px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 0px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-21 .elementor-element.elementor-element-3565298 {
            margin-top: 155px;
            margin-bottom: 0px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-21 .elementor-element.elementor-element-8318fa5>.elementor-element-populated {
            margin: 0px 0px 0px 0px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 0px;
            padding: 0px 0px 0px 0px;
        }


        .elementor-21 .elementor-element.elementor-element-555be5c {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin-top: 0px;
            margin-bottom: 0px;
            padding: 55px 0px 160px 0px;
        }

        .elementor-21 .elementor-element.elementor-element-555be5c>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-21 .elementor-element.elementor-element-c5bd35f>.elementor-element-populated {
            margin: 0px 0px 0px 0px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 0px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-21 .elementor-element.elementor-element-9300e5d>.elementor-element-populated {
            margin: 0px 0px 0px 0px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 0px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-21 .elementor-element.elementor-element-cdeadba>.elementor-element-populated {
            margin: 0px 0px 0px 0px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 0px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-21 .elementor-element.elementor-element-e829647>.elementor-element-populated {
            margin: 0px 0px 0px 0px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 0px;
            padding: 0px 0px 0px 0px;
        }

        @media (min-width: 768px) {
            .elementor-21 .elementor-element.elementor-element-c3baab4 {
                width: 34%;
            }

            .elementor-21 .elementor-element.elementor-element-334296b {
                width: 66%;
            }

            .elementor-21 .elementor-element.elementor-element-0f6d153 {
                width: 34.786%;
            }

            .elementor-21 .elementor-element.elementor-element-eb85867 {
                width: 65.214%;
            }
        }

        @media (max-width: 1024px) and (min-width: 768px) {
            .elementor-21 .elementor-element.elementor-element-7fec3c6 {
                width: 100%;
            }

            .elementor-21 .elementor-element.elementor-element-83f2bd7 {
                width: 100%;
            }

            .elementor-21 .elementor-element.elementor-element-1f4a805 {
                width: 100%;
            }

            .elementor-21 .elementor-element.elementor-element-3d14cd2 {
                width: 100%;
            }

            .elementor-21 .elementor-element.elementor-element-c3baab4 {
                width: 100%;
            }

            .elementor-21 .elementor-element.elementor-element-334296b {
                width: 100%;
            }

            .elementor-21 .elementor-element.elementor-element-7ae1930 {
                width: 33.3%;
            }

            .elementor-21 .elementor-element.elementor-element-0f6d153 {
                width: 100%;
            }

            .elementor-21 .elementor-element.elementor-element-eb85867 {
                width: 100%;
            }

            .elementor-21 .elementor-element.elementor-element-27f6ecb {
                width: 100%;
            }

            .elementor-21 .elementor-element.elementor-element-b4c3d7b {
                width: 100%;
            }

            .elementor-21 .elementor-element.elementor-element-c5bd35f {
                width: 50%;
            }

            .elementor-21 .elementor-element.elementor-element-9300e5d {
                width: 50%;
            }

            .elementor-21 .elementor-element.elementor-element-cdeadba {
                width: 50%;
            }

            .elementor-21 .elementor-element.elementor-element-e829647 {
                width: 50%;
            }
        }

        @media (max-width: 880px) and (min-width: 768px) {
            .elementor-21 .elementor-element.elementor-element-7ae1930 {
                width: 50%;
            }

            .elementor-21 .elementor-element.elementor-element-7944e2d {
                width: 50%;
            }

            .elementor-21 .elementor-element.elementor-element-95657bd {
                width: 50%;
            }
        }

        @media (max-width: 1440px) {
            .elementor-21 .elementor-element.elementor-element-0d49beb>.elementor-widget-container {
                margin: 0px 0px 0px 0px;
                padding: 0px 0px 0px 0px;
            }

            .elementor-21 .elementor-element.elementor-element-3d14cd2>.elementor-element-populated {
                padding: 0% 0% 0% 12%;
            }

            .elementor-21 .elementor-element.elementor-element-7ae1930>.elementor-element-populated {
                padding: 0% 19% 0% 0%;
            }

            .elementor-21 .elementor-element.elementor-element-01fece1 {
                padding: 190px 0px 190px 0px;
            }
        }

        @media (max-width: 1024px) {
            .elementor-21 .elementor-element.elementor-element-7fec3c6>.elementor-element-populated {
                margin: 0px 26px 6px 26px;
                --e-column-margin-right: 26px;
                --e-column-margin-left: 26px;
                padding: 15% 15% 15% 15%;
            }

            .elementor-21 .elementor-element.elementor-element-83f2bd7>.elementor-element-populated {
                margin: 6px 26px 6px 26px;
                --e-column-margin-right: 26px;
                --e-column-margin-left: 26px;
            }

            .elementor-21 .elementor-element.elementor-element-1f4a805>.elementor-element-populated {
                margin: 6px 26px 6px 26px;
                --e-column-margin-right: 26px;
                --e-column-margin-left: 26px;
            }

            .elementor-21 .elementor-element.elementor-element-3d14cd2>.elementor-element-populated {
                margin: 6px 26px 6px 26px;
                --e-column-margin-right: 26px;
                --e-column-margin-left: 26px;
                padding: 10% 15% 10% 15%;
            }

            .elementor-21 .elementor-element.elementor-element-334296b>.elementor-element-populated {
                margin: 60px 0px 0px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
                padding: 0px 0px 0px 0px;
            }

            .elementor-21 .elementor-element.elementor-element-6cb10b9 {
                margin-top: 0px;
                margin-bottom: 0px;
                padding: 0px 0px 0px 0px;
            }

            .elementor-21 .elementor-element.elementor-element-7944e2d>.elementor-element-populated {
                padding: 0% 21% 0% 0%;
            }

            .elementor-21 .elementor-element.elementor-element-95657bd>.elementor-element-populated {
                padding: 0% 21% 0% 0%;
            }

            .elementor-21 .elementor-element.elementor-element-bd283a5>.elementor-widget-container {
                margin: 0px 0px 40px 0px;
                padding: 0px 0px 0px 0px;
            }

            .elementor-21 .elementor-element.elementor-element-eb85867>.elementor-element-populated {
                padding: 0px 0px 0px 0px;
            }

            .elementor-21 .elementor-element.elementor-element-01fece1 {
                padding: 160px 0px 160px 0px;
            }
        }

        @media (max-width: 880px) {
            .elementor-21 .elementor-element.elementor-element-95657bd>.elementor-element-populated {
                margin: 60px 0px 0px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
            }
        }

        @media (max-width: 767px) {
            .elementor-21 .elementor-element.elementor-element-3d14cd2>.elementor-element-populated {
                margin: 5px 20px 0px 20px;
                --e-column-margin-right: 20px;
                --e-column-margin-left: 20px;
                padding: 10% 10% 10% 8%;
            }

            .elementor-21 .elementor-element.elementor-element-7944e2d>.elementor-element-populated {
                margin: 60px 0px 0px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
            }

            .elementor-21 .elementor-element.elementor-element-0f6d153>.elementor-element-populated {
                margin: 0px 0px 0px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
                padding: 0px 0px 50px 0px;
            }

            .elementor-21 .elementor-element.elementor-element-27f6ecb>.elementor-element-populated {
                padding: 0px 0px 0px 0px;
            }

            .elementor-21 .elementor-element.elementor-element-b4c3d7b>.elementor-element-populated {
                padding: 0px 0px 0px 0px;
            }
        }
    </style>
    <link rel='stylesheet' id='qode-zendesk-chat-css' href='{{ asset("wp-content/plugins/qode-zendesk-chat//assets/main.css?ver=6.0") }}' type='text/css' media='all' />

    <script type='text/javascript' src='wp-includes/js/jquery/jquery.min.js?ver=3.6.0' id='jquery-core-js'></script>
    <script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2' id='jquery-migrate-js'></script>

    <script data-cfasync="false">
        //<![CDATA[
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                '//www.googletagmanager.com/gtm.' + 'js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KTQ2BTD'); //]]>
    </script>

    <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <meta name="generator" content="Powered by Slider Revolution 6.5.14 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
        <script>
        function setREVStartSize(e) {
            //window.requestAnimationFrame(function() {
            window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
            window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
            try {
                var pw = document.getElementById(e.c).parentNode.offsetWidth,
                    newh;
                pw = pw === 0 || isNaN(pw) ? window.RSIW : pw;
                e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
                e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
                e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
                e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
                e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
                e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
                e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
                if (e.layout === "fullscreen" || e.l === "fullscreen")
                    newh = Math.max(e.mh, window.RSIH);
                else {
                    e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                    for (var i in e.rl)
                        if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
                    e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
                    e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                    for (var i in e.rl)
                        if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

                    var nl = new Array(e.rl.length),
                        ix = 0,
                        sl;
                    e.tabw = e.tabhide >= pw ? 0 : e.tabw;
                    e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
                    e.tabh = e.tabhide >= pw ? 0 : e.tabh;
                    e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
                    for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
                    sl = nl[0];
                    for (var i in nl)
                        if (sl > nl[i] && nl[i] > 0) {
                            sl = nl[i];
                            ix = i;
                        }
                    var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
                    newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
                }
                var el = document.getElementById(e.c);
                if (el !== null && el) el.style.height = newh + "px";
                el = document.getElementById(e.c + "_wrapper");
                if (el !== null && el) {
                    el.style.height = newh + "px";
                    el.style.display = "block";
                }
            } catch (e) {
                console.log("Failure at Presize of Slider:" + e)
            }
            //});
        };
    </script>
    <style type="text/css" id="wp-custom-css">
        .widget_block[data-area="services"] {
            margin: 0;
        }

        .widget_block[data-area="empty"] {
            margin: 0;
        }

        #qodef-side-area .widget.widget_shiftup_core_social_icons_group {
            position: fixed;
            bottom: 50px;
        }

        @media only screen and (min-width: 1025px) and (max-width: 1280px) {
            .qodef-custom-style .qodef-portfolio-list.qodef-swiper-container .swiper-button-prev {
                right: 143px !important;
            }

            .qodef-custom-style .qodef-portfolio-list.qodef-swiper-container .swiper-button-next {
                right: 90px !important;
            }

            .qodef-custom-indent .elementor-element>.elementor-element-populated {
                margin-left: 6.6% !important;
            }
        }

        @media only screen and (max-width: 680px) {
            section.qodef-elementor-content-grid.qodef-extended-grid--right.qodef-vb-custom-style>.elementor-container {
                padding: 0;
            }
        }

        .qodef-custom-position .elementor-widget-container {
            padding-left: calc(50% - 700px) !important;
        }

        @media only screen and (max-width: 1440px) {
            .qodef-custom-position .elementor-widget-container {
                padding-left: calc(50% - 550px) !important;
            }
        }

        @media only screen and (max-width: 1200px) {
            .qodef-custom-position .elementor-widget-container {
                padding-left: calc(50% - 480px) !important;
            }
        }

        @media only screen and (max-width: 1024px) {
            .qodef-custom-position .elementor-widget-container {
                padding-left: 7% !important;
            }
        }

        #qodef-back-to-top {
            bottom: 105px;
        }
    </style>
</head>

<body class="home page-template page-template-page-full-width page-template-page-full-width-php page page-id-21 theme-shiftup qode-framework-1.1.8 woocommerce-no-js qodef-qi--no-touch qi-addons-for-elementor-1.5.2 qodef-age-verification--opened qodef-back-to-top--enabled qodef-content-bottom--enabled qodef-theme-cursor  qodef-content-behind-header qodef-page-dark-skin qodef-blog-dark-skin qodef-header-skin--blur qodef-header--standard qodef-header-appearance--sticky qodef-header--transparent qodef-content--behind-header qodef-mobile-header--standard qodef-drop-down-second--full-width qodef-drop-down-second--default shiftup-core-1.0 shiftup-1.0 qodef-content-grid-1400 qode-export-1.0 qodef-header-standard--center qodef-search--fullscreen elementor-default elementor-kit-5 elementor-page elementor-page-21" itemscope itemtype="https://schema.org/WebPage">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-dark-grayscale">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 0.49803921568627" />
                    <feFuncG type="table" tableValues="0 0.49803921568627" />
                    <feFuncB type="table" tableValues="0 0.49803921568627" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-grayscale">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 1" />
                    <feFuncG type="table" tableValues="0 1" />
                    <feFuncB type="table" tableValues="0 1" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-purple-yellow">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" />
                    <feFuncG type="table" tableValues="0 1" />
                    <feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-blue-red">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 1" />
                    <feFuncG type="table" tableValues="0 0.27843137254902" />
                    <feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-midnight">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 0" />
                    <feFuncG type="table" tableValues="0 0.64705882352941" />
                    <feFuncB type="table" tableValues="0 1" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-magenta-yellow">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.78039215686275 1" />
                    <feFuncG type="table" tableValues="0 0.94901960784314" />
                    <feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-purple-green">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" />
                    <feFuncG type="table" tableValues="0 1" />
                    <feFuncB type="table" tableValues="0.44705882352941 0.4" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-blue-orange">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.098039215686275 1" />
                    <feFuncG type="table" tableValues="0 0.66274509803922" />
                    <feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg>
    <a class="skip-link screen-reader-text" href="#qodef-page-content">Skip to the content</a>
    <div id="qodef-page-wrapper" class="">
        <div class="qodef-menu-cover"></div>
        {{-- Header Start --}}
        @include('includes/header')
        {{-- Header End --}}
        <div id="qodef-page-outer">
            @yield('breadcrumbs_title')
            <div id="qodef-page-inner" class="qodef-content-full-width">
                @yield('content')
            </div>
        </div>
        <div id="qodef-content-bottom">
            <div id="qodef-content-bottom-inner" class="qodef-content-grid">
                <div id="block-11" class="widget widget_block" data-area="content-bottom">
                    <h2 style="color:#ffffff;"><a href="/cdn-cgi/l/email-protection#691a1c1919061b1d291a01000f1d1c19470a0604"><span class="__cf_email__" data-cfemail="14676164647b666054677c7d726061643a777b79">[email&#160;protected]</span></a>
                    </h2>
                    <p></p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        dolor et.</p>
                </div>
                <div id="shiftup_core_button-2" class="widget widget_shiftup_core_button" data-area="content-bottom"><a class="qodef-shortcode qodef-m  qodef-button qodef-layout--filled qodef-size--large qodef-html--link qodef-has-arrow" href="" target="_self" style="margin: -12px 50px 0 0">
                        <svg class="qodef-svg--slider-arrow-right" xmlns="http://www.w3.org/2000/svg" width="26" height="24.042">
                            <g transform="translate(1038.5 -1861.979) rotate(90)">
                                <rect width="17" height="2" transform="translate(1872.586 1037.086) rotate(-45)" />
                                <rect width="25" height="2" transform="translate(1873 1037.5) rotate(-90)" />
                                <rect width="17" height="2" transform="translate(1874 1038.5) rotate(-135)" />
                            </g>
                        </svg>
                        <span class="qodef-m-text">Button Text</span></a></div>
            </div>
        </div>
        @include('includes/footer')
    </div>
    <script data-cfasync="false" src="{{ asset("wp-content/source/js/email-decode.min.js") }}"></script>
    <script>
        window.RS_MODULES = window.RS_MODULES || {};
        window.RS_MODULES.modules = window.RS_MODULES.modules || {};
        window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
        window.RS_MODULES.defered = true;
        window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
        window.RS_MODULES.type = 'compiled';
    </script>
    <div class="rbt-toolbar" data-theme="ShiftUp" data-featured="" data-button-position="55%" data-button-horizontal="right" data-button-alt="no"></div>




    <script>
        if (typeof revslider_showDoubleJqueryError === "undefined") {
            function revslider_showDoubleJqueryError(sliderID) {
                console.log("You have some jquery.js library include that comes after the Slider Revolution files js inclusion.");
                console.log("To fix this, you can:");
                console.log("1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on");
                console.log("2. Find the double jQuery.js inclusion and remove it");
                return "Double Included jQuery Library";
            }
        }
    </script>
    <link rel='stylesheet' id='magnific-popup-css' href='{{ asset("wp-content/plugins/shiftup-core/assets/plugins/magnific-popup/magnific-popup.css?ver=6.0") }}' type='text/css' media='all' />

    <link rel='stylesheet' id='rs-plugin-settings-css' href='{{ asset("wp-content/plugins/revslider/public/assets/css/rs6.css?ver=6.5.14") }}' type='text/css' media='all' />
    <style id='rs-plugin-settings-inline-css' type='text/css'>
        #rev_slider_6_1_wrapper .shiftup.tparrows:before {
            display: none
        }

        .qodef-theme-cursor #rev_slider_6_1_wrapper .shiftup.tparrows {
            cursor: none
        }

        #rev_slider_6_1_wrapper .shiftup.tparrows {
            cursor: pointer;
            background: transparent;
            width: 32px;
            height: 26px;
            position: absolute;
            display: block;
            z-index: 1000
        }

        #rev_slider_6_1_wrapper .shiftup.tparrows:before {
            display: none
        }

        #rev_slider_6_1_wrapper .shiftup.tparrows svg {
            display: block;
            color: #ffffff
        }

        #rev_slider_6_1_wrapper .shiftup.tparrows svg rect:nth-of-type(2),
        #rev_slider_6_1_wrapper .shiftup.tparrows svg rect:nth-of-type(3),
        #rev_slider_6_1_wrapper .shiftup.tparrows svg rect:nth-of-type(4) {
            fill: currentColor;
            transition: all 0.35s
        }

        .qodef-browser--firefox #rev_slider_6_1_wrapper .shiftup.tparrows svg {
            width: 47px
        }

        #rev_slider_6_1_wrapper .shiftup.tparrows.tp-leftarrow svg {
            transform: translateX(0);
            transition: transform .3s cubic-bezier(0.39, 0.58, 0.57, 1)
        }

        #rev_slider_6_1_wrapper .shiftup.tparrows.tp-rightarrow svg {
            transform: translateX(0) scaleX(-1);
            transition: transform .3s cubic-bezier(0.39, 0.58, 0.57, 1)
        }

        #rev_slider_6_1_wrapper .shiftup.tparrows.tp-leftarrow.rs-touchhover svg rect:nth-of-type(2),
        #rev_slider_6_1_wrapper .shiftup.tparrows.tp-leftarrow.rs-touchhover svg rect:nth-of-type(4),
        #rev_slider_6_1_wrapper .shiftup.tparrows.tp-rightarrow.rs-touchhover svg rect:nth-of-type(2),
        #rev_slider_6_1_wrapper .shiftup.tparrows.tp-rightarrow.rs-touchhover svg rect:nth-of-type(4) {
            width: 9px;
            transition: width .2s
        }

        #rev_slider_6_1_wrapper .shiftup.tparrows.tp-leftarrow.rs-touchhover svg rect:nth-of-type(3),
        #rev_slider_6_1_wrapper .shiftup.tparrows.tp-rightarrow.rs-touchhover svg rect:nth-of-type(3) {
            width: 37px !important;
            transition: width .2s
        }

        #rev_slider_6_1_wrapper .shiftup.tparrows.tp-leftarrow.rs-touchhover svg {
            transform: translateX(-9px)
        }

        #rev_slider_6_1_wrapper .shiftup.tparrows.tp-rightarrow.rs-touchhover svg {
            transform: translate(9px, 0) scaleX(-1)
        }

        #rev_slider_6_1_wrapper .shiftup-horizontal-pagination.tp-bullets {
            counter-reset: section;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: nowrap
        }

        #rev_slider_6_1_wrapper .shiftup-horizontal-pagination .tp-bullet {
            position: relative;
            display: inline-block;
            font-family: 'Oxanium', cursive;
            font-weight: 600;
            color: #fff;
            background: transparent;
            cursor: pointer;
            transition: .5s cubic-bezier(0.22, 0.61, 0.36, 1);
            margin-right: 10px
        }

        #rev_slider_6_1_wrapper .shiftup-horizontal-pagination .tp-bullet:before {
            counter-increment: section;
            content: counter(section, decimal-leading-zero);
            position: relative;
            font-size: 17px;
            color: #ffffff;
            display: inline-block;
            transform: scale(1) translate(0, 0);
            transition: transform .2s
        }

        #rev_slider_6_1_wrapper .shiftup-horizontal-pagination .tp-bullet.rs-touchhover:before {
            transform: scale(1.7) translate(0, 1px)
        }

        #rev_slider_6_1_wrapper .shiftup-horizontal-pagination .tp-bullet.selected:hover:before {}

        #rev_slider_6_1_wrapper .shiftup-horizontal-pagination .tp-bullet.selected:before {
            transform: scale(1.7) translate(0, 1px)
        }
    </style>
    <script type='text/javascript' src='https://shiftup.qodeinteractive.com/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.9' id='regenerator-runtime-js'></script>
    <script type='text/javascript' src='https://shiftup.qodeinteractive.com/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0' id='wp-polyfill-js'></script>
    <script type='text/javascript' id='contact-form-7-js-extra'>
        /* <![CDATA[ */
        var wpcf7 = {
            "api": {
                "root": "https:\/\/shiftup.qodeinteractive.com\/wp-json\/",
                "namespace": "contact-form-7\/v1"
            }
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='{{ asset("wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.5.4") }}' id='contact-form-7-js'></script>
    <script type='text/javascript' src='https://export.qodethemes.com/_toolbar/assets/js/rbt-modules.js?ver=6.0' id='rabbit_js-js'></script>
    <script type='text/javascript' src='{{ asset("wp-content/plugins/revslider/public/assets/js/rbtools.min.js?ver=6.5.14") }}' defer async id='tp-tools-js'></script>
    <script type='text/javascript' src='{{ asset("wp-content/plugins/revslider/public/assets/js/rs6.min.js?ver=6.5.14") }}' defer async id='revmin-js'></script>
    <script type='text/javascript' src='{{ asset("wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.6.1.2") }}' id='jquery-blockui-js'></script>
    <script type='text/javascript' src='{{ asset("wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=6.1.2") }}' id='wc-add-to-cart-js'></script>
    <script type='text/javascript' src='{{ asset("wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.6.1.2") }}' id='js-cookie-js'></script>
    <script type='text/javascript' src='{{ asset("wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=6.1.2") }}' id='woocommerce-js'></script>
    <script type='text/javascript' src='{{ asset("wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=6.1.2") }}' id='wc-cart-fragments-js'></script>
    <script type='text/javascript' src='https://shiftup.qodeinteractive.com/wp-includes/js/jquery/ui/core.min.js?ver=1.13.1' id='jquery-ui-core-js'></script>
    <script type='text/javascript' id='qi-addons-for-elementor-script-js-extra'>
        /* <![CDATA[ */
        var qodefQiAddonsGlobal = {
            "vars": {
                "adminBarHeight": 0,
                "iconArrowLeft": "<svg  xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 34.2 32.3\" xml:space=\"preserve\" style=\"stroke-width: 2;\"><line x1=\"0.5\" y1=\"16\" x2=\"33.5\" y2=\"16\"\/><line x1=\"0.3\" y1=\"16.5\" x2=\"16.2\" y2=\"0.7\"\/><line x1=\"0\" y1=\"15.4\" x2=\"16.2\" y2=\"31.6\"\/><\/svg>",
                "iconArrowRight": "<svg  xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 34.2 32.3\" xml:space=\"preserve\" style=\"stroke-width: 2;\"><line x1=\"0\" y1=\"16\" x2=\"33\" y2=\"16\"\/><line x1=\"17.3\" y1=\"0.7\" x2=\"33.2\" y2=\"16.5\"\/><line x1=\"17.3\" y1=\"31.6\" x2=\"33.5\" y2=\"15.4\"\/><\/svg>",
                "iconClose": "<svg  xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 9.1 9.1\" xml:space=\"preserve\"><g><path d=\"M8.5,0L9,0.6L5.1,4.5L9,8.5L8.5,9L4.5,5.1L0.6,9L0,8.5L4,4.5L0,0.6L0.6,0L4.5,4L8.5,0z\"\/><\/g><\/svg>"
            }
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='{{ asset("wp-content/plugins/qi-addons-for-elementor/assets/js/main.min.js?ver=6.0") }}' id='qi-addons-for-elementor-script-js'></script>
    <script type='text/javascript' src='{{ asset("wp-content/plugins/shiftup-core/assets/plugins/perfect-scrollbar/perfect-scrollbar.jquery.min.js?ver=6.0") }}' id='perfect-scrollbar-js'></script>
    <script type='text/javascript' src='https://shiftup.qodeinteractive.com/wp-includes/js/hoverIntent.min.js?ver=1.10.2' id='hoverIntent-js'></script>
    <script type='text/javascript' src='{{ asset("wp-content/plugins/shiftup-core/assets/plugins/modernizr/modernizr.js?ver=6.0") }}' id='modernizr-js'></script>
    <script type='text/javascript' src='{{ asset("wp-content/plugins/qi-addons-for-elementor/inc/shortcodes/parallax-images/assets/js/plugins/jquery.parallax-scroll.js?ver=1") }}' id='parallax-scroll-js'></script>
    <script type='text/javascript' src='{{ asset("wp-content/plugins/shiftup-core/assets/plugins/gsap/gsap.min.js?ver=6.0") }}' id='gsap-js'></script>
    <script type='text/javascript' id='shiftup-main-js-js-extra'>
        /* <![CDATA[ */
        var qodefGlobal = {
            "vars": {
                "adminBarHeight": 0,
                "iconArrowLeft": "<svg class=\"qodef-svg--slider-arrow-left\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"26\" height=\"24.042\"><g transform=\"translate(1038.5 -1861.979) rotate(90)\"><rect width=\"17\" height=\"2\" transform=\"translate(1872.586 1037.086) rotate(-45)\" \/><rect width=\"25\" height=\"2\" transform=\"translate(1873 1037.5) rotate(-90)\" \/><rect width=\"17\" height=\"2\" transform=\"translate(1874 1038.5) rotate(-135)\" \/><\/g><\/svg>",
                "iconArrowRight": "<svg class=\"qodef-svg--slider-arrow-right\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"26\" height=\"24.042\"><g transform=\"translate(1038.5 -1861.979) rotate(90)\"><rect width=\"17\" height=\"2\" transform=\"translate(1872.586 1037.086) rotate(-45)\" \/><rect width=\"25\" height=\"2\" transform=\"translate(1873 1037.5) rotate(-90)\" \/><rect width=\"17\" height=\"2\" transform=\"translate(1874 1038.5) rotate(-135)\" \/><\/g><\/svg>",
                "iconClose": "<svg class=\"qodef-svg--close\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" width=\"32\" height=\"32\" viewBox=\"0 0 32 32\"><g><path d=\"M 10.050,23.95c 0.39,0.39, 1.024,0.39, 1.414,0L 17,18.414l 5.536,5.536c 0.39,0.39, 1.024,0.39, 1.414,0 c 0.39-0.39, 0.39-1.024,0-1.414L 18.414,17l 5.536-5.536c 0.39-0.39, 0.39-1.024,0-1.414c-0.39-0.39-1.024-0.39-1.414,0 L 17,15.586L 11.464,10.050c-0.39-0.39-1.024-0.39-1.414,0c-0.39,0.39-0.39,1.024,0,1.414L 15.586,17l-5.536,5.536 C 9.66,22.926, 9.66,23.56, 10.050,23.95z\"><\/path><\/g><\/svg>",
                "qodefStickyHeaderScrollAmount": 1100,
                "topAreaHeight": 0,
                "restUrl": "https:\/\/shiftup.qodeinteractive.com\/wp-json\/",
                "restNonce": "02ddfbe425",
                "paginationRestRoute": "shiftup\/v1\/get-posts",
                "headerHeight": 100,
                "mobileHeaderHeight": 70
            }
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='{{ asset("wp-content/themes/shiftup/assets/js/main.min.js?ver=6.0") }}' id='shiftup-main-js-js'></script>
    <script type='text/javascript' src='https://shiftup.qodeinteractive.com/wp-includes/js/underscore.min.js?ver=1.13.3' id='underscore-js'></script>
    <script type='text/javascript' src='{{ asset("wp-content/plugins/shiftup-core/inc/maps/assets/js/custom-marker.js?ver=6.0") }}' id='shiftup-core-map-custom-marker-js'></script>
    <script type='text/javascript' src='{{ asset("wp-content/plugins/shiftup-core/inc/maps/assets/js/markerclusterer.js?ver=6.0") }}' id='markerclusterer-js'></script>
    <script type='text/javascript' id='shiftup-core-google-map-js-extra'>
        /* <![CDATA[ */
        var qodefMapsVariables = {
            "global": {
                "mapStyle": [{
                    "featureType": "landscape.man_made",
                    "elementType": "geometry.fill",
                    "stylers": [{
                        "color": "#e0e0e0"
                    }]
                }, {
                    "featureType": "poi.business",
                    "elementType": "geometry.fill",
                    "stylers": [{
                        "color": "#f7e9d9"
                    }]
                }, {
                    "featureType": "poi.medical",
                    "elementType": "geometry.fill",
                    "stylers": [{
                        "color": "#f7e9d9"
                    }]
                }, {
                    "featureType": "poi.park",
                    "elementType": "geometry.fill",
                    "stylers": [{
                        "color": "#d7d7d7"
                    }]
                }, {
                    "featureType": "poi.school",
                    "elementType": "geometry.fill",
                    "stylers": [{
                        "color": "#f7e9d9"
                    }]
                }, {
                    "featureType": "poi.sports_complex",
                    "elementType": "geometry.fill",
                    "stylers": [{
                        "color": "#d7d7d7"
                    }]
                }, {
                    "featureType": "road.highway",
                    "elementType": "geometry.fill",
                    "stylers": [{
                        "color": "#f0d5b4"
                    }]
                }, {
                    "featureType": "road.highway",
                    "elementType": "geometry.stroke",
                    "stylers": [{
                        "color": "#fe7700"
                    }]
                }, {
                    "featureType": "water",
                    "elementType": "geometry.fill",
                    "stylers": [{
                        "color": "#a4a4a4"
                    }]
                }, {
                    "featureType": "water",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#5c5c5c"
                    }]
                }],
                "mapZoom": 12,
                "mapScrollable": false,
                "mapDraggable": true,
                "streetViewControl": true,
                "zoomControl": true,
                "mapTypeControl": true,
                "fullscreenControl": true,
                "geolocationTitle": "Your location is here"
            },
            "multiple": []
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='{{ asset("wp-content/plugins/shiftup-core/inc/maps/assets/js/google-map.js?ver=6.0") }}' id='shiftup-core-google-map-js'></script>
    <script type='text/javascript' src='{{ asset("wp-content/plugins/shiftup-core/assets/js/shiftup-core.min.js?ver=6.0") }}' id='shiftup-core-script-js'></script>
    <script type='text/javascript' src='{{ asset("wp-content/plugins/qi-addons-for-elementor/assets/plugins/swiper/swiper.min.js?ver=6.0") }}' id='swiper-js'></script>
    <script type='text/javascript' src='{{ asset("wp-content/plugins/woocommerce/assets/js/select2/select2.full.min.js?ver=4.0.3-wc.6.1.2") }}' id='select2-js'></script>
    <script type="text/javascript" src="https://static.zdassets.com/ekr/snippet.js?key=af3078fd-a5ae-40da-bee0-e589b98c8603&#038;ver=6.0" id="ze-snippet"></script>
    <script type="text/javascript">
        zE(function() {
            $zopim(function() {
                var isChatEnabled = sessionStorage.getItem("qodeChatEnabled"),
                    appearingTime = 15000;

                if (isChatEnabled !== "no" && window.innerWidth > 1024) {
                    setTimeout(function() {
                        $zopim.livechat.window.show();

                        $zopim.livechat.window.onHide(function() {
                            sessionStorage.setItem("qodeChatEnabled", "no");
                        });
                    }, appearingTime);
                }
            });
        });
    </script>
    <script type='text/javascript' src='{{ asset("wp-content/plugins/shiftup-core/inc/shortcodes/progress-bar/assets/js/plugins/jquery.lineProgressbar.js?ver=1") }}' id='progress-bar-line-js'></script>
    <script type='text/javascript' src='{{ asset("wp-content/plugins/shiftup-core/inc/shortcodes/progress-bar/assets/js/plugins/progressbar.min.js?ver=1") }}' id='progress-bar-circle-js'></script>
    <script type='text/javascript' src='{{ asset("wp-content/plugins/shiftup-core/assets/plugins/magnific-popup/jquery.magnific-popup.min.js?ver=6.0") }}' id='jquery-magnific-popup-js'></script>
    <script type='text/javascript' id='mediaelement-core-js-before'>
        var mejsL10n = {
            "language": "en",
            "strings": {
                "mejs.download-file": "Download File",
                "mejs.install-flash": "You are using a browser that does not have Flash player enabled or installed. Please turn on your Flash player plugin or download the latest version from https:\/\/get.adobe.com\/flashplayer\/",
                "mejs.fullscreen": "Fullscreen",
                "mejs.play": "Play",
                "mejs.pause": "Pause",
                "mejs.time-slider": "Time Slider",
                "mejs.time-help-text": "Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.",
                "mejs.live-broadcast": "Live Broadcast",
                "mejs.volume-help-text": "Use Up\/Down Arrow keys to increase or decrease volume.",
                "mejs.unmute": "Unmute",
                "mejs.mute": "Mute",
                "mejs.volume-slider": "Volume Slider",
                "mejs.video-player": "Video Player",
                "mejs.audio-player": "Audio Player",
                "mejs.captions-subtitles": "Captions\/Subtitles",
                "mejs.captions-chapters": "Chapters",
                "mejs.none": "None",
                "mejs.afrikaans": "Afrikaans",
                "mejs.albanian": "Albanian",
                "mejs.arabic": "Arabic",
                "mejs.belarusian": "Belarusian",
                "mejs.bulgarian": "Bulgarian",
                "mejs.catalan": "Catalan",
                "mejs.chinese": "Chinese",
                "mejs.chinese-simplified": "Chinese (Simplified)",
                "mejs.chinese-traditional": "Chinese (Traditional)",
                "mejs.croatian": "Croatian",
                "mejs.czech": "Czech",
                "mejs.danish": "Danish",
                "mejs.dutch": "Dutch",
                "mejs.english": "English",
                "mejs.estonian": "Estonian",
                "mejs.filipino": "Filipino",
                "mejs.finnish": "Finnish",
                "mejs.french": "French",
                "mejs.galician": "Galician",
                "mejs.german": "German",
                "mejs.greek": "Greek",
                "mejs.haitian-creole": "Haitian Creole",
                "mejs.hebrew": "Hebrew",
                "mejs.hindi": "Hindi",
                "mejs.hungarian": "Hungarian",
                "mejs.icelandic": "Icelandic",
                "mejs.indonesian": "Indonesian",
                "mejs.irish": "Irish",
                "mejs.italian": "Italian",
                "mejs.japanese": "Japanese",
                "mejs.korean": "Korean",
                "mejs.latvian": "Latvian",
                "mejs.lithuanian": "Lithuanian",
                "mejs.macedonian": "Macedonian",
                "mejs.malay": "Malay",
                "mejs.maltese": "Maltese",
                "mejs.norwegian": "Norwegian",
                "mejs.persian": "Persian",
                "mejs.polish": "Polish",
                "mejs.portuguese": "Portuguese",
                "mejs.romanian": "Romanian",
                "mejs.russian": "Russian",
                "mejs.serbian": "Serbian",
                "mejs.slovak": "Slovak",
                "mejs.slovenian": "Slovenian",
                "mejs.spanish": "Spanish",
                "mejs.swahili": "Swahili",
                "mejs.swedish": "Swedish",
                "mejs.tagalog": "Tagalog",
                "mejs.thai": "Thai",
                "mejs.turkish": "Turkish",
                "mejs.ukrainian": "Ukrainian",
                "mejs.vietnamese": "Vietnamese",
                "mejs.welsh": "Welsh",
                "mejs.yiddish": "Yiddish"
            }
        };
    </script>
    <script type='text/javascript' src='https://shiftup.qodeinteractive.com/wp-includes/js/mediaelement/mediaelement-and-player.min.js?ver=4.2.16' id='mediaelement-core-js'></script>
    <script type='text/javascript' src='https://shiftup.qodeinteractive.com/wp-includes/js/mediaelement/mediaelement-migrate.min.js?ver=6.0' id='mediaelement-migrate-js'></script>
    <script type='text/javascript' id='mediaelement-js-extra'>
        /* <![CDATA[ */
        var _wpmejsSettings = {
            "pluginPath": "\/wp-includes\/js\/mediaelement\/",
            "classPrefix": "mejs-",
            "stretching": "responsive"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='https://shiftup.qodeinteractive.com/wp-includes/js/mediaelement/wp-mediaelement.min.js?ver=6.0' id='wp-mediaelement-js'></script>
    <script type='text/javascript' src='https://shiftup.qodeinteractive.com/wp-includes/js/mediaelement/renderers/vimeo.min.js?ver=4.2.16' id='mediaelement-vimeo-js'></script>
    <script type='text/javascript' src='{{ asset("wp-content/themes/shiftup/inc/justified-gallery/assets/js/plugins/jquery.justifiedGallery.min.js?ver=1") }}' id='jquery-justified-gallery-js'></script>
    <script type='text/javascript' src='{{ asset("wp-content/plugins/qi-addons-for-elementor/inc/masonry/assets/js/plugins/isotope.pkgd.min.js?ver=6.0") }}' id='isotope-js'></script>
    <script type='text/javascript' src='{{ asset("wp-content/plugins/qi-addons-for-elementor/inc/masonry/assets/js/plugins/packery-mode.pkgd.min.js?ver=6.0") }}' id='packery-js'></script>
    <!-- <script type='text/javascript' src='{{ asset("wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.5.4") }}' id='elementor-webpack-runtime-js'></script>
    <script type='text/javascript' src='{{ asset("wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.5.4") }}' id='elementor-frontend-modules-js'></script>
    <script type='text/javascript' src='{{ asset("wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2") }}' id='elementor-waypoints-js'></script>

    <script type='text/javascript' src='{{ asset("wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.5.4") }}' id='elementor-frontend-js'></script> -->
    <script type='text/javascript' src='{{ asset("wp-content/plugins/qi-addons-for-elementor/inc/plugins/elementor/assets/js/elementor.js?ver=6.0") }}' id='qi-addons-for-elementor-elementor-js'></script>
    <script type='text/javascript' id='shiftup-core-elementor-js-extra'>
        /* <![CDATA[ */
        var qodefElementorGlobal = {
            "vars": {
                "elementorSectionHandler": [],
                "elementorColumnHandler": []
            }
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='{{ asset("wp-content/plugins/shiftup-core/inc/plugins/elementor/assets/js/elementor.min.js?ver=6.0") }}' id='shiftup-core-elementor-js'></script>
    <script id="rs-initialisation-scripts">
        var tpj = jQuery;

        var revapi6;

        if (window.RS_MODULES === undefined) window.RS_MODULES = {};
        if (RS_MODULES.modules === undefined) RS_MODULES.modules = {};
        RS_MODULES.modules["revslider61"] = {
            once: RS_MODULES.modules["revslider61"] !== undefined ? RS_MODULES.modules["revslider61"].once : undefined,
            init: function() {
                window.revapi6 = window.revapi6 === undefined || window.revapi6 === null || window.revapi6.length === 0 ? document.getElementById("rev_slider_6_1") : window.revapi6;
                if (window.revapi6 === null || window.revapi6 === undefined || window.revapi6.length == 0) {
                    window.revapi6initTry = window.revapi6initTry === undefined ? 0 : window.revapi6initTry + 1;
                    if (window.revapi6initTry < 20) requestAnimationFrame(function() {
                        RS_MODULES.modules["revslider61"].init()
                    });
                    return;
                }
                window.revapi6 = jQuery(window.revapi6);
                if (window.revapi6.revolution == undefined) {
                    revslider_showDoubleJqueryError("rev_slider_6_1");
                    return;
                }
                revapi6.revolutionInit({
                    revapi: "revapi6",
                    DPR: "dpr",
                    sliderLayout: "fullscreen",
                    visibilityLevels: "1920,1710,1025,700",
                    gridwidth: "1240,1024,778,480",
                    gridheight: "900,768,960,720",
                    lazyType: "smart",
                    perspective: 600,
                    perspectiveType: "global",
                    editorheight: "900,768,960,720",
                    responsiveLevels: "1920,1710,1025,700",
                    progressBar: {
                        disableProgressBar: true
                    },
                    navigation: {
                        wheelCallDelay: 1000,
                        onHoverStop: false,
                        touch: {
                            touchenabled: true,
                            touchOnDesktop: true
                        },
                        arrows: {
                            enable: true,
                            tmp: "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"66\" height=\"64\">  <rect id=\"BG\" width=\"66\" height=\"64\" fill=\"none\"/>  <rect id=\"_3\" data-name=\"3\" width=\"17\" height=\"2\" transform=\"translate(21.414 30.607) rotate(45)\" />  <rect id=\"_2\" data-name=\"2\" width=\"25\" height=\"2\" transform=\"translate(21 31.021)\" />  <rect id=\"_1\" data-name=\"1\" width=\"17\" height=\"2\" transform=\"translate(20 32.021) rotate(-45)\" /></svg>",
                            style: "shiftup",
                            hide_onmobile: true,
                            hide_under: "1024px",
                            rtl: true,
                            left: {
                                v_align: "bottom",
                                h_offset: 30,
                                v_offset: 50
                            },
                            right: {
                                h_align: "left",
                                v_align: "bottom",
                                h_offset: 100,
                                v_offset: 50
                            }
                        },
                        bullets: {
                            enable: true,
                            tmp: "",
                            style: "shiftup-horizontal-pagination",
                            hide_onmobile: true,
                            hide_under: "376px",
                            h_align: "right",
                            h_offset: 130,
                            v_offset: 50,
                            space: 12
                        }
                    },
                    viewPort: {
                        global: true,
                        globalDist: "-200px",
                        enable: false
                    },
                    fallbacks: {
                        allowHTML5AutoPlayOnAndroid: true
                    },
                });

            }
        } // End of RevInitScript

        if (window.RS_MODULES.checkMinimal !== undefined) {
            window.RS_MODULES.checkMinimal();
        };
    </script>
    <div id="shiftup-core-page-inline-style" data-style="@media only screen and (max-width: 680px){.qodef-custom-font-600 { font-size: 90px!important;}}"></div>
</body>

</html>
