<button
    type="button"
    class="btn btn-light text-warning"
    data-bs-toggle="modal"
    data-bs-target="#editReservationModal<?php echo e($customerReservation->reservation_id); ?>"
><?php echo app('translator')->get('igniter.reservation::default.reservations.button_edit'); ?></button>

<div
    class="modal fade"
    id="editReservationModal<?php echo e($customerReservation->reservation_id); ?>"
    aria-labelledby="editReservationModalLabel<?php echo e($customerReservation->reservation_id); ?>"
    aria-hidden="true"
>
    <div class="modal-dialog">
        <form method="POST" data-request="<?php echo e($__SELF__.'::onCancel'); ?>">
            <input type="hidden" name="reservationId" value="<?php echo e($customerReservation->reservation_id); ?>">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5"
                        id="editReservationModalLabel<?php echo e($customerReservation->reservation_id); ?>"
                    ><?php echo app('translator')->get('igniter.reservation::default.reservations.text_title_cancel'); ?></h1>
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
                        onclick="window.location.href = '/Bateau-Geneve/default/reservation';"
                    ><?php echo app('translator')->get('igniter.reservation::default.reservations.button_cancel'); ?></button>
                </div>
            </div>
        </form>
    </div>
</div>

