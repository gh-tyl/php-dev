CREATE TABLE user_tb (
  uid int NOT NULL,
  fname varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  lname varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  email varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  pass varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  role varchar(100) COLLATE utf8mb4_general_ci NOT NULL
);

-- insert
INSERT INTO user_tb (uid, fname, lname, email, pass, role) VALUES (1, 'John', 'Doe', 'abc@xyz,com', '123456', 'admin');
INSERT INTO user_tb (uid, fname, lname, email, pass, role) VALUES (2, 'Jane', 'Doe', 'abc@xyz,com', '123456', 'user');
INSERT INTO user_tb (uid, fname, lname, email, pass, role) VALUES (3, 'Jo', 'Doe', 'abc@xyz,com', '123456', 'user');
INSERT INTO user_tb (uid, fname, lname, email, pass, role) VALUES (4, 'John', 'De', 'abc@xyz,com', '123456', 'user');

CREATE TABLE reg_tr (
  rid int NOT NULL,
  uid int NOT NULL,
  crn int NOT NULL,
  participation float NOT NULL,
  courseWork float NOT NULL,
  midcourse float NOT NULL,
  finalProject float NOT NULL,
  finalExam float NOT NULL
);

-- insert
INSERT INTO reg_tr (rid, uid, crn, participation, courseWork, midcourse, finalProject, finalExam) VALUES (1, 1, 1, 10, 10, 10, 10, 10);
INSERT INTO reg_tr (rid, uid, crn, participation, courseWork, midcourse, finalProject, finalExam) VALUES (2, 2, 1, 10, 10, 10, 10, 10);
INSERT INTO reg_tr (rid, uid, crn, participation, courseWork, midcourse, finalProject, finalExam) VALUES (3, 3, 1, 10, 10, 10, 10, 10);
INSERT INTO reg_tr (rid, uid, crn, participation, courseWork, midcourse, finalProject, finalExam) VALUES (4, 4, 1, 10, 10, 10, 10, 10);

CREATE TABLE course_tr (
  crn int NOT NULL,
  uid int NOT NULL,
  cid int NOT NULL,
  sDate date NOT NULL,
  eDate date NOT NULL,
  cName varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  campus varchar(100) COLLATE utf8mb4_general_ci NOT NULL
);

-- insert
INSERT INTO course_tr (crn, uid, cid, sDate, eDate, cName, campus) VALUES (1, 1, 1, '2020-01-01', '2020-01-01', 'CSE 101', 'Main Campus');
INSERT INTO course_tr (crn, uid, cid, sDate, eDate, cName, campus) VALUES (2, 2, 1, '2020-01-01', '2020-01-01', 'CSE 101', 'Main Campus');
INSERT INTO course_tr (crn, uid, cid, sDate, eDate, cName, campus) VALUES (3, 3, 1, '2020-01-01', '2020-01-01', 'CSE 101', 'Main Campus');
INSERT INTO course_tr (crn, uid, cid, sDate, eDate, cName, campus) VALUES (4, 4, 1, '2020-01-01', '2020-01-01', 'CSE 101', 'Main Campus');

CREATE TABLE course_tb (
  cid int NOT NULL,
  cName varchar(100) COLLATE utf8mb4_general_ci NOT NULL
);

-- insert
INSERT INTO course_tb (cid, cName) VALUES (1, 'CSE 101');
INSERT INTO course_tb (cid, cName) VALUES (2, 'CSE 102');
INSERT INTO course_tb (cid, cName) VALUES (3, 'CSE 103');
INSERT INTO course_tb (cid, cName) VALUES (4, 'CSE 104');
