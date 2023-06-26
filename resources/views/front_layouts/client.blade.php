<div class="py-5">
  <div class="container">
      <div class="row align-items-center">

        @foreach ($clients as $client)
          <div class="col-md-3 col-sm-6 my-3">
              <a href="#!">
                <img class="img-fluid img-brand d-block mx-auto"
                src="{{asset('frontend')}}/assets/img/logos/{{$client->image}}"
                alt="..." aria-label="{{$client->name}}" />
              </a>
          </div>
        @endforeach

      </div>
  </div>
</div>
