-- 1. uztaisit datubaziiti
 -- CREATE DATABASE blog_alise;

-- 2. izmanot
-- USE blog_aliseblog_alise;

CREATE TABLE posts (
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  content VARCHAR(1000)
);
-- inset
INSERT INTO posts
(content)
VALUES
("Pirmais bloga ieraksts"),
("Otrais bloga ieraksts");

SELECT * FROM posts;