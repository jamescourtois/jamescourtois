@extends('_layouts.master')

@php
    $page->type = 'article';
@endphp

@section('body')
    <div class="padded py-16 flex flex-col xl:flex-row w-full justify-between">
        <div class="mb-12 pr-16 flex-1">
            <div class="flex flex-col xxl:flex-row items-start justify-start">
                <h1 class="leading-none m-0 mb-4 xl:mr-8">{{ $page->title }}</h1>
        
                @include('_layouts.btn',
                [
                    'url' => $page->url,
                    'text' => 'View Live Site',
                    'class' => 'mb-6',
                    'newtab' => True,
                    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50"><path class="cls-1" d="M412,304v20.33a7,7,0,0,1-.56,2.79,7.16,7.16,0,0,1-1.53,2.27,7.07,7.07,0,0,1-2.28,1.54,7.17,7.17,0,0,1-2.79.56h-27.1a7.24,7.24,0,0,1-2.79-.56,7.13,7.13,0,0,1-2.27-1.54,7.18,7.18,0,0,1-2.1-5.06v-27.1a7,7,0,0,1,.57-2.79,7.15,7.15,0,0,1,1.53-2.28,7.11,7.11,0,0,1,5.06-2.09h20.33a2.52,2.52,0,0,1,0,5H377.73a2.11,2.11,0,0,0-.82.17,2,2,0,0,0-.67.45,2.17,2.17,0,0,0-.46.67,2.12,2.12,0,0,0-.16.83v27.1a2.07,2.07,0,0,0,.16.82,2.13,2.13,0,0,0,1.13,1.13,2.08,2.08,0,0,0,.82.17h27.1a2.12,2.12,0,0,0,.83-.17,2.13,2.13,0,0,0,1.13-1.13,2.07,2.07,0,0,0,.16-.82V304a2.52,2.52,0,0,1,5,0Zm6.06-22.51H402.36a2.52,2.52,0,1,0,0,5H412l-22.21,22.22a2.52,2.52,0,0,0,3.56,3.57l22.22-22.22v9.6a2.52,2.52,0,1,0,5,0V284A2.52,2.52,0,0,0,418.05,281.5Z" transform="translate(-370.57 -281.5)"/></svg>'
                ])
            </div>
            
            <div class="w-full leading-tight mb-8">
                @if($page->categories)
                    @foreach ($page->categories as $i => $category)
                        <span class="inline-flex text-gray-400 text-xs"
                        >{{ $category }}{!! $loop->last ? '' : '&comma;&nbsp;'!!}</span>
                    @endforeach
                @endif
            </div>
            @yield('content')
        </div>
    
        @if ($page->cover_image)
            <a class="no-underline flex-1" target="_blank" href="{{ $page->url }}"><img src="{{ $page->cover_image }}" alt="{{ $page->title }} cover image self-end" class="mb-2"></a>
        @endif
    </div>

    <div>
    </div>
    <nav class="flex flex-col lg:flex-row items-center justify-between my-8 padded py-8">
        <div class="flex flex-1 py-4 items-start justify-start">
            @if ($previous = $page->getPrevious())
                <a class="text-xs" href="{{ $previous->getUrl() }}" title="Newer Post: {{ $previous->title }}">
                    &LeftArrow; {{ $previous->title }} 
                </a>
            @endif
        </div>
        

        <div class="flex flex-1 py-4 items-start justify-center">
            <a href="/websites" class="text-xs">&LeftArrow; all websites</a>
        </div>

        <div class="flex flex-1 py-4 items-start justify-end">
            @if ($next = $page->getNext())
                <a class="text-xs" href="{{ $next->getUrl() }}" title="Older Post: {{ $next->title }}">
                    {{ $next->title }} &RightArrow;
                </a>
            @endif
        </div>
    </nav>

    @include('_layouts.cta')
@endsection
