CREATE TABLE `horarios` (
  `codprofessor` int(7) NOT NULL,
  `segm` varchar(80) COLLATE utf8mb4_unicode_ci,
  `segn` varchar(80) COLLATE utf8mb4_unicode_ci,
  `term` varchar(80) COLLATE utf8mb4_unicode_ci,
  `tern` varchar(80) COLLATE utf8mb4_unicode_ci,
  `quam` varchar(80) COLLATE utf8mb4_unicode_ci,
  `quan` varchar(80) COLLATE utf8mb4_unicode_ci,
  `quim` varchar(80) COLLATE utf8mb4_unicode_ci,
  `quin` varchar(80) COLLATE utf8mb4_unicode_ci,
  `sexm` varchar(80) COLLATE utf8mb4_unicode_ci,
  `sexn` varchar(80) COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

ALTER TABLE `horarios`
  ADD PRIMARY KEY (`codprofessor`);
COMMIT;
