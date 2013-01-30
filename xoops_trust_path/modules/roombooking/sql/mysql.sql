CREATE TABLE `{prefix}_{dirname}_booking` (
  `booking_id` int(11) unsigned NOT NULL  auto_increment,
  `booking_room_id` int(11) unsigned NOT NULL,
  `booking_user_id` int(11) unsigned NOT NULL,
  `booking_num` int(11),
  `booking_comment` text,
  `title` varchar(255) NOT NULL,
  `posttime` int(11) unsigned NOT NULL,
  PRIMARY KEY  (`booking_id`)) ENGINE=MyISAM;

CREATE TABLE `{prefix}_{dirname}_room` (
  `room_id` int(11) unsigned NOT NULL  auto_increment,
  `room_num` int(11),
  `room_type` boolean,
  `room_speciality1` boolean,
  `room_speciality2` boolean,
  `room_speciality3` boolean,
  `room_comment` text,
  `room_owner_list` text,
  `title` varchar(255) NOT NULL,
  `posttime` int(11) unsigned NOT NULL,
  PRIMARY KEY  (`room_id`)) ENGINE=MyISAM;

