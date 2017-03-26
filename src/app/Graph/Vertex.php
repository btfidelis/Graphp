<?php namespace Graphp\App\Graph;

use Graphp\App\Lt\LinkedList;

class Vertex 
{
    private $name;
    private $neighbour;

    public function __construct(string $name, $lt = null)
    {
        $this->name = $name;
        $this->neighbour = $lt;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getNeighbour()
    {
        return $this->neighbour;
    }

    public function addNeighbour($position)
    {
        if (!$this->neighbour) {
            $this->neighbour = new LinkedList($position, null);
            return $this->neighbour;
        }

        return $this->neighbour->add($position);
    }
}