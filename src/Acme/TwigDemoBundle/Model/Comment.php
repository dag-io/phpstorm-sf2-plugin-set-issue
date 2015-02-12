<?php
namespace Acme\TwigDemoBundle\Model;

/**
 * Class Comment
 */
class Comment
{
    /**
     * @return String
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param String $content
     *
     * @return Comment
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }
    /**
     * @var String
     */
    private $content;
}
