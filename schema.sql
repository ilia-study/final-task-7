CREATE TABLE `users`
(
    `full_name` VARCHAR(255) NOT NULL,
    `login`     VARCHAR(255) NOT NULL,
    `email`     VARCHAR(255) NOT NULL,
    `password`  VARCHAR(255) NOT NULL,
    `birthday`  VARCHAR(255) NOT NULL
);

CREATE TABLE `Kurses`
(
    `name` VARCHAR(255) NOT NULL,
    `date`     VARCHAR(255) NOT NULL,
    `about`     VARCHAR(255) NOT NULL
);