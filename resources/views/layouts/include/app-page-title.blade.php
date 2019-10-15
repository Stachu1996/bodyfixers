<div class="app-page-title">
    <div class="page-title-wrapper">

        <div class="page-title-heading">
            @if(isset($pageIcon))<div class="page-title-icon"><i class="{{ $pageIcon }}"></i></div>@endif
            @if(isset($pageTitle))
            <div>{{ $pageTitle }}
                @if(isset($subTitle))<div class="page-title-subheading">{{ $subTitle }}</div>@endif
            </div>
            @endif
        </div>

        @if(isset($pageButtons))
        <div class="page-title-actions">
            @foreach($pageButtons as $button)
            <a href="{{ $button["link"] }}" class="btn-shadow mr-3 btn {{ $button['color'] ?? 'btn-dark' }}">
                @if(isset($button['icon']))<i class="{{ $button['icon'] }}"></i>@endif {{$button['name']}}
            </a>
            @endforeach
        </div>
        @endif

    </div>
</div>
