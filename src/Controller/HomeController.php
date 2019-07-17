<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019-07-16
 * Time: 14:20
 */

namespace App\Controller;


use App\Entity\Event;
use App\Repository\EventRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home_index")
     */
    public function index()
    {
        $events = $this->getDoctrine()
            ->getRepository(Event::class)
            ->findAll();

        return $this->render('home/index.html.twig', [
            'events' => $events,
        ]);
    }
}