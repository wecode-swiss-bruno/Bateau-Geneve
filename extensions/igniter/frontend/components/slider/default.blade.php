<div
    id="{{ $sliderSelectorId }}"
    class="carousel slide carousel-fade"
    data-bs-ride="carousel"
>
    @if ($showSliderIndicators)
        <div class="carousel-indicators">
            @foreach ($__SELF__->slides() as $slide)
                <button
                    type="button"
                    class="{{ $loop->first ? 'active' : '' }}"
                    data-bs-target="#{{ $sliderSelectorId }}"
                    data-bs-slide-to="{{ $loop->index }}"
                ></button>
            @endforeach
        </div>
    @endif

    <div class="carousel-inner">
        @foreach ($__SELF__->slides() as $slide)
            <div
                class="carousel-item {{ $loop->first ? 'active' : '' }}"
                style="max-height:{{ $sliderHeight }};  background: url({{ $slide->getThumb() }}) rgba(0, 0, 0, 0.3); background-size: cover; background-position: center; background-blend-mode: multiply;"
            >             
            <div style="height: 100vh;"></div>
  

                @if ($showSliderCaptions && strlen($slide->getCustomProperty('description')))
                    <div class="carousel-caption p-3 d-md-block">
                        <h1 class="h1" style="max-width:700px; margin:auto;">{{ $slide->getCustomProperty('title') }}</h1>
                        <p class="h3" style="max-width:700px; margin:auto;">{{ $slide->getCustomProperty('description') }}</p>
                    </div>
                @endif
            </div>
        @endforeach
    </div>
    @if ($showSliderControls && count($__SELF__->slides()) > 1)
        <button
            type="button"
            class="carousel-control-prev"
            data-bs-target="#{{ $sliderSelectorId }}"
            data-bs-slide="prev"
        ><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
        <button
            type="button"
            class="carousel-control-next"
            data-bs-target="#{{ $sliderSelectorId }}"
            data-bs-slide="next"
        ><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></button>
    @endif
</div>
