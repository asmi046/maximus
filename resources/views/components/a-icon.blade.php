@props(['href', 'icon', 'class' => ''])

<a class="icon_line {{ $class }}" href="{{ $href }}">
    <svg class="sprite_icon">
        <use xlink:href="#{{ $icon }}"></use>
    </svg>
    <span>{{ $slot }}</span>
</a>
