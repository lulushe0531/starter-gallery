<?php
/**
 * Created by PhpStorm.
 * User: lulu
 * Date: 2018-01-25
 * Time: 2:00 PM
 */

class Gallery extends Application
{

    public function index()
    {
        //$this -> load ->view('gallery');
        $this->data['pagebody'] = 'gallery';
        $this->render();
    }
}