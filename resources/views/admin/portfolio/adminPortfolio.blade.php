<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Portfolio</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row" data-aos="fade-up">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-card">Card</li>
            <li data-filter=".filter-web">Web</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
        @foreach ($allPortfolios as $portfolio)
            <div class="col-lg-4 col-md-6 portfolio-item {{$portfolio->filter}}">
                <div class="portfolio-wrap">
                <img src="{{$portfolio->image}}" class="img-fluid" alt="">
                <div class="portfolio-links">
                    <a href="{{$portfolio->image}}" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>
            <a href="{{route('edit.portfolio', $portfolio->id)}}" class="btn btn-success w-100 p-2 mt-2">Edit</a>
            <form method="POST" action="{{route('destroy.portfolio', $portfolio->id)}}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger w-100 p-2 mt-2" type="submit">Delete</button>
            </form>
            
        </div>
        @endforeach
    </div>
    <a href="{{route('create.portfolio')}}" class="btn btn-primary w-100 p-2 mt-2">Add a photo</a>

    </div>
  </section><!-- End Portfolio Section -->