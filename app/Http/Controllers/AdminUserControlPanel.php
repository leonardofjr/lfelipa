<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\WorkFormRequest;
use App\Http\Controllers\Controller;
use DB;
use App\Http\Controllers\FileHandling;

class AdminUserControlPanel extends Controller
{
    public function getProfilePage() {
        return view('backend.profile');
    }
  
    public function getWorkPage() {
       $data = DB::table('work')->get();
       return view('backend.work')->withData($data);
    }
  
    public function getEditWorkPage($id) {
      $programming_languages = $this->listOfProgrammingLanguages();
      $type_dropdown = $this->typeDrowndown();
      $data = DB::table('work')->where('id', $id)->get();
      return view('backend.editWorkPost')->withData($data[0])->withProgramming_languages($programming_languages)->withType_dropdown($type_dropdown)->withId($id);
    }

    public function getAddWorkPage() {
           $programming_languages = $this->listOfProgrammingLanguages();
         $type_dropdown = $this->typeDrowndown();
        // Passing in array of $langauges to View
        return view('backend.addWorkPost')->withType_dropdown($type_dropdown)->withProgramming_languages($programming_languages);
    }

    
    public function addNewWorkPost(WorkFormRequest $request) {
        // Helper custom class to help with file handling
        $file_handler = new FileHandling($request, 'image');

         $technologies = [
             $request->input('html5'),
                $request->input('css3'),
                $request->input('javascript'),
                $request->input('php'),
                $request->input('mysql'),
                $request->input('angular'),
                $request->input('laravel'),
        ];

        $file_handler->move_file('assets/uploads');

        $data = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'basename' => $file_handler->get_file_info()['basename'],
            'filename' => $file_handler->get_file_info()['filename'],
            'ext' => $file_handler->get_file_info()['extension'],
            'type' => $request->input('type'),
            'technologies' => json_encode($this->array_filter_null($technologies)),
        ];

    
        DB::table('work')->insert($data);
        
        return response()->json($data);
    }

    
    public function updateWorkPost(WorkFormRequest $request, $id) {
         $technologies = [
            $request->input('html5'),
            $request->input('css3'),
            $request->input('javascript'),
            $request->input('php'),
            $request->input('mysql'),
            $request->input('angular'),
            $request->input('laravel'),
        ];

        $data = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'type' => $request->input('type'),
            'technologies' => json_encode($this->array_filter_null($technologies)),
        ];

        DB::table('work')
            ->where('id', $id)
            ->update($data);
        return response()->json($data);
    }
    
    public function deleteWorkPost(Request $request, $id) {
        DB::table('work')
            ->where('id', $id)
            ->delete();
        return response()->json();
    }


    // Helper Functions

    public function array_filter_null($a) {
        $filtered = array_filter($a, 'strlen');
        $result = array_values($filtered);
        return $result;
    }

    public function typeDrowndown() {
        return array('Website', 'App', 'Game');
    }

    public function listOfProgrammingLanguages() {
        return array(
            'HTML5',
            'CSS3',
            'Javascript',
            'PHP',
            'MySql',
            'Angular',
            'Laravel',
        );
    }
  
}
