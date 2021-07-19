<a href="{{ $url ? $url : ''  }}" target="{{ $newtab ? '_blank' : '_self'}}" class="btn {{ $class ? $class : '' }}">
    <span>{{ $text ? $text : '' }}</span>
    {!! $icon ? $icon : '' !!}
</a>