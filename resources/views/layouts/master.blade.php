<!DOCTYPE html>
<html lang="en">
        @include('layouts.head')
        

        <body id="page-top">
            <div id="wrapper">
            @include('layouts.sidebar')
                 <div id="content-wrapper" class="d-flex flex-column"> 
                     <div id="content">
                        @include('layouts.navbar')
                        @yield('content')
                    </div>
                    
                    @include('layouts.footer')
                 </div>
            </div>
            @include('layouts.js')

        </body>
</html>