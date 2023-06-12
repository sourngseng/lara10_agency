<section class="page-section" id="services">
  <div class="container">
      <div class="text-center">
          <h2 class="section-heading text-uppercase">Services</h2>
          <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
      </div>
      <div class="row text-center">
          @foreach ($services as $item)
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    {{-- <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i> --}}
                    <img style="height: 96px; border-radius:50%;" src="{{asset('uploads')}}/{{$item->image}}" alt="">
                </span>
                <h4 class="my-3">{{$item->title}}</h4>
                <p class="text-muted">
                  {{$item->description}}
                </p>
            </div>
          @endforeach

      </div>
  </div>
</section>
