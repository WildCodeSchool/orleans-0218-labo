<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.vuy7b6c' shared service.

return $this->services['service_locator.vuy7b6c'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('service' => function () {
    $f = function (\AppBundle\Service\SignatureService $v = null) { return $v; }; return $f(${($_ = isset($this->services['AppBundle\Service\SignatureService']) ? $this->services['AppBundle\Service\SignatureService'] : $this->services['AppBundle\Service\SignatureService'] = new \AppBundle\Service\SignatureService()) && false ?: '_'});
}));
