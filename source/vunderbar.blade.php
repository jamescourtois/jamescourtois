---
title: Vunderbar
---
@extends('_layouts.master')

@section('body')
<h1 class="w-full text-center">Thanks for reaching out</h1>

<p class="mb-8 w-full text-center">
    I'll read your message and write a poetic response.
</p>
<div class="flex w-full items-center justify-center">
    @include('_layouts.btn',
            [
                'url' => '/',
                'text' => 'Go Home',
                'class' => False,
                'icon' => False,
                'newtab' => False,
            ])
    @stop
</div>