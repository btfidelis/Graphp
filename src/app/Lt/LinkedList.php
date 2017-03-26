<?php namespace Graphp\App\Lt;

class LinkedList implements IList 
{
    private $content;
    private $next;

    public function __construct($content, $next = null) 
    {
        $this->content = $content;
        $this->next = $next;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function add($content, $index = null)
    {        
        $it = null;
        $new_item = new LinkedList($content, null);

        while($this->next() != null) {
            $it = $this->next();
        }

        if (!$it) {
            $this->setNext($new_item);
            return $new_item;
        }

        $it->setNext($new_item);
        return $new_item;
    }

    public function setNext($next)
    {
        $this->next = $next;
    }

    public function next()
    {
        return $this->next;
    }
}
