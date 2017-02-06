<?php
/**
 * Created by PhpStorm.
 * User: evolutio
 * Date: 06/02/17
 * Time: 07:46 م
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashboardController extends Controller
{

    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function getDashboardAction()
    {
        $vXmlCrdRepo = $this->getDoctrine()->getManager()
            ->getRepository('AppBundle:VXmlCdr');

        $days = 7;
        $date = new \DateTime('2016-10-19');
        $date = $date->modify('- ' . $days .' days');
        $callsByDate = [];
        for($i = 0; $i < $days; $i++) {
            $callsByDate[] = $vXmlCrdRepo->getCallsNumberByDate($date);
            $callsChartLabels[] = $date->format('Y-m-d');
            $date = $date->modify('+1 days');
        }

        return $this->render('dashboard.html.twig', [
            'callsByDate' => $callsByDate,
            'callsChartLabels' => $callsChartLabels
        ]);

    }

}