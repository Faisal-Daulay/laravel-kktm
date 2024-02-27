@include('end-user/partials/header')

<body>
@include('end-user/partials/navbar')


 <div>
 @yield('content') 
 </div>
        
 @include('end-user/partials/footer')

    
</body>

</html>