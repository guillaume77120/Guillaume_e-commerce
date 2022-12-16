<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/user', name: 'app_user')]
    public function index(): Response
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
    // #[Route('/profile/{id}/checkout', name: 'app_profile_checkout')]
    // public function cartCheckout()
    // {
    //     $stripe= new StripeClient($this -> getParameter('stripe_sk'));
    //     dd($stripe);

    //     return $this->render('security/profile/checkout.html.twig');
    // }

}
