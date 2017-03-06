-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 01, 2017 at 10:27 AM
-- Server version: 5.1.73
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `CityRealty`
--

-- --------------------------------------------------------

--
-- Table structure for table `CityLarnaca`
--

CREATE TABLE IF NOT EXISTS `CityLarnaca` (
  `CityName` varchar(15) NOT NULL DEFAULT 'Λάρνακα',
  `RegionCode` int(11) NOT NULL AUTO_INCREMENT,
  `RegionName` varchar(25) NOT NULL,
  `NumOfListings` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`RegionCode`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `CityLarnaca`
--

INSERT INTO `CityLarnaca` (`CityName`, `RegionCode`, `RegionName`, `NumOfListings`) VALUES
('Λάρνακα', 1, '﻿Άγιος Θεόδωρος', 0),
('Λάρνακα', 2, 'Άρσος', 0),
('Λάρνακα', 3, 'Αβδελλερό', 0),
('Λάρνακα', 4, 'Αγίοι Βαβατσινιάς', 0),
('Λάρνακα', 5, 'Αγγλισίδες', 0),
('Λάρνακα', 6, 'Αθηένου', 0),
('Λάρνακα', 7, 'Αλαμινός', 0),
('Λάρνακα', 8, 'Αλεθρικό', 0),
('Λάρνακα', 9, 'Αναφωτία', 0),
('Λάρνακα', 10, 'Απλάντα', 0),
('Λάρνακα', 11, 'Αραδίππου', 0),
('Λάρνακα', 12, 'Βάβλα', 0),
('Λάρνακα', 13, 'Βαβατσινιά', 0),
('Λάρνακα', 14, 'Δελίκηπος', 0),
('Λάρνακα', 15, 'Δρομολαξιά', 0),
('Λάρνακα', 16, 'Ζύγι', 0),
('Λάρνακα', 17, 'Κάτω Δρυς', 0),
('Λάρνακα', 18, 'Κάτω Λεύκαρα', 0),
('Λάρνακα', 19, 'Κίτι', 0),
('Λάρνακα', 20, 'Καλαβασός', 0),
('Λάρνακα', 21, 'Καλό Χωριό', 0),
('Λάρνακα', 22, 'Κελλιά', 0),
('Λάρνακα', 23, 'Κιβισίλι', 0),
('Λάρνακα', 24, 'Κλαυδιά', 0),
('Λάρνακα', 25, 'Κοφίνου', 0),
('Λάρνακα', 26, 'Κόρνος', 0),
('Λάρνακα', 27, 'Κόσιη', 0),
('Λάρνακα', 28, 'Λάγια', 0),
('Λάρνακα', 29, 'Λάρνακα', 0),
('Λάρνακα', 30, 'Λειβάδια', 0),
('Λάρνακα', 31, 'Μαζωτός', 0),
('Λάρνακα', 32, 'Μαρί', 0),
('Λάρνακα', 33, 'Μαρώνι', 0),
('Λάρνακα', 34, 'Μελίνη', 0),
('Λάρνακα', 35, 'Μελούσια', 0),
('Λάρνακα', 36, 'Μενού', 0),
('Λάρνακα', 37, 'Μενόγια', 0),
('Λάρνακα', 38, 'Μοσφιλωτή', 0),
('Λάρνακα', 39, 'Ξυλοτύμπου', 0),
('Λάρνακα', 40, 'Ξυλοφάγου', 0),
('Λάρνακα', 41, 'Οδού', 0),
('Λάρνακα', 42, 'Όρα', 0),
('Λάρνακα', 43, 'Ορμήδεια', 0),
('Λάρνακα', 44, 'Ορόκλινη', 0),
('Λάρνακα', 45, 'Πάνω Λεύκαρα', 0),
('Λάρνακα', 46, 'Πέργαμος', 0),
('Λάρνακα', 47, 'Περβόλια', 0),
('Λάρνακα', 48, 'Πετροφάνι', 0),
('Λάρνακα', 49, 'Πύλα', 0),
('Λάρνακα', 50, 'Πύργα', 0),
('Λάρνακα', 51, 'Σκαρίνου', 0),
('Λάρνακα', 52, 'Σοφτάδες', 0),
('Λάρνακα', 53, 'Τερσεφάνου', 0),
('Λάρνακα', 54, 'Τρεμετουσιά', 0),
('Λάρνακα', 55, 'Τρούλλοι', 0),
('Λάρνακα', 56, 'Τόχνη', 0),
('Λάρνακα', 57, 'Χοιροκοιτία', 0),
('Λάρνακα', 58, 'Ψεματισμένος', 0),
('Λάρνακα', 59, 'Ψευδάς', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;