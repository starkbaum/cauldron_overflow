<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{
    /**
     * @Route("/comments/{id}/vote/{direction}", method="POST")
     */
    public function commentVote($id, $direction)
    {
        //TODO use id to query database

        // use real logic here to save this to the database
        if ($direction === 'up') {
            $currentVoteCount = rand(7,100);
        } else {
            $currentVoteCount = rand(0,5);
        }

        #return new JsonResponse(['votes' => $currentVoteCount]);
        return $this->json(['votes' => $currentVoteCount]);
    }
}