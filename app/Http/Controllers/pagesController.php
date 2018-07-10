<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use Mail;
    use Illuminate\Routing\Controller;
    use App\Post; 

    class PagesController extends Controller {
       
        public function getHomepage() {
            $data = [
                'title' => 'Backend & Frontend Web Developer - Leonardo Felipa',

                'heading1' => 'Leonardo',

                'heading2' => 'Work',

                'heading3' => 'Skills',

                'heading4' => 'People refer me as a wildcard',

                'text1' => 'Backend & Frontend Web Developer',

             
                'profilePhoto' => './assets/imgs/leo-felipa.jpeg',
            ];

            $languages = ['Javascript', 'Angular'];
            $softwares = ['Photoshop', 'Dreamweaver'];
            $os = ['Windows', 'Mac', 'Linux'];

            $work = [ 
                'isa_clean' => [
                    'heading' => 'ISA Clean',
                    'text' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis, similique quibusdam molestiae nam hic culpa aliquid, reiciendis pariatur ipsa possimus laborum ab odio provident voluptatum omnis autem nobis beatae nostrum.',
                    'technologoies' => 'Wordpress, HTML5, CSS3, Javascript',
                    'img' => '#',
                    'type' => 'website'
                ],
                'startup_designs' => [
                    'heading' => 'Startup Designs',
                    'text' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis, similique quibusdam molestiae nam hic culpa aliquid, reiciendis pariatur ipsa possimus laborum ab odio provident voluptatum omnis autem nobis beatae nostrum.',
                    'technologoies' => 'PHP, MYSQL, HTML5, CSS3, Javascript, Laravel, SASS',
                    'img' => '#',
                    'type' => 'website',
                ],
                'hangman' => [
                    'heading' => 'Hangman',
                    'text' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis, similique quibusdam molestiae nam hic culpa aliquid, reiciendis pariatur ipsa possimus laborum ab odio provident voluptatum omnis autem nobis beatae nostrum.',
                    'technologoies' => 'HTML5, CSS3, Javascript',
                    'img' => '#',
                    'type' => 'game',
                ],

            ];

            return view('index')->withData($data)->withLanguages($languages)->withSoftwares($softwares)->withOs($os)->withWork($work);
        } // getHomepage() Ends Here

    }
?>