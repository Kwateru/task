DROP TABLE IF EXISTS `academy_db`.`tasks`;
CREATE TABLE `academy_db`.`tasks` (
    `id` INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    `title` VARCHAR(255) NOT NULL,
    `date` DATE NOT NULL,
    `category` VARCHAR(10) NOT NULL,
    `status` VARCHAR(10) NOT NULL,
    `description` TEXT NOT NULL,
    `create_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `finish_flag` TINYINT(1) NOT NULL DEFAULT 0
) DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
