CREATE TABLE `adminf` (
  `id` int(11) NOT NULL,
  `bn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `passwort` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO `adminf` (`id`, `bn`, `passwort`) VALUES
(1, 'Admin', '$2y$10$irjN78vDWUKDqckstZZWEey7ipnOLyOs4FG6T01RxKH5ieZAYC5xi');

CREATE TABLE `adminm` (
  `id` int(11) NOT NULL,
  `bn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `passwort` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `adminm` (`id`, `bn`, `passwort`) VALUES
(1, 'Admin', '$2y$10$irjN78vDWUKDqckstZZWEey7ipnOLyOs4FG6T01RxKH5ieZAYC5xi');



CREATE TABLE `adminp` (
  `id` int(11) NOT NULL,
  `bn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `passwort` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `adminp` (`id`, `bn`, `passwort`) VALUES
(1, 'Admin', '$2y$10$irjN78vDWUKDqckstZZWEey7ipnOLyOs4FG6T01RxKH5ieZAYC5xi');


CREATE TABLE `mechakten` (
  `ID` int(255) NOT NULL,
  `adatum` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `officer` text CHARACTER SET utf8 NOT NULL,
  `vor` text CHARACTER SET utf8mb4 NOT NULL,
  `nach` text CHARACTER SET utf8 NOT NULL,
  `dob` varchar(10) CHARACTER SET utf8 NOT NULL,
  `statements` text CHARACTER SET utf8 NOT NULL,
  `time_of_act` varchar(16) CHARACTER SET utf8 NOT NULL,
  `place_of_act` varchar(255) CHARACTER SET utf8 NOT NULL,
  `course_of_act` text CHARACTER SET utf8 NOT NULL,
  `misc` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `medicakten` (
  `ID` int(255) NOT NULL,
  `adatum` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `officer` text CHARACTER SET utf8 NOT NULL,
  `vor` text CHARACTER SET utf8mb4 NOT NULL,
  `nach` text CHARACTER SET utf8 NOT NULL,
  `dob` varchar(10) CHARACTER SET utf8 NOT NULL,
  `statements` text CHARACTER SET utf8 NOT NULL,
  `time_of_act` varchar(16) CHARACTER SET utf8 NOT NULL,
  `place_of_act` varchar(255) CHARACTER SET utf8 NOT NULL,
  `course_of_act` text CHARACTER SET utf8 NOT NULL,
  `misc` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `policeakten` (
  `ID` int(255) NOT NULL,
  `adatum` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `officer` text CHARACTER SET utf8 NOT NULL,
  `vor` text CHARACTER SET utf8mb4 NOT NULL,
  `nach` text CHARACTER SET utf8 NOT NULL,
  `dob` varchar(10) CHARACTER SET utf8 NOT NULL,
  `statements` text CHARACTER SET utf8 NOT NULL,
  `time_of_act` varchar(16) CHARACTER SET utf8 NOT NULL,
  `place_of_act` varchar(255) CHARACTER SET utf8 NOT NULL,
  `course_of_act` text CHARACTER SET utf8 NOT NULL,
  `misc` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `usersf` (
  `id` int(11) NOT NULL,
  `bn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `passwort` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO `usersf` (`id`, `bn`, `passwort`) VALUES
(1, 'Admin', '$2y$10$irjN78vDWUKDqckstZZWEey7ipnOLyOs4FG6T01RxKH5ieZAYC5xi');

CREATE TABLE `usersm` (
  `id` int(11) NOT NULL,
  `bn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `passwort` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO `usersm` (`id`, `bn`, `passwort`) VALUES
(1, 'Admin', '$2y$10$irjN78vDWUKDqckstZZWEey7ipnOLyOs4FG6T01RxKH5ieZAYC5xi');



CREATE TABLE `usersp` (
  `id` int(11) NOT NULL,
  `bn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `passwort` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `usersp` (`id`, `bn`, `passwort`) VALUES
(1, 'Admin', '$2y$10$irjN78vDWUKDqckstZZWEey7ipnOLyOs4FG6T01RxKH5ieZAYC5xi');


ALTER TABLE `adminf`

ALTER TABLE `adminm`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `adminp`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `mechakten`
  ADD PRIMARY KEY (`ID`);

ALTER TABLE `medicakten`
  ADD PRIMARY KEY (`ID`);

ALTER TABLE `policeakten`
  ADD PRIMARY KEY (`ID`);

ALTER TABLE `usersf`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `usersm`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `usersp`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `adminf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `adminm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `adminp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `mechakten`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

ALTER TABLE `medicakten`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

ALTER TABLE `policeakten`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

ALTER TABLE `usersf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `usersm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `usersp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;
