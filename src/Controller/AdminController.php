<?php
/**
 * Created by PhpStorm.
 * User: masood
 * Date: 4/25/2020
 * Time: 11:37 PM
 */
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

 /**
  * Require ROLE_ADMIN for *every* controller method in this class.
  *
  * @IsGranted("ROLE_ADMIN")
  */
class AdminController extends AbstractController
{
     /**
      * Require ROLE_ADMIN for only this controller method.
      * @Route("/admin/dashboard", name="admin_dashboard")
      * @IsGranted("ROLE_ADMIN")
      */
    public function adminDashboard()
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();

        // Call whatever methods you've added to your User class
        return $this->render('admin/dashboard.html.twig', [
            'user' => $user,
        ]);

    }
}