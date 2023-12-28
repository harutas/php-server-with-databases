CREATE TABLE IF NOT EXISTS post_likes(
  user_id INT NOT NULL,
  post_id INT NOT NULL,
  FOREIGN KEY user_fk(user_id) REFERENCES users(id),
  FOREIGN KEY post_fk(post_id) REFERENCES posts(id),
  PRIMARY KEY (user_id, post_id)
);