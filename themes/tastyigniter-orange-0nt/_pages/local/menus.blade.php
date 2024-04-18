---
title: 'main::lang.local.menus.title'
permalink: '/:location?local/menus/:category?'
description: ''
layout: local
'[localMenu]':
    isGrouped: 1
    collapseCategoriesAfter: 5.0
    menusPerPage: 200.0
    showMenuImages: 1
    menuImageWidth: 100.0
    menuImageHeight: 100.0
    menuCategoryWidth: 1240.0
    menuCategoryHeight: 256.0
    defaultLocationParam: local
    localNotFoundPage: home
    hideMenuSearch: 0
    forceRedirect: 1
'[localePicker]': {  }
---
@partial('nav/local_tabs', ['activeTab' => 'menus'])

<div class="panel">
    <div class="bg-white border-bottom px-3 d-block d-lg-none">
        @partial('categories::mobile')
    </div>

    @component('localMenu')
</div>