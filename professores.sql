CREATE TABLE `professores` (
  `codprofessor` int(7) NOT NULL,
  `nomeprofessor` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

ALTER TABLE `professores`
  ADD PRIMARY KEY (`codprofessor`);
COMMIT;
