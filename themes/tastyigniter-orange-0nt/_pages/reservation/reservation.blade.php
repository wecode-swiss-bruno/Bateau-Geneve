---
title: 'main::lang.reservation.title'
layout: default
permalink: ':location/reservation'
'[account]': null
'[booking]':
    useCalendarView: 1
    weekStartOn: 0.0
    minGuestSize: 2.0
    maxGuestSize: 20.0
    timeSlotsInterval: 120.0
    showLocationThumb: 0
    telephoneIsRequired: 1
    locationThumbWidth: 95.0
    locationThumbHeight: 80.0
    bookingPage: reservation/reservation
    defaultLocationParam: ''
    successPage: reservation/success
    localNotFoundPage: home
description: ''
'[localBox]':
    paramFrom: location
    redirect: home
    defaultOrderType: delivery
    showLocalThumb: 0
    localThumbWidth: 80.0
    localThumbHeight: 80.0
    menusPage: local/menus
    localSearchAlias: localSearch
---
<div class="container">
    <div class="row py-4">
        <div class="col col-sm-10 center-block">
            <div class="card mb-1">
                <div class="card-body">
                    @partial('account/welcome')
                </div>
            </div>
          @component('localBox')
            <div class="card">
                <div class="card-body">
                    @component('booking')
                </div>
            </div>
        </div>
    </div>
</div>