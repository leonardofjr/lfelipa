<div class="row">
  <div class="col-lg-3">
    <nav>
      <ul>
        <li >Websites</li>
        <li>Apps</li>
        <li>Games</li>
      </ul>
    </nav>
  </div>
  <div class="col-lg-9 work-content">
        <ul>
          <li class="websites-container">
              @foreach($work as $value)
                  @if($value['type'] == 'website')
                      <h2>{{$value['heading']}}</h2>
                      <img src={{$value['img']}}>
                      <p>{{$value['text']}}</p>
                      <p><strong>Technologies:</strong> {{$value['technologoies']}}</p>
                  @endif
              @endforeach
          </li>

          <li class="apps-container">
              @foreach($work as $value)
                  @if($value['type'] == 'app')
                      <h2>{{$value['heading']}}</h2>
                      <img src={{$value['img']}}>
                      <p>{{$value['text']}}</p>
                      <p><strong>Technologies:</strong> {{$value['technologoies']}}</p>
                  @endif
              @endforeach
          </li>

          <li class="games-container">
              @foreach($work as $value)
                  @if($value['type'] == 'game')
                      <h2>{{$value['heading']}}</h2>
                      <img src={{$value['img']}}>
                      <p>{{$value['text']}}</p>
                         <p><strong>Technologies:</strong> {{$value['technologoies']}}</p>
                  @endif
              @endforeach
          </li>
      </ul>
  </div>
</div>