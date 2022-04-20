<?php

namespace Dic\UVDesk\IvrsBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Dic\UVDesk\IvrsBundle\DependencyInjection\ApiExtension;

class UVDeskIvrsBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new ApiExtension();
    }

    public function build(ContainerBuilder $container)
    {
        parent::build($container);

    }
}