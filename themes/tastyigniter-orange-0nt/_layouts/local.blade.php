---
description: 'Local layout'
'[session]':
    security: all
'[staticMenu mainMenu]':
    code: main-menu
'[staticMenu footerMenu]':
    code: footer-menu
'[newsletter]': {  }
'[localePicker]':
'[localSearch]': null
'[localBox]':
    paramFrom: location
    redirect: home
    defaultOrderType: collection
    showLocalThumb: 0
    localThumbWidth: 80.0
    localThumbHeight: 80.0
    menusPage: local/menus
    localSearchAlias: localSearch
'[categories]': null
'[cartBox]':
    checkStockCheckout: 1
    showCartItemThumb: 1
    pageIsCheckout: 0
    pageIsCart: 0
'[localList]':
    distanceUnit: km
    searchParamName: search
    sortByParamName: sort_by
    orderTypeParamName: order_type
---
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="{{ App::getLocale() }}" class="h-100">
<head>
    @partial('head')
</head>
<body class="d-flex flex-column h-100 {{ $this->page->bodyClass }}">

    <header class="header">
        @partial('header')
    </header>

    <main role="main">
        <div id="page-wrapper">
            <div class="container">
                <div class="row py-4">
                    <div class="col-lg-2 d-none d-lg-inline-block">
                    
                        <div class="categories affix-categories">
                            @component('categories')
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="content">
                            @partial('localBox::container')

                            @page
                        </div>
                    </div>

                    <div class="col-lg-4">
                        @partial('cartBox::container')
                    </div>
                </div>
              <div class="row py-4">
                  	<div class="col-lg-8">
                      <h2 class="h2">Changer de restaurant</h2>
                          @component('localList')
                      </div>
              </div>
            </div>
        </div>
    </main>

    <footer class="footer mt-auto d-none d-lg-block">
        @partial('footer')
    </footer>
    <div id="notification">
        @partial('flash')
    </div>
    @partial('eucookiebanner')
    @partial('scripts')
</body>
</html>