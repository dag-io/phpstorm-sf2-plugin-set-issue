<?php
namespace Acme\DemoBundle\Model;

/**
 * Class Category
 */
class Category
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var Post[]
     */
    private $posts;

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
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Post[]
     */
    public function getPosts()
    {
        return $this->posts;
    }

    /**
     * @param Post[] $posts
     *
     * @return Category
     */
    public function setPosts($posts)
    {
        $this->posts = $posts;

        return $this;
    }
}
