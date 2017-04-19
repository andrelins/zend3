<?php

namespace Application\Entity;

use Zend\Stdlib\Hydrator\ClassMethods;

abstract class AbstractEntity
{
	public function __construct(Array $options = [])
	{
		$hydrator = new ClassMethods();
		$hydrator->hydrate($options, $this);
	}

	public function toArray()
	{
		$hydrator = new ClassMethods();
		return $hydrator->extract($this);
	}
}