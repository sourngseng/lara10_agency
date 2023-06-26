<section class="page-section" id="about">
  <div class="container">
      <div class="text-center">
          <h2 class="section-heading text-uppercase">About</h2>
          <h3 class="section-subheading text-muted">ចាប់ផ្តើមធ្វើការជាមួយ SourngTECH</h3>
      </div>
      <ul class="timeline">
        <?php $i=1; ?>
        @foreach ($abouts as $item)

            @if ($i%2!=0)
              <li>
                  <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('uploads')}}/{{$item->image}}" alt="..." /></div>
                  <div class="timeline-panel">
                      <div class="timeline-heading">
                          <h4>{{$item->name_date}}</h4>
                          <h4 class="subheading">{{$item->title}}</h4>
                      </div>
                      <div class="timeline-body"><p class="text-muted">
                          {{$item->description}}
                      </p></div>
                  </div>
              </li>
            @else
              <li class="timeline-inverted">
                  <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('uploads')}}/{{$item->image}}" alt="..." /></div>
                  <div class="timeline-panel">
                      <div class="timeline-heading">
                          <h4>{{$item->name_date}}</h4>
                          <h4 class="subheading">{{$item->title}}</h4>
                      </div>
                      <div class="timeline-body"><p class="text-muted">
                        {{$item->description}}
                      </p></div>
                  </div>
              </li>
            @endif
            <?php $i++; ?>

        @endforeach

          <li class="timeline-inverted">
              <div class="timeline-image">
                  <h4>
                      Be Part
                      <br />
                      Of Our
                      <br />
                      Story!
                  </h4>
              </div>
          </li>
      </ul>
  </div>
</section>
