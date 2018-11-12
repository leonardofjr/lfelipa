<section class="container-fluid">
    <div class="container skills-container vh-100 py-5">
    <a id="skills"></a>
        <div class="skills-content ">
            <h2 class="text-center">Skills</h2>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                    <h2>Languages</h2>
                    @if(sizeof($languages) > 1 )
                        @foreach($languages as $value) 
                        <div>  
                            <span>{{$value}}</span> <span class={{strtolower($value)}}>0%</span>
                        </div>
                        @endforeach
                    @else
                        
                    @endif
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                    <h2>Software</h2>
                    @if(sizeof($softwares) > 1 )
                        @foreach($softwares as $value) 
                        <div>  
                            <span>{{$value}}</span> <span class={{strtolower($value)}}>0%</span>
                        </div>
                        @endforeach
                    @else
                        
                    @endif
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                    <h2>Operating Systems</h2>
                    @if(sizeof($os) > 1 )
                        @foreach($os as $value) 
                        <div>  
                            <span>{{$value}}</span> <span class={{strtolower($value)}}>0%</span>
                        </div>
                        @endforeach
                    @else
                        
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
