<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use Illuminate\Users\Repository as UserRepository;

class AdminComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */

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
        );
    }

    public function compose(View $view) {
        $programming_languages = $this->listOfProgrammingLanguages();
        $type_dropdown = $this->typeDrowndown();
        return $view->withType_dropdown($type_dropdown)->withProgramming_languages($programming_languages);
    }
}