CREATE TABLE admin_mook (
  user_id INT(5) AUTO_INCREMENT PRIMARY KEY,
  pre_name VARCHAR(6),
  first_name VARCHAR(50),
  last_name VARCHAR(50),
  student_class VARCHAR(6),
  student_number INT(2),
  email VARCHAR(50),
  user_name VARCHAR(50),
  password VARCHAR(50),
  status ENUM('admin_mook','superadmin','student','other') NOT NULL
);
