<script>
    $()
</script>



<nav class="navbar navbar-fixed-top navbar-custom">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nSM">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="/" class="navbar-brand brand-style">
                <img g src="/images/logo4.png">
            </a>
        </div>

        <div id="nSM" class="collapse navbar-collapse navbar-right">
            <ul class="nav navbar-nav">
                {{--<li {{ (current_page('/')) ? 'class=active' : '' }}><a href="/">Naslovna</a></li>--}}
                {{--<li {{ (current_page('galerija')) ? 'class=active' : '' }}><a href="galerija">Galerija</a></li>--}}
                {{--<li {{ (current_page('cjenik')) ? 'class=active' : '' }}><a href="cjenik">Cjenik</a></li>--}}
                <li><a class="{{ url()->current()==url('/') ? 'active' : '' }}" href="/">Naslovna</a></li>
                <li><a class="{{ url()->current()==url('/galerija') ? 'active' : '' }}" href="galerija">Galerija</a></li>
                <li><a class="{{ url()->current()==url('/cjenik') ? 'active' : '' }}" href="cjenik">Cjenik</a></li>
            </ul>
        </div>
    </div>
</nav>