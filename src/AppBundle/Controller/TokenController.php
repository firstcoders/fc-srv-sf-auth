<?php
namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as REST;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class TokenController extends FOSRestController
{
    /**
     * @REST\Post("/tokens")
     */
    public function newTokenAction(Request $request)
    {
        // $user = $this->getDoctrine()
        //     ->getRepository('AppBundle:User')
        //     ->findOneBy(['username' => $request->getUser()]);

        // if (!$user) {
        //     throw $this->createNotFoundException();
        // }

        // $isValid = $this->get('security.password_encoder')
        //     ->isPasswordValid($user, $request->getPassword());

        // if (!$isValid) {
        //     throw new BadCredentialsException();
        // }

        // $token = $this->get('lexik_jwt_authentication.encoder')
        //     ->encode([
        //         'username' => $user->getUsername(),
        //         'exp' => time() + 3600 // 1 hour expiration
        //     ]);

        $token = $this->get('lexik_jwt_authentication.encoder')
            ->encode([
                'username' => 'Mark',
                'exp' => time() + 3600
            ]);


        return new JsonResponse(['token' => $token]);
    }
}
