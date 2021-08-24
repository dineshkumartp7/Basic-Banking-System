
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL PRIMARY KEY,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



CREATE TABLE `customer` (
  `id` int(3) NOT NULL PRIMARY KEY,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `customer` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Jhon', 'jhon@gmail.com', 50000),
(2, 'Jake', 'jake@gmail.com', 30000),
(3, 'Charlie', 'charlie@gmail.com', 40000),
(4, 'Maria', 'maria@gmail.com', 50000),
(5, 'Noelle', 'noelle@gmail.com', 40000),
(6, 'Asta', 'asta@gmail.com', 30000);




ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT;


ALTER TABLE `customer`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

COMMIT;