<section class="page-section bg-light" id="team">
  <div class="container">
      <div class="text-center">
          <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
          <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
      </div>
      <div class="row">

        @foreach ($teams as $item)
          <div class="col-lg-4">
              <div class="team-member">
                  <img class="mx-auto rounded-circle" src="{{asset('uploads')}}/{{$item->image}}" alt="{{$item->image}}" />
                  <h4>{{$item->name}}</h4>
                  <p class="text-muted">{{$item->position}}</p>
                  <a class="btn btn-dark btn-social mx-2" href="{{$item->twitter}}" aria-label="{{$item->name}} Twitter Profile"><i class="fab fa-twitter"></i></a>
                  <a class="btn btn-dark btn-social mx-2" href="{{$item->facebook}}" aria-label="{{$item->name}} Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                  <a class="btn btn-dark btn-social mx-2" href="{{$item->linkedin}}" aria-label="{{$item->name}} LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
              </div>
          </div>
        @endforeach


      </div>
      <div class="row">
          <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
      </div>
  </div>
</section>
