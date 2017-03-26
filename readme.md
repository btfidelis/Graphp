#Simple Graph lib

Example usage

```php
require_once __DIR__ . "/vendor/autoload.php";

use Graphp\App\Graph\Vertex;
use Graphp\App\Lt\LinkedList;
use Graphp\App\Graph\Graph as Gph;

$graph = [];

$graph[] = new Vertex('A');
$graph[] = new Vertex('B');
$graph[] = new Vertex('C');
$graph[] = new Vertex('D');
$graph[] = new Vertex('E');
$graph[] = new Vertex('F');


$g = new Gph($graph);

$g->union('A', 'B');
$g->union('A', 'C');
$g->union('B', 'D');
$g->union('C', 'D');
$g->union('E', 'F');
$g->union('D', 'E');

$g->trasverseDFS();

```