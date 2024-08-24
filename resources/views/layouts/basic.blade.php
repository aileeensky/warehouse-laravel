<!DOCTYPE html>
<html lang="en" dir="ltr">
    @include('layouts.components.header')
    
    <body data-mode="light" data-sidebar-size="lg">
        @include('layouts.components.sidebar')
    <div class="main-content ">
        <div class="page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">
                {{$slot}}
            </div>
        </div>
        @include('layouts.components.footer')
        @include('layouts.components.scripts')
        @stack('scripts')
</body>
</html>
