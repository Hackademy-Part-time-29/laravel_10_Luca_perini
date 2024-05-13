<header>
    <nav>
        <div class="nav-container">
            <div class="logo">
                <h1>{{env('app_NAME')}}</h1>
            </div>
            <ul class="nav-links">
                <li><a href={{route('welcome')}}>Home</a></li>
                <li><a href={{route('articles')}}>Articles</a></li>
                <li><a href={{route('add-article')}}>+Add Article</a></li>
                <li><a href={{route('contact-us')}}>Contact Us</a></li>
            </ul>
        </div>
    </nav>
</header>