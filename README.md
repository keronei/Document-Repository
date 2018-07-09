# Document-Repository
Web platform for uploading soft copy documents(policies and other official stuffs) for public access.

Here is the core table used by docs, the `department_id` is a foreign key for referencing info on department.

CREATE TABLE `uploads_` (
`id` int(10) NOT NULL AUTO_INCREMENT,
`path` varchar(500) NOT NULL,
`file_name` varchar(200) NOT NULL,
`date_added` date NOT NULL,
`size` int(5) NOT NULL,
`kind` varchar(10) NOT NULL,
`validity` date NOT NULL,
`department_id` int(10) DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1 |
+----------+-------


The particulars on departments are stored in a table structure like below

CREATE TABLE `departments` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`name` varchar(500) NOT NULL,
`description` varchar(5000) NOT NULL,
`boss_pic_path` varchar(200) NOT NULL,
`headName` varchar(100) DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1 |
+-------------+
