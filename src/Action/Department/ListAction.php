<?php

namespace App\Action\Department;

use App\Repository\DepartmentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route(name="app.department.list", path="/departments")
 * @author Philip Washington Sorst <philip@sorst.net>
 */
class ListAction extends AbstractController
{
    private DepartmentRepository $repository;

    public function __construct(DepartmentRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(): Response
    {
        return $this->render('Department/list.html.twig', ['departments' => $this->repository->findAll()]);
    }
}
