---
title: 'main::lang.locations.title'
layout: default
permalink: /locations
'[localList]': null
'[localSearch]':
    alias: '[localSearch]'
    hideSearch: null
    menusPage: local/menus
description: ''
'[slider]':
    code: restaurants
    height: 60vh
    effect: ease
    delayInterval: 5000.0
    hideControls: 0
    hideIndicators: 0
    hideCaptions: 0
---
@component('slider')
<div class="container">
    <div class="row py-4">
     
        <div class="location-list col-sm-12">


            @component('localList')
        </div>
    </div>
</div>