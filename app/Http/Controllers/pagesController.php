<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use Mail;
    use Illuminate\Routing\Controller;
    use App\Post; 

    class PagesController extends Controller {
       
        public function getHomepage() {
            $data = [
                'title' => 'Leonardo Felipa Ames',

                'heading1' => 'I\'m Leonardo',

                'heading2' => 'Work',

                'heading3' => 'Skills',

                'heading4' => 'People refer me as a wildcard',

                'text1' => 'Backend & Frontend Developer',

             
                'profilePhoto' => './assets/imgs/leo-felipa.jpeg',
        
            ];

            return view('index')->withData($data);
        } // getHomepage() Ends Here

    }
?>