@include('site.erp.layout._header')
@include('site.erp.layout._topbar')
@include('site.erp.layout._navbar')
@include('site.erp.layout._categories')
<main>
    <div class="content-page">
        @yield('main')

    </div>
</main>

@include('site.erp.layout._footer')