<?php

namespace App\Livewire\Web;

use Livewire\Component;
use App\Models\Film;
use Livewire\WithFileUploads;

class CreateFilm extends Component {
    use WithFileUploads;
    public $title;
    public $director;
    public $summary;
    public $cover;
    protected $rules = [
        'title' => 'required|string|max:255',
        'director' => 'required|string|max:255',
        'summary' => 'required|string',
        'cover' => 'required|image|max:1024',
    ];
    public function submit() {
        $this->validate();

        $coverPath = $this->cover->store('covers', 'public');

        $film = Film::create([
            'title' => $this->title,
            'director' => $this->director,
            'summary' => $this->summary,
            'cover' => $coverPath,
        ]);

        session()->flash('message', 'Filme cadastrado com sucesso!');

        return redirect()->route('film.show', $film->id);
    }
    public function render() {
        return view('livewire.web.create-film');
    }
}
