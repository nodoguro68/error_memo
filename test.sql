-- DB作成
CREATE DATABASE error_memo;

-- usersテーブル作成
CREATE TABLE users (
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    username VARCHAR(20) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    description VARCHAR(255),
    profile_img VARCHAR(255),
    github VARCHAR(255),
    qiita VARCHAR(255),
    blog VARCHAR(255),
    facebook VARCHAR(255),
    twitter VARCHAR(255),
    created_at DATETIME NOT NULL,
    updated_at TIMESTAMP NOT NULL,
    is_deleted BOOLEAN DEFAULT 0 NOT NULL
)

-- categoriesテーブル作成
CREATE TABLE catetories (
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    created_at DATETIME NOT NULL,
    updated_at TIMESTAMP NOT NULL,
    is_deleted BOOLEAN DEFAULT 0 NOT NULL
)

-- foldersテーブル作成
CREATE TABLE folders (
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    user_id INT  NOT NULL,
    title VARCHAR(255) NOT NULL,
    created_at DATETIME NOT NULL,
    updated_at TIMESTAMP NOT NULL,
    is_deleted BOOLEAN DEFAULT 0 NOT NULL,
    FOREIGN KEY (user_id)
    REFERENCES users (id)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT
)

-- memosテーブル作成
CREATE TABLE memos (
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    user_id INT  NOT NULL,
    category_id INT  NOT NULL,
    folder_id INT  NOT NULL,
    title VARCHAR(255) NOT NULL,
    cause VARCHAR(255),
    attempt VARCHAR(255),
    solution VARCHAR(255),
    reference VARCHAR(255),
    etc text,
    created_at DATETIME NOT NULL,
    updated_at TIMESTAMP NOT NULL,
    is_solved BOOLEAN DEFAULT 0 NOT NULL,
    is_published BOOLEAN DEFAULT 0 NOT NULL,
    is_deleted BOOLEAN DEFAULT 0 NOT NULL,
    FOREIGN KEY (user_id)
        REFERENCES users (id)
        ON DELETE RESTRICT
        ON UPDATE RESTRICT,
    FOREIGN KEY (category_id)
    REFERENCES catetories (id)
        ON DELETE RESTRICT
        ON UPDATE RESTRICT,
    FOREIGN KEY (folder_id)
    REFERENCES folders (id)
        ON DELETE RESTRICT
        ON UPDATE RESTRICT
)

-- favorite_memosテーブル作成
CREATE TABLE favorite_memos (
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    user_id INT  NOT NULL,
    memo_id INT  NOT NULL,
    created_at DATETIME NOT NULL,
    updated_at TIMESTAMP NOT NULL,
    is_deleted BOOLEAN DEFAULT 0 NOT NULL,
    FOREIGN KEY (user_id)
        REFERENCES users (id)
        ON DELETE RESTRICT
        ON UPDATE RESTRICT,
    FOREIGN KEY (memo_id)
        REFERENCES memos (id)
        ON DELETE RESTRICT
        ON UPDATE RESTRICT
)
-- commentsテーブル作成
CREATE TABLE comments (
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    user_id INT  NOT NULL,
    memo_id INT  NOT NULL,
    content VARCHAR(255) NOT NULL,
    created_at DATETIME NOT NULL,
    updated_at TIMESTAMP NOT NULL,
    is_deleted BOOLEAN DEFAULT 0 NOT NULL,
    FOREIGN KEY (user_id)
        REFERENCES users (id)
        ON DELETE RESTRICT
        ON UPDATE RESTRICT,
    FOREIGN KEY (memo_id)
        REFERENCES memos (id)
        ON DELETE RESTRICT
        ON UPDATE RESTRICT
)

-- followsテーブル作成
CREATE TABLE follows (
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    follower_id INT  NOT NULL,
    following_id INT  NOT NULL,
    created_at DATETIME NOT NULL,
    updated_at TIMESTAMP NOT NULL,
    is_deleted BOOLEAN DEFAULT 0 NOT NULL
)


