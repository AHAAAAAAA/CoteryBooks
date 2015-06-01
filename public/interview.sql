# ************************************************************
# Sequel Pro SQL dump
# Version 4135
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.5.38)
# Database: interview
# Generation Time: 2015-05-19 00:46:35 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table authors
# ------------------------------------------------------------

DROP TABLE IF EXISTS `authors`;

CREATE TABLE `authors` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `authors` WRITE;
/*!40000 ALTER TABLE `authors` DISABLE KEYS */;

INSERT INTO `authors` (`id`, `name`)
VALUES
	(1,'Victor Hugo'),
	(2,'Jules Verne'),
	(3,'Alexandre Dumas'),
	(4,'Leo Tolstoy'),
	(5,'H.G. Wells');

/*!40000 ALTER TABLE `authors` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table books
# ------------------------------------------------------------

DROP TABLE IF EXISTS `books`;

CREATE TABLE `books` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int(3) NOT NULL,
  `title` varchar(200) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `books` WRITE;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;

INSERT INTO `books` (`id`, `author_id`, `title`, `text`)
VALUES
	(1,1,'Les Misérables','The two most memorable barricades which the observer of social diseases can mention do not belong to the period in which the action of this book is laid. These two barricades, both symbols under different aspects of a formidable situation, emerged from the earth during the fatal insurrection of June, 1848, the greatest street-war which history has seen. It happens sometimes that the canaille, that great despairing crowd, contrary to principles, even contrary to liberty, equality, and fraternity, even contrary to the universal vote, the government of all by all, protests, in the depths of its agony, its discouragement, its destitution, its fevers, its distresses, its miasmas, its ignorance, and its darkness, and the populace offers battle to the people. The beggars attack the common right, the ochlocracy rises in insurrection against the demos. Those are mournful days; for there is always a certain amount of right even in this mania, there is suicide in this duel, and these words, intended to be insults, such as beggars, canaille, ochlocracy, and populace, prove, alas! rather the fault of those who reign than the fault of those who suffer; rather the fault of the privileged than the fault of the disinherited. For our part, we never pronounce these words without grief and respect, for when philosophy probes the facts with which they correspond it often finds much grandeur by the side of misery. Athens was an ochlocracy; the beggars produced Holland; the populace more than once saved Rome; and the canaille followed the Saviour. There is no thinker who has not at times contemplated the magnificence below. Saint Jerome doubtless thought of this canaille, of all these poor people, all these vagabonds, and all the wretches whence the apostles and martyrs issued, when he uttered the mysterious words,—\"Fex urbis, lux orbis.\"'),
	(2,1,'Notre-dame de Paris','Three hundred and forty-eight years, six months, and nineteen days ago to-day, the Parisians awoke to the sound of all the bells in the triple circuit of the city, the university, and the town ringing a full peal.\nThe sixth of January, 1482, is not, however, a day of which history has preserved the memory. There was nothing notable in the event which thus set the bells and the bourgeois of Paris in a ferment from early morning. It was neither an assault by the Picards nor the Burgundians, nor a hunt led along in procession, nor a revolt of scholars in the town of Laas, nor an entry of \"our much dread lord, monsieur the king,\" nor even a pretty hanging of male and female thieves by the courts of Paris. Neither was it the arrival, so frequent in the fifteenth century, of some plumed and bedizened embassy. It was barely two days since the last cavalcade of that nature, that of the Flemish ambassadors charged with concluding the marriage between the dauphin and Marguerite of Flanders, had made its entry into Paris, to the great annoyance of M. le Cardinal de Bourbon, who, for the sake of pleasing the king, had been obliged to assume an amiable mien towards this whole rustic rabble of Flemish burgomasters, and to regale them at his Hôtel de Bourbon, with a very \"pretty morality, allegorical satire, and farce,\" while a driving rain drenched the magnificent tapestries at his door.'),
	(3,2,'Around the World in 80 Days','Mr. Phileas Fogg lived, in 1872, at No. 7, Saville Row, Burlington Gardens, the house in which Sheridan died in 1814. He was one of the most noticeable members of the Reform Club, though he seemed always to avoid attracting attention; an enigmatical personage, about whom little was known, except that he was a polished man of the world. People said that he resembled Byron—at least that his head was Byronic; but he was a bearded, tranquil Byron, who might live on a thousand years without growing old.'),
	(4,2,'Twenty Thousand Leagues under the Sea','The year 1866 was signalised by a remarkable incident, a mysterious and puzzling phenomenon, which doubtless no one has yet forgotten. Not to mention rumours which agitated the maritime population and excited the public mind, even in the interior of continents, seafaring men were particularly excited. Merchants, common sailors, captains of vessels, skippers, both of Europe and America, naval officers of all countries, and the Governments of several States on the two continents, were deeply interested in the matter.'),
	(5,2,'A Journey to the Center of the Earth','Looking back to all that has occurred to me since that eventful day, I am scarcely able to believe in the reality of my adventures. They were truly so wonderful that even now I am bewildered when I think of them.\n\nMy uncle was a German, having married my mother\'s sister, an Englishwoman. Being very much attached to his fatherless nephew, he invited me to study under him in his home in the fatherland. This home was in a large town, and my uncle a professor of philosophy, chemistry, geology, mineralogy, and many other ologies.\n\nOne day, after passing some hours in the laboratory—my uncle being absent at the time—I suddenly felt the necessity of renovating the tissues—i.e., I was hungry, and was about to rouse up our old French cook, when my uncle, Professor Von Hardwigg, suddenly opened the street door, and came rushing upstairs.\n'),
	(7,3,'The Man in the Iron Mask','Since Aramis\'s singular transformation into a confessor of the order, Baisemeaux was no longer the same man. Up to that period, the place which Aramis had held in the worthy governor\'s estimation was that of a prelate whom he respected and a friend to whom he owed a debt of gratitude; but now he felt himself an inferior, and that Aramis was his master. He himself lighted a lantern, summoned a turnkey, and said, returning to Aramis, \"I am at your orders, monseigneur.\" Aramis merely nodded his head, as much as to say, \"Very good\"; and signed to him with his hand to lead the way. Baisemeaux advanced, and Aramis followed him. It was a calm and lovely starlit night; the steps of three men resounded on the flags of the terraces, and the clinking of the keys hanging from the jailer\'s girdle made itself heard up to the stories of the towers, as if to remind the prisoners that the liberty of earth was a luxury beyond their reach. It might have been said that the alteration effected in Baisemeaux extended even to the prisoners. The turnkey, the same who, on Aramis\'s first arrival had shown himself so inquisitive and curious, was now not only silent, but impassible. He held his head down, and seemed afraid to keep his ears open. In this wise they reached the basement of the Bertaudiere, the two first stories of which were mounted silently and somewhat slowly; for Baisemeaux, though far from disobeying, was far from exhibiting any eagerness to obey. On arriving at the door, Baisemeaux showed a disposition to enter the prisoner\'s chamber; but Aramis, stopping him on the threshold, said, \"The rules do not allow the governor to hear the prisoner\'s confession.\"'),
	(8,3,'The Three Musketeers','On the first Monday of the month of April, 1625, the market town of Meung, in which the author of ROMANCE OF THE ROSE was born, appeared to be in as perfect a state of revolution as if the Huguenots had just made a second La Rochelle of it. Many citizens, seeing the women flying toward the High Street, leaving their children crying at the open doors, hastened to don the cuirass, and supporting their somewhat uncertain courage with a musket or a partisan, directed their steps toward the hostelry of the Jolly Miller, before which was gathered, increasing every minute, a compact group, vociferous and full of curiosity.'),
	(9,4,'War and Peace','\"Well, Prince, so Genoa and Lucca are now just family estates of the Buonapartes. But I warn you, if you don\'t tell me that this means war, if you still try to defend the infamies and horrors perpetrated by that Antichrist—I really believe he is Antichrist—I will have nothing more to do with you and you are no longer my friend, no longer my \'faithful slave,\' as you call yourself! But how do you do? I see I have frightened you—sit down and tell me all the news.\"'),
	(10,4,'Anna Karenina','Happy families are all alike; every unhappy family is unhappy in its own way.\nEverything was in confusion in the Oblonskys’ house. The wife had discovered that the husband was carrying on an intrigue with a French girl, who had been a governess in their family, and she had announced to her husband that she could not go on living in the same house with him. This position of affairs had now lasted three days, and not only the husband and wife themselves, but all the members of their family and household, were painfully conscious of it. Every person in the house felt that there was no sense in their living together, and that the stray people brought together by chance in any inn had more in common with one another than they, the members of the family and household of the Oblonskys. The wife did not leave her own room, the husband had not been at home for three days. The children ran wild all over the house; the English governess quarreled with the housekeeper, and wrote to a friend asking her to look out for a new situation for her; the man-cook had walked off the day before just at dinner time; the kitchen-maid, and the coachman had given warning.'),
	(11,5,'The Time Machine','The Time Traveller (for so it will be convenient to speak of him) was expounding a recondite matter to us. His grey eyes shone and twinkled, and his usually pale face was flushed and animated. The fire burned brightly, and the soft radiance of the incandescent lights in the lilies of silver caught the bubbles that flashed and passed in our glasses. Our chairs, being his patents, embraced and caressed us rather than submitted to be sat upon, and there was that luxurious after-dinner atmosphere when thought roams gracefully free of the trammels of precision. And he put it to us in this way—marking the points with a lean forefinger—as we sat and lazily admired his earnestness over this new paradox (as we thought it) and his fecundity.'),
	(12,5,'The War of the Worlds','No one would have believed in the last years of the nineteenth century that this world was being watched keenly and closely by intelligences greater than man\'s and yet as mortal as his own; that as men busied themselves about their various concerns they were scrutinised and studied, perhaps almost as narrowly as a man with a microscope might scrutinise the transient creatures that swarm and multiply in a drop of water. With infinite complacency men went to and fro over this globe about their little affairs, serene in their assurance of their empire over matter. It is possible that the infusoria under the microscope do the same. No one gave a thought to the older worlds of space as sources of human danger, or thought of them only to dismiss the idea of life upon them as impossible or improbable. It is curious to recall some of the mental habits of those departed days. At most terrestrial men fancied there might be other men upon Mars, perhaps inferior to themselves and ready to welcome a missionary enterprise. Yet across the gulf of space, minds that are to our minds as ours are to those of the beasts that perish, intellects vast and cool and unsympathetic, regarded this earth with envious eyes, and slowly and surely drew their plans against us. And early in the twentieth century came the great disillusionment.'),
	(13,5,'The Invisible Man','The stranger came early in February, one wintry day, through a biting wind and a driving snow, the last snowfall of the year, over the down, walking from Bramblehurst railway station, and carrying a little black portmanteau in his thickly gloved hand. He was wrapped up from head to foot, and the brim of his soft felt hat hid every inch of his face but the shiny tip of his nose; the snow had piled itself against his shoulders and chest, and added a white crest to the burden he carried. He staggered into the \"Coach and Horses\" more dead than alive, and flung his portmanteau down. \"A fire,\" he cried, \"in the name of human charity! A room and a fire!\" He stamped and shook the snow from off himself in the bar, and followed Mrs. Hall into her guest parlour to strike his bargain. And with that much introduction, that and a couple of sovereigns flung upon the table, he took up his quarters in the inn.');

/*!40000 ALTER TABLE `books` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
