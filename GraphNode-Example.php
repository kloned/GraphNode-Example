
class GraphNode {
  const NODE = 0;
  const GROUP = 1;

  public $data;
  public $neighbors;
  public $parent;
  public $groups;
  public $directed;
  public $type;
  
  public function __construct($data, $groups = [], $directed = false, $type = self::NODE) {
    $this->data = $data;
    $this->neighbors = [];
    $this->parent = null;
    $this->groups = $groups;
    $this->directed = $directed;
    $this->type = $type;
  }

  public function addNeighbor(GraphNode $neighbor) {
    if ($this->directed) {
      $this->neighbors[] = $neighbor;
    } else {
      $this->neighbors[] = $neighbor;
      $neighbor->neighbors[] = $this;
    }
  }

  public function addGroup(GraphNode $group) {
    if ($group->type == self::GROUP) {
      $this->groups[] = $group;
    }
  }
}
