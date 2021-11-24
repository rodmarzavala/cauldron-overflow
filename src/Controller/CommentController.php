<?php


namespace App\Controller;


use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{
	/**
	 * @Route("/comments/{id}/vote/{direction<up|down>}", methods="POST")
	 */
	public function commentVote($id, $direction, LoggerInterface $logger)
	{
		// TODO: Use id to query database

		$logger->info('hola');

		// use real logic here to save this to database
		if ($direction === 'up') {
			$currentVoteCount = rand(7,100);
			$logger->info('Voto arriba');
		} else {
			$currentVoteCount = rand(0,5);
			$logger->info('Voto abajo');
		}

		return new JsonResponse([
			'id' => $id,
			'votes' => $currentVoteCount
		]);
	}
}