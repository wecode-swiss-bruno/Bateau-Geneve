<?php 
/* /home/clients/90374f62723720b37b942de7178cb4c4/sites/app.uramaki-store.com/themes/tastyigniter-orange/_pages/local/reviews.blade.php */
class Pagic6620c934197dc789603524_96c85f1c4433bee00adf59edc3b0c170Class extends \Main\Template\Code\PageCode
{

public function onStart()
{
    if (!View::shared('showReviews')) {
        flash()->error(lang('igniter.local::default.review.alert_review_disabled'))->now();

        return Redirect::to($this->controller->pageUrl($this['localReview']->property('redirectPage')));
    }
}

}
