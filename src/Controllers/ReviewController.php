<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;

class ReviewController extends Controller
{
    public function store()
    {
        $validation = $this->request()->validate([
            'rating' => ['required'],
            'comment' => ['required'],
        ]);

        if (! $validation) {
            foreach ($this->request()->errors() as $field => $errors) {
                $this->session()->set($field, $errors);
            }

            $this->redirect("/movie?id={$this->request()->input('id')}");
        }

        $this->db()->insert('reviews', [
            'rating' => $this->request()->input('rating'),
            'review' => $this->request()->input('comment'),
            'movie_id' => $this->request()->input('id'),
            'user_id' => $this->auth()->id(),
        ]);

        $this->redirect("/movie?id={$this->request()->input('id')}");
    }
}
