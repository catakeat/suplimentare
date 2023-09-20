
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `zile_libere` (
  `id` int(11) NOT NULL,
  `ziua` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;


INSERT INTO `zile_libere` (`id`, `ziua`) VALUES
(23, '2023-01-02'),
(24, '2023-01-24'),
(25, '2023-04-14'),
(26, '2023-04-17'),
(27, '2023-05-01'),
(28, '2023-06-01'),
(29, '2023-06-05'),
(30, '2023-08-15'),
(31, '2023-11-30'),
(32, '2023-12-01'),
(33, '2023-12-25'),
(34, '2023-12-26'),
(38, '2023-01-03'),
(39, '2022-12-29'),
(40, '2023-01-23'),
(41, '2023-06-02'),
(42, '2023-08-14');


ALTER TABLE `zile_libere`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `zile_libere`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;
