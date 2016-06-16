<?php 
use Doctrine\Common\DataFixture\FixtureInterface;
use Doctrine\Common\ObjectPersistence\ManagerInterface;

use AppBundle\Entity\User;

class UserFixture implements FixtureInterface
{
 public function load(ManagerInterface $manager)
	{
		$admin = new User;
		$admin->setUsername('admin')
			  ->setPassword(password_hash('admin', PASSWORD_DEFAULT))
			  ->setRoles(['ROLE_ADMIN']);
		$manager->persists($admin);
		$manager->flush();
	}
}

