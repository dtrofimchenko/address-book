Address Book
============

address_book table:
```
CREATE TABLE `address_book` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `surname` varchar(100) CHARACTER SET utf8 NOT NULL,
  `company` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `position` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `email_personal` varchar(254) CHARACTER SET utf8 DEFAULT NULL,
  `email_work` varchar(254) CHARACTER SET utf8 DEFAULT NULL,
  `phone_personal` varchar(25) CHARACTER SET utf8 DEFAULT NULL,
  `phone_work` varchar(25) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_personal_UNIQUE` (`email_personal`),
  UNIQUE KEY `email_work_UNIQUE` (`email_work`),
  UNIQUE KEY `phone_personal_UNIQUE` (`phone_personal`),
  UNIQUE KEY `phone_work_UNIQUE` (`phone_work`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
```
