-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mar 17, 2018 alle 12:11
-- Versione del server: 10.1.26-MariaDB
-- Versione PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `joketables`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `author`
--

CREATE TABLE `author` (
  `idauthor` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `author`
--

INSERT INTO `author` (`idauthor`, `name`, `email`) VALUES
(1, 'Loris', 'loris@loris.it'),
(2, 'ale', 'ale@ale.it'),
(3, 'samuele', 'samu@samu.com'),
(4, 'antonio', 'antonio@antonio.com'),
(5, 'marco', 'marco@marco.it'),
(6, 'daniel', 'daniel@daniel.com');

-- --------------------------------------------------------

--
-- Struttura della tabella `category`
--

CREATE TABLE `category` (
  `idcategory` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `category`
--

INSERT INTO `category` (`idcategory`, `name`) VALUES
(1, 'Umorismo sulle forze dell\'ordine'),
(2, 'Black humor'),
(3, 'Religiose'),
(4, 'Freddure');

-- --------------------------------------------------------

--
-- Struttura della tabella `joke`
--

CREATE TABLE `joke` (
  `idjoke` int(11) NOT NULL,
  `joketext` text NOT NULL,
  `jokedate` date NOT NULL,
  `authorid` int(11) NOT NULL,
  `likes` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `joke`
--

INSERT INTO `joke` (`idjoke`, `joketext`, `jokedate`, `authorid`, `likes`) VALUES
(1, 'Sai qual\'è il bacio del camionista? E\' un bacio con... Trasporto!', '2018-03-17', 6, 0),
(2, 'Un totano e una seppia stanno litigando animatamente, ad un certo punto della disputa la seppia rivolta al totano sbotta: - ti venisse un polpo!\r\n', '2018-03-17', 4, 0),
(3, 'Dialogo tra panne: - una panna dice ad un\'altra - sai quella tua amica non la sopporto proprio - e perché? risponde l\'altra - e l\'altra gli risponde - è troppo montata', '2018-03-17', 5, 0),
(4, 'Un signore ad un passante: - Mi scusi, sa indicarmi dove si trova piazza dei caduti? Il passante rispose: - Quando inciampo glielo so dire!', '2018-03-07', 1, 0),
(5, 'Tom quarda Gerry con aria preoccupata - stai bene? - si - risponde il topo! - sicuro di non avere la febbre? - insiste il gatto. - ma va! perché sei così ansioso? A quel punto Tom tocca con una zampa l\'amico ed esclama - Ma gerry! ...Scotti!', '2018-03-03', 6, 0),
(6, 'Qual è il calciatore con cui ci si diverte sempre? Neuer... perché non ci anneuer mai', '2018-03-17', 6, 0),
(7, 'Mosè sceso dal monte dice: - Dio mi ha parlato e mi ha dato queste due tavole dove sono scritte le sue leggi, ora io vi chiedo: c\'è tra voi qualcuno che capisce che cavolo di lingua è mai questa?', '2018-03-17', 5, 0),
(8, 'Ci sono le prove che Gesù era italiano: - Solo una Madre italiana può credere che suo figlio sia Dio. - Solo un Figlio italiano vive in casa fino a trent\'anni.', '2018-03-17', 6, 0),
(9, 'Qual\'è l\'unica cosa bianca di un negro?\r\nIl padrone. ', '2018-03-17', 3, 0),
(10, 'Un giorno una vecchia signora mi disse: \"chi va piano, va sano e lontano\"..in quello stesso giorno la vecchia signora venne investita da un\'auto mentre attraversava la strada piano, piano. ', '2018-03-17', 1, 0),
(11, 'Sai cosa hanno di speciale le barzellette sui bambini morti?\r\n\r\nNon diventano mai vecchie. ', '2018-03-17', 2, 0),
(12, 'Sai perchè gli USA non sanno giocare a scacchi? perchè gli mancano due torri.. ', '2018-03-01', 5, 0),
(13, '- \"Come sono andate le ferie in Iraq?!\"\r\n- \"bene, una cannonata!\" ', '2018-03-14', 6, 0),
(14, 'Un cieco e un sordo di fronte ai fuochi d\'artificio:\r\n- \"Boom\"\r\n- \"Verde!\" ', '2018-03-17', 2, 0),
(15, 'Due ciechi si incontrano e se le suonano di santa ragione: non si potevano vedere! ', '2018-03-17', 5, 0);

-- --------------------------------------------------------

--
-- Struttura della tabella `jokecategory`
--

CREATE TABLE `jokecategory` (
  `idjokecategory` int(11) NOT NULL,
  `idjoke` int(11) NOT NULL,
  `idcategory` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `jokecategory`
--

INSERT INTO `jokecategory` (`idjokecategory`, `idjoke`, `idcategory`) VALUES
(1, 13, 2),
(2, 8, 3),
(3, 3, 4),
(4, 12, 2),
(5, 1, 4),
(6, 2, 4),
(7, 4, 4),
(8, 5, 4),
(9, 9, 2),
(10, 7, 3),
(11, 6, 4),
(12, 10, 2),
(13, 11, 2),
(14, 14, 2),
(15, 15, 4);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`idauthor`);

--
-- Indici per le tabelle `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`idcategory`);

--
-- Indici per le tabelle `joke`
--
ALTER TABLE `joke`
  ADD PRIMARY KEY (`idjoke`),
  ADD KEY `authorid` (`authorid`);

--
-- Indici per le tabelle `jokecategory`
--
ALTER TABLE `jokecategory`
  ADD PRIMARY KEY (`idjokecategory`),
  ADD KEY `idjoke` (`idjoke`),
  ADD KEY `idcategory` (`idcategory`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `author`
--
ALTER TABLE `author`
  MODIFY `idauthor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT per la tabella `category`
--
ALTER TABLE `category`
  MODIFY `idcategory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT per la tabella `joke`
--
ALTER TABLE `joke`
  MODIFY `idjoke` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT per la tabella `jokecategory`
--
ALTER TABLE `jokecategory`
  MODIFY `idjokecategory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `joke`
--
ALTER TABLE `joke`
  ADD CONSTRAINT `joke_ibfk_1` FOREIGN KEY (`authorid`) REFERENCES `author` (`idauthor`);

--
-- Limiti per la tabella `jokecategory`
--
ALTER TABLE `jokecategory`
  ADD CONSTRAINT `jokecategory_ibfk_1` FOREIGN KEY (`idjoke`) REFERENCES `joke` (`idjoke`),
  ADD CONSTRAINT `jokecategory_ibfk_2` FOREIGN KEY (`idcategory`) REFERENCES `category` (`idcategory`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
