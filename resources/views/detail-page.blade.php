<x-layout>

    <section>
    <div class="container-fluid ">
        <div class="row justify-content-center aling-items-center d-5 h-25">
            <div class="col-12 col-md-4"><h2>Recensioni</h2></div>
        </div>
    </div>
    <h5>{{$post['title']}}</h5>
    <p class="fw-bold">Rating: {{$post['rating']}}</p>
    <p>{{$post['review']}}</p>

     </section>
<a class="btn-style" href="{{route('welcome')}}" role="button">Torna indietro</a>
     
</x-layout>