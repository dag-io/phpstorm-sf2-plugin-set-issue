<?php

namespace Acme\DemoBundle\Controller;

use Acme\DemoBundle\Model\Category;
use Acme\DemoBundle\Model\Comment;
use Acme\DemoBundle\Model\Post;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class DemoController
 */
class DemoController extends Controller
{
    /**
     * @return string
     */
    public function indexAction()
    {
        $comment = new Comment();
        $comment->setContent("Foo");

        $post = new Post();
        $post->setComments([
            $comment
        ]);

        $category = new Category();
        $category->setPosts([
            $post
        ]);

        /** @var Category[] $categories */
        $categories = [
            $category
        ];

        return $this->render(
            'AcmeDemoBundle:Demo:index.html.twig',
            [
                'categories' => $categories
            ]
        );
    }
}
