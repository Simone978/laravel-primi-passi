  @include('layouts._header')
    <div class="container">
        <header>
            <img src="http://pluspng.com/img-png/spotify-logo-png-open-2000.png" alt="">
        </header>

        <div class="cds-container">
          @foreach($cds as $cd)
          <div class="cd">
              <img src="{{$cd['poster']}}" />
              <h3>{{$cd['title']}}</h3>
              <small>{{$cd['artist']}}</small>
              <strong>{{$cd['year']}}</strong>
          </div>
          @endforeach
        </div>
    </div>
  @include('layouts._footer')
