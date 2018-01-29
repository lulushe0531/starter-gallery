<?php
/**
 * Created by PhpStorm.
 * User: lulu
 * Date: 2018-01-25
 * Time: 1:59 PM
 */

class About extends Application
{

    public function index()
    {
        //$this -> load ->view('about');
        $this->data['pagebody'] = 'about';
        $this->render();
    }
}