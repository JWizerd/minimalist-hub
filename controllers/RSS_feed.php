<?

require('./models/db.php');

class RSS_Feed {

  public $rss;
  public $feed = [];
  public $post_obj;

  public function store_post() {
   if (!empty($this->feed)) {
      $this->post_obj = $this->feed[0];
      $this->add_post_to_db($this->post_obj);
    } else {
     false;
    } 
  }

  public function rss_parser() {
    // using DOMDocument to parse through XML encoded items. DOMDocument is a built in php library for parsing webpages
    $dom_object = new DOMDocument();
    @$dom_object->load($this->url);

    if ($this->proper_rss($dom_object)) {

      foreach ($dom_object->getElementsByTagName('item') as $node) {
        
        @$item = [
                'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
                'content' => $node->getElementsByTagName('encoded')->item(0)->nodeValue
                ];
        array_push($this->feed, $item);

      }

      $this->store_post();

    }
  }

  public function getUrl(){
    return $this->url;
  }

  public function setUrl($url){
    $this->url = $url;
  }

  public function proper_rss($dom_object) {
    return !empty($dom_object->getElementsByTagName('item'));
  }

  public function add_post_to_db($post_obj) {
    $db = new DB();
    $stmt = $db->pdo->prepare("INSERT INTO posts (title, content) VALUES (:title, :content)");
    $stmt->execute([$post_obj['title'], $post_obj['content']]);
  }

  public function get_all_posts() {
    $db = new DB();
    $posts = $db->pdo->query("SELECT title, content FROM posts");
    return $posts;
  }

  public static function remove_post($title) {
    $db = new DB();
    $stmt = $db->pdo->prepare("DELETE FROM posts WHERE title = ?");
    $stmt->execute([$title]);
  }

}

