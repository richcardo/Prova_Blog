<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public $list;
    public function __contruct()
    {
        $this->list = [
            ['title' => 'Pogrammare in JavaScript', 'category' => 'Coding', 'description' => 'Prima descrizione'],
            ['title' => 'Programmare in php', 'category' => 'Coding', 'description' => 'Seconda descrizione'],
            ['title' => 'Programmare in Python', 'category' => 'Coding', 'description' => 'Terza descrizione']
        ];
    }

    public function Welcome(){
        return view('welcome', ['welcome'=>'Riccardo\'s Blog']);
    }

    public function Contacts(){
        return view('pages.Contatti');
    }

    public function AboutMe(){
        return view('pages.ChiSono', [
            'title' => 'Il mio primo progetto Laravel',
            'description' => 'Ciao a tutti sono un semplice progetto Laravel'
        ]);
    }

    public function Articles(){
        return view('pages.articles',['list'=>$this->list]);
    }

    public function Article($index){
        if(array_key_exists($index, $this->list)){
            return view('pages.article', ['list'=>$this->list[$index], 'index'=>$index]);
        }
        else {
            return abort(404);
        }
    }
}
