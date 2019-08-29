CREATE TABLE `badges` (
	`type` INT(10) UNSIGNED NOT NULL,
	`ref_id` INT(10) UNSIGNED NOT NULL,
	`badge` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`color` VARCHAR(50) NOT NULL DEFAULT 'badge-primary' COLLATE 'utf8mb4_unicode_ci',
	`order` INT(10) UNSIGNED NOT NULL,
	`visible` INT(10) UNSIGNED NULL DEFAULT 1,
	PRIMARY KEY (`type`, `ref_id`, `badge`),
	INDEX `type` (`type`),
	INDEX `ref_id` (`ref_id`)
)
COLLATE='utf8mb4_unicode_ci'
ENGINE=InnoDB
;