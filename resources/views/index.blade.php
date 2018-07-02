<!DOCTYPE html>
<html>
    <head>
        <script src="https://cdn.rawgit.com/scottjehl/picturefill/3.0.2/dist/picturefill.min.js"></script>
        <title> {{$data['title']}} </title>
        <meta name="viewport" content="width=device-width, initial scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400|Open+Sans:300,400|Oswald:200,300,400|Roboto:100,300,400|Vollkorn" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/slick-1.8.0/slick.css">
        <link rel="stylesheet" href="./css/slick-1.8.0/slick-theme.css">
        <link rel="stylesheet" href="./css/animate-css/animate.css">
        <link rel="stylesheet" href="./css/font-awesome/css/font-awesome.css">
        <link rel="stylesheet" href="./css/app.css">

        
    </head>
    <body>
        <a id="top"></a>
        <header>
            @include('components.navigation')
        </header>
        <main>
            <div class="container">
                <section class="home-container vh-100 py-5">
                    <a id="home"></a>
                    <div class="home-content center-content">
                        @include('blueprints.one-column-paragraph-heading', [
                        'headingTag' => 'h2', 
                        'heading' => $data['heading1'],
                        'text' => $data['text1']
                        ])
                    </div>
                </section>

                 <section class="work-container vh-100 py-5">
                    <a id="work"></a>
                    <div class="work-content ">
                        <h2 class="text-center">{{$data['heading2']}}</h2>
                    </div>
                </section>
                

                 <section class="skills-container vh-100 py-5">
                    <a id="skills"></a>
                    <div class="skills-content ">
                        <h2 class="text-center">{{$data['heading3']}}</h2>

                        <div class="col-3">
                            <h2>Languages</h2>
                            <div>
                                <span>Javascript:</span> <span class="javascript"></span>
                            </div>
                           <div>
                                <span>Angular:</span> <span class="angular"></span>
                            </div>
                            <div>
                                <span>Express:</span> <span class="express"></span>
                            </div>

                        </div>
               
                        
                    </div>
                </section>

                <section class="about-container vh-100 py-5">
                    <a id="about"></a>
                    <div class="about-content row">
                        @include('blueprints.two-column-image-heading-paragraph', [
                            'img1' => $data['profilePhoto'],
                            'heading1' => $data['heading4'],
                            'text' => $data['text1']
                            ])
                    </div>
                </section>
                
               
            </div>
      
        </main>
        <footer>
            <a id="bottom"></a>
            <div class="container py-5">
                <div class="row">
                    <div class="text-center col-lg-4">
                        <div><a href="tel://012 345 6789"><i class="fa fa-5x fa-phone"></i>
                            <p>Hire Me</p></a></div>
                        <div><i class="fa fa-5x fa-map-marker"></i>
                            <p>Address</p>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <h2 class="text-center px-3 py-2">Get in Touch</h2>
                        <p class="text-center px-3 py-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem quibusdam ipsa libero voluptates pariatur quae repellendus vitae, eaque voluptatum doloribus cum magnam modi dolores excepturi minus iure enim soluta molestias.</p>

                        @include('components.contact-form')
                    </div>
                </div>
            </div>
            <div class="site-info text-center py-4"><small>Copyright &copy; 2018</small></div>
        </footer>
    </body>
    <script src="scripts/slick-1.8.0/slick.min.js"></script>
    <script src="scripts/gsap/TweenMax.min.js"></script>
    <script src="scripts/gsap/plugins/scrollToPlugin.min.js"></script>
    <script src="scripts/Scroll-Magic/scrollMagic.min.js"></script>
    <script src="scripts/Scroll-Magic/plugins/animation.gsap.js"></script>
    <script src="scripts/Scroll-Magic/plugins/debug.addIndicators.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="dist/scripts/scripts.js"></script>
</html>