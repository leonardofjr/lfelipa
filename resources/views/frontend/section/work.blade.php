<section class="container-fluid work-container">
    <div class="container vh-100 py-5">
        <a id="work"></a>
        <h2 class="text-center">Work</h2>
    
        <div class="row">
            <!-- Side Menu -->
                <aside id="work-menu" class="col-lg-3">
                    <ul>
                        <li >Websites</li>
                        <li>Apps</li>
                        <li>Games</li>
                    </ul>
                </aside>
                <section class="col-lg-9 work-content">
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
                </section>
        </div>
    </div>
</section>