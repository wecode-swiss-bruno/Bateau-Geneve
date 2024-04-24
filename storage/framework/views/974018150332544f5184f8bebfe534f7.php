<?php if($customerReservation): ?>
    <?php if($showReviews && !empty($reviewable)): ?>
    <?php if($customerReservation->reserve_date < now()): ?>
        <div class="mb-3" id="reviews-form">
            <?php echo controller()->renderPartial('localReview::form'); ?>
        </div>
    <?php endif; ?>
    <?php endif; ?>


    <?php echo controller()->renderPartial($__SELF__.'::preview'); ?>
<?php else: ?>
    <?php echo controller()->renderPartial('@list'); ?>
<?php endif; ?>

