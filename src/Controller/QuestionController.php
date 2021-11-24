<?php


namespace App\Controller;


use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class QuestionController extends AbstractController
{
	/**
	 * @Route("/", name="app_homepage")
	 * @return Response
	 */
	public function homepage(Environment $twig)
	{
		/*
		// esta es la forma dificil
		$html = $twig->render('question/homepage.html.twig');

		return new Response($html);
		*/

		return $this->render('question/homepage.html.twig');
	}

	/**
	 * @Route("/questions/{slug}", name="app_question_show")
	 */
	public function show($slug, LoggerInterface $logger)
	{
		$logger->info('Hola grupo2');

		$answers = [
			'Make sure your cat is sitting purrrfectly still',
			'Honestly, I like furry shoes better than MY cat',
			'Maybe... try saying the spell backwards?',
			'Otro más?',
		];

		return $this->render('question/show.html.twig', [
			'question' => ucwords(str_replace('-', ' ', $slug)),
			'answers' => $answers,
		]);
	}
}