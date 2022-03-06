SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
CREATE TABLE `Users` (
  `UserId` int NOT NULL PRIMARY key,
  `Username` varchar(50) NOT NULL,
  `user_pwd` text NOT NULL,
  `user_type` int(1) not null
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `Person` (
  `UserId` int not null,  
  `phone`text not null,
  `user_address` text not null,
  `user_type` int not null,
  `user_mail` text not null
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `CourseInfo` (
   `id` int(30) not null, 
  `subject` varchar(255) not null,
   `person_dpmnt` varchar(255) not null,
  `status` varchar(50) check(`status` = 'Active' and `status` = 'inactive'),
  FOREIGN KEY (`id`) REFERENCES `Person`(`UserId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;