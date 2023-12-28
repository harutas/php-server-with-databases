CREATE TABLE IF NOT EXISTS comment_likes(
  user_id INT NOT NULL,
  comment_id INT NOT NULL,
  FOREIGN KEY user_fk(user_id) REFERENCES users(id),
  FOREIGN KEY comment_fk(comment_id) REFERENCES comments(id),
  PRIMARY KEY (user_id, comment_id)
);