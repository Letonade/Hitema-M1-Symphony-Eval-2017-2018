<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Contact;
use AppBundle\Form\ContactType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BetaController extends Controller
{

    /**
     * @Route("/test", name="test")
     */
    public function indexAction(){
        /*
         * getRepository(entité ciblée) : SELECT
         * 4 méthodes de sélection
         *      find(id) : récupérer un enregistrement par la PK
         *      findAll() : récupérer tous les enregistrements
         *      findBy() : récupérer plusieurs enregistrements par une liste de critères (par la valeur d'une colonne de la table)
         *      findOneBy() : récupérer un enregistrement par une liste de critères
         * */

        //exit(dump($results));
    return $this->render('base.html.twig');
    }
}






