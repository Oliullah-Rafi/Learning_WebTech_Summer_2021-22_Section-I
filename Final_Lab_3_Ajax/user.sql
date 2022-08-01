SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Name` varchar(200) NOT NULL,
  `ID` int(200) NOT NULL,
  `Password` varchar(1000) NOT NULL,
  `Phone_Number` int(200) NOT NULL,
  `Email` text NOT NULL,
  `DOB` date NOT NULL,
  `User_Type` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Name`, `ID`, `Password`, `Phone_Number`, `Email`, `DOB`, `User_Type`) VALUES
('partha', 123, '14', 1753102575, 'pppp@gmail.com', '2022-08-02', 'Seller');
COMMIT;

