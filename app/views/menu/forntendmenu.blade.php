<!--Navigation Area-->
<div class="container">
    <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">NOA GL</a>
        </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                @foreach($menus as $menu)
                    <button type="button" class="btn btn-md btn-info navbar-btn">{{ $menu->content }}</button>
                @endforeach
                {{--<button type="button" class="btn btn-info navbar-btn">Client</button>--}}
                {{--<button type="button" class="btn btn-info navbar-btn">Product</button>--}}
                {{--<button type="button" class="btn btn-info navbar-btn">Order</button>--}}
                {{--<button type="button" class="btn btn-info navbar-btn">About Us</button>--}}
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</div>