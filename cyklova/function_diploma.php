<?php
function get_posts () {
  global $connection;
  $sql = "SELECT * FROM diploma";
  $result = mysqli_query($connection, $sql);
  $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
  return $posts;
}
?>