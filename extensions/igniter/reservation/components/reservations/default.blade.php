@if ($customerReservation)
    @if ($showReviews && !empty($reviewable))
    @if ($customerReservation->reserve_date < now())
        <div class="mb-3" id="reviews-form">
            @partial('localReview::form')
        </div>
    @endif
    @endif


    @partial($__SELF__.'::preview')
@else
    @partial('@list')
@endif
