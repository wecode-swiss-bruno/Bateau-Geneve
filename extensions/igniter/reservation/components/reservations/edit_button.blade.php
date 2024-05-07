<button
    type="button"
    class="btn btn-light text-warning"
    data-bs-toggle="modal"
    data-bs-target="#editReservationModal{{ $customerReservation->reservation_id }}"
>@lang('igniter.reservation::default.reservations.button_edit')</button>

<div
    class="modal fade"
    id="editReservationModal{{ $customerReservation->reservation_id }}"
    aria-labelledby="editReservationModalLabel{{ $customerReservation->reservation_id }}"
    aria-hidden="true"
>
    <div class="modal-dialog">
        <form method="POST" data-request="{{ $__SELF__.'::onCancel' }}">
            <input type="hidden" name="reservationId" value="{{ $customerReservation->reservation_id }}">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5"
                        id="editReservationModalLabel{{ $customerReservation->reservation_id }}"
                    >@lang('igniter.reservation::default.reservations.text_title_cancel')</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <input
                        class="form-control"
                        name="isEdit"
                        id="isEdit"
                        value="1"
                        hidden
                    />
                <div class="modal-body">
                    Pour modifier votre réservation cliquer sur le bouton ci-dessus. La réservation actuelle sera annulée puis vous pourrez sélectionner une nouvelle réservation.
                </div>
                <div class="modal-footer">
                    <button
                        type="submit"
                        class="btn btn-primary"
                        onclick="window.location.href = '/default/reservation';"
                    >@lang('igniter.reservation::default.reservations.button_cancel')</button>
                </div>
            </div>
        </form>
    </div>
</div>
