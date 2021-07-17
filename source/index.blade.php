
@extends('_layouts.master')

@section('body')


<div class="w-full h-auto lg:min-h-600 pb-24 max-w-3xl mx-auto flex flex-col items-center justify-center w-full">
    <div class="padded flex flex-col md:flex-row items-stretch justify-center relative w-full">
  
        @include('_layouts.jim',['class'=>'home-page'])
      
        <div class="text-center md:text-left flex flex-col flex-1 items-center md:items-start md:pl-16 xl:pl-24 lg:items-end justify-center relative z-40 pt-4 md:pt-0">      
            <h1 class="home-title">            
                <span>James</span> <br /><span>Courtois</span>            
            </h1>
        </div>
    
    </div>
</div>


<div class="padded w-full">
    <div class="w-full-plus-8 lg:w-full-plus-16 -mx-4 lg:-mx-8 flex flex-wrap">
        @foreach ($websites->where('featured',true)->take(3)->chunk(1) as $row)
                @foreach ($row as $project)
                        @include('_components.post-preview-inline')
                @endforeach    
        @endforeach
    </div>
</div>


@include('_layouts.cta')

@stop
