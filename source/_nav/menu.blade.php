<nav class="hidden lg:flex items-center justify-end text-lg">
    <a title="{{ $page->siteName }} Websites Archive" href="/websites"
        class="ml-6 {{ $page->isActive('/websites') ? 'active text-theme-light' : '' }}">
        Websites
    </a>
    
    <a title="{{ $page->siteName }} Contact" href="/contact"
        class="ml-6 {{ $page->isActive('/contact') ? 'active text-theme-light' : '' }}">
        Contact
    </a>
</nav>
