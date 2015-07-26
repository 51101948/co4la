<nav class="navbar navbar-default" role="navigation">
    <div class="container col-xs-12 col-sm-12 col-md-12">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            @if (!Auth::check())
            <a class="navbar-brand" href="/"><span>Home</span></a>
            @else
            <a class="navbar-brand" href="/"><span>Home</span></a>
            @endif
        </div>

        <div class="collapse navbar-collapse col-xs-10 col-sm-10 col-md-10"  style="float:right; min-height: 50px; padding: 0px;" id="bs-example-navbar-collapse-1">
            <div class="nav-right" style="overflow: hidden; ">
                <ul class="nav navbar-nav navbar-right" style="padding:0px; min-height:50px;">
                    @if (Auth::check())
                    <li class="nav-right-li"><a href="/admin/categories"><span>Categories<span></a></li>
                    <li class="nav-right-li"><a href="/admin/new-product"><span>New Product<span></a></li>
                    <li class="nav-right-li"><a href="/admin/orders"><span>Orders<span></a></li>
                    <li class="nav-right-li"><a href="/logout"><span>Logout<span></a></li>
                    @else
                    <li class="nav-right-li"><a href="/login"><span>Login<span></a></li>
                    @endif
                </ul>
            </div>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>