<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkFormRequest;


class FileHandling
{
    public function getFile(WorkFormRequest $request, $form_file) {
        $file = $request->file($form_file);
        $fileinfo = pathinfo($file->getClientOriginalName());

    }

    public function moveFile() {
        $destination = 'assets/uploads';
        $file->move($destination , $fileinfo['basename']);
    }
}
