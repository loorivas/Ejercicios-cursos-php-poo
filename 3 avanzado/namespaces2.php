<?php 
require_once('autoload_for_everything.php');
use mx\bistro\Posts as FBPosts;
class Main
{
	public $posts;
	public $fb_posts;
	public function __construct()
	{
		$this->posts = new Posts;
		$this->fb_posts = new FBPosts;
	}
}
$app=new Main();
$app->posts->greet();
$app->fb_posts->greet();
?>