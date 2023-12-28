CREATE TABLE IF NOT EXISTS posts (
  id INT PRIMARY KEY AUTO_INCREMENT,
  title VARCHAR(50),
  content TEXT,
  created_at DATETIME,
  updated_at DATETIME,
  -- 外部キー設定
  user_id INT NOT NULL,
  FOREIGN KEY user_fk(user_id) REFERENCES users(id)
);