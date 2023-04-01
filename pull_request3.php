<?php
class HomeController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage(EntityManagerInterface $entityManager)
    {
        $user = $this->tokenStorage()->getToken()->getUser();
        $user->updateCounter();
        $entityManager->persist($user);
        $entityManager->flush();
        
        return $this->render('page/homepage.html.twig');
    }
}
