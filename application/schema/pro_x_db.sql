drop database if exists `pro_x`;

create database `pro_x`;

use `pro_x`;

create table if not exists `user_status` (
	`id` int(4) not null auto_increment,
	`name` varchar(30) not null,
	`description` text null,
	primary key (`id`)
);

create table if not exists `user_role` (
	`id` int(4) not null auto_increment,
	`name` varchar(30) not null,
	`description` text null,
	primary key (`id`)
);

create table if not exists `user` (
	`id` int(4) not null auto_increment,
	`unique_id` varchar(10) not null,
	`user_status_id` int(4) not null,
	`user_role_id` int(4) not null,
	`fullname` varchar(80) not null,
	`gender` varchar(20) not null,
	`phone_no` varchar(15) not null,
	`email` varchar(50) null,
	`username` varchar(30) not null,
	`password` varchar(255) not null,
	`passport_url` varchar(255) null,
	`created_at` datetime not null,
	`updated_at` datetime not null,
	primary key (`id`),
	foreign key (`user_status_id`) references user_status(`id`),
	foreign key (`user_role_id`) references user_role(`id`)
);

create table if not exists `module` (
	`id` int(4) not null auto_increment,
	`name` varchar(30) not null,
	`description` text null,
	primary key (`id`)
);

create table if not exists `accessibility` (
	`id` int(4) not null auto_increment,
	`user_id` int(4) not null,
	`module_id` int(4) not null,
	`created_at` datetime not null,
	primary key (`id`)
);

create table if not exists `category` (
	`id` int(8) not null auto_increment,
	`name` varchar(30) not null,
	`description` text null,
	`created_at` datetime not null,
	`updated_at` datetime not null,
	primary key (`id`)
);

create table if not exists `product` (
	`id` int(8) not null auto_increment,
	`category_id` int(8) not null,
	`user_id` int(4) not null,
	`brand_name` varchar(100) not null,
	`batch_no` varchar(50) not null,
	`production_date` datetime not null,
	`expiry_date` datetime not null,
	`initial_qty` int(10) not null,
	`sold_qty` int(10) not null,
	`weight` varchar(30) null,
	`created_at` datetime not null,
	`updated_at` datetime not null,
	primary key (`id`),
	foreign key (`category_id`) references category(`id`),
	foreign key (`user_id`) references user(`id`)
);

insert into user_status (`name`, `description`) values
('Active', 'This user is active.'),
('Suspended', 'This user has been suspended.'),
('Fired', 'This user was fired.'),
('Retired', 'This user is retired.'),
('Resigned', 'This user resigned.');

insert into user_role (`name`, `description`) values
('Administrator', 'This is the default admin, has access to the whole modules.'),
('Manager', 'This is the owner of the shop.'),
('Staff', 'This is an employee.');

insert into user (`unique_id`, `user_status_id`, `user_role_id`, `fullname`, `gender`, `phone_no`, `email`, `username`, `password`, `passport_url`, `created_at`, `updated_at`) values
('uyY87jaK', 1, 1, 'Default Administrator', 'Rather not Say', '+2340123456789', 'defaultAdmin@pro-x.com', 'admin', 'sasdfajhdgjf', null, NOW(), NOW());

commit;
