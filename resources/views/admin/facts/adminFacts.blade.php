<!-- ======= Facts Section ======= -->

<section id="facts" class="facts">
    <div class="container">
        
        @include('layouts.flash')
        <div class="section-title">
            <h2>Facts</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row no-gutters">
            @foreach ($allFacts as $fact)
                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
                <div class="count-box">
                    <i class="{{$fact->icone}}"></i>
                    <span data-toggle="counter-up">{{$fact->chiffre}}</span>
                    <p><strong>{{$fact->titre}}</strong> {{$fact->texte}}</p>
                    <form action="{{route('destroy.fact', $fact->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger mt-3" type="submit">Delete</button>
                    </form>
                </div>
                </div>
                @endforeach
                <a href="{{route('edit.fact')}}" class="btn btn-success w-100 p-2 mt-2">Edit</a>
                <a href="{{route('create.fact')}}" class="btn btn-primary w-100 p-2 mt-2">Add a fact</a>
        </div>

      </div>

    </div>
  </section><!-- End Facts Section -->