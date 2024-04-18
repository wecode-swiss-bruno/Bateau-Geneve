---
title: 'main::lang.home.title'
permalink: /
description: ''
layout: default
'[slider]':
    code: home-slider
'[localSearch]':
    hideSearch: 0
'[localList]':
    distanceUnit: km
    searchParamName: search
    sortByParamName: sort_by
    orderTypeParamName: order_type
'[localePicker]': {  }
---
@component('slider')


<div class="container py-4">
  <div class="row">
    <h1 class="h1">{!! lang('main::lang.menu_locations') !!}</h1>
    @component('localList')

  </div>
</div>
