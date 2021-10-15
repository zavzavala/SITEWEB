<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;

class Show extends Component
{
    public $post;

public function mount(Post $post)
{
 $this->post = $post;
 $this->all_comments_count = $this->post->all_comments->count();
 $this->comments = $this->post->comments;
 $this->replyingTo = '';
}
    public function render()
    {
        return view('livewire.post.show');
    }
}
