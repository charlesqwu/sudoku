CREATE TABLE `games` (
  `game_id` int(11) NOT NULL AUTO_INCREMENT,
  `board` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`game_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `steps` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) DEFAULT NULL,
  `game_id` int(11) DEFAULT NULL,
  `row` tinyint(4) DEFAULT NULL,
  `col` tinyint(4) DEFAULT NULL,
  `number` tinyint(4) DEFAULT NULL,
  `step_status` tinyint(4) DEFAULT NULL,
  `game_status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
