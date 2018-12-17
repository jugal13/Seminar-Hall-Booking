CREATE TABLE `halls` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) DEFAULT NULL,
  `location` varchar(10) DEFAULT NULL,
  `capacity` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
);

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hall_name` varchar(25) DEFAULT NULL,
  `slot_date` date DEFAULT NULL,
  `person_name` varchar(25) DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO `halls` (`id`, `name`, `location`, `capacity`)
VALUES
	(1, 'Apex Seminar Hall', 'Apex Block', 600),
	(2, 'DES Hi-tech Seminar Hall', 'DES Block', 250),
	(3, 'ESB Small Seminar Hall', 'ESB Block', 300),
	(4, 'ESB Big Seminar Hall ', 'ESB Block', 400),
	(5, 'LHC Seminar Hall 1', 'LHC Block', 150),
	(6, 'LHC Seminar Hall 2', 'LHC Block', 150);

INSERT INTO `schedule` (`id`, `hall_name`, `slot_date`, `person_name`, `start_time`, `end_time`)
VALUES
	(1, 'ESB Small Seminar Hall', '2018-12-17', 'test', '12:00:00', '14:00:00'),
	(2, 'Apex Seminar Hall', '2018-12-24', 'test1', '13:00:00', '15:00:00'),
	(3, 'DES Hi-tech Seminar Hall', '2018-12-16', 'test2', '16:00:00', '18:00:00'),
	(4, 'LHC Seminar Hall 1', '2018-12-18', 'test3', '16:00:00', '17:00:00');
