<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/app/example", name="homepage")
     */
    public function indexAction(Request $request)
    {

        return new Response($this->generateUrl('hello_world', ["name"=>"thibaud",]));
        return $this->render('default/index.html.twig');

    }

    /**
     * @Route("/hello/{name}", name="hello_world")
     * @
     */
    public function helloWorldAction($name)
    {
        return $this->render('AppBundle::hello-world.html.twig', ['name'=> $name,]);
    }

    /**
     * @route(
     *      "/{year}-{month}-{day}-{name}/{page}",
     *      requirements={
    "year" = "\d{4}",
     *          "month"= "\d{2}",
     *          "day"  = "\d{2}",
     *          "enabled"="true|false",
     *          "page"   ="\d+"
     *      },
     * defaults={
     * "page"="1"
     * },
     *      name="article"
     * )
     */
    public function articleAction($year,$month, $day, $name, $page)
    {
        return new Response('article, page'.$page);


    }

    /**
     * @route ("/twig", name="twig")
     */
    public function twigAction()
    {
        return $this->render('AppBundle::twig.html.twig', ['content'=>'<h2>plop</h2>',  'array' => [ 0=>'pomme', 'fruit' => 'poire',],]);

    }
}
