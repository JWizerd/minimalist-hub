<?
  class RSS_Feed {
    public $url;
    public $rss;
    public $feed = [];
    public $post_obj;

    public function __construct($url) {
      $this->url = $url;
      $this->rss_parser($this->url);
      $this->get_latest_post($this->url);
    }

    public function get_latest_post($url) {
     if (!empty($this->feed)) {
        $this->post_obj = $this->feed[0];
      } else {
       false;
      } 
    }

    public function rss_parser($url) {
      // using DOMObject to parse through XML encoded items
      $dom_object = new DOMDocument();
      @$dom_object->load($url);
      if (!empty($dom_object->getElementsByTagName('item'))) {
        foreach ($dom_object->getElementsByTagName('item') as $node) {
          $item = [
                  'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
                  'content' => $node->getElementsByTagName('encoded')->item(0)->nodeValue
                  ];
          array_push($this->feed, $item);
        }
      }
    }
  }

