<?php
	
	namespace App\Component\User;
	
	use Symfony\Component\Serializer\Annotation\Groups;
	
	class MaxAgeDTO
	{
		public  function __construct (
			#[Groups(['user:read'])]
			private readonly int $maxAge
		) {
		}
		public function getMaxAge():int
		{
			return $this->maxAge;
		}
	}