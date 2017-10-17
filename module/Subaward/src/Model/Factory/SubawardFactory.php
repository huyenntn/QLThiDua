<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Subaward\Model\Factory;

/**
 * Description of AwardFactory
 *
 * @author Ngoc
 */
class SubawardFactory {
    public function __invoke(\Interop\Container\ContainerInterface $containerinterface) {
        return new \Subaward\Model\Subaward();
    }
}
