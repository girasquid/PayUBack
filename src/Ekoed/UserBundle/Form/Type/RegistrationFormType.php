<?php

namespace Ekoed\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType
{

	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		parent::buildForm($builder,$options);

		//adding custom fields
		$builder->add('name');
		$builder->add('timezone','timezone');
	}

	public function getName()
	{

		return 'ekoed_user_registration';
	}

}