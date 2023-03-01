<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Features\SupportModels\Whitelist;

class Main extends Component
{

    // protected $rules = [
    //     'user.name' => '',
    //     // 'user.email' => '',
    //     // 'user.word' => '',
    //     // 'user.multi_word' => '',
    //     // 'user.topPosts.*.title' => '',
    //     // 'user.topPosts.*.word' => '',
    //     // 'posts.title' => '',
    //     'users.*.name' => '',
    //     'users.*.topPosts.*.word' => '',
    // ];

    // #[Whitelist([
    //     'name',
    //     'email',
    //     'word',
    //     'multi_word',
    //     'topPosts' => [
    //         '*' => [
    //             'title',
    //             'word',
    //         ],
    //     ],
    // ])]
    public $user;
    // public $test = 'testProperty';

    // #[Whitelist(['name', 'topPosts' => ['*' => ['word']]])]
    public $users;
    
    public function mount()
    {
        ray()->clearScreen();
        // User::make();
        // $this->user = User::with(['topPosts'])->first();
        // $this->users = User::limit(3)->with(['topPosts', 'topPosts.user'])->get();
        // $this->users = User::get();
        // $this->user = User::first();

        // $this->user->word = 'other';
        // $this->user->save();

        // $this->user->setConnection('mysql2');
    }

    public function boot()
    {
        // ray()->showQueries();
    }

    // public function addUser()
    // {
    //     $this->users->push(new User());
    // }

    // public function save()
    // {
    //     // $this->user->push();
    //     $this->users->each->push();

    //     // $this->user->refresh();
    //     $this->users->each->refresh();
    // }

    public function render()
    {
        // ray('Render', $this->users);

        return view('livewire.main');
    }
}
