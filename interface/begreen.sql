-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Φιλοξενητής: localhost
-- Χρόνος δημιουργίας: 05 Μαρ 2012 στις 12:15:43
-- Έκδοση Διακομιστή: 5.5.16
-- Έκδοση PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Βάση: `begreen`
--

-- --------------------------------------------------------

--
-- Δομή Πίνακα για τον Πίνακα `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `companyID` int(11) NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `affiliation_date` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `company_manager` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `program_manager` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`companyID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Άδειασμα δεδομένων του πίνακα `company`
--

INSERT INTO `company` (`companyID`, `name`, `description`, `affiliation_date`, `company_manager`, `program_manager`) VALUES
(1, 'public_polukatastimata', 'polukatastimata se oli tin ellada', '4/10/2011', 'giwrgos stefanou', '7'),
(2, 'oxete', 'katastimata kosmimatwn!!!!!!!', '13/5/2011', 'stefanos', '7'),
(3, 'koukou', 'katastima paixnidiwn', '3/9/2011', 'panos', '7');

-- --------------------------------------------------------

--
-- Δομή Πίνακα για τον Πίνακα `gift`
--

CREATE TABLE IF NOT EXISTS `gift` (
  `giftID` int(11) NOT NULL AUTO_INCREMENT,
  `description` text CHARACTER SET utf8 COLLATE utf8_bin,
  `price` float NOT NULL,
  `suitability` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `name` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `company` int(11) NOT NULL,
  PRIMARY KEY (`giftID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Άδειασμα δεδομένων του πίνακα `gift`
--

INSERT INTO `gift` (`giftID`, `description`, `price`, `suitability`, `points`, `name`, `company`) VALUES
(1, 'kosmima', 100, 2, 100, 'vraxioli!!!', 2),
(2, 'dwroepitagi aksias 100 euro', 100, 3, 100, 'dwroepitagi', 1),
(3, 'loutrino arkoudaki mesaiou megethous', 30, 4, 20, 'loutrino arkoudaki', 3),
(4, 'karotsaki mwrou me alouminenio skeleto', 200, 5, 150, 'karotsaki mwrou', 3),
(5, 'set kolie kai vraxioli asimenia', 300, 2, 200, 'kolie-vraxioli', 2),
(6, 'mp3 player mnimis 8GB marka sony', 120, 3, 75, 'mp3 player', 1),
(8, 'ta 7 vivlia tis seiras', 200, 3, 300, 'Harry Potter', 1);

-- --------------------------------------------------------

--
-- Δομή Πίνακα για τον Πίνακα `kiosk`
--

CREATE TABLE IF NOT EXISTS `kiosk` (
  `kioskID` int(11) NOT NULL AUTO_INCREMENT,
  `address` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `municipality` int(11) NOT NULL,
  PRIMARY KEY (`kioskID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Άδειασμα δεδομένων του πίνακα `kiosk`
--

INSERT INTO `kiosk` (`kioskID`, `address`, `municipality`) VALUES
(1, 'aristotelous 1', 1),
(2, 'gervrgiou papandreou 3', 2),
(3, 'karaiskaki 137', 3),
(4, 'anthewn 67', 1),
(5, 'nikis 120', 1),
(6, 'delfwn 4', 3);

-- --------------------------------------------------------

--
-- Δομή Πίνακα για τον Πίνακα `kiosk_material`
--

CREATE TABLE IF NOT EXISTS `kiosk_material` (
  `KMID` int(11) NOT NULL AUTO_INCREMENT,
  `kioskID` int(11) NOT NULL,
  `materialID` int(11) NOT NULL,
  PRIMARY KEY (`KMID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Άδειασμα δεδομένων του πίνακα `kiosk_material`
--

INSERT INTO `kiosk_material` (`KMID`, `kioskID`, `materialID`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 2, 4),
(5, 2, 1),
(6, 2, 5),
(7, 5, 4),
(8, 3, 3),
(9, 6, 1),
(10, 6, 3),
(11, 5, 2),
(12, 4, 2),
(13, 6, 6),
(14, 3, 7);

-- --------------------------------------------------------

--
-- Δομή Πίνακα για τον Πίνακα `material`
--

CREATE TABLE IF NOT EXISTS `material` (
  `materialID` int(11) NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`materialID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Άδειασμα δεδομένων του πίνακα `material`
--

INSERT INTO `material` (`materialID`, `name`) VALUES
(1, 'xarti'),
(2, 'alouminio'),
(3, 'plastiko'),
(4, 'guali'),
(5, 'ilektriki suskeui'),
(6, 'ladi'),
(7, 'sidero');

-- --------------------------------------------------------

--
-- Δομή Πίνακα για τον Πίνακα `municipality`
--

CREATE TABLE IF NOT EXISTS `municipality` (
  `municipalityID` int(11) NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`municipalityID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Άδειασμα δεδομένων του πίνακα `municipality`
--

INSERT INTO `municipality` (`municipalityID`, `name`) VALUES
(1, 'thessaloniki'),
(2, 'evosmos'),
(3, 'kalamaria'),
(4, 'panorama'),
(5, 'neapoli'),
(6, 'pulaia');

-- --------------------------------------------------------

--
-- Δομή Πίνακα για τον Πίνακα `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `surname` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `phone_number` int(10) NOT NULL,
  `municipality` int(11) NOT NULL,
  `date_of_birth` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `gender` bit(1) NOT NULL,
  `identity_number` text CHARACTER SET utf8 COLLATE utf8_bin,
  `parent` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Άδειασμα δεδομένων του πίνακα `person`
--

INSERT INTO `person` (`ID`, `name`, `surname`, `phone_number`, `municipality`, `date_of_birth`, `gender`, `identity_number`, `parent`) VALUES
(1, 'thomai', 'stathopoulou', 2147483647, 1, '10/10/1987', b'1', 'X242576', NULL),
(3, 'katerina', 'iliakopoulou', 123456, 2, '13/6/1988', b'1', 'A123456', NULL),
(4, 'asteris', 'pliatskas', 1234567, 3, '21/2/1988', b'0', 'AA987654', NULL),
(5, 'alexandros', 'filotheou', 123456, 1, '7/11/1987', b'0', 'X666666', NULL),
(6, '', '', 123, 1, '0.000503271263210870', b'1', NULL, NULL),
(7, 'nam', 'surame', 123, 1, '12/12/1987', b'1', 'identity_nber', 0),
(8, 'asd', 'asd', 213, 1, '12/12/1', b'1', 'qe', 1),
(9, 'asd', 'asd', 213, 1, '12/12/1', b'1', 'qe', 1),
(10, 'x', 'x', 1, 1, '1/1/1', b'1', '1', 1),
(11, 'f', 'f', 1, 1, '1/1/3', b'1', 'sef', 3),
(12, 'er', 'er', 345, 1, '1/1/2', b'1', '1', 2),
(13, 'r', 'r', 1234, 1, '1/1/1', b'1', 'r', 1),
(14, 'r', 'r', 1234, 1, '1/1/1', b'1', 'r', 1),
(15, 'r', 'r', 1234, 1, '1/1/1', b'1', 'r', 1),
(16, 'r', 'r', 1234, 1, '1/1/1', b'1', 'r', 1),
(17, 'pitsa', 'pi', 123456789, 2, '10/10/', b'1', 'x242576', 0),
(18, 'Th', 'Sta', 2147483647, 2, '10/10/1987', b'1', 'x242576', 0);

-- --------------------------------------------------------

--
-- Δομή Πίνακα για τον Πίνακα `recycler`
--

CREATE TABLE IF NOT EXISTS `recycler` (
  `cardID` int(11) NOT NULL AUTO_INCREMENT,
  `ID` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `number_of_received_gifts` int(11) NOT NULL,
  `last_recycled` text CHARACTER SET utf8 COLLATE utf8_bin,
  `active_since` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`cardID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Άδειασμα δεδομένων του πίνακα `recycler`
--

INSERT INTO `recycler` (`cardID`, `ID`, `points`, `number_of_received_gifts`, `last_recycled`, `active_since`) VALUES
(1, 1, 1000, 3, '12/12/2011', '1/3/2011'),
(2, 3, 200, 1, '1/3/2011', '23/2/2011'),
(3, 15, 0, 0, NULL, '20/1/2012'),
(4, 16, 0, 0, NULL, '20/1/2012'),
(5, 17, 0, 0, NULL, '20/1/2012'),
(6, 18, 0, 0, NULL, '0.000165672630715705');

-- --------------------------------------------------------

--
-- Δομή Πίνακα για τον Πίνακα `recycler_kiosk_material`
--

CREATE TABLE IF NOT EXISTS `recycler_kiosk_material` (
  `RKMID` int(11) NOT NULL AUTO_INCREMENT,
  `cardID` int(11) NOT NULL,
  `kioskID` int(11) NOT NULL,
  `materialID` int(11) NOT NULL,
  `quantity` float NOT NULL,
  `date_of_recycling` text NOT NULL,
  PRIMARY KEY (`RKMID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Άδειασμα δεδομένων του πίνακα `recycler_kiosk_material`
--

INSERT INTO `recycler_kiosk_material` (`RKMID`, `cardID`, `kioskID`, `materialID`, `quantity`, `date_of_recycling`) VALUES
(1, 1, 1, 2, 13, '12/2/2011'),
(2, 1, 2, 1, 25, '23/7/2011'),
(3, 2, 3, 4, 56, '7/8/2011');

-- --------------------------------------------------------

--
-- Δομή Πίνακα για τον Πίνακα `worker`
--

CREATE TABLE IF NOT EXISTS `worker` (
  `workerID` int(11) NOT NULL AUTO_INCREMENT,
  `ID` int(11) NOT NULL,
  `working_hours` bit(1) NOT NULL,
  `recruitement_date` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `checkout_date` text CHARACTER SET utf8 COLLATE utf8_bin,
  `occupation` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `contract` int(11) NOT NULL,
  `comment` text CHARACTER SET utf8 COLLATE utf8_bin,
  `salary` float NOT NULL,
  PRIMARY KEY (`workerID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Άδειασμα δεδομένων του πίνακα `worker`
--

INSERT INTO `worker` (`workerID`, `ID`, `working_hours`, `recruitement_date`, `checkout_date`, `occupation`, `contract`, `comment`, `salary`) VALUES
(1, 1, b'1', '1/2/2011', '1/5/2011', 'upallilos peripterou', 3, NULL, 1000),
(2, 1, b'1', '2/5/2011', '2/8/2011', 'upallilos peripterou', 3, NULL, 1000),
(3, 1, b'1', '3/8/2011', '', 'upallilos peripterou', 0, 'geia', 5000),
(4, 3, b'1', '4/3/2011', '4/9/2011', 'upallilos peripterou', 9, NULL, 1000),
(5, 3, b'1', '5/9/2011', '', 'upallilos peripterou', 0, 'ptisapitsa', 1000),
(6, 5, b'0', '3/5/2011', '4/7/2011', 'upallilos peripterou', 12, 'paraitisi', 1000),
(7, 4, b'1', '12/3/2011', NULL, 'working with company', 12, NULL, 800);

-- --------------------------------------------------------

--
-- Δομή Πίνακα για τον Πίνακα `worker_kiosk`
--

CREATE TABLE IF NOT EXISTS `worker_kiosk` (
  `WKID` int(11) NOT NULL AUTO_INCREMENT,
  `workerID` int(11) NOT NULL,
  `kioskID` int(11) NOT NULL,
  `working_since` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `working_until` text CHARACTER SET utf8 COLLATE utf8_bin,
  PRIMARY KEY (`WKID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Άδειασμα δεδομένων του πίνακα `worker_kiosk`
--

INSERT INTO `worker_kiosk` (`WKID`, `workerID`, `kioskID`, `working_since`, `working_until`) VALUES
(1, 1, 1, '12/3/2011', '12/4/2011'),
(2, 1, 2, '13/4/2011', NULL),
(3, 1, 3, '30/9/2011', NULL),
(4, 2, 2, '30/7/2011', '29/9/2011'),
(5, 3, 4, '4/4/2011', NULL),
(6, 4, 5, '23/11/2011', '23/12/2011'),
(7, 6, 5, '23/6/2011', NULL),
(8, 5, 5, '21/3/2011', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
