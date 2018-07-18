<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkFormRequest;


class FileHandling
{
    public function __construct($request, $file) {
        $this->file = $request->file($file);
    }

    public function get_file_info() {
        return pathinfo($this->file->getClientOriginalName());
    }

    
    public function get_file() {
       return $this->file;
    }

    public function move_file($destination) {
        $this->file->move($destination , $this->get_file_info()['basename']);
    }
}
