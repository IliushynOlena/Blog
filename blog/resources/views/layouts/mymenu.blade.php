{{-- <ul>

@php

    if (Voyager::translatable($items)) {
        $items = $items->load('translations');
    }

@endphp

@foreach ($items as $item)

    @php

        $originalItem = $item;
        if (Voyager::translatable($item)) {
            $item = $item->translate($options->locale);
        }

        $isActive = null;
        $styles = null;
        $icon = null;

        // Background Color or Color
        if (isset($options->color) && $options->color == true) {
            $styles = 'color:'.$item->color;
        }
        if (isset($options->background) && $options->background == true) {
            $styles = 'background-color:'.$item->color;
        }

        // Check if link is current
        if(url($item->link()) == url()->current()){
            $isActive = 'active';
        }

        // Set Icon
        if(isset($options->icon) && $options->icon == true){
            $icon = '<i class="' . $item->icon_class . '"></i>';
        }

    @endphp
<ul class="navbar-nav ml-auto">
    <li class="{{ $isActive }} nav-item active">
        <a class="nav-link dropdown-toggle " href="{{ url($item->link()) }}" target="{{ $item->target }}" style="{{ $styles }}">
            {!! $icon !!}
            <span>{{ $item->title }}</span>
        </a>
        @if(!$originalItem->children->isEmpty())
            @include('voyager::menu.default', ['items' => $originalItem->children, 'options' => $options])
        @endif
    </li>
@endforeach
</ul>
</ul>


 --}}


<ul class="navbar-nav ml-auto">
    @foreach($items as $menu_item)
     
        @php
     
            $isActive = null;
            
            // Check if link is current
            if(url($menu_item->link()) == url()->current()){
                $isActive = 'active';
            }
     
        @endphp
     
        <li class="nav-item {{ $isActive }}"><a class="nav-link" href="{{ $menu_item->url }}">{{ $menu_item->title }}</a></li>
     
    @endforeach
    </ul>