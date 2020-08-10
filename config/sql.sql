-- creation de role
CREATE TABLE `mes_droits`.`role` ( `id` INT NOT NULL AUTO_INCREMENT ,
                                `libelle` INT NOT NULL ,
                                PRIMARY KEY (`id`)
                                ) ENGINE = InnoDB;
-- creation sections
CREATE TABLE `mes_droits`.`sections` ( `id` INT NOT NULL AUTO_INCREMENT ,
                                        `libelle` VARCHAR(200) NOT NULL ,
                                        PRIMARY KEY (`id`)
                                        ) ENGINE = InnoDB;
-- creatoin de user
CREATE TABLE `mes_droits`.`users` ( `id` INT NOT NULL AUTO_INCREMENT ,
                                    `nom` INT NOT NULL ,
                                    `telephone` INT NOT NULL ,
                                    `adresse` INT NOT NULL ,
                                    `id_role` INT NOT NULL ,
                                    PRIMARY KEY (`id`)
                                    ) ENGINE = InnoDB;
-- creation de posts
CREATE TABLE `mes_droits`.`posts` ( `id` INT NOT NULL AUTO_INCREMENT ,
                                    `titre` VARCHAR(200) NOT NULL ,
                                    `date` DATETIME NOT NULL ,
                                    `contenu` TEXT NOT NULL ,
                                    `image` VARCHAR(200) NOT NULL ,
                                    `id_section` INT NOT NULL ,
                                    PRIMARY KEY (`id`)
                                    ) ENGINE = InnoDB;
-- creation de commentaires
CREATE TABLE `mes_droits`.`commentaires` ( `id` INT NOT NULL AUTO_INCREMENT ,
                                        `date` DATETIME NOT NULL ,
                                        `contenu` TEXT NOT NULL ,
                                        `id_user` INT NOT NULL ,
                                        `id_post` INT NOT NULL ,
                                        PRIMARY KEY (`id`)
                                        ) ENGINE = InnoDB;

--fk role dans users
ALTER TABLE `users` ADD CONSTRAINT `FK_user_role` FOREIGN KEY (`id_role`) REFERENCES `role`(`id`) ON DELETE CASCADE ON UPDATE CASCADE;
-- Fk section dans posts
ALTER TABLE `posts` ADD CONSTRAINT `FK_post_section` FOREIGN KEY (`id_section`) REFERENCES `sections`(`id`) ON DELETE CASCADE ON UPDATE CASCADE;
-- FK user dans commantaires
ALTER TABLE `commentaires` ADD CONSTRAINT `FK_commentaire_user` FOREIGN KEY (`id_user`) REFERENCES `users`(`id`) ON DELETE CASCADE ON UPDATE CASCADE;
-- FK posts dans commantaires
ALTER TABLE `commentaires` ADD CONSTRAINT `FK_commentaire_post` FOREIGN KEY (`id_post`) REFERENCES `posts`(`id`) ON DELETE CASCADE ON UPDATE CASCADE;
