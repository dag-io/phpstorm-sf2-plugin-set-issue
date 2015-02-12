<?php

namespace Acme\TwigDemoBundle\Controller;

use Acme\TwigDemoBundle\Model\Category;
use Acme\TwigDemoBundle\Model\Comment;
use Acme\TwigDemoBundle\Model\Post;
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
            'AcmeTwigDemoBundle:Demo:index.html.twig',
            [
                'categories' => $categories
            ]
        );
    }
}
