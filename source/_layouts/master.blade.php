<!DOCTYPE html>
<html lang="en">
   
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">

        <meta property="og:title" content="{{ $page->title ? $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
        <meta property="og:type" content="{{ $page->type ?? 'website' }}" />
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}" />

        <title>{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}</title>

        <link rel="home" href="{{ $page->baseUrl }}">
        <link rel="icon" href="/favicon.ico">
        <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">

        @if ($page->production)
            <!-- Insert analytics code here -->
        @endif

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>

    <body class="relative pb-24">
    
        <header class="flex items-center justify-end py-1 w-full" role="banner">
            <div class="padded w-full flex items-center">
                
            <a class="no-underline {{ ($page->getPath() == '') ? 'opacity-0' : ''}}" href="/">
                    @include('_layouts.jim',['class'=>'in-header'])
                    <span class="sr-only">jamescourtois.me</span>
                </a>
                
                <div id="vue-search" class="flex flex-1 justify-end items-center">
                    <!-- <search></search> -->

                    @include('_nav.menu')

                    @include('_nav.menu-toggle')
                </div>
            </div>
        </header>       
    
   

        @include('_nav.menu-responsive')
    

        <main role="main" class="flex-auto w-full {{ ($page->getPath() == '') ? '' : 'pt-12'}}">
            @yield('body')
        </main>

        <footer class="absolute w-full text-center bottom-0 z-50 text-xs py-2" role="contentinfo">
            <ul class="flex flex-col m-0 md:flex-row justify-center list-none ">
                <li class="md:mr-2">
                    &copy; James Courtois {{ date('Y') }}.
                </li>

                <li>
                    Built with <a href="http://jigsaw.tighten.co" target="_blank" title="Jigsaw by Tighten">Jigsaw</a>
                    and <a target="_blank" href="https://tailwindcss.com" title="Tailwind CSS, a utility-first CSS framework">Tailwind CSS</a>. 
                    Hosted and deployed using <a target="_blank" title="This is where my website lives" href="https://surge.sh">Surge</a>.
                    Forms powered by <a href="https://form-data.com" target="blank">form-data.com</a>. Form data is deleted after 90 days.
                </li>
            </ul>
        </footer>

        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

        @stack('scripts')
    </body>
</html>
