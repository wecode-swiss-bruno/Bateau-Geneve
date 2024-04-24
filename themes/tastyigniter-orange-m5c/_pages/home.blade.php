---
title: 'main::lang.home.title'
permalink: /
description: ''
layout: default
'[slider]':
    code: home-slider
'[booking]':
    useCalendarView: 1
    weekStartOn: 1.0
    minGuestSize: 2.0
    maxGuestSize: 20.0
    timeSlotsInterval: 30.0
    showLocationThumb: 0
    telephoneIsRequired: 1
    locationThumbWidth: 95.0
    locationThumbHeight: 80.0
    bookingPage: reservation/reservation
    defaultLocationParam: local
    successPage: reservation/success
    localNotFoundPage: reservation/reservation
---
@component('slider')

@component('booking')