<x-layout>
    <section class="hero">
        <div class="container">
            <h1>Add an Article</h1>
            <p>Create your personal article here!</p>
        </div>
    </section>
    <div class="add-container">
        <h1>Create Article</h1>
        @if(session()->has('success'))
        <div class="success-message" role="alert">
            {{session('success')}}
        </div>
        @endif
        <form method="post" action="{{route('store-article')}}" class="article-form">
            @csrf
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="body" required></textarea>
            </div>
            <button type="submit" class="btn-create">+Create Article</button>
        </form>
    </div>
</x-layout>