<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of shopCustomException
 *
 * @author x
 */
class customException extends Exception{
    protected $prev_exception = null;
    
    public function __construct($message='', $code=500, $previous = null){
        if ($message instanceof Exception) {
            $previous = $message;
            $code = $previous->getCode();
            $message = $previous->getMessage();
        } else if ($code instanceof Exception) {
            $previous = $code;
            $code = $previous->getCode();
        }

        parent::__construct($message, $code);
        $this->prev_exception = $previous;
    }
}