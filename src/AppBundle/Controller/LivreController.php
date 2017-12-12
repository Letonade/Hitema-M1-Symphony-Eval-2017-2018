<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Livre;
use AppBundle\Form\LivreType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LivreController extends Controller
{

    /**
     * @Route("/Livre", name="livre")
     */
    public function indexAction(){

        $doctrine = $this->getDoctrine();
        $repository = $doctrine->getRepository(Livre::class);
        $results = $repository->findAll();

        exit(dump($results));

        return $this->render('Livre/index.html.twig', [
            'results' => $results
        ]);
    }

    /**
     * @Route("/Livre/form", name="livre.form", defaults={ "id" = null })
     * @Route("/Livre/form/update/{id}", name="livre.update")
     */
    public function formAction(Request $request, $id){
        // doctrine
        $doctrine = $this->getDoctrine();

        // instances nécessaires au formulaire
        // if($id !== null) {  } else { $entity = new Livre(); }
        $entity = $id ? $doctrine->getRepository(Livre::class)->find($id) : new Livre();
        $type = LivreType::class;

        // création du formulaire
        $form = $this->createForm($type, $entity);

        // récupération de la saisie
        $form->handleRequest($request);

        // formulaire valide
        if($form->isSubmitted() && $form->isValid()){
            //  récupération d'un objet
            $data = $form->getData();

            /*
             * insertion dans la table
             * 2 branches :
             *      getManager() : UPDATE / DELETE / INSERT
             *          persist : file d'attente des requêtes SQL
             *          flush : execution des requêtes
             *      getRepository() : SELECT; accès à la classe Repository
             */

            $manager = $doctrine->getManager();

            $manager->persist($data);
            $manager->flush();

            // message de confirmation
            $message = $id ? "Le Livre a été modifié" : "Le Livre a été ajouté";

            // addFlash(clé insérée en session, valeur de la clé)
            $this->addFlash('notice', $message);

            // redirection
            return $this->redirectToRoute('livre');
        }

        return $this->render('Livre/form.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/Livre/delete/{id}", name="livre.delete")
     */
    public function deleteAction($id){
        /*
         * sélection puis une suppression (remove va remplacer persist)
         * */
        $doctrine = $this->getDoctrine();
        $Livre = $doctrine->getRepository(Livre::class)->find($id);
        $manager = $doctrine->getManager();

        $manager->remove($Livre);
        $manager->flush();

        // message / redirection
        $this->addFlash('notice',
            "Le Livre - {$Livre->getFirstname()} {$Livre->getLastname()} - a été supprimé");
        return $this->redirectToRoute('livre');

    }

}






