+function ($) {
    "use strict"

    var Booking = function (element, options) {
        this.$el = $(element)
        this.options = options || {}
        this.$datePicker = null
        this.$datePickerValue = null
        this.$guestPicker = null
        this.$guestPickerValue = 1
        this.$time = null
        this.$timePickerValue = 1
        this.$locationPicker = null
        this.$locationPickerValue = 1

        this.init()
    }

    Booking.prototype.init = function () {
        if (this.$datePicker = this.$el.find('[data-control="datepicker"]'))
            this.initDatePicker();

        if (this.$guestPicker = this.$el.find('[name="guest"]'))
            this.initGuestPicker();

        if (this.$time = this.$el.find('[name="time"]'))
            this.initTimePicker();

        this.$el.on('change', 'select[name="date"]', $.proxy(this.onSelectDate, this));
    }

    Booking.prototype.initDatePicker = function () {
        this.$datePickerValue = this.$datePicker.data('startDate');
        this.$datePicker.datepicker($.extend({
            format: 'yyyy-mm-dd',
            icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down"
            },
            todayHighlight: true,
        }, this.$datePicker.data()));

        this.$dataLocker = this.$datePicker.next('input');
        this.$datePicker.on('changeDate', $.proxy(this.onSelectDatePicker, this))

        this.$datePicker.datepicker('update', this.$datePickerValue)
    }

    Booking.prototype.initGuestPicker = function () {
        this.$guestPickerValue = this.$guestPicker.val();
        this.$guestPicker.on('change', $.proxy(this.onHtmlUpdate, this));
    }

    // Booking.prototype.initTimePicker = function () {
    //     // this.$timepickerValue = this.$timepicker.val();
    //     this.$timepicker.on('change', $.proxy(this.onHtmlUpdate, this));
    // }

    Booking.prototype.initTimePicker = function () {
        // this.$time = this.$time.val();

       
        
        this.$time.on('change', $.proxy(this.onHtmlUpdate, this));
    }

    Booking.prototype.onSelectDatePicker = function (event) {
        var pickerDate = moment(event.date.toDateString())
        var lockerValue = pickerDate.format('YYYY-MM-DD')
        this.$datePickerValue = lockerValue;
        this.$dataLocker.val(lockerValue);
        this.onHtmlUpdate();
    }

    // Booking.prototype.onSelectGuest = function(event) {
    //     var guestValue = event.target.value;
    //     var lockerGuestValue = guestValue;
    //     this.$guestPickerValue = lockerGuestValue;
    //     this.$dataLocker.val(lockerGuestValue);
    //     this.onHtmlUpdate();
    // }


    Booking.prototype.onSelectDate = function (event) {
        location.href = location.pathname + '?date=' + event.target.value;
        return;
    }

    Booking.prototype.onHtmlUpdate = function () {
        var $indicatorContainer = this.$el.find('.progress-indicator-container')
        $indicatorContainer.prepend('<div class="progress-indicator"></div>')
        $indicatorContainer.addClass('is-loading')

       



        this.$el.find('.help-block').remove();

        this.$guestPickerValue = this.$el.find('[name="guest"]').val();

        jQuery.ajax(location.pathname + '?&date=' + this.$datePickerValue + '&guest=' + this.$guestPickerValue, {
            dataType: 'html'
        })
            .done($.proxy(this.onHtmlResponse, this));
    }

    function isEmpty( el ){
        return !$.trim(el.html())
    }

    Booking.prototype.onHtmlResponse = function (html) {
        html = jQuery.parseHTML(html);

        html.forEach(function (node) {
            if (node.tagName && node.tagName.toUpperCase() == 'MAIN') {
                var newEl, currentEl;
                if ((newEl = node.querySelector('#ti-datepicker-options #noOfGuests')) && (currentEl = document.querySelector('#ti-datepicker-options #noOfGuests'))) {
                    currentEl.innerHTML = newEl.innerHTML;
                }
            }
            if (node.tagName && node.tagName.toUpperCase() == 'MAIN') {
                var newEl, currentEl;
                if ((newEl = node.querySelector('#ti-datepicker-options #time')) && (currentEl = document.querySelector('#ti-datepicker-options #time'))) {
                    console.log(newEl.innerHTML);
                    if($.trim(newEl.innerHTML)){
                        currentEl.innerHTML = newEl.innerHTML;
                        $('#ti-datepicker-options button[type="submit"]').prop('disabled', false);

                    }
                    else{
                        currentEl.innerHTML = '<option disabled">Pas de table disponible</option>';
                        $('#ti-datepicker-options button[type="submit"]').prop('disabled', true);
                    }
                }
            }
        });


        var $indicatorContainer = this.$el.find('.progress-indicator-container')
        $indicatorContainer.find('.progress-indicator').remove()
        $indicatorContainer.removeClass('is-loading')
    }

    Booking.DEFAULTS = {
    }

    // PLUGIN DEFINITION
    // ============================

    var old = $.fn.booking

    $.fn.booking = function (option) {
        var args = arguments

        return this.each(function () {
            var $this = $(this)
            var timeSelect = $this.find('[name="time"]');
            var data = $this.data('ti.booking')
            var options = $.extend({}, Booking.DEFAULTS, $this.data(), typeof option == 'object' && option)
            console.log('options', $this.data())
            if (!data) $this.data('ti.booking', (data = new Booking(this, options)))
            if (typeof option == 'string') data[option].apply(data, args)


        })
    }

    $.fn.booking.Constructor = Booking

    $.fn.booking.noConflict = function () {
        $.fn.booking = old
        return this
    }

    $(document).render(function () {
        $('[data-control="booking"]').booking()
        if(isEmpty($('[name="time"]'))){
            $('[name="time"]').html('<option disabled">Pas de table disponible</option>');
            $('#ti-datepicker-options button[type="submit"]').prop('disabled', true);
        }
    })

}(window.jQuery)