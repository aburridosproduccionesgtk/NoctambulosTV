
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
  `email` varchar(60) NOT NULL,
  `password` varchar(12) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
