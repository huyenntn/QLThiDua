<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Commend\Form;

use Zend\Form\Form;
/**
 * Description of CommendForm
 *
 * @author Ngoc
 */
class CommendForm extends Form{
    public function __construct($name = null) {
        parent::__construct('commend');
        $this->setAttribute('method', 'POST');
        $this->setAttribute('class','col-md-4 col-md-offset-4 form formselect');
        $this->setAttribute('id','form');
        
        
        $this->add([
            'name' => 'selectsubaward',
            'type' => 'select',
            'options' => [
                'empty_option'  => '--- Lựa chọn danh hiệu ---',
                'onchange' => 'this.form.submit();'
            ],
            'attributes' => [
                'class' => 'form-control',
                'required' => 'required',
                'id' => 'selectsubaward',
            ]
        ]);
        $this->add([
            'name' => 'selectYear',
            'type' => 'select',
            'options' => [
                'empty_option'  => '--- Lựa chọn năm ---',
                'onchange' => 'this.form.submit();'
            ],
            'attributes' => [
                'class' => 'form-control',
                'required' => 'required',
                'id' => 'selectYear',
            ]
        ]);
        $this->add([
            'name' => 'idCmd',
            'type' => 'text',
            'options' => [
                'label' => 'idCmd ',
            ],
            'attributes' => [
                'class' => 'form-control',
                'required' => 'required'
            ]
        ]);
        $this->add([
            'name' => 'idS',
            'type' => 'select',
            'options' => [
                'label' => 'Họ tên cá nhân/Tập thể ',
            ],
            'attributes' => [
                'class' => 'form-control',
                'required' => 'required',
                'id' => 'idS'
            ]
        ]);
        $this->add([
            'name' => 'idSubAward',
            'type' => 'select',
            'options' => [
                'label' => 'Danh hiệu',
            ],
            'attributes' => [
                'class' => 'form-control',
                'required' => 'required',
                'id' => 'idSubAward',
            ]
        ]);
        $this->add([
            'name' => 'year',
            'type' => 'number',
            'options' => [
                'label' => 'Năm',
                
            ],
            'attributes' => [
                'class' => 'form-control',
                'id' => 'year',
                'required' => 'required'
            ]
        ]);
        $this->add([
            'name' => 'nameQD',
            'type' => 'text',
            'options' => [
                'label' => 'Tên quyết định/đề tài/sáng kiến',
                
            ],
            'attributes' => [
                'class' => 'form-control',
                'id' => 'year',
                'required' => 'required'
            ]
        ]);
        
        $this->add([
            'name' => 'submit',
            'type' => 'submit',
            'attributes' => [
                'id' => 'btnLogin',
                'class' => 'btn btn-primary submit-button btn-sm'
            ]
        ]);
        
    }
}
