<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Branding Image -->
            <a class="navbar-brand" href="#">
                {{ config('app.name', 'Laravel') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <ul class="nav navbar-nav">
              <li><a href="/laravelearn/public/">Home</a></li>
              <li><a href="/laravelearn/public/index.php/about">About</a></li>
              <li><a href="/laravelearn/public/index.php/services">Services</a></li>
              <li><a href="/laravelearn/public/index.php/posts">blog</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/laravelearn/public/index.php/posts/create">Create post</a></li>
            </ul>
        </div>
    </div>
</nav>