<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PublicAction
 *
 * @author garl
 */
class PublicAction extends Action {

    public function top1() {
        $this->display('top1');
    }

    public function top() {
        $this->display('top');
    }
    
    public function top1_1() {
        $this->display('top1_1');
    }

}
