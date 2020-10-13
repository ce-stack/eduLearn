<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Requests\StoreComment;
use App\News;
use Illuminate\Support\Carbon;

class Comments extends Component
{

    

    public $newsAll = [];
    public $newComment;


    public function mount ($comments) {
            dd($comments);
            $this->newComment = $comments;
        }

    public function addComment() {

        if($this->newComment == '') {
            return;
        }

        

        array_unshift($this->newsAll ,[
            'body' => $this->newComment,
            'created_at' => Carbon::now()->diffForHumans(),
        ]);
        $this->newComment = '';
    }

    
    public function render()
    {
        return view('livewire.comments');
    }
}
