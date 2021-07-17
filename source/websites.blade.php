---
title: Websites
description: The websites
pagination:
    collection: websites
    perPage: 99
---
@extends('_layouts.master')

@section('body')
    <div class="padded">
        <div class="flex flex-col pb-8">
            <h1>Website Portfolio</h1>
            <div class="flex flex-col max-w-6xl">
                
            </div>
        </div>
    </div>

   

    <div class="padded w-full">
        <div class="w-full-plus-8 lg:w-full-plus-16 -mx-4 lg:-mx-8 flex flex-wrap">
            @foreach ($pagination->items as $project)
                @include('_components.post-preview-inline')
            @endforeach
        </div>
    </div>

    @if ($pagination->pages->count() > 1)
        <nav class="pasdded flex text-base my-8">
            @if ($previous = $pagination->previous)
                <a
                    href="{{ $previous }}"
                    title="Previous Page"
                    class="bg-gray-200 hover:bg-gray-400 rounded mr-3 px-5 py-3"
                >&LeftArrow;</a>
            @endif

            @foreach ($pagination->pages as $pageNumber => $path)
                <a
                    href="{{ $path }}"
                    title="Go to Page {{ $pageNumber }}"
                    class="bg-gray-200 hover:bg-gray-400 text-blue-700 rounded mr-3 px-5 py-3 {{ $pagination->currentPage == $pageNumber ? 'text-blue-600' : '' }}"
                >{{ $pageNumber }}</a>
            @endforeach

            @if ($next = $pagination->next)
                <a
                    href="{{ $next }}"
                    title="Next Page"
                    class="bg-gray-200 hover:bg-gray-400 rounded mr-3 px-5 py-3"
                >&RightArrow;</a>
            @endif
        </nav>
    @endif

    @include('_layouts.cta')
@stop
