<?php

namespace Ekoed\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class EkoedUserBundle extends Bundle
{
	public function getParent()
	{
		return 'FOSUserBundle';
	}
}
