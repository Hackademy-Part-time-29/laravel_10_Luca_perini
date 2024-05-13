<x-layout>
    <section class="hero">
        <div class="container">
            <h1>Our Articles:</h1>
            <p>Find what you like here!</p>
        </div>
        <div class="article-container">
            @foreach ($articles as $article)
            <div class="card">
                <img src="https://picsum.photos/200/200" alt="Placeholder Image">
                <div class="card-content">
                    <h2 class="name">{{$article->title}}</h2>
                    <h3 class="title">{{Str::limit($article->body ?? 'Corpo non presente',50)}}</h3>
                </div>
            </div>
            @endforeach
        </div>
       
        <a href="{{route('add-article')}}" class="add-article">Add Article <span>+</span></a>
    </section>
</x-layout>
