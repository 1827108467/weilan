<!-- HEADER -->
<header class="header">
    <div class="container">
        <!-- logo -->
        <div class="logo">
            <a href="{{ url('/') }}"> <img class="l-white" src="{{asset('assets/images/logo.png')}}" alt=""> 
            <img class="l-black" src="{{asset('assets/images/logo-black.png')}}" alt=""> </a>
        </div>
        <!--End logo-->
        <!-- Navigation Menu -->
        <nav class='navigation'>
            <ul>
                <li><a href="{{ url('/') }}">首页</a></li>
                <li><a href="{{ url('/service') }}">服务</a></li>
                {{--  <li><a href="shop.html">Shop</a></li>
                <li><a href="shop-details.html">shop details</a></li>  --}}
                <li><a href="{{ url('/contact') }}">联系我们</a></li>
            </ul>
        </nav>
        <!--End Navigation Menu -->
    </div>
</header>
<!-- END HEADER -->