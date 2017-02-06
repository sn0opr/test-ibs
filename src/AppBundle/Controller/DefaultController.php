<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/data", name="data_show")
     */
    public function dataTableAction()
    {
        $this->getDoctrine()->getManager()->getRepository('AppBundle:VXmlCdr')
            ->findBy([], null, 10, 0);

        $datatable = $this->get('app.datatable.vxmlcdr');
        $datatable->buildDatatable();

        return $this->render('data.html.twig', [
            'datatable' => $datatable
        ]);
    }

    /**
     * @Route("/results", name="vxmlcdr_results")
     */
    public function indexResultsAction()
    {
        $datatable = $this->get('app.datatable.vxmlcdr');
        $datatable->buildDatatable();

        $query = $this->get('sg_datatables.query')->getQueryFrom($datatable);

        return $query->getResponse();
    }

    /**
     * @Route("/new", name="vxmlcdr_new")
     */
    public function newVxmlCdrAction() {

    }
}
