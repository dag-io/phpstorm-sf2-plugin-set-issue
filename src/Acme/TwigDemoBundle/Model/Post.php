<?php
namespace Acme\TwigDemoBundle\Model;

/**
 * Class Post
 */
class Post
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var Comment[]
     */
    private $comments;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return Post
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Comment[]
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param Comment[] $comments
     *
     * @return Post
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }
}
