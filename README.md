# monFramework-php
petite base pour projets en poo avec php

CREATE DATABASE IF NOT EXISTS jeu_poo_php;

CREATE TABLE IF NOT EXISTS `personnages` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8_general_ci NOT NULL,
  `degats` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `nom` (`nom`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
