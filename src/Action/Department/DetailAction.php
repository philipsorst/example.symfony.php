<?php

namespace App\Action\Department;

use App\Entity\Department;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route(name="app.department.detail", path="/departments/{id}")
 * @author Philip Washington Sorst <philip@sorst.net>
 */
class DetailAction extends AbstractController
{
    public function __invoke(Department $department): Response
    {
        return $this->render('Department/detail.html.twig', ['department' => $department]);
    }
}
