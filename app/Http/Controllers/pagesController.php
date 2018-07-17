<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use Mail;
    use Illuminate\Routing\Controller;
    use App\Post; 
    use DB;

    class PagesController extends Controller {

        public function getHomepage() {
            
                // Issue Resolved
           
    
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
            $work = DB::table('work')->get();
           // dd($work);
          //  dd(json_decode($work[0]->technologies, true));
            return view('index')->withData($data)->withLanguages($languages)->withSoftwares($softwares)->withOs($os)->withWork($work);
        } // getHomepage() Ends Here

    }
?>