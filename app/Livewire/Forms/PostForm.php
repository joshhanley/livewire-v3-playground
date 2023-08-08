<?php

namespace App\Livewire\Forms;

use App\Models\Post;
use Livewire\Attributes\Rule;
use Livewire\Form;

class PostForm extends Form
{
    public ?Post $post;

    #[Rule('required|min:5')]
    public $title = '';

    #[Rule('required|min:5')]
    public $content = '';

    public function setPost(Post $post)
    {
        $this->post = $post;

        $this->title = $post->title;

        $this->content = $post->content;
    }

    public function store()
    {
        Post::create($this->all());
    }

    public function update()
    {
        $this->post->update(
            $this->all()
        );
    }
}
