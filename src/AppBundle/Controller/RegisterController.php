<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class RegisterController extends Controller
{
    /**
     * @Route("/register", name="register")
     * @Method({"GET", "HEAD"})
     */
    public function indexAction()
    {
        $form = $this->createFormBuilder()
            ->add('username', TextType::class)
            ->add('email', TextType::class)
            ->add('password', PasswordType::class)
            ->add('repeat_password', PasswordType::class)
            ->add('accept_terms_of_use', CheckboxType::class)
            ->add('register', SubmitType::class)
            ->setAction($this->generateUrl('register_submit'))
            ->setMethod('POST')
            ->getForm()
        ;

        return $this->render(':register:index.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Route("/register", name="register_submit")
     * @Method({"POST"})
     */
    public function registerAction()
    {
        return $this->redirectToRoute('register_success');
    }

    /**
     * @Route("/register/success", name="register_success")
     */
    public function successAction()
    {
        return $this->render(':register:success.html.twig');
    }
}
