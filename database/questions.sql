-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Feb 07, 2023 at 10:56 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int NOT NULL,
  `topic` enum('music','ch-norris','animals','movies','d-n-d','astronautics','technology','ai','geography','sports','science','informatics','gen-knowledge','basketball') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_text` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer-1` varchar(127) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer-2` varchar(127) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer-3` varchar(127) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer-4` varchar(127) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer-5` varchar(127) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `correct` varchar(127) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `topic`, `question_text`, `answer-1`, `answer-2`, `answer-3`, `answer-4`, `answer-5`, `correct`) VALUES
(1, 'cinema', 'Who invented camera?', 'Martin  and Emily', 'Quentin Tarantino', 'Steven Spielberg', 'Lumier brothers', 'Ahmad Faisal', 'answer-4'),
(2, 'cinema', 'Who invented storytelling?', 'Salma Hayek', 'Penelope Cruz', 'Sofia Vergara', 'Ancient Greeks', 'Mesopotamians', 'answer-5'),
(3, 'cinema', 'Who played the lead role in the movie \"Zorba the Greek\"?\r\n', 'Marlon Brando', 'Al Pacino', 'Robert De Niro', 'Yanis Varofakis', 'Anthony Quinn', 'answer-5'),
(4, 'cinema', 'Who directed the film \"Gone by the winds\"?\r\n', 'Martin Scorsese', 'Frank Darabont', 'Steven Spielberg', 'Victor Fleming', 'None of them', 'answer-4'),
(5, 'cinema', 'What is the title of first book about analysis of storytelling?\r\n', 'A new story', 'Aristotles poesy', 'Beggin of storytelling', 'Politea of Plato', 'Antigone of Sofokles', 'answer-2'),
(6, 'cinema', 'Which actor has a role in some of his own films?', 'Marlon Brando', 'Roberto de Niro ', 'Jack Nicholson', 'Jim Jarmusch', 'Golshifte Farahani', 'answer-4'),
(7, 'cinema', 'How many acts has a standard story?', 'Three acts', 'No acts but Actors', 'As many as needed', 'one act', 'None of them', 'answer-1'),
(8, 'cinema', 'What is common between film and theater?', 'Actors', 'Screen', 'Story', 'Director', 'All of them', 'answer-1, answer-3,answer-4'),
(9, 'cinema', 'Who is the author of Pride and Prejudice?', 'David Copperfield', 'Jane Rotchield', 'Jane Timberland', 'Richard Dawkins', 'Jane Austen', 'answer-5'),
(10, 'cinema', 'What is the film  \"Enemy at the Gate\" about?', ' The Battle for Leningrad', ' The Battle for Berlin', ' The Battle for Stalingrad', ' The Battle for Paris', ' The Battle for Athens', 'answer-3'),
(11, 'cinema', 'What is act one in a story about?', 'Starting the story', 'Main Actor or Actoeress', 'Presenting the story', 'Changing the course of story', 'None of them', 'answer-1'),
(12, 'cinema', 'Which Film festival is the first historically?', 'Canne', 'Hollywood', 'Oskar', 'Venice', 'Berlinal', 'answer-4'),
(13, 'cinema', 'Who played the lead role in the movie \"Malena\"?\r\n', 'Marlon Brando', 'Monica Belouchi', 'Robert De Niro', 'Yanis Varofakis', 'Anthony Quinn', 'answer-2'),
(14, 'cinema', 'Who directed the film \"A Time for Drunken Horses\"?\r\n', 'Martin Scorsese', 'Frank Darabont', 'Bahman Ghobadi', 'Victor Fleming', 'Alfred Hitchcock', 'answer-3'),
(15, 'cinema', 'Where was the stories of One Thousand and One Nights drawn?\r\n', 'Ancient stories', 'Aristotles poesy', 'Beggin of storytelling', 'Hezar Afsan', 'Antigone of Sofokles', 'answer-2'),
(16, 'cinema', 'Who plays the lead role in Hiroshima my love?', 'Marlon Brando', 'Emmanuelle Riva', 'Jack Nicholson', 'Lee Okohara', 'Golshifte Farahani', 'answer-2'),
(17, 'cinema', 'What are the main parts of post production?', 'Video record', 'Color grading', 'Sound cut', 'Acting', 'None of them', 'answer-2, answer-3'),
(18, 'cinema', 'Which one is a film Genre?', 'Dramaturgy', 'Drama', 'Story', 'Director', 'All of them', 'answer-2'),
(19, 'cinema', 'What does fiction means?', 'A long story', 'A standard Film', 'A documentary', 'A mocumentary', 'An invented story by the author', 'answer-5'),
(20, 'cinema', 'What does a cinematographer do?', 'Photography', 'Photoshop', 'Camera and Cadrage', 'recording sound', 'recording behind the scenes', 'answer-3'),
(21, 'Tierwelt', 'Welches Säugetier ist für seine fliegenden Fähigkeiten bekannt?', 'Giraffe', 'Fledermaus', 'Elefant', 'Koala', '2')
(22, 'Tierwelt', 'Welche Reptilienart ist dafür berühmt, ihre Beute durch Schlangenbewegungen zu fangen?', 'Schildkröte', 'Krokodil', 'Schlange', 'Eidechse', '3')
(23, 'Tierwelt', 'Welches Meerestier ist für seine Fähigkeit bekannt, Tinte als Verteidigungsmechanismus freizusetzen?', 'Delphin', 'Hai', 'Seestern', 'Oktopus', '4')
(24, 'Tierwelt', 'Welcher Vogel ist für sein imposantes Federkleid und seine Fähigkeit zum Fliegen in großen Höhen bekannt?', 'Pinguin', 'Papagei', 'Adler', 'Kolibri', '3')
(25, 'Tierwelt', 'Welche Art von Insekt ist für ihre sozialen Kolonien und Honigproduktion bekannt?', 'Ameise', 'Käfer', 'Schmetterling', 'Spinne', '1')
(26, 'Tierwelt', 'Welches Säugetier ist für seine Streifen und seine Fähigkeit zum Sprinten bekannt?', 'Bär', 'Zebra', 'Löwe', 'Elefant', '2')
(27, 'Tierwelt', 'Welche amphibische Kreatur verbringt einen Teil ihres Lebens im Wasser und einen Teil an Land?', 'Salamander', 'Krokodil', 'Schildkröte', 'Seepferdchen', '1')
(28, 'Tierwelt', 'Welches Raubtier ist für seine charakteristische Mähne bekannt?', 'Tiger', 'Leopard', 'Gepard', 'Löwe', '4')
(29, 'Tierwelt', 'Welches Meereslebewesen ist für seine leuchtenden Eigenschaften bekannt?', 'Walhai', 'Glühwürmchenfisch', 'Qualle', 'Seepferdchen', '2')
(30, 'Tierwelt', 'Welches Nagetier ist für seine Baufähigkeiten und Holzverarbeitung bekannt?', 'Hamster', 'Maus', 'Biber', 'Eichhörnchen', '3')
(31, 'Tierwelt', 'Welches Tier ist für seine Fähigkeit zur Echolokation bekannt, um Beute zu orten?', 'Fledermaus', 'Eule', 'Delfin', 'Faultier', '1')
(32, 'Tierwelt', 'Welches Tier ist für seine Wanderungen über weite Strecken bekannt, insbesondere in der Serengeti?', 'Elefant', 'Nashorn', 'Antilope', 'Gnu', '4')
(33, 'Tierwelt', 'Welches Tier ist für seine Fähigkeit zum Farbwechsel bekannt und lebt in verschiedenen Meereshabitaten?', 'Chamäleon', 'Tintenfisch', 'Leguan', 'Gecko', '1')
(34, 'Tierwelt', 'Welche Art von Affe ist dafür bekannt, lange Arme und einen langen Schwanz zu haben?', 'Gorilla', 'Orang-Utan', 'Kapuzineraffe', 'Lemur', '2')
(35, 'Tierwelt', 'Welches Meeressäugetier ist dafür bekannt, in Gruppen, auch als "Pods", zu leben?', 'Delfin', 'Wal', 'Seelöwe', 'Robbe', '1'),
(36, 'ch-norris', 'How many push-ups can Chuck Norris do?', '100', 'Chuck Norris doesn''t do push-ups, he pushes the world down', 'None, the Earth pushes down for him', '500', 'Chuck Norris once did a push-up and caused an earthquake', '2,3,5'),
(37, 'ch-norris', 'What does Chuck Norris eat for breakfast?', 'Chuck Norris doesn''t eat breakfast, breakfast eats what Chuck Norris eats', 'Pancakes', 'Cereal', 'Nails Chuck Norris eats nails for breakfast... without any milk.', 'Eggs, bacon and a side of justice', '1,4,5'),
(38, 'ch-norris', 'How does Chuck Norris celebrate his birthday?', 'Chuck Norris doesn''t celebrate birthdays, birthdays celebrate Chuck Norris', 'With a cake', 'With a party', 'With friends', 'With a quiet dinner...', '1'),
(39, 'ch-norris', 'What happens when Chuck Norris enters a room?', 'Chuck Norris doesn''t enter a room, the room makes way for Chuck Norris', 'People greet him', 'The room brightens up', 'Time stops', 'Chairs become uncomfortable, because they know Chuck Norris can break them with a glare', '1,3'),
(40, 'ch-norris', 'Why did Chuck Norris become an actor?', 'Chuck Norris didn''t become an actor, acting became Chuck Norris', 'To showcase his talents', 'To entertain audiences', 'To challenge himself', 'Because Chuck Norris can do anything', '1'),
(41, 'ch-norris', 'How does Chuck Norris cut his hair?', 'Chuck Norris''s hair doesn''t need cutting, it''s naturally perfect', 'With scissors', 'With a chainsaw', 'He doesn''t need to, his hair stays perfect', 'Chuck Norris''s hair cuts itself out of fear.', '5'),
(42, 'ch-norris', 'What does Chuck Norris do in his free time?', 'Chuck Norris doesn''t have free time, time has Chuck Norris', 'Read books', 'Practice martial arts', 'Relax', 'Chuck Norris doesn''t have free time, he has victory time.', '1,5'),
(43, 'ch-norris', 'What is Chuck Norris''s favorite color?', 'Chuck Norris''s favorite color is Chuck Norris', 'Red', 'Black', 'Chuck Norris''s favorite color is all colors', 'Chuck Norris''s favorite color is the color of fear.', '1,5'),
(44, 'ch-norris', 'How does Chuck Norris win arguments?', 'Chuck Norris doesn''t argue, he just wins', 'With logic', 'With persuasion', 'By being right', 'Chuck Norris didn''t win arguments, arguments became Chuck Norris.', '1,5'),
(45, 'ch-norris', 'What is Chuck Norris''s favorite hobby?', 'Chuck Norris doesn''t have hobbies, hobbies have Chuck Norris', 'Painting', 'Fishing', 'Roundhouse kicking', 'Chuck Norris''s favorite hobby is being Chuck Norris.', '1,5'),
(46, 'ch-norris', 'How does Chuck Norris drink his coffee?', 'Chuck Norris doesn''t need coffee, coffee needs Chuck Norris', 'With cream and sugar', 'With a straw', 'Chuck Norris doesn''t drink coffee, he drinks victory', 'Chuck Norris drinks coffee by staring at the cup until it surrenders its caffeine.', '1,4,5'),
(47, 'ch-norris', 'What does Chuck Norris do before going to bed?', 'wash his theeth', 'Read a book', 'Meditate', 'Chuck Norris doesn''t sleep, he waits', 'Chuck Norris doesn''t need to prepare for bed, bed prepares for Chuck Norris.', '4,5'),
(48, 'ch-norris', 'How does Chuck Norris handle stress?',  'Deep breathing', 'Chuck Norris uses stress as a training tool', 'Yoga', 'Chuck Norris doesn''t get stressed', 'Chuck Norris handles stress by roundhouse kicking it into oblivion.', '2,5'),
(49, 'ch-norris', 'What does Chuck Norris do when he''s sick?', 'Chuck Norris''s immune system fights illness', 'Take medicine', 'Power through it', 'Chuck Norris doesn''t get sick', 'Chuck Norris sickens the sickness.', '5'),
(50, 'ch-norris', 'What does Chuck Norris say to fear?', 'Chuck Norris doesn''t say anything to fear, fear says sorry to Chuck Norris', '"I''m scared"', '"I''ll face you"', '"Fear who?"', 'Chuck Norris whispers, "Fear is just a four-letter word."', '1,5'),
(51, 'History', 'In welchem Jahr wurde die Berliner Mauer errichtet?', '1961', '1953', '1989', '1'),
(52, 'History', 'Wer war der erste Präsident der Vereinigten Staaten?', 'John Adams', 'Thomas Jefferson', 'George Washington', '3'),
(53, 'History', 'Welches Jahr markiert das Ende des Zweiten Weltkriegs?', '1945', '1939', '1955', '1'),
(54, 'History', 'Was war die Magna Carta?', 'Ein Friedensvertrag', 'Eine Verfassung', 'Ein Abkommen zwischen König John und den Baronen', '3'),
(55, 'History', 'Wer war die Herrscherin des antiken Ägyptens und die letzte Pharaonin?', 'Cleopatra', 'Nefertiti', 'Hatschepsut', '1'),
(56, 'History', 'In welchem Jahr wurde die Unabhängigkeit der Vereinigten Staaten erklärt?', '1776', '1789', '1799', '1'),
(57, 'History', 'Was war die industrielle Revolution?', 'Ein politischer Umsturz', 'Eine soziale Bewegung', 'Ein wirtschaftlicher und technologischer Wandel', '3'),
(58, 'History', 'Wer war der Architekt des Eiffelturms in Paris?', 'Gustave Eiffel', 'Antoni Gaudí', 'Le Corbusier', '1'),
(59, 'History', 'Was war die Renaissance?', 'Ein Zeitalter der Aufklärung', 'Eine kulturelle Wiedergeburt', 'Eine politische Revolution', '2'),
(60, 'History', 'Welches Ereignis führte zur Teilung Deutschlands nach dem Zweiten Weltkrieg?', 'Die Berliner Mauer', 'Die Gründung der NATO', 'Der Marshall-Plan', '1'),
(61, 'History', 'Wer war der Hauptanführer der amerikanischen Bürgerrechtsbewegung?', 'Malcolm X', 'Rosa Parks', 'Martin Luther King Jr.', '3'),
(62, 'History', 'In welchem Jahr endete der Kalte Krieg?', '1989', '1991', '1975', '2'),
(63, 'History', 'Welche antike Stadt wurde durch einen Vulkanausbruch im Jahr 79 n.Chr. zerstört?', 'Athen', 'Rom', 'Pompeji', '3'),
(64, 'History', 'Wer war der erste Mensch, der die Spitze des Mount Everest erreichte?', 'Tenzing Norgay', 'Edmund Hillary', 'Reinhold Messner', '1'),
(65, 'animal', 'Which animal has the biggest heart in the world?', 'Giraffe', 'Elephant', 'Blue al', 'Kanguru', 'blue al'),
(66, 'animal', 'Which is the fastest animal in the world?', 'cheetah', 'horse', 'ostrich', 'cat', 'cheetah'),
(67, 'animal', 'Which animal lives the longest on earth?', 'turtle', 'cobra', 'elephant', 'octopus', 'turtle'),
(68, 'animal', 'Which of the following animal is not a mammal?', 'tiger', 'marsupial', 'fish', 'dog', 'fish'),
(69, 'animal', 'Which fish needs to come up for air?', 'koi fish', 'snapper', 'grouper', 'skate fish', 'koi fish'),
(70, 'animal', 'which animal can only be found in Australia?', 'tiger', 'black swam', 'koala', 'cobra', 'koala'),
(71, 'animal', 'Which animal has the longest gestation period?', 'african elephant', 'kangoru', 'cat', 'tiger', 'african elephant'),	
(72, 'animal', 'how long can camel stay without water?', '2 days', '3 days', '8 days', '15 days', '15 days'),
(73, 'animal', 'which animal does not belong to the cold-blooded animals?', 'reptiles', 'fish', 'insect', 'horse', 'horse'),
(74, 'animal', 'How long can crocodile go without food?', '5 months', '8 months', '1 year', '3 years', '3 years'),



(11, 'basketball', 'Which team holds the record for the longest winning streak in NBA history?\r\n', 'Los Angeles Lakers ', 'Philadelphia 76\'s ', 'Boston Celtics ', 'Golden State Warriors ', 'Memphis Grizzlies ', 'answer-3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
