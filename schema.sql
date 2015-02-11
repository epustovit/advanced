CREATE TABLE Categories (
	`Category_ID` int(10) NOT NULL AUTO_INCREMENT,
	`Name` varchar(32) NOT NULL,
	PRIMARY KEY(`Category_ID`)
);

CREATE TABLE Items (
	`Item_ID` int(10) NOT NULL AUTO_INCREMENT,
	`Name` varchar(32) NOT NULL,
	`Description` varchar(256),
	`PhotoPath` varchar(128),
	`Price` decimal(10,2),
	`Category_ID` int(10) NOT NULL,
	PRIMARY KEY(`Item_ID`),
	CONSTRAINT `FK_Category` FOREIGN KEY (`Category_ID`) REFERENCES `Categories` (`Category_ID`) ON DELETE CASCADE ON UPDATE CASCADE	
);

CREATE TABLE user (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`username` varchar(255) NOT NULL,
	`role` int(11) NOT NULL DEFAULT 10,
	`auth_key` varchar(32) NOT NULL,
	`password_hash` varchar(255) NOT NULL,
	`password_reset_token` varchar(255),
	`email` varchar(255) NOT NULL,
	`status` smallint(6) NOT NULL DEFAULT 10,
	`created_at` int(11) NOT NULL,
	`updated_at` int(11) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE Orders (
	`Item_ID` int(10) NOT NULL,
	`User_ID` int(11) NOT NULL,
	CONSTRAINT `PK_Order` PRIMARY KEY (`Item_ID`, `User_ID`),
	CONSTRAINT `FK_Item` FOREIGN KEY (`Item_ID`) REFERENCES `Items` (`Item_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
	CONSTRAINT `FK_User` FOREIGN KEY (`User_ID`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE		
);


