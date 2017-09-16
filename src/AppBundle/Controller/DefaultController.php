<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    /**
     * json hello world 
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return new JsonResponse(array("Hello" => "World!"));
    }

    /**
     * find all hazardeous NEO | JSON
     * @Route("/neo/hazardous", name="neo_hazardous")
     */
    public function neoHazardousAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $hazardousNEOs = $em->getRepository('AppBundle:NEO')->getHazardousNEO();
        return new JsonResponse($hazardousNEOs);
    }

    /**
     * sort the NEO by speed | JSON
     * @Route("/neo/fastest", name="neo_fastest")
     */
    public function neoFastestAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        if($request->get('hazardous') && $request->get('hazardous')  != 'false') {
            $hazardous = 1;
        } else {
            $hazardous = 0;
        }
        $fastestNEOs = $em->getRepository('AppBundle:NEO')->getFastestNEO($hazardous);
        return new JsonResponse($fastestNEOs);
    }

    /**
     * best year for NEO | JSON
     * @Route("/neo/best-year", name="neo_best_year")
     */
    public function neoBestYearAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        if($request->get('hazardous') && $request->get('hazardous')  != 'false') {
            $hazardous = 1;
        } else {
            $hazardous = 0;
        }
        $hazardousNEOs = $em->getRepository('AppBundle:NEO')->getBestYearNEO($hazardous);
        return new JsonResponse($hazardousNEOs);
    }

    /**
     * best month | JSON
     * @Route("/neo/best-month", name="neo_best_month")
     */
    public function neoBestMonthAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        if($request->get('hazardous') && $request->get('hazardous')  != 'false') {
            $hazardous = 1;
        } else {
            $hazardous = 0;
        }
        $hazardousNEOs = $em->getRepository('AppBundle:NEO')->getBestMonthNEO($hazardous);
        return new JsonResponse($hazardousNEOs);
    }


}
