<div class="w-full padded flex flex-col text-center pb-8">
    <h2>I'm easy to reach.</h2>
    <div class="flex flex-col justify-start items-center">
        <p>Need a website? Like talking about websites? Know a good joke? Feel free to reach out.</p>
        @include('_layouts.btn',
        [
            'url' => '/contact',
            'text' => 'Contact Me',
            'class' => False,
            'icon' => False,
            'newtab' => False,
        ])
    </div>
</div>