<main>  
  <div class="container-fluid py-4">
    {{-------------- BY ROW ----------------------------------------------------------------------------------------------------------}}
    @foreach ($category as $key1 => $cat)
      @foreach ($dataArray as $key2 => $arrays)
        @foreach ($arrays as $key3 => $d)
          @if ($cat->category == $d->category)

            @if ($loop->first)
              <div class="row">
                <h4 class="mx-4 mb-4">{{ $cat->category }}</h4>
            @endif

            <div class="col-md-3 mb-2">
              <div class="card h-100">
                <div class="card-body d-flex flex-column justify-content-between p-3">

                  <div class="row mb-0">
                    <div class="col-9">
                      <p class="text-sm fw-bold">{{ $d->name }}</p>

                      @if($d->name == "HR-MANPOWER (Currently)")
                        {{-- team --}}
                        <p class="fw-bolder mb-0">
                          @if (strlen($d->achievement) > 9) 
                            <span>{{ number_format(($d->achievement/1000000000), 2) }}B</span><span class="text-xxs" style="color:purple"> (team)</span>
                          @elseif (strlen($d->achievement) > 6)
                            <span>{{ number_format(($d->achievement/1000000), 2) }}M</span><span class="text-xxs" style="color:purple"> (team)</span>
                          @elseif (strlen($d->achievement) > 3)
                            <span>{{ number_format(($d->achievement/1000), 2) }}K</span><span class="text-xxs" style="color:purple"> (team)</span>
                          @else
                            <span>{{ $d->achievement }}</span><span class="text-xxs" style="color:purple"> (team)</span>
                          @endif
                        </p>
                        {{-- intern --}}
                        <p class="fw-bolder mb-0">
                          @if (strlen($d->target) > 9) 
                            <span>{{ number_format(($d->target/1000000000), 0) }}B</span><span class="text-xxs" style="color:purple"> (intern)</span>
                          @elseif (strlen($d->target) > 6)
                            <span>{{ number_format(($d->target/1000000), 0) }}M</span><span class="text-xxs" style="color:purple"> (intern)</span>
                          @elseif (strlen($d->target) > 3)
                            <span>{{ number_format(($d->target/1000), 0) }}K</span><span class="text-xxs" style="color:purple"> (intern)</span>
                          @else
                            <span>{{ $d->target }}</span><span class="text-xxs" style="color:purple"> (intern)</span>
                          @endif
                        </p>
                      @else
                        {{-- achievement --}}
                        <p class="fw-bolder mb-0">
                          @if (strlen($d->achievement) > 9) 
                            <span>{{ number_format(($d->achievement/1000000000), 2) }}B</span><span class="text-xxs" style="color:blue"> (achievement)</span>
                          @elseif (strlen($d->achievement) > 6)
                            <span>{{ number_format(($d->achievement/1000000), 2) }}M</span><span class="text-xxs" style="color:blue"> (achievement)</span>
                          @elseif (strlen($d->achievement) > 3)
                            <span>{{ number_format(($d->achievement/1000), 2) }}K</span><span class="text-xxs" style="color:blue"> (achievement)</span>
                          @else
                            <span>{{ $d->achievement }}</span><span class="text-xxs" style="color:blue"> (achievement)</span>
                          @endif
                        </p>
                        {{-- target --}}
                        <p class="fw-bolder mb-0">
                          @if (strlen($d->target) > 9) 
                            <span>{{ number_format(($d->target/1000000000), 0) }}B</span><span class="text-xxs text-danger"> (target)</span>
                          @elseif (strlen($d->target) > 6)
                            <span>{{ number_format(($d->target/1000000), 0) }}M</span><span class="text-xxs text-danger"> (target)</span>
                          @elseif (strlen($d->target) > 3)
                            <span>{{ number_format(($d->target/1000), 0) }}K</span><span class="text-xxs text-danger"> (target)</span>
                          @else
                            <span>{{ $d->target }}</span><span class="text-xxs text-danger"> (target)</span>
                          @endif
                        </p>
                      @endif
                    </div>
                    {{-- icon --}}
                    <div class="col-3 text-end">
                      <img src="{{ $d->img }}" width="100%">   
                    </div>
                  </div>
                  
                  {{-- active member --}}
                  @if($d->category == "Membership")
                    <p class="fw-bolder">
                      @if (strlen($d->active_membership) > 9) 
                        <span>{{ number_format(($d->active_membership/1000000000), 2) }}B</span><span class="text-xxs" style="color:green"> (active membership)</span>
                      @elseif (strlen($d->active_membership) > 6)
                        <span>{{ number_format(($d->active_membership/1000000), 2) }}M</span><span class="text-xxs" style="color:green"> (active membership)</span>
                      @elseif (strlen($d->active_membership) > 3)
                        <span>{{ number_format(($d->active_membership/1000), 2) }}K</span><span class="text-xxs" style="color:green"> (active membership)</span>
                      @else
                        <span>{{ $d->active_membership }}</span><span class="text-xxs" style="color:green"> (active membership)</span>
                      @endif
                    </p>
                  @endif

                  {{-- percentage --}}
                  @if($d->name != "HR-MANPOWER (Currently)")
                    @if (number_format((integer)(($d->achievement/$d->target)*100))  <= 13) 
                      <div class="progress mt-2 mb-2">
                        <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"><span class="text-center text-sm font-weight-bolder">0%</span></div><span class="text-dark text-sm font-weight-bolder">{{ number_format( (integer)(($d->achievement/$d->target)*100) ) }}%</span>
                      </div>
                    @else
                      <div class="progress mt-2 mb-2">
                        <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{ number_format( (integer)(($d->achievement/$d->target)*100) ) }}%;"><span class="text-dark text-sm font-weight-bolder">{{ number_format( (integer)(($d->achievement/$d->target)*100) ) }}%</span></div>
                      </div>
                    @endif
                  @else
                    <br>
                  @endif

                  <small>Last updated at: {{ date('j F Y', strtotime($d->updated_at)) }}</small>
                </div>
              </div>
            </div>

          @endif
        @endforeach
      @endforeach
    </div><hr>
    @endforeach    

  </div>
</main>