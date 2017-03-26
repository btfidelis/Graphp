<?php namespace Graphp\App\Graph;

use InvalidArgumentException;

class Graph 
{
    private $vertexList;

    /*
    * @params $vertex Array<Vertex>
    */
    public function __construct(array $vertex)
    {
        $this->vertexList = $vertex;
    }

    private function dfs(int $v = 0, $visited = [])
    {
        $visited[$v] = true;
        for ($nb = $this->vertexList[$v]->getNeighbour();
                 $nb != null;
                 $nb = $nb->next()) {
            
            if (!isset($visited[$nb->getContent()])) {
                $this->dfs(++$v, $visited);
            }

            return;
        }
    }

    public function trasverseDFS() 
    {
        
    }

    public function union(string $vertex_src, string $vertex_target)
    {
        $vertex_target_index = null;
        foreach ($this->vertexList as $i => $vertex) {
            if ($vertex->getName() == $vertex_target) {
                $vertex_target_index = $i;
            }
        }

        if (is_null($vertex_target_index)) {
            throw new InvalidArgumentException("Target of name '{$vertex_target}' doest exists");
        }

        $this->vertexList = array_map(
            function ($v) use ($vertex_src, $vertex_target_index) {
                if ($v->getName() == $vertex_src) {
                    $v->addNeighbour($vertex_target_index);
                }

                return $v;
            },
            $this->vertexList
        );

        return $this->vertexList;
    }
}