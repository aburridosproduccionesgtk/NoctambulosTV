
/* POR DIOS, NO CARGAR ESTE SCRIP EN LA BASE DE DATOS DE PRODUCCION 
* **************************************************************************
 * *********************************************************************************
 * ******************************************************************
 *  POR DIOS, NO CARGAR ESTE SCRIP EN LA BASE DE DATOS DE PRODUCCION 
 */
CREATE USER 'aburridoweb'@'localhost' IDENTIFIED BY  '***';

GRANT USAGE ON * . * TO  'aburridoweb'@'localhost' IDENTIFIED BY  '***' WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0 ;

CREATE DATABASE IF NOT EXISTS  `aburridoweb` ;

GRANT ALL PRIVILEGES ON  `aburridoweb` . * TO  'aburridoweb'@'localhost';


/* POR DIOS, NO CARGAR ESTE SCRIP EN LA BASE DE DATOS DE PRODUCCION 
 * **************************************************************************
 * *********************************************************************************
 * ******************************************************************
 *  POR DIOS, NO CARGAR ESTE SCRIP EN LA BASE DE DATOS DE PRODUCCION 
 */

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(64) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `user_name` varchar(32) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nac` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `comments_fotos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_foto` int(11) NOT NULL,
  `mensaje` varchar(150) CHARACTER SET utf16 COLLATE utf16_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;