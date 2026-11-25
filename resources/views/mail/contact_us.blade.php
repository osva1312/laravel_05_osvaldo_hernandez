<x-layout>
 <header>
    <div class="container-flluid">
       <div class="row justify-content-center align-items-center">
          <div class="col-4 col-md-4">
            <h2>Contact-us</h2>
           </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-4 col-md-4 fw-bold">Send us a mail</div>
        </div>
        
    </div>
 </header>
 <form method="POST" action="{{route('send_email')}}">
    @csrf
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">User Name</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="username">
</div>
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Content</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content"></textarea>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
 </form>
 <footer class="bg-dark text-white text-center py-3 mt-5">
        <p> &copy; 2026 CineBlog. Tutti i diritti riservati.</p> 
    </footer>
</x-layout>