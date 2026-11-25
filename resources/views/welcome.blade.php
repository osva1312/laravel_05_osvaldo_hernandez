<x-layout>


    <header class="py-5 bg-dark text-white text-center">
        <div class="container">
            <h1 class="display-4 fw-bold">CineBlog</h1>
            <p class="lead">Recensioni, uscite e consigli dal mondo del cinema</p>
        </div>
    </header>

    <main class="container my-5">
        <h2 class="mb-4">Ultime recensioni</h2>

        <div class="row g-4">
            @foreach ($all_posts as $post)
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card h-100 shadow-sm">
                       
                        <div class="card-body">
                            <span class="badge text-bg-danger mb-2">{{ $post['category'] }}</span>
                            <h5 class="card-title">{{ $post['title'] }}</h5>
                            <p class="card-text">{{ $post['excerpt'] }}</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">

                            <a href="{{route('detail-page', ["id" => $post['id']])}}" class="btn btn-sm btn-dark">Leggi di più</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p> &copy; 2026 CineBlog. Tutti i diritti riservati.</p> 
    </footer>
</x-layout>