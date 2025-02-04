<?php
	
	namespace App\Controller;
	
	use App\Component\User\MaxAgeDTO;
	use App\Repository\UserRepository;
	use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
	
	class UserGetMaxAgeAction extends AbstractController
	{
		public function __invoke(UserRepository $userRepository): MaxAgeDTO
		{
			return new MaxAgeDTO($userRepository->findMaxAge());
		}
	}