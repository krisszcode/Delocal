DROP TABLE IF EXISTS contact;

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `address` varchar(40) NOT NULL,
   PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=11;


INSERT INTO `contact` (id,`name`, `email`, `phone_number`, `address`) VALUES (1,'Erno', 'ernoke@gmail.com', '06301259463', '4325 Kiskunmajsa, Lapatos u. 23'), (2,'Bela', 'bela12@citromail.hu', '06702564113', '3611 Sajoszentpeter, Almas u. 11'), (3,'Peter', 'peti@freemail.hu', '06304574113', '2223 Komlo, Reti u. 23'), (4,'Pali', 'palotaspal@gmail.com', '06307912623', '4235 Palota, Petofi u. 15'), (5,'Abris', 'aberabris@freemail.hu', '06305239443', '1115 Arpadfalva, Szechenyi u. 44'), (6,'Alajos', 'alajoslajos@gmail.com', '06301115196', '7811 Kertesz, Legelo u. 98'), (7,'Domonkos', 'domo23@freemail.hu', '06304259461', '6121 Termelo, Arpad u. 14'), (8,'Demeter', 'demeterodon@citromail.hu', '06301197413', '3232 Baberos, Istvan u. 75'), (9,'Tibor', 'tiborcztibor@freemail.hu', '06204853232', '4612 Vak, Bela u. 26'), (10,'Richard', 'nemethrichard@gmail.hu', '06204116453', '1515 Mezocsat, Peter u. 18')
