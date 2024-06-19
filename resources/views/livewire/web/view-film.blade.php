<div>
    <div class="max-w-screen-md mx-auto px-4 py-8 flex flex-col">
        <img src="{{ asset('storage/' . $film->cover) }}" alt=""
            class="aspect-video w-full h-auto mx-auto rounded-lg object-cover object-center mb-4 lg:mb-8">
        <h1 class="text-2xl lg:text-4xl font-bold">
            Filme: {{ $film->title }}
        </h1>
        <h2 class="text-lg lg:text-2xl font-semibold mb-4">
            Diretor: {{ $film->director }}
        </h2>

        <p>
            Sinopse: {{ $film->summary }}
        </p>
    </div>
</div>
