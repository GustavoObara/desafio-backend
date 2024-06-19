<?php

namespace App\Livewire\Web;

use App\Models\Film;
use Livewire\Component;
use Livewire\WithPagination;

class Home extends Component {
    use WithPagination;

    protected $paginationTheme = 'tailwind';

    public function render() {
        $films = Film::paginate(8);
        return view('livewire.web.home', ['films' => $films]);
    }
}
