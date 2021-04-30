<!-- ======= Services Section ======= -->
<section id="services" class="services">
    <div class="container">
      
      @include('layouts.flash')
      <div class="section-title">
        <h2>Services</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row">
        @foreach ($allServices as $service)
            <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                <div class="icon"><i class="{{$service->icone}}"></i></div>
                <h4 class="title"><a href="">{{$service->titre}}</a></h4>
                <p class="description">{{$service->texte}}</p>
            </div>
            <div>
                <a href="{{route('edit.services', $service->id)}}" class="btn btn-success w-100 p-2 mt-2">Edit</a>
                <form method="POST" action="{{route('destroy.services', $service->id)}}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger w-100 p-2 mt-2" type="submit">Delete</button>
                </form>
            </div>
        @endforeach
    </div>
    <a href="{{route('create.service')}}" class="btn btn-primary w-100 p-2 mt-2">Add Service</a>

    </div>
  </section><!-- End Services Section -->