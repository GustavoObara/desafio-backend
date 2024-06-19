<?php

namespace App\Livewire\Web;

use App\Models\Film;
use Livewire\Component;

class Home extends Component {
    public $films;

    public function mount() {
        $this->films = Film::all();
    }

    public function render() {
        return view('livewire.web.home', ['films' => $this->films]);
    }
}
