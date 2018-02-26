<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\Annotations\Get;
use AppBundle\Entity\Article;
use FOS\RestBundle\Controller\Annotations\View;

class ArticleController
{
    /**
     * @Get(
     *     path = "/articles/{id}",
     *     name = "app_article_show",
     *     requirements = {"id"="\d+"}
     * )
     * @View(
     *     statusCode = 200,
     *     serializerGroups = {"POST_CREATE"}
     * )
     */
    public function showAction(Article $article)
    {
        return $article;
    }
}