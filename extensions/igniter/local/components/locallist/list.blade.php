@foreach ($locationsList as $locationObject)

        <div class="boxes d-sm-flex g-0 py-3 justify-content-center">
            <div class="col-12 col-sm-7">
                <div class="d-sm-flex  align-items-center">
                    @if ($locationObject->hasThumb)
                        <div class="col-sm-4 p-0 me-sm-4 mb-3 mb-sm-0">
                            <img
                                class="img-fluid img-fluid"
                                src="{{ $locationObject->thumb }}"
                            />
                        </div>
                    @endif
                    <div class="no-spacing">
                        <div class="d-flex flex-row mb-2">
                            <h2 class="h5 mb-0 text-body">{{ $locationObject->name }}</h2>
                            @if ($showReviews)
                                <div class="rating rating-sm text-muted">
                                    @php $reviewScore = $locationObject->reviewsScore @endphp @for ($value = 1; $value<6; $value++)
                                        <span class="fa fa-star{{ $value > $reviewScore ? '-o' : '' }}"></span>
                                    @endfor
                                    <span class="small">({{ $locationObject->reviewsCount ?? 0 }})</span>
                                </div>
                            @endif
                        </div>
                        <div class="text-muted ">
                            {{ format_address($locationObject->address) }}
                        </div>
                        <div class="mt-2">
                            <a class="btn btn-primary mb-2" href="{{ page_url($locationObject->permalink.'/reservation', ['location' => $locationObject->permalink]) }}">{!! lang('main::lang.menu_booking') !!}</a>
                            <a  class="btn btn-primary mb-2" href="{{ page_url('local/menus', ['location' => $locationObject->permalink]) }}">{!! lang('main::lang.menu_order_now') !!}</a>


</div>
                        @if ($locationObject->distance)
                            <div class="d-none">
                                <span
                                    class="text-muted small"
                                ><i class="fa fa-map-marker"></i>&nbsp;&nbsp;{{ number_format($locationObject->distance, 1) }} {{ $distanceUnit }}</span>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4">
                <dl class="no-spacing">
                    @if ($locationObject->openingSchedule->isOpen())
                        <dt>@lang('igniter.local::default.text_is_opened')</dt>
                    @elseif ($locationObject->openingSchedule->isOpening())
                        <dt class="text-muted">{!! sprintf(lang('igniter.local::default.text_opening_time'), $locationObject->openingTime->isoFormat($openingTimeFormat)) !!}</dt>
                    @else
                        <dt class="text-muted">@lang('igniter.local::default.text_closed')</dt>
                    @endif
                    @foreach($locationObject->orderTypes as $code => $orderType)
                        <dd class="text-muted">
                            @if ($orderType->isDisabled())
                                {!! $orderType->getDisabledDescription() !!}
                            @elseif ($orderType->getSchedule()->isOpen())
                                {!! $orderType->getOpenDescription()!!}
                            @elseif ($orderType->getSchedule()->isOpening())
                                {!! $orderType->getOpeningDescription($openingTimeFormat) !!}
                            @else
                                {!! $orderType->getClosedDescription() !!}
                            @endif
                        </dd>
                    @endforeach
                </dl>
            </div>
        </div>
        <hr>

@endforeach
