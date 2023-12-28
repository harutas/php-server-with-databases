CREATE TABLE IF NOT EXISTS comments(
  id INT PRIMARY KEY AUTO_INCREMENT,
  comment_text TEXT,
  created_at DATETIME,
  updated_at DATETIME,
  user_id INT NOT NULL,
  post_id INT NOT NULL,
  FOREIGN KEY user_fk(user_id) REFERENCES users(id),
  FOREIGN KEY post_fk(post_id) REFERENCES posts(id)
);