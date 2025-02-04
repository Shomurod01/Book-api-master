<?php
	declare(strict_types=1);
	namespace App\Controller;
	
	use App\Controller\Base\AbstractController;
	use App\Repository\BookRepository;
	
	class GetBookAction extends AbstractController
	{
		public function __invoke(BookRepository $bookRepository)
		{
			$book = $bookRepository->find(5);
			
			$book = $bookRepository->findOneBy([
				'name' => 'string',
				'description' => 'string'
			]);
			
			$books = $bookRepository->findBy([
				'name' => 'DiyorDev'
			]);
			$book = $bookRepository->findOneByName('Great DiyorDev');
		}
	}