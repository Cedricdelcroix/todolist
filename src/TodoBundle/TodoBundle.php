<?php

namespace TodoBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class TodoBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
