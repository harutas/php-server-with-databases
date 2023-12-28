<?php

use Database\MySQLWrapper;

// データベースに接続
$mysqli = new MySQLWrapper();

$users_setup_script = file_get_contents(__DIR__ . '/Examples/Task1/users-setup.sql');
$posts_setup_script = file_get_contents(__DIR__ . '/Examples/Task1/posts-setup.sql');
$comments_setup_script = file_get_contents(__DIR__ . '/Examples/Task1/comments-setup.sql');
$post_likes_setup_script = file_get_contents(__DIR__ . '/Examples/Task1/post_likes-setup.sql');
$comment_likes_setup_script = file_get_contents(__DIR__ . '/Examples/Task1/comment_likes-setup.sql');


function runSetupQuery(mysqli $mysqli, string $query): void
{
  $result = $mysqli->query($query);
  if ($result === false) {
    throw new Exception('Could not execute query.');
  } else {
    print("Successfully ran all SQL setup queries." . PHP_EOL);
  }
}

runSetupQuery($mysqli, $users_setup_script);
runSetupQuery($mysqli, $posts_setup_script);
runSetupQuery($mysqli, $comments_setup_script);
runSetupQuery($mysqli, $post_likes_setup_script);
runSetupQuery($mysqli, $comment_likes_setup_script);

// function runQuery(mysqli $mysqli, string $query): void {
//   $result = $mysqli->query($query);
//   if ($result === false) {
//     throw new Exception('Could not execute query.');
//   } else {
//     print("Successfully ran all SQL setup queries." . PHP_EOL);
//   }
// };
