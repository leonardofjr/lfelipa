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
              @foreach($work as $item)
              @if($item->type == 'website')
                <h2>{{$item->title}}</h2>
                <p>{{$item->description}}</p>
                <p><strong>Technologies:</strong>
                    @foreach(json_decode($item->technologies) as $technoloogy)
                        {{$technoloogy}}
                    @endforeach
                </p>
                @endIf
              @endforeach
          </li>
          <li class="apps-container">
              @foreach($work as $item)
              @if($item->type == 'app')
                <h2>{{$item->title}}</h2>
                <p>{{$item->description}}</p>
                <p><strong>Technologies:</strong>
                    @foreach(json_decode($item->technologies) as $technoloogy)
                        {{$technoloogy}}
                    @endforeach
                </p>
                @endIf
              @endforeach
          </li>
          <li class="games-container">
              @foreach($work as $item)
              @if($item->type == 'game')
                <h2>{{$item->title}}</h2>
                <p>{{$item->description}}</p>
                <p><strong>Technologies:</strong>
                    @foreach(json_decode($item->technologies) as $technoloogy)
                        {{$technoloogy}}
                    @endforeach
                </p>
                @endIf
              @endforeach
          </li>
      </ul>
  </div>
</div>