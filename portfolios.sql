-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2026 at 07:02 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolios`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel-cache-roster:project:v3:ef135eba381ac365c34407dd32507ecc', 'O:26:\"Laravel\\Roster\\ProjectScan\":8:{s:8:\"basePath\";s:26:\"C:\\xampp\\htdocs\\portfolio\\\";s:3:\"php\";O:35:\"Laravel\\Roster\\Ecosystems\\Ecosystem\":2:{s:9:\"\0*\0byName\";a:115:{s:10:\"brick/math\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:10:\"brick/math\";s:10:\"\0*\0version\";s:6:\"0.18.0\";s:9:\"\0*\0source\";E:43:\"Laravel\\Roster\\Enums\\PackageSource:Composer\";s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:43:\"C:\\xampp\\htdocs\\portfolio\\vendor\\brick\\math\";}s:31:\"carbonphp/carbon-doctrine-types\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:31:\"carbonphp/carbon-doctrine-types\";s:10:\"\0*\0version\";s:5:\"3.2.1\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:64:\"C:\\xampp\\htdocs\\portfolio\\vendor\\carbonphp\\carbon-doctrine-types\";}s:23:\"dflydev/dot-access-data\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:23:\"dflydev/dot-access-data\";s:10:\"\0*\0version\";s:5:\"3.0.3\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:56:\"C:\\xampp\\htdocs\\portfolio\\vendor\\dflydev\\dot-access-data\";}s:18:\"doctrine/inflector\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:18:\"doctrine/inflector\";s:10:\"\0*\0version\";s:5:\"2.1.0\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:51:\"C:\\xampp\\htdocs\\portfolio\\vendor\\doctrine\\inflector\";}s:14:\"doctrine/lexer\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:14:\"doctrine/lexer\";s:10:\"\0*\0version\";s:5:\"3.0.1\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:47:\"C:\\xampp\\htdocs\\portfolio\\vendor\\doctrine\\lexer\";}s:29:\"dragonmantank/cron-expression\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:29:\"dragonmantank/cron-expression\";s:10:\"\0*\0version\";s:5:\"3.6.0\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:62:\"C:\\xampp\\htdocs\\portfolio\\vendor\\dragonmantank\\cron-expression\";}s:23:\"egulias/email-validator\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:23:\"egulias/email-validator\";s:10:\"\0*\0version\";s:5:\"4.0.4\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:56:\"C:\\xampp\\htdocs\\portfolio\\vendor\\egulias\\email-validator\";}s:18:\"fruitcake/php-cors\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:18:\"fruitcake/php-cors\";s:10:\"\0*\0version\";s:5:\"1.4.0\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:51:\"C:\\xampp\\htdocs\\portfolio\\vendor\\fruitcake\\php-cors\";}s:27:\"graham-campbell/result-type\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:27:\"graham-campbell/result-type\";s:10:\"\0*\0version\";s:5:\"1.2.0\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:60:\"C:\\xampp\\htdocs\\portfolio\\vendor\\graham-campbell\\result-type\";}s:17:\"guzzlehttp/guzzle\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:17:\"guzzlehttp/guzzle\";s:10:\"\0*\0version\";s:5:\"8.2.0\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:50:\"C:\\xampp\\htdocs\\portfolio\\vendor\\guzzlehttp\\guzzle\";}s:19:\"guzzlehttp/promises\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:19:\"guzzlehttp/promises\";s:10:\"\0*\0version\";s:5:\"3.0.2\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:52:\"C:\\xampp\\htdocs\\portfolio\\vendor\\guzzlehttp\\promises\";}s:15:\"guzzlehttp/psr7\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:15:\"guzzlehttp/psr7\";s:10:\"\0*\0version\";s:5:\"3.1.0\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:48:\"C:\\xampp\\htdocs\\portfolio\\vendor\\guzzlehttp\\psr7\";}s:23:\"guzzlehttp/uri-template\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:23:\"guzzlehttp/uri-template\";s:10:\"\0*\0version\";s:5:\"2.0.1\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:56:\"C:\\xampp\\htdocs\\portfolio\\vendor\\guzzlehttp\\uri-template\";}s:17:\"laravel/framework\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:17:\"laravel/framework\";s:10:\"\0*\0version\";s:7:\"13.31.0\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:1;s:13:\"\0*\0constraint\";s:6:\"^13.17\";s:7:\"\0*\0path\";s:50:\"C:\\xampp\\htdocs\\portfolio\\vendor\\laravel\\framework\";}s:15:\"laravel/prompts\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:15:\"laravel/prompts\";s:10:\"\0*\0version\";s:6:\"0.3.24\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:48:\"C:\\xampp\\htdocs\\portfolio\\vendor\\laravel\\prompts\";}s:28:\"laravel/serializable-closure\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:28:\"laravel/serializable-closure\";s:10:\"\0*\0version\";s:6:\"2.0.16\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:61:\"C:\\xampp\\htdocs\\portfolio\\vendor\\laravel\\serializable-closure\";}s:14:\"laravel/tinker\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:14:\"laravel/tinker\";s:10:\"\0*\0version\";s:5:\"3.0.2\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:1;s:13:\"\0*\0constraint\";s:4:\"^3.0\";s:7:\"\0*\0path\";s:47:\"C:\\xampp\\htdocs\\portfolio\\vendor\\laravel\\tinker\";}s:17:\"league/commonmark\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:17:\"league/commonmark\";s:10:\"\0*\0version\";s:6:\"2.10.1\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:50:\"C:\\xampp\\htdocs\\portfolio\\vendor\\league\\commonmark\";}s:13:\"league/config\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:13:\"league/config\";s:10:\"\0*\0version\";s:5:\"1.2.0\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:46:\"C:\\xampp\\htdocs\\portfolio\\vendor\\league\\config\";}s:16:\"league/flysystem\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:16:\"league/flysystem\";s:10:\"\0*\0version\";s:6:\"3.36.0\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:49:\"C:\\xampp\\htdocs\\portfolio\\vendor\\league\\flysystem\";}s:22:\"league/flysystem-local\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:22:\"league/flysystem-local\";s:10:\"\0*\0version\";s:6:\"3.35.3\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:55:\"C:\\xampp\\htdocs\\portfolio\\vendor\\league\\flysystem-local\";}s:26:\"league/mime-type-detection\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:26:\"league/mime-type-detection\";s:10:\"\0*\0version\";s:6:\"1.17.0\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:59:\"C:\\xampp\\htdocs\\portfolio\\vendor\\league\\mime-type-detection\";}s:10:\"league/uri\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:10:\"league/uri\";s:10:\"\0*\0version\";s:5:\"7.8.1\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:43:\"C:\\xampp\\htdocs\\portfolio\\vendor\\league\\uri\";}s:21:\"league/uri-interfaces\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:21:\"league/uri-interfaces\";s:10:\"\0*\0version\";s:5:\"7.8.1\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:54:\"C:\\xampp\\htdocs\\portfolio\\vendor\\league\\uri-interfaces\";}s:15:\"monolog/monolog\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:15:\"monolog/monolog\";s:10:\"\0*\0version\";s:6:\"3.12.0\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:48:\"C:\\xampp\\htdocs\\portfolio\\vendor\\monolog\\monolog\";}s:13:\"nesbot/carbon\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:13:\"nesbot/carbon\";s:10:\"\0*\0version\";s:6:\"3.14.0\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:46:\"C:\\xampp\\htdocs\\portfolio\\vendor\\nesbot\\carbon\";}s:12:\"nette/schema\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:12:\"nette/schema\";s:10:\"\0*\0version\";s:5:\"1.3.6\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:45:\"C:\\xampp\\htdocs\\portfolio\\vendor\\nette\\schema\";}s:11:\"nette/utils\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:11:\"nette/utils\";s:10:\"\0*\0version\";s:5:\"4.1.5\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:44:\"C:\\xampp\\htdocs\\portfolio\\vendor\\nette\\utils\";}s:16:\"nikic/php-parser\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:16:\"nikic/php-parser\";s:10:\"\0*\0version\";s:5:\"5.9.0\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:49:\"C:\\xampp\\htdocs\\portfolio\\vendor\\nikic\\php-parser\";}s:19:\"nunomaduro/termwind\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:19:\"nunomaduro/termwind\";s:10:\"\0*\0version\";s:5:\"2.4.0\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:52:\"C:\\xampp\\htdocs\\portfolio\\vendor\\nunomaduro\\termwind\";}s:19:\"phpoption/phpoption\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:19:\"phpoption/phpoption\";s:10:\"\0*\0version\";s:6:\"1.10.0\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:52:\"C:\\xampp\\htdocs\\portfolio\\vendor\\phpoption\\phpoption\";}s:9:\"psr/clock\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:9:\"psr/clock\";s:10:\"\0*\0version\";s:5:\"1.0.0\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:42:\"C:\\xampp\\htdocs\\portfolio\\vendor\\psr\\clock\";}s:13:\"psr/container\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:13:\"psr/container\";s:10:\"\0*\0version\";s:5:\"2.0.2\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:46:\"C:\\xampp\\htdocs\\portfolio\\vendor\\psr\\container\";}s:20:\"psr/event-dispatcher\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:20:\"psr/event-dispatcher\";s:10:\"\0*\0version\";s:5:\"1.0.0\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:53:\"C:\\xampp\\htdocs\\portfolio\\vendor\\psr\\event-dispatcher\";}s:15:\"psr/http-client\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:15:\"psr/http-client\";s:10:\"\0*\0version\";s:5:\"1.0.3\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:48:\"C:\\xampp\\htdocs\\portfolio\\vendor\\psr\\http-client\";}s:16:\"psr/http-factory\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:16:\"psr/http-factory\";s:10:\"\0*\0version\";s:5:\"1.1.0\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:49:\"C:\\xampp\\htdocs\\portfolio\\vendor\\psr\\http-factory\";}s:16:\"psr/http-message\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:16:\"psr/http-message\";s:10:\"\0*\0version\";s:3:\"2.0\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:49:\"C:\\xampp\\htdocs\\portfolio\\vendor\\psr\\http-message\";}s:7:\"psr/log\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:7:\"psr/log\";s:10:\"\0*\0version\";s:5:\"3.0.2\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:40:\"C:\\xampp\\htdocs\\portfolio\\vendor\\psr\\log\";}s:16:\"psr/simple-cache\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:16:\"psr/simple-cache\";s:10:\"\0*\0version\";s:5:\"3.0.0\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:49:\"C:\\xampp\\htdocs\\portfolio\\vendor\\psr\\simple-cache\";}s:9:\"psy/psysh\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:9:\"psy/psysh\";s:10:\"\0*\0version\";s:7:\"0.12.24\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:42:\"C:\\xampp\\htdocs\\portfolio\\vendor\\psy\\psysh\";}s:17:\"ramsey/collection\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:17:\"ramsey/collection\";s:10:\"\0*\0version\";s:5:\"2.1.1\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:50:\"C:\\xampp\\htdocs\\portfolio\\vendor\\ramsey\\collection\";}s:11:\"ramsey/uuid\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:11:\"ramsey/uuid\";s:10:\"\0*\0version\";s:5:\"4.9.3\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:44:\"C:\\xampp\\htdocs\\portfolio\\vendor\\ramsey\\uuid\";}s:13:\"symfony/clock\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:13:\"symfony/clock\";s:10:\"\0*\0version\";s:5:\"7.4.8\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:46:\"C:\\xampp\\htdocs\\portfolio\\vendor\\symfony\\clock\";}s:15:\"symfony/console\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:15:\"symfony/console\";s:10:\"\0*\0version\";s:6:\"7.4.18\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:48:\"C:\\xampp\\htdocs\\portfolio\\vendor\\symfony\\console\";}s:20:\"symfony/css-selector\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:20:\"symfony/css-selector\";s:10:\"\0*\0version\";s:6:\"7.4.18\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:53:\"C:\\xampp\\htdocs\\portfolio\\vendor\\symfony\\css-selector\";}s:29:\"symfony/deprecation-contracts\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:29:\"symfony/deprecation-contracts\";s:10:\"\0*\0version\";s:5:\"3.7.1\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:62:\"C:\\xampp\\htdocs\\portfolio\\vendor\\symfony\\deprecation-contracts\";}s:21:\"symfony/error-handler\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:21:\"symfony/error-handler\";s:10:\"\0*\0version\";s:6:\"7.4.17\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:54:\"C:\\xampp\\htdocs\\portfolio\\vendor\\symfony\\error-handler\";}s:24:\"symfony/event-dispatcher\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:24:\"symfony/event-dispatcher\";s:10:\"\0*\0version\";s:6:\"7.4.17\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:57:\"C:\\xampp\\htdocs\\portfolio\\vendor\\symfony\\event-dispatcher\";}s:34:\"symfony/event-dispatcher-contracts\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:34:\"symfony/event-dispatcher-contracts\";s:10:\"\0*\0version\";s:5:\"3.7.1\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:67:\"C:\\xampp\\htdocs\\portfolio\\vendor\\symfony\\event-dispatcher-contracts\";}s:14:\"symfony/finder\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:14:\"symfony/finder\";s:10:\"\0*\0version\";s:6:\"7.4.17\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:47:\"C:\\xampp\\htdocs\\portfolio\\vendor\\symfony\\finder\";}s:23:\"symfony/http-foundation\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:23:\"symfony/http-foundation\";s:10:\"\0*\0version\";s:6:\"7.4.18\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:56:\"C:\\xampp\\htdocs\\portfolio\\vendor\\symfony\\http-foundation\";}s:19:\"symfony/http-kernel\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:19:\"symfony/http-kernel\";s:10:\"\0*\0version\";s:6:\"7.4.18\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:52:\"C:\\xampp\\htdocs\\portfolio\\vendor\\symfony\\http-kernel\";}s:14:\"symfony/mailer\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:14:\"symfony/mailer\";s:10:\"\0*\0version\";s:6:\"7.4.17\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:47:\"C:\\xampp\\htdocs\\portfolio\\vendor\\symfony\\mailer\";}s:12:\"symfony/mime\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:12:\"symfony/mime\";s:10:\"\0*\0version\";s:6:\"7.4.18\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:45:\"C:\\xampp\\htdocs\\portfolio\\vendor\\symfony\\mime\";}s:22:\"symfony/polyfill-ctype\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:22:\"symfony/polyfill-ctype\";s:10:\"\0*\0version\";s:6:\"1.37.0\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:55:\"C:\\xampp\\htdocs\\portfolio\\vendor\\symfony\\polyfill-ctype\";}s:30:\"symfony/polyfill-intl-grapheme\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:30:\"symfony/polyfill-intl-grapheme\";s:10:\"\0*\0version\";s:6:\"1.41.0\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:63:\"C:\\xampp\\htdocs\\portfolio\\vendor\\symfony\\polyfill-intl-grapheme\";}s:25:\"symfony/polyfill-intl-idn\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:25:\"symfony/polyfill-intl-idn\";s:10:\"\0*\0version\";s:6:\"1.42.0\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:58:\"C:\\xampp\\htdocs\\portfolio\\vendor\\symfony\\polyfill-intl-idn\";}s:32:\"symfony/polyfill-intl-normalizer\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:32:\"symfony/polyfill-intl-normalizer\";s:10:\"\0*\0version\";s:6:\"1.42.0\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:65:\"C:\\xampp\\htdocs\\portfolio\\vendor\\symfony\\polyfill-intl-normalizer\";}s:25:\"symfony/polyfill-mbstring\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:25:\"symfony/polyfill-mbstring\";s:10:\"\0*\0version\";s:6:\"1.38.2\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:58:\"C:\\xampp\\htdocs\\portfolio\\vendor\\symfony\\polyfill-mbstring\";}s:22:\"symfony/polyfill-php80\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:22:\"symfony/polyfill-php80\";s:10:\"\0*\0version\";s:6:\"1.37.0\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:55:\"C:\\xampp\\htdocs\\portfolio\\vendor\\symfony\\polyfill-php80\";}s:22:\"symfony/polyfill-php82\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:22:\"symfony/polyfill-php82\";s:10:\"\0*\0version\";s:6:\"1.38.1\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:55:\"C:\\xampp\\htdocs\\portfolio\\vendor\\symfony\\polyfill-php82\";}s:22:\"symfony/polyfill-php83\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:22:\"symfony/polyfill-php83\";s:10:\"\0*\0version\";s:6:\"1.41.0\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:55:\"C:\\xampp\\htdocs\\portfolio\\vendor\\symfony\\polyfill-php83\";}s:22:\"symfony/polyfill-php84\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:22:\"symfony/polyfill-php84\";s:10:\"\0*\0version\";s:6:\"1.38.1\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:55:\"C:\\xampp\\htdocs\\portfolio\\vendor\\symfony\\polyfill-php84\";}s:22:\"symfony/polyfill-php85\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:22:\"symfony/polyfill-php85\";s:10:\"\0*\0version\";s:6:\"1.41.0\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:55:\"C:\\xampp\\htdocs\\portfolio\\vendor\\symfony\\polyfill-php85\";}s:22:\"symfony/polyfill-php86\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:22:\"symfony/polyfill-php86\";s:10:\"\0*\0version\";s:6:\"1.41.0\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:55:\"C:\\xampp\\htdocs\\portfolio\\vendor\\symfony\\polyfill-php86\";}s:21:\"symfony/polyfill-uuid\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:21:\"symfony/polyfill-uuid\";s:10:\"\0*\0version\";s:6:\"1.37.0\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:54:\"C:\\xampp\\htdocs\\portfolio\\vendor\\symfony\\polyfill-uuid\";}s:15:\"symfony/process\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:15:\"symfony/process\";s:10:\"\0*\0version\";s:6:\"7.4.18\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:48:\"C:\\xampp\\htdocs\\portfolio\\vendor\\symfony\\process\";}s:15:\"symfony/routing\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:15:\"symfony/routing\";s:10:\"\0*\0version\";s:6:\"7.4.18\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:48:\"C:\\xampp\\htdocs\\portfolio\\vendor\\symfony\\routing\";}s:25:\"symfony/service-contracts\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:25:\"symfony/service-contracts\";s:10:\"\0*\0version\";s:5:\"3.7.3\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:58:\"C:\\xampp\\htdocs\\portfolio\\vendor\\symfony\\service-contracts\";}s:14:\"symfony/string\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:14:\"symfony/string\";s:10:\"\0*\0version\";s:6:\"7.4.15\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:47:\"C:\\xampp\\htdocs\\portfolio\\vendor\\symfony\\string\";}s:19:\"symfony/translation\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:19:\"symfony/translation\";s:10:\"\0*\0version\";s:6:\"7.4.17\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:52:\"C:\\xampp\\htdocs\\portfolio\\vendor\\symfony\\translation\";}s:29:\"symfony/translation-contracts\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:29:\"symfony/translation-contracts\";s:10:\"\0*\0version\";s:5:\"3.7.1\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:62:\"C:\\xampp\\htdocs\\portfolio\\vendor\\symfony\\translation-contracts\";}s:11:\"symfony/uid\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:11:\"symfony/uid\";s:10:\"\0*\0version\";s:6:\"7.4.17\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:44:\"C:\\xampp\\htdocs\\portfolio\\vendor\\symfony\\uid\";}s:18:\"symfony/var-dumper\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:18:\"symfony/var-dumper\";s:10:\"\0*\0version\";s:6:\"7.4.18\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:51:\"C:\\xampp\\htdocs\\portfolio\\vendor\\symfony\\var-dumper\";}s:33:\"tijsverkoyen/css-to-inline-styles\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:33:\"tijsverkoyen/css-to-inline-styles\";s:10:\"\0*\0version\";s:5:\"2.4.0\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:66:\"C:\\xampp\\htdocs\\portfolio\\vendor\\tijsverkoyen\\css-to-inline-styles\";}s:16:\"vlucas/phpdotenv\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:16:\"vlucas/phpdotenv\";s:10:\"\0*\0version\";s:5:\"5.7.0\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:49:\"C:\\xampp\\htdocs\\portfolio\\vendor\\vlucas\\phpdotenv\";}s:19:\"voku/portable-ascii\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:19:\"voku/portable-ascii\";s:10:\"\0*\0version\";s:5:\"2.1.1\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:52:\"C:\\xampp\\htdocs\\portfolio\\vendor\\voku\\portable-ascii\";}s:15:\"composer/semver\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:15:\"composer/semver\";s:10:\"\0*\0version\";s:5:\"3.4.4\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:48:\"C:\\xampp\\htdocs\\portfolio\\vendor\\composer\\semver\";}s:14:\"fakerphp/faker\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:14:\"fakerphp/faker\";s:10:\"\0*\0version\";s:6:\"1.24.1\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:1;s:13:\"\0*\0constraint\";s:5:\"^1.23\";s:7:\"\0*\0path\";s:47:\"C:\\xampp\\htdocs\\portfolio\\vendor\\fakerphp\\faker\";}s:11:\"filp/whoops\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:11:\"filp/whoops\";s:10:\"\0*\0version\";s:6:\"2.18.4\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:44:\"C:\\xampp\\htdocs\\portfolio\\vendor\\filp\\whoops\";}s:21:\"hamcrest/hamcrest-php\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:21:\"hamcrest/hamcrest-php\";s:10:\"\0*\0version\";s:5:\"3.0.0\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:54:\"C:\\xampp\\htdocs\\portfolio\\vendor\\hamcrest\\hamcrest-php\";}s:22:\"laravel/agent-detector\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:22:\"laravel/agent-detector\";s:10:\"\0*\0version\";s:5:\"2.0.2\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:55:\"C:\\xampp\\htdocs\\portfolio\\vendor\\laravel\\agent-detector\";}s:13:\"laravel/boost\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:13:\"laravel/boost\";s:10:\"\0*\0version\";s:5:\"2.9.1\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:1;s:13:\"\0*\0constraint\";s:1:\"*\";s:7:\"\0*\0path\";s:46:\"C:\\xampp\\htdocs\\portfolio\\vendor\\laravel\\boost\";}s:11:\"laravel/mcp\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:11:\"laravel/mcp\";s:10:\"\0*\0version\";s:5:\"1.0.0\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:44:\"C:\\xampp\\htdocs\\portfolio\\vendor\\laravel\\mcp\";}s:12:\"laravel/pail\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:12:\"laravel/pail\";s:10:\"\0*\0version\";s:5:\"1.2.7\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:1;s:13:\"\0*\0constraint\";s:6:\"^1.2.5\";s:7:\"\0*\0path\";s:45:\"C:\\xampp\\htdocs\\portfolio\\vendor\\laravel\\pail\";}s:11:\"laravel/pao\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:11:\"laravel/pao\";s:10:\"\0*\0version\";s:5:\"1.1.5\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:1;s:13:\"\0*\0constraint\";s:6:\"^1.0.6\";s:7:\"\0*\0path\";s:44:\"C:\\xampp\\htdocs\\portfolio\\vendor\\laravel\\pao\";}s:12:\"laravel/pint\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:12:\"laravel/pint\";s:10:\"\0*\0version\";s:6:\"1.32.1\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:1;s:13:\"\0*\0constraint\";s:5:\"^1.27\";s:7:\"\0*\0path\";s:45:\"C:\\xampp\\htdocs\\portfolio\\vendor\\laravel\\pint\";}s:14:\"laravel/roster\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:14:\"laravel/roster\";s:10:\"\0*\0version\";s:5:\"1.0.0\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:47:\"C:\\xampp\\htdocs\\portfolio\\vendor\\laravel\\roster\";}s:15:\"mockery/mockery\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:15:\"mockery/mockery\";s:10:\"\0*\0version\";s:6:\"1.6.15\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:1;s:13:\"\0*\0constraint\";s:4:\"^1.6\";s:7:\"\0*\0path\";s:48:\"C:\\xampp\\htdocs\\portfolio\\vendor\\mockery\\mockery\";}s:17:\"myclabs/deep-copy\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:17:\"myclabs/deep-copy\";s:10:\"\0*\0version\";s:6:\"1.14.0\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:50:\"C:\\xampp\\htdocs\\portfolio\\vendor\\myclabs\\deep-copy\";}s:20:\"nunomaduro/collision\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:20:\"nunomaduro/collision\";s:10:\"\0*\0version\";s:5:\"8.9.5\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:1;s:13:\"\0*\0constraint\";s:4:\"^8.6\";s:7:\"\0*\0path\";s:53:\"C:\\xampp\\htdocs\\portfolio\\vendor\\nunomaduro\\collision\";}s:16:\"phar-io/manifest\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:16:\"phar-io/manifest\";s:10:\"\0*\0version\";s:5:\"2.0.4\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:49:\"C:\\xampp\\htdocs\\portfolio\\vendor\\phar-io\\manifest\";}s:15:\"phar-io/version\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:15:\"phar-io/version\";s:10:\"\0*\0version\";s:5:\"3.2.1\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:48:\"C:\\xampp\\htdocs\\portfolio\\vendor\\phar-io\\version\";}s:25:\"phpunit/php-code-coverage\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:25:\"phpunit/php-code-coverage\";s:10:\"\0*\0version\";s:6:\"12.5.7\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:58:\"C:\\xampp\\htdocs\\portfolio\\vendor\\phpunit\\php-code-coverage\";}s:25:\"phpunit/php-file-iterator\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:25:\"phpunit/php-file-iterator\";s:10:\"\0*\0version\";s:5:\"6.0.2\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:58:\"C:\\xampp\\htdocs\\portfolio\\vendor\\phpunit\\php-file-iterator\";}s:19:\"phpunit/php-invoker\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:19:\"phpunit/php-invoker\";s:10:\"\0*\0version\";s:5:\"6.0.0\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:52:\"C:\\xampp\\htdocs\\portfolio\\vendor\\phpunit\\php-invoker\";}s:25:\"phpunit/php-text-template\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:25:\"phpunit/php-text-template\";s:10:\"\0*\0version\";s:5:\"5.0.0\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:58:\"C:\\xampp\\htdocs\\portfolio\\vendor\\phpunit\\php-text-template\";}s:17:\"phpunit/php-timer\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:17:\"phpunit/php-timer\";s:10:\"\0*\0version\";s:5:\"8.0.0\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:50:\"C:\\xampp\\htdocs\\portfolio\\vendor\\phpunit\\php-timer\";}s:15:\"phpunit/phpunit\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:15:\"phpunit/phpunit\";s:10:\"\0*\0version\";s:7:\"12.5.35\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:1;s:13:\"\0*\0constraint\";s:8:\"^12.5.12\";s:7:\"\0*\0path\";s:48:\"C:\\xampp\\htdocs\\portfolio\\vendor\\phpunit\\phpunit\";}s:20:\"sebastian/cli-parser\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:20:\"sebastian/cli-parser\";s:10:\"\0*\0version\";s:5:\"4.2.1\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:53:\"C:\\xampp\\htdocs\\portfolio\\vendor\\sebastian\\cli-parser\";}s:20:\"sebastian/comparator\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:20:\"sebastian/comparator\";s:10:\"\0*\0version\";s:5:\"7.1.8\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:53:\"C:\\xampp\\htdocs\\portfolio\\vendor\\sebastian\\comparator\";}s:20:\"sebastian/complexity\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:20:\"sebastian/complexity\";s:10:\"\0*\0version\";s:5:\"5.0.0\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:53:\"C:\\xampp\\htdocs\\portfolio\\vendor\\sebastian\\complexity\";}s:14:\"sebastian/diff\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:14:\"sebastian/diff\";s:10:\"\0*\0version\";s:5:\"7.0.1\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:47:\"C:\\xampp\\htdocs\\portfolio\\vendor\\sebastian\\diff\";}s:21:\"sebastian/environment\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:21:\"sebastian/environment\";s:10:\"\0*\0version\";s:5:\"8.1.2\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:54:\"C:\\xampp\\htdocs\\portfolio\\vendor\\sebastian\\environment\";}s:18:\"sebastian/exporter\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:18:\"sebastian/exporter\";s:10:\"\0*\0version\";s:5:\"7.0.3\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:51:\"C:\\xampp\\htdocs\\portfolio\\vendor\\sebastian\\exporter\";}s:22:\"sebastian/global-state\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:22:\"sebastian/global-state\";s:10:\"\0*\0version\";s:5:\"8.0.3\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:55:\"C:\\xampp\\htdocs\\portfolio\\vendor\\sebastian\\global-state\";}s:23:\"sebastian/lines-of-code\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:23:\"sebastian/lines-of-code\";s:10:\"\0*\0version\";s:5:\"4.0.1\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:56:\"C:\\xampp\\htdocs\\portfolio\\vendor\\sebastian\\lines-of-code\";}s:27:\"sebastian/object-enumerator\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:27:\"sebastian/object-enumerator\";s:10:\"\0*\0version\";s:5:\"7.0.0\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:60:\"C:\\xampp\\htdocs\\portfolio\\vendor\\sebastian\\object-enumerator\";}s:26:\"sebastian/object-reflector\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:26:\"sebastian/object-reflector\";s:10:\"\0*\0version\";s:5:\"5.0.0\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:59:\"C:\\xampp\\htdocs\\portfolio\\vendor\\sebastian\\object-reflector\";}s:27:\"sebastian/recursion-context\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:27:\"sebastian/recursion-context\";s:10:\"\0*\0version\";s:5:\"7.0.1\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:60:\"C:\\xampp\\htdocs\\portfolio\\vendor\\sebastian\\recursion-context\";}s:14:\"sebastian/type\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:14:\"sebastian/type\";s:10:\"\0*\0version\";s:5:\"6.0.4\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:47:\"C:\\xampp\\htdocs\\portfolio\\vendor\\sebastian\\type\";}s:17:\"sebastian/version\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:17:\"sebastian/version\";s:10:\"\0*\0version\";s:5:\"6.0.0\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:50:\"C:\\xampp\\htdocs\\portfolio\\vendor\\sebastian\\version\";}s:28:\"staabm/side-effects-detector\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:28:\"staabm/side-effects-detector\";s:10:\"\0*\0version\";s:5:\"1.0.5\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:61:\"C:\\xampp\\htdocs\\portfolio\\vendor\\staabm\\side-effects-detector\";}s:12:\"symfony/yaml\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:12:\"symfony/yaml\";s:10:\"\0*\0version\";s:6:\"7.4.18\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:45:\"C:\\xampp\\htdocs\\portfolio\\vendor\\symfony\\yaml\";}s:17:\"theseer/tokenizer\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:17:\"theseer/tokenizer\";s:10:\"\0*\0version\";s:5:\"2.0.1\";s:9:\"\0*\0source\";r:8;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:50:\"C:\\xampp\\htdocs\\portfolio\\vendor\\theseer\\tokenizer\";}}s:11:\"\0*\0packages\";O:32:\"Laravel\\Roster\\PackageCollection\":2:{s:8:\"\0*\0items\";a:115:{i:0;r:5;i:1;r:13;i:2;r:21;i:3;r:29;i:4;r:37;i:5;r:45;i:6;r:53;i:7;r:61;i:8;r:69;i:9;r:77;i:10;r:85;i:11;r:93;i:12;r:101;i:13;r:109;i:14;r:117;i:15;r:125;i:16;r:133;i:17;r:141;i:18;r:149;i:19;r:157;i:20;r:165;i:21;r:173;i:22;r:181;i:23;r:189;i:24;r:197;i:25;r:205;i:26;r:213;i:27;r:221;i:28;r:229;i:29;r:237;i:30;r:245;i:31;r:253;i:32;r:261;i:33;r:269;i:34;r:277;i:35;r:285;i:36;r:293;i:37;r:301;i:38;r:309;i:39;r:317;i:40;r:325;i:41;r:333;i:42;r:341;i:43;r:349;i:44;r:357;i:45;r:365;i:46;r:373;i:47;r:381;i:48;r:389;i:49;r:397;i:50;r:405;i:51;r:413;i:52;r:421;i:53;r:429;i:54;r:437;i:55;r:445;i:56;r:453;i:57;r:461;i:58;r:469;i:59;r:477;i:60;r:485;i:61;r:493;i:62;r:501;i:63;r:509;i:64;r:517;i:65;r:525;i:66;r:533;i:67;r:541;i:68;r:549;i:69;r:557;i:70;r:565;i:71;r:573;i:72;r:581;i:73;r:589;i:74;r:597;i:75;r:605;i:76;r:613;i:77;r:621;i:78;r:629;i:79;r:637;i:80;r:645;i:81;r:653;i:82;r:661;i:83;r:669;i:84;r:677;i:85;r:685;i:86;r:693;i:87;r:701;i:88;r:709;i:89;r:717;i:90;r:725;i:91;r:733;i:92;r:741;i:93;r:749;i:94;r:757;i:95;r:765;i:96;r:773;i:97;r:781;i:98;r:789;i:99;r:797;i:100;r:805;i:101;r:813;i:102;r:821;i:103;r:829;i:104;r:837;i:105;r:845;i:106;r:853;i:107;r:861;i:108;r:869;i:109;r:877;i:110;r:885;i:111;r:893;i:112;r:901;i:113;r:909;i:114;r:917;}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}}s:2:\"js\";O:37:\"Laravel\\Roster\\Ecosystems\\JsEcosystem\":3:{s:9:\"\0*\0byName\";a:121:{s:24:\"@alcalzone/ansi-tokenize\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:24:\"@alcalzone/ansi-tokenize\";s:10:\"\0*\0version\";s:5:\"0.3.0\";s:9:\"\0*\0source\";E:38:\"Laravel\\Roster\\Enums\\PackageSource:Npm\";s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:63:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\@alcalzone\\ansi-tokenize\";}s:18:\"@laravel/multiplex\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:18:\"@laravel/multiplex\";s:10:\"\0*\0version\";s:5:\"0.4.3\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:1;s:13:\"\0*\0constraint\";s:6:\"^0.4.1\";s:7:\"\0*\0path\";s:57:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\@laravel\\multiplex\";}s:12:\"ansi-escapes\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:12:\"ansi-escapes\";s:10:\"\0*\0version\";s:5:\"7.3.0\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:51:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\ansi-escapes\";}s:10:\"ansi-regex\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:10:\"ansi-regex\";s:10:\"\0*\0version\";s:5:\"6.3.0\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:49:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\ansi-regex\";}s:11:\"ansi-styles\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:11:\"ansi-styles\";s:10:\"\0*\0version\";s:5:\"6.2.3\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:50:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\ansi-styles\";}s:9:\"auto-bind\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:9:\"auto-bind\";s:10:\"\0*\0version\";s:5:\"5.0.1\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:48:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\auto-bind\";}s:5:\"chalk\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:5:\"chalk\";s:10:\"\0*\0version\";s:5:\"5.6.2\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:44:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\chalk\";}s:9:\"cli-boxes\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:9:\"cli-boxes\";s:10:\"\0*\0version\";s:5:\"4.0.1\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:48:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\cli-boxes\";}s:10:\"cli-cursor\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:10:\"cli-cursor\";s:10:\"\0*\0version\";s:5:\"4.0.0\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:49:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\cli-cursor\";}s:12:\"cli-truncate\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:12:\"cli-truncate\";s:10:\"\0*\0version\";s:5:\"6.1.1\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:51:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\cli-truncate\";}s:12:\"code-excerpt\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:12:\"code-excerpt\";s:10:\"\0*\0version\";s:5:\"4.0.0\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:51:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\code-excerpt\";}s:9:\"commander\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:9:\"commander\";s:10:\"\0*\0version\";s:6:\"15.0.0\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:48:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\commander\";}s:17:\"convert-to-spaces\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:17:\"convert-to-spaces\";s:10:\"\0*\0version\";s:5:\"2.0.1\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:56:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\convert-to-spaces\";}s:11:\"environment\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:11:\"environment\";s:10:\"\0*\0version\";s:5:\"1.1.0\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:50:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\environment\";}s:10:\"es-toolkit\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:10:\"es-toolkit\";s:10:\"\0*\0version\";s:6:\"1.52.0\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:49:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\es-toolkit\";}s:20:\"escape-string-regexp\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:20:\"escape-string-regexp\";s:10:\"\0*\0version\";s:5:\"2.0.0\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:59:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\escape-string-regexp\";}s:20:\"get-east-asian-width\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:20:\"get-east-asian-width\";s:10:\"\0*\0version\";s:5:\"1.6.0\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:59:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\get-east-asian-width\";}s:13:\"indent-string\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:13:\"indent-string\";s:10:\"\0*\0version\";s:5:\"5.0.0\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:52:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\indent-string\";}s:3:\"ink\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:3:\"ink\";s:10:\"\0*\0version\";s:5:\"7.1.1\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:42:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\ink\";}s:23:\"is-fullwidth-code-point\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:23:\"is-fullwidth-code-point\";s:10:\"\0*\0version\";s:5:\"5.1.0\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:62:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\is-fullwidth-code-point\";}s:8:\"is-in-ci\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:8:\"is-in-ci\";s:10:\"\0*\0version\";s:5:\"2.0.0\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:47:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\is-in-ci\";}s:8:\"mimic-fn\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:8:\"mimic-fn\";s:10:\"\0*\0version\";s:5:\"2.1.0\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:47:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\mimic-fn\";}s:7:\"onetime\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:7:\"onetime\";s:10:\"\0*\0version\";s:5:\"5.1.2\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:46:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\onetime\";}s:13:\"patch-console\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:13:\"patch-console\";s:10:\"\0*\0version\";s:5:\"2.0.0\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:52:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\patch-console\";}s:5:\"react\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:5:\"react\";s:10:\"\0*\0version\";s:6:\"19.3.0\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:44:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\react\";}s:16:\"react-reconciler\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:16:\"react-reconciler\";s:10:\"\0*\0version\";s:6:\"0.33.0\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:55:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\react-reconciler\";}s:14:\"restore-cursor\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:14:\"restore-cursor\";s:10:\"\0*\0version\";s:5:\"4.0.0\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:53:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\restore-cursor\";}s:9:\"scheduler\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:9:\"scheduler\";s:10:\"\0*\0version\";s:6:\"0.27.0\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:48:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\scheduler\";}s:11:\"signal-exit\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:11:\"signal-exit\";s:10:\"\0*\0version\";s:5:\"3.0.7\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:50:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\signal-exit\";}s:10:\"slice-ansi\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:10:\"slice-ansi\";s:10:\"\0*\0version\";s:5:\"9.0.0\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:49:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\slice-ansi\";}s:11:\"stack-utils\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:11:\"stack-utils\";s:10:\"\0*\0version\";s:5:\"2.0.6\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:50:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\stack-utils\";}s:12:\"string-width\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:12:\"string-width\";s:10:\"\0*\0version\";s:5:\"8.2.2\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:51:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\string-width\";}s:10:\"strip-ansi\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:10:\"strip-ansi\";s:10:\"\0*\0version\";s:5:\"7.2.0\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:49:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\strip-ansi\";}s:10:\"tagged-tag\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:10:\"tagged-tag\";s:10:\"\0*\0version\";s:5:\"1.0.0\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:49:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\tagged-tag\";}s:13:\"terminal-size\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:13:\"terminal-size\";s:10:\"\0*\0version\";s:5:\"4.0.1\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:52:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\terminal-size\";}s:9:\"type-fest\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:9:\"type-fest\";s:10:\"\0*\0version\";s:5:\"5.9.0\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:48:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\type-fest\";}s:11:\"widest-line\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:11:\"widest-line\";s:10:\"\0*\0version\";s:5:\"6.0.0\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:50:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\widest-line\";}s:9:\"wrap-ansi\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:9:\"wrap-ansi\";s:10:\"\0*\0version\";s:6:\"10.0.1\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:48:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\wrap-ansi\";}s:2:\"ws\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:2:\"ws\";s:10:\"\0*\0version\";s:6:\"8.21.3\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:41:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\ws\";}s:11:\"yoga-layout\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:11:\"yoga-layout\";s:10:\"\0*\0version\";s:5:\"3.2.1\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:0;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:50:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\yoga-layout\";}s:23:\"@jridgewell/gen-mapping\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:23:\"@jridgewell/gen-mapping\";s:10:\"\0*\0version\";s:6:\"0.3.13\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:62:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\@jridgewell\\gen-mapping\";}s:21:\"@jridgewell/remapping\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:21:\"@jridgewell/remapping\";s:10:\"\0*\0version\";s:5:\"2.3.5\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:60:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\@jridgewell\\remapping\";}s:23:\"@jridgewell/resolve-uri\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:23:\"@jridgewell/resolve-uri\";s:10:\"\0*\0version\";s:5:\"3.1.2\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:62:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\@jridgewell\\resolve-uri\";}s:27:\"@jridgewell/sourcemap-codec\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:27:\"@jridgewell/sourcemap-codec\";s:10:\"\0*\0version\";s:5:\"1.6.0\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:66:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\@jridgewell\\sourcemap-codec\";}s:25:\"@jridgewell/trace-mapping\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:25:\"@jridgewell/trace-mapping\";s:10:\"\0*\0version\";s:6:\"0.3.31\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:64:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\@jridgewell\\trace-mapping\";}s:18:\"@oxc-project/types\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:18:\"@oxc-project/types\";s:10:\"\0*\0version\";s:7:\"0.149.0\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:57:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\@oxc-project\\types\";}s:34:\"@rolldown/binding-android-arm-eabi\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:34:\"@rolldown/binding-android-arm-eabi\";s:10:\"\0*\0version\";s:5:\"1.2.8\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:73:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\@rolldown\\binding-android-arm-eabi\";}s:31:\"@rolldown/binding-android-arm64\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:31:\"@rolldown/binding-android-arm64\";s:10:\"\0*\0version\";s:5:\"1.2.8\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:70:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\@rolldown\\binding-android-arm64\";}s:30:\"@rolldown/binding-darwin-arm64\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:30:\"@rolldown/binding-darwin-arm64\";s:10:\"\0*\0version\";s:5:\"1.2.8\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:69:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\@rolldown\\binding-darwin-arm64\";}s:28:\"@rolldown/binding-darwin-x64\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:28:\"@rolldown/binding-darwin-x64\";s:10:\"\0*\0version\";s:5:\"1.2.8\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:67:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\@rolldown\\binding-darwin-x64\";}s:29:\"@rolldown/binding-freebsd-x64\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:29:\"@rolldown/binding-freebsd-x64\";s:10:\"\0*\0version\";s:5:\"1.2.8\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:68:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\@rolldown\\binding-freebsd-x64\";}s:37:\"@rolldown/binding-linux-arm-gnueabihf\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:37:\"@rolldown/binding-linux-arm-gnueabihf\";s:10:\"\0*\0version\";s:5:\"1.2.8\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:76:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\@rolldown\\binding-linux-arm-gnueabihf\";}s:33:\"@rolldown/binding-linux-arm64-gnu\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:33:\"@rolldown/binding-linux-arm64-gnu\";s:10:\"\0*\0version\";s:5:\"1.2.8\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:72:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\@rolldown\\binding-linux-arm64-gnu\";}s:34:\"@rolldown/binding-linux-arm64-musl\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:34:\"@rolldown/binding-linux-arm64-musl\";s:10:\"\0*\0version\";s:5:\"1.2.8\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:73:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\@rolldown\\binding-linux-arm64-musl\";}s:33:\"@rolldown/binding-linux-ppc64-gnu\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:33:\"@rolldown/binding-linux-ppc64-gnu\";s:10:\"\0*\0version\";s:5:\"1.2.8\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:72:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\@rolldown\\binding-linux-ppc64-gnu\";}s:33:\"@rolldown/binding-linux-s390x-gnu\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:33:\"@rolldown/binding-linux-s390x-gnu\";s:10:\"\0*\0version\";s:5:\"1.2.8\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:72:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\@rolldown\\binding-linux-s390x-gnu\";}s:31:\"@rolldown/binding-linux-x64-gnu\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:31:\"@rolldown/binding-linux-x64-gnu\";s:10:\"\0*\0version\";s:5:\"1.2.8\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:70:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\@rolldown\\binding-linux-x64-gnu\";}s:32:\"@rolldown/binding-linux-x64-musl\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:32:\"@rolldown/binding-linux-x64-musl\";s:10:\"\0*\0version\";s:5:\"1.2.8\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:71:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\@rolldown\\binding-linux-x64-musl\";}s:35:\"@rolldown/binding-openharmony-arm64\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:35:\"@rolldown/binding-openharmony-arm64\";s:10:\"\0*\0version\";s:5:\"1.2.8\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:74:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\@rolldown\\binding-openharmony-arm64\";}s:34:\"@rolldown/binding-win32-arm64-msvc\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:34:\"@rolldown/binding-win32-arm64-msvc\";s:10:\"\0*\0version\";s:5:\"1.2.8\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:73:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\@rolldown\\binding-win32-arm64-msvc\";}s:32:\"@rolldown/binding-win32-x64-msvc\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:32:\"@rolldown/binding-win32-x64-msvc\";s:10:\"\0*\0version\";s:5:\"1.2.8\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:71:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\@rolldown\\binding-win32-x64-msvc\";}s:21:\"@rolldown/pluginutils\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:21:\"@rolldown/pluginutils\";s:10:\"\0*\0version\";s:5:\"1.0.1\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:60:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\@rolldown\\pluginutils\";}s:17:\"@tailwindcss/node\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:17:\"@tailwindcss/node\";s:10:\"\0*\0version\";s:5:\"4.3.3\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:56:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\@tailwindcss\\node\";}s:18:\"@tailwindcss/oxide\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:18:\"@tailwindcss/oxide\";s:10:\"\0*\0version\";s:5:\"4.3.3\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:57:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\@tailwindcss\\oxide\";}s:32:\"@tailwindcss/oxide-android-arm64\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:32:\"@tailwindcss/oxide-android-arm64\";s:10:\"\0*\0version\";s:5:\"4.3.3\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:71:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\@tailwindcss\\oxide-android-arm64\";}s:31:\"@tailwindcss/oxide-darwin-arm64\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:31:\"@tailwindcss/oxide-darwin-arm64\";s:10:\"\0*\0version\";s:5:\"4.3.3\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:70:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\@tailwindcss\\oxide-darwin-arm64\";}s:29:\"@tailwindcss/oxide-darwin-x64\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:29:\"@tailwindcss/oxide-darwin-x64\";s:10:\"\0*\0version\";s:5:\"4.3.3\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:68:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\@tailwindcss\\oxide-darwin-x64\";}s:30:\"@tailwindcss/oxide-freebsd-x64\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:30:\"@tailwindcss/oxide-freebsd-x64\";s:10:\"\0*\0version\";s:5:\"4.3.3\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:69:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\@tailwindcss\\oxide-freebsd-x64\";}s:38:\"@tailwindcss/oxide-linux-arm-gnueabihf\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:38:\"@tailwindcss/oxide-linux-arm-gnueabihf\";s:10:\"\0*\0version\";s:5:\"4.3.3\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:77:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\@tailwindcss\\oxide-linux-arm-gnueabihf\";}s:34:\"@tailwindcss/oxide-linux-arm64-gnu\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:34:\"@tailwindcss/oxide-linux-arm64-gnu\";s:10:\"\0*\0version\";s:5:\"4.3.3\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:73:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\@tailwindcss\\oxide-linux-arm64-gnu\";}s:35:\"@tailwindcss/oxide-linux-arm64-musl\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:35:\"@tailwindcss/oxide-linux-arm64-musl\";s:10:\"\0*\0version\";s:5:\"4.3.3\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:74:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\@tailwindcss\\oxide-linux-arm64-musl\";}s:32:\"@tailwindcss/oxide-linux-x64-gnu\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:32:\"@tailwindcss/oxide-linux-x64-gnu\";s:10:\"\0*\0version\";s:5:\"4.3.3\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:71:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\@tailwindcss\\oxide-linux-x64-gnu\";}s:33:\"@tailwindcss/oxide-linux-x64-musl\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:33:\"@tailwindcss/oxide-linux-x64-musl\";s:10:\"\0*\0version\";s:5:\"4.3.3\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:72:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\@tailwindcss\\oxide-linux-x64-musl\";}s:30:\"@tailwindcss/oxide-wasm32-wasi\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:30:\"@tailwindcss/oxide-wasm32-wasi\";s:10:\"\0*\0version\";s:5:\"4.3.3\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:69:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\@tailwindcss\\oxide-wasm32-wasi\";}s:35:\"@tailwindcss/oxide-win32-arm64-msvc\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:35:\"@tailwindcss/oxide-win32-arm64-msvc\";s:10:\"\0*\0version\";s:5:\"4.3.3\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:74:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\@tailwindcss\\oxide-win32-arm64-msvc\";}s:33:\"@tailwindcss/oxide-win32-x64-msvc\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:33:\"@tailwindcss/oxide-win32-x64-msvc\";s:10:\"\0*\0version\";s:5:\"4.3.3\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:72:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\@tailwindcss\\oxide-win32-x64-msvc\";}s:17:\"@tailwindcss/vite\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:17:\"@tailwindcss/vite\";s:10:\"\0*\0version\";s:5:\"4.3.3\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:1;s:13:\"\0*\0constraint\";s:6:\"^4.0.0\";s:7:\"\0*\0path\";s:56:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\@tailwindcss\\vite\";}s:5:\"cliui\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:5:\"cliui\";s:10:\"\0*\0version\";s:5:\"9.0.1\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:44:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\cliui\";}s:12:\"concurrently\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:12:\"concurrently\";s:10:\"\0*\0version\";s:6:\"10.0.5\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:1;s:13:\"\0*\0constraint\";s:7:\"^10.0.3\";s:7:\"\0*\0path\";s:51:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\concurrently\";}s:11:\"detect-libc\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:11:\"detect-libc\";s:10:\"\0*\0version\";s:5:\"2.1.2\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:50:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\detect-libc\";}s:11:\"emoji-regex\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:11:\"emoji-regex\";s:10:\"\0*\0version\";s:6:\"10.6.0\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:50:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\emoji-regex\";}s:16:\"enhanced-resolve\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:16:\"enhanced-resolve\";s:10:\"\0*\0version\";s:6:\"5.25.1\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:55:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\enhanced-resolve\";}s:8:\"escalade\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:8:\"escalade\";s:10:\"\0*\0version\";s:5:\"3.2.0\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:47:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\escalade\";}s:4:\"fdir\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:4:\"fdir\";s:10:\"\0*\0version\";s:5:\"6.5.0\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:43:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\fdir\";}s:8:\"fsevents\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:8:\"fsevents\";s:10:\"\0*\0version\";s:5:\"2.3.3\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:47:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\fsevents\";}s:15:\"get-caller-file\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:15:\"get-caller-file\";s:10:\"\0*\0version\";s:5:\"2.0.5\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:54:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\get-caller-file\";}s:11:\"graceful-fs\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:11:\"graceful-fs\";s:10:\"\0*\0version\";s:6:\"4.2.11\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:50:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\graceful-fs\";}s:4:\"jiti\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:4:\"jiti\";s:10:\"\0*\0version\";s:5:\"2.7.0\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:43:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\jiti\";}s:19:\"laravel-vite-plugin\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:19:\"laravel-vite-plugin\";s:10:\"\0*\0version\";s:5:\"3.2.0\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:1;s:13:\"\0*\0constraint\";s:4:\"^3.1\";s:7:\"\0*\0path\";s:58:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\laravel-vite-plugin\";}s:12:\"lightningcss\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:12:\"lightningcss\";s:10:\"\0*\0version\";s:6:\"1.32.0\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:51:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\lightningcss\";}s:26:\"lightningcss-android-arm64\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:26:\"lightningcss-android-arm64\";s:10:\"\0*\0version\";s:6:\"1.32.0\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:65:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\lightningcss-android-arm64\";}s:25:\"lightningcss-darwin-arm64\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:25:\"lightningcss-darwin-arm64\";s:10:\"\0*\0version\";s:6:\"1.32.0\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:64:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\lightningcss-darwin-arm64\";}s:23:\"lightningcss-darwin-x64\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:23:\"lightningcss-darwin-x64\";s:10:\"\0*\0version\";s:6:\"1.32.0\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:62:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\lightningcss-darwin-x64\";}s:24:\"lightningcss-freebsd-x64\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:24:\"lightningcss-freebsd-x64\";s:10:\"\0*\0version\";s:6:\"1.32.0\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:63:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\lightningcss-freebsd-x64\";}s:32:\"lightningcss-linux-arm-gnueabihf\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:32:\"lightningcss-linux-arm-gnueabihf\";s:10:\"\0*\0version\";s:6:\"1.32.0\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:71:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\lightningcss-linux-arm-gnueabihf\";}s:28:\"lightningcss-linux-arm64-gnu\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:28:\"lightningcss-linux-arm64-gnu\";s:10:\"\0*\0version\";s:6:\"1.32.0\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:67:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\lightningcss-linux-arm64-gnu\";}s:29:\"lightningcss-linux-arm64-musl\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:29:\"lightningcss-linux-arm64-musl\";s:10:\"\0*\0version\";s:6:\"1.32.0\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:68:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\lightningcss-linux-arm64-musl\";}s:26:\"lightningcss-linux-x64-gnu\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:26:\"lightningcss-linux-x64-gnu\";s:10:\"\0*\0version\";s:6:\"1.32.0\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:65:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\lightningcss-linux-x64-gnu\";}s:27:\"lightningcss-linux-x64-musl\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:27:\"lightningcss-linux-x64-musl\";s:10:\"\0*\0version\";s:6:\"1.32.0\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:66:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\lightningcss-linux-x64-musl\";}s:29:\"lightningcss-win32-arm64-msvc\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:29:\"lightningcss-win32-arm64-msvc\";s:10:\"\0*\0version\";s:6:\"1.32.0\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:68:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\lightningcss-win32-arm64-msvc\";}s:27:\"lightningcss-win32-x64-msvc\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:27:\"lightningcss-win32-x64-msvc\";s:10:\"\0*\0version\";s:6:\"1.32.0\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:66:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\lightningcss-win32-x64-msvc\";}s:12:\"magic-string\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:12:\"magic-string\";s:10:\"\0*\0version\";s:7:\"0.30.21\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:51:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\magic-string\";}s:6:\"nanoid\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:6:\"nanoid\";s:10:\"\0*\0version\";s:6:\"3.3.19\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:45:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\nanoid\";}s:10:\"picocolors\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:10:\"picocolors\";s:10:\"\0*\0version\";s:5:\"1.1.1\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:49:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\picocolors\";}s:9:\"picomatch\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:9:\"picomatch\";s:10:\"\0*\0version\";s:5:\"4.0.7\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:48:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\picomatch\";}s:7:\"postcss\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:7:\"postcss\";s:10:\"\0*\0version\";s:6:\"8.5.28\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:46:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\postcss\";}s:8:\"rolldown\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:8:\"rolldown\";s:10:\"\0*\0version\";s:5:\"1.2.8\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:47:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\rolldown\";}s:4:\"rxjs\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:4:\"rxjs\";s:10:\"\0*\0version\";s:5:\"7.8.2\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:43:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\rxjs\";}s:11:\"shell-quote\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:11:\"shell-quote\";s:10:\"\0*\0version\";s:5:\"1.9.0\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:50:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\shell-quote\";}s:13:\"source-map-js\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:13:\"source-map-js\";s:10:\"\0*\0version\";s:5:\"1.2.1\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:52:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\source-map-js\";}s:14:\"supports-color\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:14:\"supports-color\";s:10:\"\0*\0version\";s:6:\"10.2.2\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:53:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\supports-color\";}s:11:\"tailwindcss\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:11:\"tailwindcss\";s:10:\"\0*\0version\";s:5:\"4.3.3\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:1;s:13:\"\0*\0constraint\";s:6:\"^4.0.0\";s:7:\"\0*\0path\";s:50:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\tailwindcss\";}s:7:\"tapable\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:7:\"tapable\";s:10:\"\0*\0version\";s:5:\"2.3.3\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:46:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\tapable\";}s:10:\"tinyglobby\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:10:\"tinyglobby\";s:10:\"\0*\0version\";s:6:\"0.2.17\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:49:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\tinyglobby\";}s:9:\"tree-kill\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:9:\"tree-kill\";s:10:\"\0*\0version\";s:5:\"1.2.2\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:48:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\tree-kill\";}s:5:\"tslib\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:5:\"tslib\";s:10:\"\0*\0version\";s:5:\"2.8.1\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:44:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\tslib\";}s:4:\"vite\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:4:\"vite\";s:10:\"\0*\0version\";s:5:\"8.3.0\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:1;s:13:\"\0*\0constraint\";s:6:\"^8.0.0\";s:7:\"\0*\0path\";s:43:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\vite\";}s:23:\"vite-plugin-full-reload\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:23:\"vite-plugin-full-reload\";s:10:\"\0*\0version\";s:5:\"1.2.0\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:62:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\vite-plugin-full-reload\";}s:4:\"y18n\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:4:\"y18n\";s:10:\"\0*\0version\";s:5:\"5.0.8\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:43:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\y18n\";}s:5:\"yargs\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:5:\"yargs\";s:10:\"\0*\0version\";s:6:\"18.0.0\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:44:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\yargs\";}s:12:\"yargs-parser\";O:22:\"Laravel\\Roster\\Package\":7:{s:7:\"\0*\0name\";s:12:\"yargs-parser\";s:10:\"\0*\0version\";s:6:\"22.0.0\";s:9:\"\0*\0source\";r:1048;s:6:\"\0*\0dev\";b:1;s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:7:\"\0*\0path\";s:51:\"C:\\xampp\\htdocs\\portfolio\\node_modules\\yargs-parser\";}}s:11:\"\0*\0packages\";O:32:\"Laravel\\Roster\\PackageCollection\":2:{s:8:\"\0*\0items\";a:121:{i:0;r:1045;i:1;r:1053;i:2;r:1061;i:3;r:1069;i:4;r:1077;i:5;r:1085;i:6;r:1093;i:7;r:1101;i:8;r:1109;i:9;r:1117;i:10;r:1125;i:11;r:1133;i:12;r:1141;i:13;r:1149;i:14;r:1157;i:15;r:1165;i:16;r:1173;i:17;r:1181;i:18;r:1189;i:19;r:1197;i:20;r:1205;i:21;r:1213;i:22;r:1221;i:23;r:1229;i:24;r:1237;i:25;r:1245;i:26;r:1253;i:27;r:1261;i:28;r:1269;i:29;r:1277;i:30;r:1285;i:31;r:1293;i:32;r:1301;i:33;r:1309;i:34;r:1317;i:35;r:1325;i:36;r:1333;i:37;r:1341;i:38;r:1349;i:39;r:1357;i:40;r:1365;i:41;r:1373;i:42;r:1381;i:43;r:1389;i:44;r:1397;i:45;r:1405;i:46;r:1413;i:47;r:1421;i:48;r:1429;i:49;r:1437;i:50;r:1445;i:51;r:1453;i:52;r:1461;i:53;r:1469;i:54;r:1477;i:55;r:1485;i:56;r:1493;i:57;r:1501;i:58;r:1509;i:59;r:1517;i:60;r:1525;i:61;r:1533;i:62;r:1541;i:63;r:1549;i:64;r:1557;i:65;r:1565;i:66;r:1573;i:67;r:1581;i:68;r:1589;i:69;r:1597;i:70;r:1605;i:71;r:1613;i:72;r:1621;i:73;r:1629;i:74;r:1637;i:75;r:1645;i:76;r:1653;i:77;r:1661;i:78;r:1669;i:79;r:1677;i:80;r:1685;i:81;r:1693;i:82;r:1701;i:83;r:1709;i:84;r:1717;i:85;r:1725;i:86;r:1733;i:87;r:1741;i:88;r:1749;i:89;r:1757;i:90;r:1765;i:91;r:1773;i:92;r:1781;i:93;r:1789;i:94;r:1797;i:95;r:1805;i:96;r:1813;i:97;r:1821;i:98;r:1829;i:99;r:1837;i:100;r:1845;i:101;r:1853;i:102;r:1861;i:103;r:1869;i:104;r:1877;i:105;r:1885;i:106;r:1893;i:107;r:1901;i:108;r:1909;i:109;r:1917;i:110;r:1925;i:111;r:1933;i:112;r:1941;i:113;r:1949;i:114;r:1957;i:115;r:1965;i:116;r:1973;i:117;r:1981;i:118;r:1989;i:119;r:1997;i:120;r:2005;}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}s:17:\"\0*\0packageManager\";E:41:\"Laravel\\Roster\\Enums\\JsPackageManager:Npm\";}s:6:\"stacks\";O:30:\"Laravel\\Roster\\Support\\EnumSet\":1:{s:8:\"\0*\0cases\";a:1:{i:0;E:32:\"Laravel\\Roster\\Enums\\Stack:Blade\";}}s:21:\"browserTestFrameworks\";O:30:\"Laravel\\Roster\\Support\\EnumSet\":1:{s:8:\"\0*\0cases\";a:0:{}}s:9:\"frontends\";O:30:\"Laravel\\Roster\\Support\\EnumSet\":1:{s:8:\"\0*\0cases\";a:0:{}}s:6:\"agents\";O:30:\"Laravel\\Roster\\Support\\EnumSet\":1:{s:8:\"\0*\0cases\";a:2:{i:0;E:37:\"Laravel\\Roster\\Enums\\Agent:ClaudeCode\";i:1;E:32:\"Laravel\\Roster\\Enums\\Agent:Codex\";}}s:7:\"editors\";O:30:\"Laravel\\Roster\\Support\\EnumSet\":1:{s:8:\"\0*\0cases\";a:0:{}}}', 1789714138);
INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel-cache-setting_contact_email', 's:27:\"jayminpanchal9037@gmail.com\";', 1790405229),
('laravel-cache-setting_favicon', 's:53:\"settings/MctUW6nzslMNpUAgbXMQ7YqXVBm8xHk13Cf0pMlE.png\";', 1790408166),
('laravel-cache-setting_footer_text', 's:20:\"All rights reserved.\";', 1790361460),
('laravel-cache-setting_hero_words', 'N;', 1790361490),
('laravel-cache-setting_logo', 'N;', 1790361177),
('laravel-cache-setting_meta_description', 's:143:\"Portfolio of Jaymin Panchal, a Full-Stack Web Developer specializing in Laravel, PHP, and modern web technologies. Based in Ahmedabad, Gujarat.\";', 1790361460),
('laravel-cache-setting_meta_keywords', 's:99:\"Jaymin Panchal, web developer, full-stack developer, portfolio, laravel, javascript, php, Ahmedabad\";', 1790361460),
('laravel-cache-setting_signature_image', 's:53:\"settings/9eG10g5q054hViUcDV21cXtapbGV2rxk5dE4lNpY.png\";', 1790408167),
('laravel-cache-setting_site_description', 's:147:\"Full-Stack Web Developer with 2.5+ years of experience building modern, performant web applications using Laravel and modern JavaScript frameworks.\";', 1790405229),
('laravel-cache-setting_site_tagline', 's:24:\"Full-Stack Web Developer\";', 1790405229),
('laravel-cache-setting_site_title', 's:14:\"Jaymin Panchal\";', 1790406033);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `company` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `project_type` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'lead',
  `notes` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `company`, `email`, `phone`, `project_type`, `status`, `notes`, `created_at`, `updated_at`) VALUES
(4, 'Rahul Desai', 'TechStart Solutions', 'rahul@techstart.in', '+919876543210', 'Web Application Development', 'active', 'Long-term client, recurring work.', '2026-09-20 09:26:49', '2026-09-20 09:26:49'),
(5, 'Priya Shah', 'PixelLabs Agency', 'priya@pixellabs.in', '+919812345670', 'Website Redesign', 'active', NULL, '2026-09-20 09:26:49', '2026-09-20 09:26:49'),
(6, 'Amit Verma', 'CloudPeak', 'amit@cloudpeak.io', '+919900112233', 'API & Backend Development', 'active', NULL, '2026-09-20 09:26:49', '2026-09-20 09:26:49'),
(7, 'Sneha Patel', 'BrightCode Studio', 'sneha@brightcode.in', '+919876512340', 'UI/UX Implementation', 'active', NULL, '2026-09-20 09:26:49', '2026-09-20 09:26:49'),
(8, 'Vikas Gupta', 'FinTrack Solutions', 'vikas@fintrack.in', '+919823456789', 'Dashboard & Analytics', 'active', 'Needs monthly maintenance.', '2026-09-20 09:26:49', '2026-09-20 09:26:49'),
(9, 'Neha Joshi', 'TravelKart', 'neha@travelkart.in', '+919871234567', 'E-commerce Website', 'active', NULL, '2026-09-20 09:26:49', '2026-09-20 09:26:49'),
(10, 'Rohan Kulkarni', 'BuildDesk', 'rohan@builddesk.in', '+919834567890', 'Web Application Development', 'active', NULL, '2026-09-20 09:26:49', '2026-09-20 09:26:49'),
(11, 'Kavya Iyer', 'MediCare Systems', 'kavya@medicare.in', '+919845678901', 'Healthcare Portal', 'active', 'NDA signed.', '2026-09-20 09:26:49', '2026-09-20 09:26:49'),
(12, 'Sameer Khan', 'LogiTrack', 'sameer@logitrack.in', '+919856789012', 'Logistics Dashboard', 'completed', NULL, '2026-09-20 09:26:49', '2026-09-20 09:26:49'),
(13, 'Divya Nair', 'EventsHub', 'divya@eventshub.in', '+919867890123', 'Booking Platform', 'completed', NULL, '2026-09-20 09:26:49', '2026-09-20 09:26:49'),
(14, 'Meera Pillai', 'EdLearn Academy', 'meera@edlearn.in', '+919878901234', 'Learning Management System', 'active', NULL, '2026-09-20 09:26:49', '2026-09-20 09:26:49'),
(15, 'Arjun Malhotra', 'Shopora Retail', 'arjun@shopora.in', '+919889012345', 'E-commerce Store', 'lead', 'Quotation shared.', '2026-09-20 09:26:49', '2026-09-20 09:26:49'),
(16, 'Karan Mehta', 'Streamline Media', 'karan@streamlinemedia.in', '+919890123456', 'Portfolio Website', 'inactive', NULL, '2026-09-20 09:26:49', '2026-09-20 09:26:49');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `amount` decimal(12,2) NOT NULL,
  `category` varchar(255) NOT NULL DEFAULT 'Other',
  `expense_date` date NOT NULL,
  `notes` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `title`, `amount`, `category`, `expense_date`, `notes`, `created_at`, `updated_at`) VALUES
(2, 'Domain renewal', 899.00, 'Hosting', '2026-09-18', 'portfolio site domain', '2026-09-20 09:26:49', '2026-09-20 09:26:49'),
(3, 'Shared hosting plan', 3499.00, 'Hosting', '2026-09-10', NULL, '2026-09-20 09:26:49', '2026-09-20 09:26:49'),
(4, 'JetBrains license', 7800.00, 'Software', '2026-09-05', 'PhpStorm annual', '2026-09-20 09:26:49', '2026-09-20 09:26:49'),
(5, 'Cloud server', 2450.00, 'Hosting', '2026-08-31', NULL, '2026-09-20 09:26:49', '2026-09-20 09:26:49'),
(6, 'Google Ads campaign', 3000.00, 'Marketing', '2026-09-14', 'One-week trial', '2026-09-20 09:26:49', '2026-09-20 09:26:49'),
(7, 'Coworking desk', 5000.00, 'Office', '2026-09-08', NULL, '2026-09-20 09:26:49', '2026-09-20 09:26:49'),
(8, 'Mechanical keyboard', 4200.00, 'Equipment', '2026-08-26', NULL, '2026-09-20 09:26:49', '2026-09-20 09:26:49'),
(9, 'Client meetup travel', 1350.00, 'Travel', '2026-09-16', 'Ahmedabad client visit', '2026-09-20 09:26:49', '2026-09-20 09:26:49'),
(10, 'Team lunch', 1200.00, 'Food', '2026-09-12', NULL, '2026-09-20 09:26:49', '2026-09-20 09:26:49');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `is_current` tinyint(1) NOT NULL DEFAULT 0,
  `location` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `sort_order` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `company`, `position`, `description`, `start_date`, `end_date`, `is_current`, `location`, `website`, `logo`, `sort_order`, `created_at`, `updated_at`) VALUES
(4, 'Techmayntra IT Solutions', 'Jr. Laravel Developer', 'Building and maintaining web applications using Laravel, PHP, and JavaScript. Developing RESTful APIs, managing MySQL databases, and collaborating with cross-functional teams to deliver high-quality software.', '2024-05-01', '2025-03-01', 0, 'Durdarshan Kendra, Ahmedabad, Gujarat', 'https://techmayntra.com/', NULL, 2, '2026-09-14 06:59:57', '2026-09-26 01:22:27'),
(5, 'Ncode Technologies Inc.', 'Junior Web Developer', 'Developed client websites and web applications using Laravel and Vue.js. Gained hands-on experience with database design, API integration, and responsive UI development.', '2025-05-01', '2025-08-28', 0, 'Navrangppura, Ahmedabad, Gujarat', 'https://www.ncodetechnologies.com/', NULL, 1, '2026-09-14 06:59:57', '2026-09-26 01:22:27'),
(6, 'iSyncEvolution Pvt. Ltd.', 'Web Developer', 'Developing scalable web applications and backend solutions using Laravel and PHP. Working on database design, API integration, authentication, debugging, and performance optimization while delivering responsive and user-friendly features based on business requirements.', '2025-09-18', NULL, 1, 'SG Highway, Ahmedabad, Gujarat', 'https://www.isyncevolution.com', NULL, 0, '2026-09-18 01:06:34', '2026-09-26 01:22:27');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` varchar(255) NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` text NOT NULL,
  `sort_order` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `is_visible` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `sort_order`, `is_visible`, `created_at`, `updated_at`) VALUES
(1, 'What services do you offer?', 'I offer custom web application development, website development, REST API development, database design and optimization, UI implementation, and ongoing maintenance and support.', 1, 1, '2026-09-18 02:39:53', '2026-09-18 02:39:53'),
(2, 'Which technologies do you work with?', 'I specialize in Laravel and PHP for backend development, along with MySQL for databases, and JavaScript, Vue.js and Tailwind CSS for the frontend.', 2, 1, '2026-09-18 02:39:53', '2026-09-18 02:39:53'),
(3, 'How long does a typical project take?', 'It depends on the scope. A simple website can take 1-2 weeks, while a full custom web application typically takes 4-8 weeks. I will give you a clear timeline after understanding your requirements.', 3, 1, '2026-09-18 02:39:53', '2026-09-18 02:39:53'),
(4, 'Do you provide support after the project is complete?', 'Yes, I offer maintenance and support packages to keep your application running smoothly, including bug fixes, feature additions and regular updates.', 4, 1, '2026-09-18 02:39:53', '2026-09-18 02:39:53');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` smallint(5) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `meetings`
--

CREATE TABLE `meetings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `meeting_date` date NOT NULL,
  `meeting_time` time DEFAULT NULL,
  `duration` smallint(5) UNSIGNED DEFAULT NULL,
  `topic` varchar(255) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `source` varchar(255) NOT NULL DEFAULT 'public',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meetings`
--

INSERT INTO `meetings` (`id`, `name`, `email`, `phone`, `company`, `meeting_date`, `meeting_time`, `duration`, `topic`, `notes`, `status`, `source`, `created_at`, `updated_at`) VALUES
(6, 'Ankit Joshi', 'ankit@smartbiz.in', '+919876543210', 'SmartBiz', '2026-09-22', '11:00:00', 45, 'Web Development', 'Wants a quote for an e-commerce build.', 'pending', 'public', '2026-09-20 09:26:49', '2026-09-20 09:26:49'),
(7, 'Ritika Sharma', 'ritika@brandnest.co', '+919812345670', 'BrandNest', '2026-09-23', '15:30:00', 30, 'Consulting', 'Tech stack review.', 'confirmed', 'public', '2026-09-20 09:26:49', '2026-09-20 09:26:49'),
(8, 'Mohit Jain', 'mohit@startupx.in', '+919900112233', 'StartupX', '2026-09-25', '10:00:00', 60, 'Project Discussion', NULL, 'pending', 'public', '2026-09-20 09:26:49', '2026-09-20 09:26:49'),
(9, 'Ishita Rao', 'ishita@designwave.in', '+919876512340', 'DesignWave', '2026-09-16', '12:00:00', 30, 'Collaboration', 'Discussed a joint venture.', 'completed', 'public', '2026-09-20 09:26:49', '2026-09-20 09:26:49'),
(10, 'Farhan Shaikh', 'farhan@datacore.in', '+919823456789', 'DataCore', '2026-09-27', '16:00:00', 45, 'Mobile App Development', 'Prefers a video call.', 'pending', 'admin', '2026-09-20 09:26:49', '2026-09-20 09:26:49'),
(11, 'Pooja Bhatt', 'pooja@wellnessone.in', '+919871234567', 'WellnessOne', '2026-09-30', '09:30:00', 30, 'Website Design', NULL, 'cancelled', 'public', '2026-09-20 09:26:49', '2026-09-20 09:26:49'),
(12, 'Sejal Panchal', 'jayminpanchal4200@gmail.com', '+919558166838', 'Isync', '2026-10-09', '17:14:00', 30, 'Consulting', NULL, 'pending', 'public', '2026-09-26 01:09:26', '2026-09-26 01:09:26'),
(13, 'Sejal Panchal', 'jayminpanchal4200@gmail.com', '+919558166838', 'Isync', '2026-10-09', '17:14:00', 30, 'Consulting', NULL, 'pending', 'public', '2026-09-26 01:09:32', '2026-09-26 01:09:32'),
(14, 'Sejal Panchal', 'jayminpanchal4200@gmail.com', NULL, 'Isync', '2026-10-10', '18:14:00', 30, 'Career Advice', NULL, 'pending', 'public', '2026-09-26 01:14:48', '2026-09-26 01:14:48');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `message`, `is_read`, `created_at`, `updated_at`) VALUES
(2, 'JAYMIN PANCHAL', 'jayminpanchal0985@gmail.com', 'General Enquiry', 'Test Inquiry', 1, '2026-09-18 01:08:26', '2026-09-18 02:34:34'),
(5, 'Jinendra', 'jayminpanchal0985@gmail.com', 'Mobile App Development', 'Need Mobile App', 1, '2026-09-18 05:08:45', '2026-09-18 05:19:20'),
(6, 'Priya Sharma', 'priya@example.com', 'Project Discussion', 'I would like to discuss a Laravel project.', 0, '2026-09-26 00:30:33', '2026-09-26 00:30:33'),
(7, 'Happy', 'jayminpanchal0985@gmail.com', 'SEO & Digital Marketing', 'Need Consult', 0, '2026-09-26 00:32:50', '2026-09-26 00:32:50'),
(8, 'Shraddha', 'jayminpanchal0985@gmail.com', 'Web Development', 'Consult', 0, '2026-09-26 00:35:03', '2026-09-26 00:35:03'),
(9, 'Shreem', 'jaymin.techmayntra@gmail.com', 'Mobile App Development', 'Consult', 0, '2026-09-26 00:42:30', '2026-09-26 00:42:30'),
(10, 'Kriti', 'jayminpanchal0985@gmail.com', 'General Enquiry', 'Consult', 0, '2026-09-26 00:47:22', '2026-09-26 00:47:22'),
(11, 'Sejal', 'jayminpanchal0985@gmail.com', 'Mobile App Development', 'Consult', 0, '2026-09-26 00:54:33', '2026-09-26 00:54:33'),
(12, 'JAYMIN PANCHAL', 'jayminpanchal4200@gmail.com', 'Web Development', 'Contact', 0, '2026-09-26 01:01:16', '2026-09-26 01:01:16'),
(13, 'Sejal Panchal', 'jayminpanchal4200@gmail.com', 'Mobile App Development', 'Test', 0, '2026-09-26 01:07:50', '2026-09-26 01:07:50'),
(14, 'Jaymin Panchal', 'jayminpanchal4200@gmail.com', 'Web Development', 'Test', 0, '2026-09-26 01:16:48', '2026-09-26 01:16:48');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_01_01_000001_add_is_admin_to_users_table', 2),
(5, '2025_01_01_000002_create_profiles_table', 2),
(6, '2025_01_01_000003_create_skills_table', 2),
(7, '2025_01_01_000004_create_experiences_table', 2),
(8, '2025_01_01_000005_create_projects_table', 2),
(9, '2025_01_01_000006_create_services_table', 2),
(10, '2025_01_01_000007_create_messages_table', 2),
(11, '2025_01_01_000008_create_settings_table', 2),
(12, '2026_09_18_055353_add_social_fields_to_profiles_table', 3),
(13, '2026_09_18_074559_add_website_to_experiences_table', 4),
(14, '2026_09_18_074600_create_testimonials_table', 4),
(15, '2026_09_18_074601_create_posts_table', 4),
(16, '2026_09_18_074602_create_faqs_table', 4),
(17, '2026_09_18_074603_create_pages_table', 4),
(18, '2026_09_18_084128_add_about_image_to_profiles_table', 5),
(19, '2026_09_18_095300_add_brand_font_to_profiles_table', 6),
(20, '2026_09_18_102328_add_home_about_image_to_profiles_table', 7),
(21, '2026_09_18_104456_create_visits_table', 8),
(22, '2026_09_18_104457_create_newsletter_subscribers_table', 8),
(23, '2026_09_18_104458_add_resume_downloads_to_profiles_table', 8),
(24, '2026_09_18_122532_add_last_login_at_to_users_table', 9),
(25, '2026_09_20_122900_add_whatsapp_to_profiles_table', 10),
(26, '2026_09_20_123308_add_telegram_to_profiles_table', 11),
(27, '2026_09_20_135220_create_expenses_table', 12),
(28, '2026_09_20_135220_create_meetings_table', 12),
(29, '2026_09_20_135221_create_clients_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_subscribers`
--

CREATE TABLE `newsletter_subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletter_subscribers`
--

INSERT INTO `newsletter_subscribers` (`id`, `email`, `name`, `is_active`, `created_at`, `updated_at`) VALUES
(3, 'jayminpanchal0985@gmail.com', NULL, 1, '2026-09-18 05:30:41', '2026-09-18 05:30:41');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `content`, `is_published`, `created_at`, `updated_at`) VALUES
(1, 'Terms & Conditions', 'terms', 'Welcome to my portfolio website. By accessing this site, you agree to the following terms.\n\nAll content, including text, images, and code samples, is the property of the site owner unless otherwise stated. You may view and share content for personal, non-commercial purposes, provided you credit the source.\n\nThe services described on this site are provided on an \'as is\' basis. While I strive to keep information accurate and up to date, I make no guarantees about completeness or availability.\n\nIf you have any questions about these terms, feel free to reach out through the contact page.', 1, '2026-09-18 02:39:53', '2026-09-18 02:39:53'),
(2, 'Privacy Policy', 'privacy', 'This page explains how information collected through this website is handled.\n\nInformation I collect: contact form submissions (name, email and your message), newsletter subscriptions (email address), and anonymous site analytics such as visited pages.\n\nHow I use it: to respond to enquiries, send newsletter updates you have opted into, and improve the content and experience of this site.\n\nCookies: this site uses local storage to remember your theme preference. No tracking cookies are used.\n\nContact: if you have any questions about this policy, reach out through the contact page.', 1, '2026-09-20 09:26:49', '2026-09-20 09:26:49');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `excerpt` varchar(255) DEFAULT NULL,
  `content` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT 1,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `excerpt`, `content`, `image`, `is_published`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 'Getting Started with Laravel', 'getting-started-with-laravel', 'A beginner-friendly introduction to building modern web applications with Laravel, from installation to your first routes.', 'Laravel is one of the most popular PHP frameworks, and for good reason. It comes with an expressive syntax, a rich ecosystem, and tools that make developer experience genuinely enjoyable.\n\nIn this guide, I will walk you through the basics:\n\n1. Installing Laravel with Composer.\n2. Understanding the folder structure.\n3. Creating your first routes and views.\n4. Working with Eloquent models.\n5. Using Blade templates to build dynamic pages.\n\nOnce you have these fundamentals down, you can start exploring features like authentication, queues, and testing.\n\nStay tuned for more tutorials on building real-world applications with Laravel.', NULL, 1, '2026-09-15 02:39:53', '2026-09-18 02:39:53', '2026-09-18 02:39:53'),
(2, 'Building Clean REST APIs', 'building-clean-rest-apis', 'Learn how to design and build well-structured REST APIs in Laravel with validation, resources, and consistent responses.', 'A good API is consistent, predictable, and easy to maintain. In Laravel, you can achieve this by:\n\n- Using resource controllers to keep routing organized.\n- Leveraging Form Requests for clean validation.\n- Returning responses through API Resources.\n- Handling errors with structured exception responses.\n\nConsistency matters most. Define conventions for your endpoints, payloads, and error format early, and every future endpoint will follow the same predictable pattern.', NULL, 1, '2026-09-11 02:39:53', '2026-09-18 02:39:53', '2026-09-18 02:39:53'),
(3, 'Why Tailwind CSS Speeds Up Frontend Work', 'why-tailwind-css-speeds-up-frontend-work', 'Utility-first styling lets you move fast without leaving your HTML. Here is why I use Tailwind CSS on nearly every project.', 'Tailwind CSS changed how I think about frontend styling. Instead of jumping between CSS files and HTML, utility classes live right where you need them.\n\nThe main benefits:\n\n- Faster iteration because there is no context switching.\n- Consistent spacing, colors, and typography out of the box.\n- A config file that keeps your design tokens in one place.\n- Small production CSS thanks to automatic purging.\n\nCombined with component-oriented frameworks like Laravel Blade, Tailwind lets you build polished interfaces quickly while keeping the codebase maintainable.', NULL, 1, '2026-09-04 02:39:53', '2026-09-18 02:39:53', '2026-09-18 02:39:53');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `about_image` varchar(255) DEFAULT NULL,
  `home_about_image` varchar(255) DEFAULT NULL,
  `resume_path` varchar(255) DEFAULT NULL,
  `resume_downloads` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `phone` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `telegram` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `github` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `brand_font` varchar(100) NOT NULL DEFAULT 'dancing-script',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `title`, `bio`, `avatar`, `about_image`, `home_about_image`, `resume_path`, `resume_downloads`, `phone`, `whatsapp`, `telegram`, `location`, `github`, `linkedin`, `twitter`, `instagram`, `facebook`, `website`, `brand_font`, `created_at`, `updated_at`) VALUES
(2, 4, 'Full-Stack Web Developer', 'I am a Full-Stack Web Developer with 2.5+ years of experience building modern web applications. I specialize in Laravel, PHP, JavaScript, and love crafting clean, scalable solutions. Based in Ahmedabad, Gujarat.', 'avatars/E1BXkQ7sXDxWecdcKuRpmgIXdodpKIerscXTNdJM.jpg', 'avatars/wWWbYW1wgVtiXGYS3OEbjyuJkZsRRa3afISQwmH1.jpg', 'avatars/B42TJcVjBrPBXwN8ZkNWkAxOBy0kRBj6jzV6G0Ps.png', 'resumes/2Knnuf80v1h0ELJNurdoEPNaKdl47ZS4ttB2gEfx.pdf', 3, '+919558166838', '+919558166838', NULL, 'Naroda, Ahmedabad, Gujarat 382330, India', 'https://github.com/JAYMIN4200', 'https://linkedin.com/in/jaymin4200', NULL, 'https://instagram.com/jaymin_4200', NULL, NULL, 'dancing-script', '2026-09-14 06:59:57', '2026-09-25 12:08:37');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `long_description` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `technologies` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`technologies`)),
  `live_url` varchar(255) DEFAULT NULL,
  `github_url` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL DEFAULT 0,
  `sort_order` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `slug`, `description`, `long_description`, `image`, `technologies`, `live_url`, `github_url`, `is_featured`, `sort_order`, `created_at`, `updated_at`) VALUES
(7, 'E-Commerce Platform', 'ecommerce-platform', 'A full-featured e-commerce platform with product management, cart, checkout and admin panel.', 'Built a complete e-commerce solution using Laravel and Vue.js. Includes product catalog, shopping cart, checkout integration, order management, and a full admin dashboard. Features include search with filters, inventory management, and email notifications.', 'projects/ecommerce.svg', '[\"Laravel\", \"Vue.js\", \"MySQL\", \"Tailwind CSS\"]', NULL, 'https://github.com/JAYMIN4200', 1, 1, '2026-09-14 07:01:35', '2026-09-18 05:30:10'),
(8, 'Task Management App', 'task-management-app', 'A collaborative task management application with real-time updates and team workspaces.', 'Developed a real-time task management application using Laravel, JavaScript, and modern web technologies. Features include drag-and-drop kanban boards, team workspaces, file attachments, and activity feeds.', 'projects/tasks.svg', '[\"Laravel\", \"JavaScript\", \"MySQL\", \"Tailwind CSS\"]', NULL, 'https://github.com/JAYMIN4200', 1, 2, '2026-09-14 07:01:35', '2026-09-14 07:11:44'),
(9, 'Blog Platform', 'blog-platform', 'A modern blogging platform with rich text editing, categories, and SEO optimization.', 'Created a blogging platform with Laravel. Features include rich text editing, category management, full-text search, automatic sitemap generation, and social media card support.', 'projects/blog.svg', '[\"Laravel\", \"JavaScript\", \"MySQL\", \"Tailwind CSS\"]', NULL, 'https://github.com/JAYMIN4200', 0, 3, '2026-09-14 07:01:35', '2026-09-18 05:53:32'),
(10, 'Portfolio Website', 'portfolio-website', 'A modern developer portfolio built with Laravel and Tailwind CSS with a full admin backend.', 'Designed and built a professional portfolio website featuring a modern dark-themed frontend, responsive design, and a secure admin panel for managing content. Includes project showcase, skills management, contact form, and SEO optimization.', 'projects/portfolio.svg', '[\"Laravel\", \"Tailwind CSS\", \"MySQL\", \"Blade\"]', NULL, 'https://github.com/JAYMIN4200', 1, 4, '2026-09-14 07:01:35', '2026-09-14 07:11:44'),
(11, 'Restaurant Management System', 'restaurant-management-system', 'A complete POS and management platform for restaurants with online ordering and staff roles.', 'Built a restaurant management platform covering table booking, an online ordering storefront, kitchen display system, and a staff role-based panel. Includes daily reports and inventory tracking with sales analytics.', NULL, '[\"Laravel\",\"Vue.js\",\"MySQL\",\"Tailwind CSS\"]', NULL, 'https://github.com/JAYMIN4200', 0, 5, '2026-09-20 09:26:49', '2026-09-20 09:26:49'),
(12, 'HR & Payroll Dashboard', 'hr-payroll-dashboard', 'An internal HR tool for leave management, attendance, payroll summaries and employee profiles.', 'Developed an internal HR dashboard with leave approval workflows, attendance tracking, payroll export and employee self-service profiles. Integrated role-based access for HR, managers and employees.', NULL, '[\"Laravel\",\"JavaScript\",\"MySQL\",\"Alpine.js\"]', NULL, 'https://github.com/JAYMIN4200', 0, 6, '2026-09-20 09:26:49', '2026-09-20 09:26:49'),
(13, 'Inventory Management App', 'inventory-management-app', 'Stock management with barcode scanning, low-stock alerts and purchase order tracking.', 'Created an inventory solution with barcode-based stock entry, automatic low-stock notifications, purchase order tracking and multi-warehouse support, backed by a dashboard of key metrics.', NULL, '[\"Laravel\",\"JavaScript\",\"MySQL\",\"Bootstrap\"]', NULL, 'https://github.com/JAYMIN4200', 0, 7, '2026-09-20 09:26:49', '2026-09-20 09:26:49');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `sort_order` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `icon`, `sort_order`, `created_at`, `updated_at`) VALUES
(1, 'Web Application Development', 'Custom web applications built with Laravel and modern JavaScript frameworks, tailored to your specific business needs.', NULL, 1, '2026-09-14 06:48:04', '2026-09-14 06:48:04'),
(2, 'Website Development', 'Responsive, fast and SEO-optimized websites that make your brand stand out and convert visitors into customers.', NULL, 2, '2026-09-14 06:48:04', '2026-09-14 06:48:04'),
(3, 'API Development', 'RESTful APIs designed with security, scalability and performance in mind, ready to power your next application.', NULL, 3, '2026-09-14 06:48:04', '2026-09-14 06:48:04'),
(4, 'Database Design & Optimization', 'Efficient database schemas, query optimization and performance tuning to keep your application fast as it grows.', NULL, 4, '2026-09-14 06:48:04', '2026-09-14 06:48:04'),
(5, 'UI/UX Implementation', 'Pixel-perfect implementations of designs, with a focus on accessibility, responsiveness and smooth interactions.', NULL, 5, '2026-09-14 06:48:04', '2026-09-14 06:48:04'),
(6, 'Maintenance & Support', 'Ongoing maintenance, bug fixes, feature additions and technical support to keep your application running smoothly.', NULL, 6, '2026-09-14 06:48:04', '2026-09-14 06:48:04');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('02vFuIXBEowDQNwSpvnWqGg1jJkEuCSd416DYHi6', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJGa3YxR2dVODN5R0FyajJrYTdqNzlMbUhCbXRPR05DNUZsU1laZTB2IiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTI1XC9jbGllbnRzIiwicm91dGUiOiJjbGllbnRzLmluZGV4In0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1790357554),
('0XbbzXlKaLtPbdywYXcDk0Kp9KSDRNm854OTaYWM', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJPdHZEVXQxd2lVaHd3dTlJTEF3eUpGQjdhYU85Tk1sc3ZGNTRHSGl1IiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTMxXC9hYm91dCIsInJvdXRlIjoiYWJvdXQifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1790358174),
('1EBpU51429q7WcXvxVB9lrKSiqY79wS0nsFSJLDi', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiI0ckhoN2U3b3pQaFkzbzVHa0d0Zkg1VnlvakhsNUJINENySk1jNzZYIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTMxXC9mYXEiLCJyb3V0ZSI6ImZhcSJ9LCJfZmxhc2giOnsib2xkIjpbXSwibmV3IjpbXX19', 1790358176),
('1YeUYJ6nu0TUp5izRmt26vVGlI5leVnQF9vTdOs5', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJlaUdYRjV4VzlrMWZuNEZJQXVEb3FpSUpXeFdFRHZVeDlTdGRzREpzIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTMxXC9wcm9qZWN0c1wvZWNvbW1lcmNlLXBsYXRmb3JtIiwicm91dGUiOiJwcm9qZWN0cy5zaG93In0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1790358177),
('2IJcI3AubhrFfyvHDwgfIaS7qk5COTWjCgxV7B82', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJUZFdrUks1Z2FEUWxBcnZtT21HSGgyazFWYkNic1hDVldQRm41YVlTIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTMxXC9wcm9qZWN0cyIsInJvdXRlIjoicHJvamVjdHMuaW5kZXgifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1790358175),
('2M2EcUpcVpzzsqGmfVrnhjxyT2sc4WR6bfnlnWB3', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiI4SjNKUHgyWkw2ellaMXRrVkNBWDZHU3RoaDd2SUZhMUJCY21ZeWFWIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTI3XC9sb2dpbiIsInJvdXRlIjoibG9naW4ifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1790357776),
('2ryC307v3fMeH04X8s2cn8gNX0jZHcMVjsUuY5zI', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJjaU5acTVZT1FZajRnQXk2YktoUGJzcXl4WlpFMmhQWGR3dHZ4Q281IiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTIzIiwicm91dGUiOiJob21lIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1790357457),
('4KKEFcX9cgCFD9u08C12NGVNYIuSfyv6daPxFn0Z', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJBdEJiTEpzYW9hYWhjUXRkWjBpeGlJcmhDcjVOUXNmeThJTkZ5aHlHIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTI3XC9jb250YWN0Iiwicm91dGUiOiJjb250YWN0In0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1790357773),
('4mf9YuGw6uNL2FgN3U7OmeoWFHc57rRHhcjbDSAh', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJqYkhmd285bEhXTW9IVUhpM2JnajI3Y1lkYU80N2hFY1NiNlJFNzdRIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTIzXC9jbGllbnRzIiwicm91dGUiOiJjbGllbnRzLmluZGV4In0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1790359034),
('5Qrb4LHS2M88CutypIL4ZohATSMUdBuFWanTy15n', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJPa0FRUVo2ZHB0NGhCTnh3RFVQekpPQU1QejdQZUwydTNUZmUwbzNnIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTIzXC9wcm9qZWN0c1wvJTdCcHJvamVjdCU3RCIsInJvdXRlIjoicHJvamVjdHMuc2hvdyJ9LCJfZmxhc2giOnsib2xkIjpbXSwibmV3IjpbXX19', 1790359036),
('62AAtvp4DyNYON43VpxB89IGoYeRHkoDYDDgtzd4', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJxYmc0cmVyWEp0MlVtQUlpTjdBTFlpU2sxc3F2RzhiZTBXMEhjclBRIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTIzXC9yZXN1bWUiLCJyb3V0ZSI6InJlc3VtZS5kb3dubG9hZCJ9LCJfZmxhc2giOnsib2xkIjpbXSwibmV3IjpbXX19', 1790359036),
('7CmUYNytyCLbW9fJc4oiCwLiJVHfkmrLS9RSm89A', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJnY1FZNlgzZE1YeXdieWlxeXlWSmRKcmJyNzVGZGFhWmFoUVFPSnN2IiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTIzXC9ibG9nIiwicm91dGUiOiJibG9nLmluZGV4In0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1790359033),
('7QDASqAoRjLzE1mNoctJCJN9F3Ql66k1DuVqbws8', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJlVTNNb0ZLRklMMnNFVzJuekV6NmNSSnhQclNSNHBUbG9mcENGc3FIIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTUyXC9mb3Jnb3QtcGFzc3dvcmQiLCJyb3V0ZSI6InBhc3N3b3JkLnJlcXVlc3QifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1790358545),
('8kObRP8F9VSgREsm1jowoeOyErP66IWY2vFzzqtc', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiIzdFZiVWRQamJYQkpBMGszUlRCNjE4b3VoTnlpM2E5OWZTanYxZ25RIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTMxXC9ibG9nXC93aHktdGFpbHdpbmQtY3NzLXNwZWVkcy11cC1mcm9udGVuZC13b3JrIiwicm91dGUiOiJibG9nLnNob3cifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1790358182),
('8MPCU2NQU92YIvNnuyoPCXLn9t95xlekWvSeix4q', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJLSjZ0bmlYQ1Z1SmdNWmZKTVRFdG8zWHZ4TTc4a2JOdktFRXJzM3N0IiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTIzXC9hYm91dCIsInJvdXRlIjoiYWJvdXQifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1790358819),
('8tEiMYgBjfHYESXiV5zwSJyMZVjzHjUgh43CQNIK', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJrQ1FZREFHb09oZnlmdGhXME1LbjF1VjFCQThiZDJqN1hyZ1hqSWhaIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTMxXC9ib29rLW1lZXRpbmciLCJyb3V0ZSI6Im1lZXRpbmdzLmJvb2sifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1790358177),
('akugSkTF2gQIlCMYoGgcHugLOG0hL3tHVR7bNNro', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJ0SHRkU3Q5eDZEcGtsbFBkM0dZNkNiZkRVaWt3cnNDR2M3d3RYS0xtIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTIzXC9yZXN1bWUiLCJyb3V0ZSI6InJlc3VtZS5kb3dubG9hZCJ9LCJfZmxhc2giOnsib2xkIjpbXSwibmV3IjpbXX19', 1790359053),
('au8T6y76Cj8pH1F9Se9idFnV0jz6O4PDBuVhCLa5', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJDdDhNRmx5R2dHNm9NRkZ5ZmVyOVZpalZqMWIybjl0eTBTRkx0RkxOIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTI0XC9wcm9qZWN0cyIsInJvdXRlIjoicHJvamVjdHMuaW5kZXgifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1790359250),
('BIpFUKuh8iPGOFYDotpFaYNnpSrEd9pMWN07lMpK', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiIwM3I3Y1RYUlptTFVPbjNBZTZLRkYwUFl5Q2RYVGVxd240SnpvbHZ6IiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTIzXC9wcm9qZWN0cyIsInJvdXRlIjoicHJvamVjdHMuaW5kZXgifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1790359036),
('bne9P19oLoU1rBvYWfWaQfljSEjIusXtm2akepHK', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJ4cXhKMUtXbDI3bkJzVFZpQlc5aHhtNnp4VUtMM2FYQTFKaEdnNjU1IiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTIzXC9ibG9nXC9nZXR0aW5nLXN0YXJ0ZWQtd2l0aC1sYXJhdmVsIiwicm91dGUiOiJibG9nLnNob3cifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1790359053),
('c84NkyXLlyNPwe1NnICQGtfszrG8rpLEPQ87WAp3', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJ4TmVIS3AwUlhEZTdCMWc4UnlaRkk4QUtJUlJrUnZnRmJSeERmeEhmIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTI2XC9wcm9qZWN0cyIsInJvdXRlIjoicHJvamVjdHMuaW5kZXgifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1790357600),
('ChmCtk7v7zZm5Vh6TeFg3hibmmbvM75CuKdG25OD', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJ1cTY2a2xSWlpWZjg1VGJnNW9DVFU0blpSNW15N29wc0ZONWI3RjFOIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTI3XC9wcm9qZWN0cyIsInJvdXRlIjoicHJvamVjdHMuaW5kZXgifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1790357772),
('CNrDIOvhhp3UXEBgsCZTR1Nj18xrBAFIRTB0ie5n', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJpdTk1NmNqWTZ6VEtxaUxQMFBoUFNxWWNWNDc4UnhIMnJUZUhBWGM0IiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTIzXC9jb250YWN0Iiwicm91dGUiOiJjb250YWN0In0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1790359035),
('D40QY0Xej4frd6jlFLA0Muh3rmJJnB8O5kxQYuEi', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJ2dDVVOGdTWktCdzFlYkJSS2JVVlh2UzBsY045dHE4NGEzcW9TSDUxIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTUyXC9mb3Jnb3QtcGFzc3dvcmQiLCJyb3V0ZSI6InBhc3N3b3JkLnJlcXVlc3QifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1790358545),
('DPeRUHLGCA32lhJbJSEmyC2aahSOm1czJkwG6AB0', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJjRU9TTGNZbDVXZHJWQ0ZZY0Q0RWxvSXg0TlhYejcxUlRjNmZnTXdTIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTIzIiwicm91dGUiOiJob21lIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1790358812),
('E1dShcDuyK3KO4u65IeCjyz4auTx0M4RF2txYrFm', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJKcHd0SjNlMExRNTNFeHhzNGxqN2w0eDFHcUNPcFFEeEpNcXplcE5TIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTIzXC9ibG9nXC8lN0Jwb3N0OnNsdWclN0QiLCJyb3V0ZSI6ImJsb2cuc2hvdyJ9LCJfZmxhc2giOnsib2xkIjpbXSwibmV3IjpbXX19', 1790359034),
('eu6Ufu5psMe1Lmf5nW84ZBTI4hA2ffy6iH49cLaY', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJveDRZc05tN0EzcDhBUlZjR0RacVBxb1BzUFlBY1liUWl4NzQ4cEVGIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTMxXC9jbGllbnRzIiwicm91dGUiOiJjbGllbnRzLmluZGV4In0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1790358175),
('EWAqa1QWnXAgKJCakoJeCYCbTRxDwqvesrb45mIq', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJDSkxoRTVWYUEyQlRBTUFoMDVibjNHV05uZFBlS1YyZmJIOFFQeVZOIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTIzXC9hYm91dCIsInJvdXRlIjoiYWJvdXQifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1790357458),
('fh4W7hVRyulfT1hn9smmU2e2LyuQanXB29CEFFmw', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', 'eyJfdG9rZW4iOiIxZjA4SnVvZnZjUmpDaGJLWWNMaWFYbzBVdjVrT1k1ZFdiNVp6QVpyIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MDAwXC9jbGllbnRzIiwicm91dGUiOiJjbGllbnRzLmluZGV4In0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfSwidXJsIjpbXSwibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiOjR9', 1790406026),
('FLFmfN2wZ7Z5r8nhzzapyOwQxIQMusDgDuOO2jOT', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJoVWo4d3BFdzNxRG5nSG9HVHVNcVNLdFlVN3VwUDd1NXBLSm9FbFVKIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTI1XC9wYWdlc1wvcHJpdmFjeSIsInJvdXRlIjoicGFnZXMuc2hvdyJ9LCJfZmxhc2giOnsib2xkIjpbXSwibmV3IjpbXX19', 1790357557),
('FpYlOfIel8paM8YowdcDzzv8VxxTR4d0fPEXLsLm', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJYbjBnSFF5Z1BCSkFKSXFWdmxJNnZmcGl3S2NuMmtxekhmazZYamtHIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTMxXC9wcm9qZWN0c1wvaW52ZW50b3J5LW1hbmFnZW1lbnQtYXBwIiwicm91dGUiOiJwcm9qZWN0cy5zaG93In0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1790358180),
('GAJXoQxyzCItWUPoK4egp1sNlC0mQbAT2VIRLe4N', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJmcUpBMWo1VHNUa0tZRURKeHRnMUFtZmJMckNySmYwYWdTTUtJWDF0IiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTI1XC9hYm91dCIsInJvdXRlIjoiYWJvdXQifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1790357549),
('GgQIsrghd32CApMUfMAjGKc1iJwS62ZFJXdNkBBh', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiI5OFBXdFo3bm93bFRmcVlJNVN4SkVoRFdWc3d6Ym9xRFNodGplSGNWIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTQxXC9mb3Jnb3QtcGFzc3dvcmQiLCJyb3V0ZSI6InBhc3N3b3JkLnJlcXVlc3QifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1790358361),
('iBSdIDV61PpQXtlWUl2HVpXxJ5Lm4NBmfYsWNOeU', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJDUW5XNzB6OEcwU0NOTHlVSU41bTdTaXBNZGREQUdrb0hkWXdteE9KIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTI1XC9wcm9qZWN0cyIsInJvdXRlIjoicHJvamVjdHMuaW5kZXgifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1790359372),
('ipvaEVqWzcMnpUe6VR2hRl8qDsUWl4mt1MYhbFdv', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', 'eyJfdG9rZW4iOiJ3SUhtdHJZRVNuek5pWjg1M2U4cEw2UjFteHpjUlA3UjhOVXp3STBSIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MDAwXC9mb3Jnb3QtcGFzc3dvcmQiLCJyb3V0ZSI6InBhc3N3b3JkLnJlcXVlc3QifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119LCJ1cmwiOnsiaW50ZW5kZWQiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYWRtaW4ifSwicmVzZXRfZW1haWwiOiJqYXltaW5wYW5jaGFsOTAzN0BnbWFpbC5jb20ifQ==', 1790358560),
('isaeY3fw9WM9NPg5vHesAtdWajlsDATaPxDMis6g', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJsWHFjZHNzOTZUdnpXTUkxOHdZempyYW9mdklYN0g0ZUppWmtrMFNRIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTI2Iiwicm91dGUiOiJob21lIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1790357596),
('itH7XGGqjFGSUYgsJiGH0giAhOLTSzEGwNdblNO0', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJFbDJ5bmNmTHBSeEtyQkRiaTFHMXNyanJkUkVuQ3BmWGdxemNNWUw0IiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTI1XC9ib29rLW1lZXRpbmciLCJyb3V0ZSI6Im1lZXRpbmdzLmJvb2sifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1790357556),
('IWqUj0h2Nb9FlJp4KEnivasmhljrjfRNlJIJxeXl', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiI0V3hnWGhnbmxzam5Qc2ptczVlUm90YklIOUxWMXBrN1dYTUFZeHdUIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTIzXC9hYm91dCIsInJvdXRlIjoiYWJvdXQifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1790358894),
('JiUVqnkA0JRoEDvwRazPw6UxVZW7s9c3YAsbbKCH', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJmZmhVNlVPQndPUVJraDVaN1Y4bGNpa0Vhdk93enE3WFQ2RHZRQnlVIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTIzIiwicm91dGUiOiJob21lIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1790359033),
('jLPomfMXich1M2LHQxoe5PwY8t9PAZVim0PXbpaN', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJYZmc3aGFhdHlUcHI0YXBwMzZyWDhUSWdRc3FWYTFBdHkwYWJRUDB2IiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTIzXC9hYm91dCIsInJvdXRlIjoiYWJvdXQifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1790358886),
('JLq1TyiJEqWBw1uYB9ZPLRXo0t6kgJno4wWptyun', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJ5d3c5cDFHc2o3b2lLV3ZMWlhzdDdEVGpFY2k5bktZYXdYS3hBN0FOIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTI1XC9hYm91dCIsInJvdXRlIjoiYWJvdXQifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1790359371),
('jxvC45aVurOi0BuXkhUw3MIgY0AqRBhdiJO9ppb6', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJMdjVmcjB5NVFvVDZsMk1Ebzk2ZER1ckR5em1CNXNhVEJiQk5qajJWIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTI0XC9hYm91dCIsInJvdXRlIjoiYWJvdXQifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1790359249),
('jYk8Qc2hJw5MEpJpsXpOgRXHe29Yf4OlWDblFCrS', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJIdTE4bUZjU3dwczYycnNnV0ZNSUs2ZldCQ1FsckYxMk1xcDdvQmM1IiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTI1XC9mYXEiLCJyb3V0ZSI6ImZhcSJ9LCJfZmxhc2giOnsib2xkIjpbXSwibmV3IjpbXX19', 1790357553),
('k7lrEsqPXm7HcbQH6Ukb0qsL4DMgMrcBhknGcd2G', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJUdDVPdmI2YmpRWEdWcnRuYUVQSDFpSnJLRzUyQkh3VWlqd1ZPQlR6IiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTMxXC9ibG9nIiwicm91dGUiOiJibG9nLmluZGV4In0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1790358176),
('Lg5JIajwjyXrageht1lp9G1rj2KPxdB9WPio7MH6', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJ3OTdUeEd1TWh1d1ZEUHUydldjS3lJWjdXQXYydnZUanE0VWJSMjNiIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTMxXC9wcm9qZWN0c1wvdGFzay1tYW5hZ2VtZW50LWFwcCIsInJvdXRlIjoicHJvamVjdHMuc2hvdyJ9LCJfZmxhc2giOnsib2xkIjpbXSwibmV3IjpbXX19', 1790358178),
('Lh3oRcqBrPeQ2UxY5K8H1WVrD7VOMAZKEh5riFUI', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJVY09lQ3lKQ3lwM0FGTXpiT0QwZDRUYkJMUDVuaGR5UVJvVld2WXRRIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTMxXC9wYWdlc1wvdGVybXMiLCJyb3V0ZSI6InBhZ2VzLnNob3cifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1790358182),
('LmNCOnSqklgVUzY3qpEiL8U7XEtZTRcCoPWHngiB', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiIzVVhyR2M1Y3ZrTkhDV1ZrN0hYS2tkMTl2VVZyOThnY1J2dlpFc2lYIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTUxXC9wcm9qZWN0cyIsInJvdXRlIjoicHJvamVjdHMuaW5kZXgifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1790358533),
('LwsB0Iip9ZJmaXPUbbDbvBqaBOHhbKAkSwbPxwgS', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJaUG9GN1JTZ2RBWUNKZ2ZUcFVXYWt3SzBSQ1d3dmYxQ2dnczQ5Q2p6IiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTMxXC9sb2dpbiIsInJvdXRlIjoibG9naW4ifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1790358177),
('lZ9YDfLuz0VjsQBlWiVuBbmQOG3L8ngPzmGpJxMd', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJaM1hqMlhjNTdRM25jUFJ4VHU2MFc0VjJTdVhqU1JHMER3bG1STHZoIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTMxXC9ibG9nXC9nZXR0aW5nLXN0YXJ0ZWQtd2l0aC1sYXJhdmVsIiwicm91dGUiOiJibG9nLnNob3cifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1790358181),
('MdvoO3G2wJR3Box6EPz47gat2naZ7yZ5Fgz6jRQq', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJ4UWJlWFFkMHU0TGliUFR1UUJGQm82dFg3QU56WTRmdmZIc0VoYVFIIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTI2XC9mYXEiLCJyb3V0ZSI6ImZhcSJ9LCJfZmxhc2giOnsib2xkIjpbXSwibmV3IjpbXX19', 1790357603),
('mKS2BM5AtdOJPnJ4G5w5d8SegGzWgwvniVCG2IBV', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', 'eyJfdG9rZW4iOiJUYW5ISjN0SThyZUp6SW13akVXWHZnQjlGcmxJVzVSaExmcTRpYkI3IiwiX2ZsYXNoIjp7Im5ldyI6W10sIm9sZCI6W119LCJfcHJldmlvdXMiOnsidXJsIjoiaHR0cDpcL1wvMTI3LjAuMC4xOjgwMDBcL2NsaWVudHMiLCJyb3V0ZSI6ImNsaWVudHMuaW5kZXgifSwibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiOjR9', 1790359494),
('MNIU85XydmnpAOdc3MUXV84b181V7Npr7JvIcy9I', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiI5cEFHaGdLRkdFZm91WmwzZFJiVkpkckJsRHhiZVNFWmVvSVJPYXlXIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTI2XC9jbGllbnRzIiwicm91dGUiOiJjbGllbnRzLmluZGV4In0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1790357601),
('muxWKrCXfMjBtfEGaNVghapxQN9AApQI2KorcgSz', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJYVWtaVnJMdXgxWTJXclk1VUh3MU5KM1JWV0w3NUV2UWtUMjhhUDBWIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTIzXC9wcm9qZWN0c1wvZWNvbW1lcmNlLXBsYXRmb3JtIiwicm91dGUiOiJwcm9qZWN0cy5zaG93In0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1790359052),
('NGvbI64hHuh69UJoiFufFtMqn7kY4Awc390HPANy', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJJZ2IxSjBvZkk5emRDdVdIT3ZxVkhGRUdmeGcwSllhWHczZE9zaGlrIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTMxXC9ibG9nXC9idWlsZGluZy1jbGVhbi1yZXN0LWFwaXMiLCJyb3V0ZSI6ImJsb2cuc2hvdyJ9LCJfZmxhc2giOnsib2xkIjpbXSwibmV3IjpbXX19', 1790358181),
('NSeVnYXI4er7SqzrK773NCr081ttrf6ncG9hVRZV', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiIxRzQ1blRFUUp3NXA2MndZclJmVUlhRThGb21nVFdISlg5OFFiamROIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTMxXC9wcm9qZWN0c1wvYmxvZy1wbGF0Zm9ybSIsInJvdXRlIjoicHJvamVjdHMuc2hvdyJ9LCJfZmxhc2giOnsib2xkIjpbXSwibmV3IjpbXX19', 1790358178),
('O2CI5KeNpXh0NBjEC9hPU4f8G3PjVdzxdCYoBrQs', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJZeEFKNDBYSEpiTG9qWDJsbldESDIzajFxV0d6Ym04VWRqRU9kNkpEIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTI0Iiwicm91dGUiOiJob21lIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1790359249),
('PbXEvOwHyDKyPbjJmj0tHa6t88EyOTj51521aJmn', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJKaHlIZWNRckNzRjhPRElRNWNPNHczVjUwM1g3MXUyNEdEVUFlUmNmIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTUyXC9sb2dpbiIsInJvdXRlIjoibG9naW4ifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1790358544),
('peD2YMp82yLIAZJPUAc9lS2BNVxsS5wW8vySmZko', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiI5TnhoRXA4cUNnY0wzMjY4bkEzcGJ0YlBhN29VSVdPN3JValE5Z05hIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTI1XC9jb250YWN0Iiwicm91dGUiOiJjb250YWN0In0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1790357555),
('PJSa2EKlhTOYyP8knQqUKuKaWP5hEVLfRfO3Wrxc', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJENDQ5bWRYWmZKQTFqSUNtbW5CYXhBU3BVME1YbHk3V0lUSllqRHdIIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTI3Iiwicm91dGUiOiJob21lIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1790357771),
('pKgKxITJbeU7a4E5fAySkdCCcD0TOViuH7YE4JBk', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJhMG8zb2kxaU5hTVNMQjNkS1J6ZXAxRGw3SzF2U0pWN0VNaU1pcTY4IiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTI2XC9ib29rLW1lZXRpbmciLCJyb3V0ZSI6Im1lZXRpbmdzLmJvb2sifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1790357606),
('pUrKxJLMNxo8I0AMi7CD5gYq2iKkrmRAQrGVFgLN', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJFY2RidWtycGV5Q3ZSemMzdDJiRU1JQnY2UVBudEVwd0Z0b21OTDROIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTIzIiwicm91dGUiOiJob21lIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1790358817),
('pzD4kYpDJ7y3IU1v6t3Ii0l3p44x4TUutUsitdyV', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJnZ2UxTHBCNlkyRmJCQ3dSYmhqUjU2OXpDWkkxUFhhSEpyMlNjYnlwIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTIzXC9mYXEiLCJyb3V0ZSI6ImZhcSJ9LCJfZmxhc2giOnsib2xkIjpbXSwibmV3IjpbXX19', 1790359035),
('q07JenoM9Hf5vBnGRarJuFLdygHYaneZx1jNtsjj', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJPdEtsRGNZTGJwcWluZHcwTFgxcmc3NFIybVJnRGhoYmtrT0JCcFh3IiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTIzXC9hYm91dCIsInJvdXRlIjoiYWJvdXQifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1790358830),
('qS5YhcsqCW5yupSyyRWOKyjDSQfj0ElMeHOUQmEx', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiIzdHVRellNQ1k4R2NaeVNyWTZSQno4V0x5NzJtSWRGUHM1bmZDak1OIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTMxXC9wcm9qZWN0c1wvaHItcGF5cm9sbC1kYXNoYm9hcmQiLCJyb3V0ZSI6InByb2plY3RzLnNob3cifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1790358179),
('rCD4KRUnRKI2FoQuQrxH81Z529M9H3DZKaUXLMR1', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJ4RGZxdkExMXY4TEloYzNHMEh5N1JYeG00WmFURFQ3andKRkdsQVVoIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTMxIiwicm91dGUiOiJob21lIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1790358174),
('RwpdV1xBkUImq7uKxHZuLI4XM0OC0SLBHKdEBDbU', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJTOXVPNW1iZGc5MlNmNENBa0lsejJGeVo3TjQ2dU9qNmVVckhNTE9FIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTIzXC9wcm9qZWN0cyIsInJvdXRlIjoicHJvamVjdHMuaW5kZXgifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1790358819),
('s3SnJubkhW3ntGP57NpZQtjYdXGRD4yHgMareBST', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJUd2RvVERnMVRQMFNLNTdBVXp5WGc2b1RnU0RDc01IQ20zVjBycHlVIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTI2XC9ibG9nIiwicm91dGUiOiJibG9nLmluZGV4In0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1790357605),
('SiETK4U8PkGntoYN5mdgbCA3KLIsTuvdJJkwXTae', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJHcWJGeTdSNzNKSWg0RDFTSUhGb0RYMmJLb3dmMHYwcElySHRtbVpyIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTI1XC9jbGllbnRzIiwicm91dGUiOiJjbGllbnRzLmluZGV4In0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1790359373),
('sLRfJ4eEonMrN0SdmGVWvZ5FtKDsDlhnv3ccddKk', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJDTlduaVUzUDBVT29sazhOVU84RWZnM09YOEF1OFl1T0hEMGU1WkRaIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTIzXC9wYWdlc1wvJTdCcGFnZTpzbHVnJTdEIiwicm91dGUiOiJwYWdlcy5zaG93In0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1790359035),
('Tp0x3r30d73xDxPYrU1ZYeWJMmSa5gxAgSKXZBM4', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJPbHphUDNIbzE3bk1BM0Q0dmhFNlg4NVBjR1pLOXU0MzNldmdRMGlhIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTMxXC9wYWdlc1wvcHJpdmFjeSIsInJvdXRlIjoicGFnZXMuc2hvdyJ9LCJfZmxhc2giOnsib2xkIjpbXSwibmV3IjpbXX19', 1790358183),
('tXlRfJXvxctm0hvF6ZJ10a6dIvAx946NGSGD2vB2', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJ3QkNGRGpqc1hSOHhFWEtQRmViaWdwQXRUUHNzV2kzeTU3V2pXUktzIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTI2XC9jb250YWN0Iiwicm91dGUiOiJjb250YWN0In0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1790357602),
('U1FnQTP3dwLAbBveFTzwPuL5phENG97PZDvhIg2M', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiI2d1ZKZ1Y2TUhRTDBoVVA1OU5QNTlYNlFYY0NPdHVqb09ObzJhaUVGIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTIzXC9ib29rLW1lZXRpbmciLCJyb3V0ZSI6Im1lZXRpbmdzLmJvb2sifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1790359034),
('U2b2DYTjGA8B0uHFFu2NVKSHMjAZYIM1XeBDvDIo', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJSUHRRS25ZVkptQWJFeWQzSGsyNVlJYWRSMG9sa1h4V2Q0MGZwWUgwIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTI3XC9ib29rLW1lZXRpbmciLCJyb3V0ZSI6Im1lZXRpbmdzLmJvb2sifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1790357775),
('U8vDwBpnX8W1a6K9B5MoXgVtAq18dVnMh0tesoik', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiI3RWw3STI3Vzk3dVdHRjRSNGNyQ24yRVZQWnlaUFo3b2pvSU5yb1ZiIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTI1XC9wcm9qZWN0cyIsInJvdXRlIjoicHJvamVjdHMuaW5kZXgifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1790357550),
('uuhBCVHGghdtTCB7lt9SBXyAvOS7THi7isjnsdg6', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJoQkFFMW1TaXJCUjhPbXE5Wjd1MzNiTjFLdnFSV0d6Vmxlb1dxampsIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTI1XC9ibG9nIiwicm91dGUiOiJibG9nLmluZGV4In0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1790357552),
('UwBv51obs2U0Fo3YtaYttd0KEMboTFA1W50DT2Pb', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJ6MEQwdWc0enNIRE1ZNVNsTHNlQ1NVY20zN3BDa3BEMmZLdTFFeFY1IiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTMxXC9wcm9qZWN0c1wvcG9ydGZvbGlvLXdlYnNpdGUiLCJyb3V0ZSI6InByb2plY3RzLnNob3cifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1790358179),
('W6gVFohV18h4CSQ85gAo2mUzGuRD8EDbTEokGdG4', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJoTU1sRHoxWFNYSzI4MG9xMzZiVUxJY29CT3ZPYTFWRmpqTm11c0hIIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTI1Iiwicm91dGUiOiJob21lIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1790359371),
('W9GAvdgbcz91FpQftuSnCe5l7Tqb7fQDKgFRynGI', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJBQ205c2JIUno4TE45ZlY5M25kUXVybU9HZVF0dk54bnBaeE5tVm5VIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTQxXC9sb2dpbiIsInJvdXRlIjoibG9naW4ifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1790358361),
('wbSOKSbCxjhOzioWn1oAb1EM3mpGXwnj8I29Oy1d', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJLdGN2TkNRa2hXTkwxazVQWkdZUkp0bFR1ZU5Kd1BGM1B0UVVJeFZBIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTI2XC9hYm91dCIsInJvdXRlIjoiYWJvdXQifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1790357598),
('wePFu14WIX0KRXTw7vzuzwDXEvQ5FTNEp133wdZa', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJtcHVmWmprRkV5RWhkelJMWWIwS1c3MG96OU9wN0tWSGpBN1JCWE5LIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTI3XC9mYXEiLCJyb3V0ZSI6ImZhcSJ9LCJfZmxhc2giOnsib2xkIjpbXSwibmV3IjpbXX19', 1790357774),
('Wn7UUS7zNBhGIxZrO5czHBvNl6shqlA6sVICC0SB', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJFeElObmVLUlE4Qk9iQ0V5QXBsQTRrMDFwbEtJS0laM0VId0wxMW1QIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTI1Iiwicm91dGUiOiJob21lIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1790357548),
('wV8KqUKseQcywdAddS36K6AYCO4qImoVYZ2qJmID', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJ2d3Rsek1wZTE5cXlWZktXZFZKMU13cVZBOWxKZ3ZJTWRNaHpyZlJ2IiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTIzXC9hYm91dCIsInJvdXRlIjoiYWJvdXQifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1790358900),
('wXCTy2LXnqixC74bC1qUlfpU4kFHrYzjBiODTNwB', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiI0ZkM1a05Ra2l6ajh6aUlPRVFZS3ZxR2xRWFVXMjY4NzAwbzNtQUVXIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTI3XC9hYm91dCIsInJvdXRlIjoiYWJvdXQifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1790357772),
('x19riLHW38LhBnXpC4m6HlR7gxAVzIEgtyDB5bAn', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiIxakxDWHNmNHNnUDNYQ2dMdFFUQjhTdUdaN01YeGFjSGVHYnJINW8wIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTIzXC9wYWdlc1wvdGVybXMiLCJyb3V0ZSI6InBhZ2VzLnNob3cifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1790359053),
('X3Qc7MhkzplCL5VV66mLCMKql537b52hzOHNWPGf', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJSajJ5aG9DNlhObnJhVkVTenlBcUJ1bExYeUw3NkxXR3B1eFRpWUtvIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTIzXC9hYm91dCIsInJvdXRlIjoiYWJvdXQifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1790359033),
('xVCenOxml8ifnDrZcujHQDtSLILYR24SStTKSWpv', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJGODdZc2xiR3pwbGZQR3B4VXB1dTQyVVpVN2xFaDZ0N09LdVBnTjBRIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTIzXC9hYm91dCIsInJvdXRlIjoiYWJvdXQifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1790359071),
('y8JCGvAbnWBrZRVZUJ8pzi1f30O7qFFOcP4ylVsJ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJFSUJNUTRMb1BKTGpTMGFzZGVHS3luYnJXSFd1SXg0SGFQRzNSOTA0IiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTI3XC9jbGllbnRzIiwicm91dGUiOiJjbGllbnRzLmluZGV4In0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1790357773),
('yZaTJRUwNnppeCd2rpJJfCI1IEzyk2yFgHXUEPnJ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJmQTFLTGY3bWViTmhrdGxWaEtLMTJsWWt5VUR2SU5rSnQ2Z2FacUFZIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTMxXC9wcm9qZWN0c1wvcmVzdGF1cmFudC1tYW5hZ2VtZW50LXN5c3RlbSIsInJvdXRlIjoicHJvamVjdHMuc2hvdyJ9LCJfZmxhc2giOnsib2xkIjpbXSwibmV3IjpbXX19', 1790358179),
('zKT3hapEjZy7zukPmcPCgBtbcg4UMpZNe9VqHSXs', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJwMVFCWHVRQmJqT1pMQTRJVndQMWpCVWthcDJoYVdMcFVNU2tBTW1sIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTMxXC9jb250YWN0Iiwicm91dGUiOiJjb250YWN0In0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1790358175),
('zSNqUe2PNpjLaJ6NoMfrC5VDbzM1sdmJlXEl2SA2', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', 'eyJfdG9rZW4iOiJ0S2pZRXNaa3BCSUxhQlU4QzVWYVJnNVJtQ3VYM2U3cERxRXFhSFh6IiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MTI3XC9ibG9nIiwicm91dGUiOiJibG9nLmluZGV4In0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1790357774);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `key` varchar(255) NOT NULL,
  `value` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`key`, `value`) VALUES
('contact_email', 'jayminpanchal9037@gmail.com'),
('favicon', 'settings/MctUW6nzslMNpUAgbXMQ7YqXVBm8xHk13Cf0pMlE.png'),
('footer_text', 'All rights reserved.'),
('hero_words', NULL),
('meta_description', 'Portfolio of Jaymin Panchal, a Full-Stack Web Developer specializing in Laravel, PHP, and modern web technologies. Based in Ahmedabad, Gujarat.'),
('meta_keywords', 'Jaymin Panchal, web developer, full-stack developer, portfolio, laravel, javascript, php, Ahmedabad'),
('signature_image', 'settings/9eG10g5q054hViUcDV21cXtapbGV2rxk5dE4lNpY.png'),
('site_description', 'Full-Stack Web Developer with 2.5+ years of experience building modern, performant web applications using Laravel and modern JavaScript frameworks.'),
('site_tagline', 'Full-Stack Web Developer'),
('site_title', 'Jaymin Panchal');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL DEFAULT 'general',
  `proficiency` tinyint(3) UNSIGNED NOT NULL DEFAULT 0,
  `icon` varchar(255) DEFAULT NULL,
  `sort_order` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `category`, `proficiency`, `icon`, `sort_order`, `created_at`, `updated_at`) VALUES
(2, 'PHP', 'Backend', 90, NULL, 2, '2026-09-14 06:48:04', '2026-09-14 06:48:04'),
(3, 'MySQL', 'Backend', 85, NULL, 3, '2026-09-14 06:48:04', '2026-09-14 06:48:04'),
(4, 'REST APIs', 'Backend', 90, NULL, 4, '2026-09-14 06:48:04', '2026-09-14 06:48:04'),
(5, 'JavaScript', 'Frontend', 92, NULL, 1, '2026-09-14 06:48:04', '2026-09-14 06:48:04'),
(6, 'Vue.js', 'Frontend', 88, NULL, 2, '2026-09-14 06:48:04', '2026-09-14 06:48:04'),
(8, 'Tailwind CSS', 'Frontend', 95, NULL, 4, '2026-09-14 06:48:04', '2026-09-14 06:48:04'),
(9, 'HTML5', 'Frontend', 95, NULL, 5, '2026-09-14 06:48:04', '2026-09-14 06:48:04'),
(10, 'CSS3', 'Frontend', 90, NULL, 6, '2026-09-14 06:48:04', '2026-09-14 06:48:04'),
(11, 'Git', 'Tools', 90, NULL, 1, '2026-09-14 06:48:04', '2026-09-14 06:48:04'),
(15, 'Laravel', 'Backend', 95, NULL, 1, '2026-09-14 06:53:09', '2026-09-14 06:53:09'),
(16, 'Docker', 'Tools', 65, NULL, 2, '2026-09-14 07:01:35', '2026-09-14 07:01:35');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `company` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `content` text NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `rating` tinyint(3) UNSIGNED NOT NULL DEFAULT 5,
  `sort_order` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `is_visible` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `client_name`, `company`, `role`, `content`, `avatar`, `rating`, `sort_order`, `is_visible`, `created_at`, `updated_at`) VALUES
(1, 'Rahul Desai', 'TechStart Solutions', 'Project Manager', 'Jaymin exceeded our expectations. He delivered a clean, fast and well-structured application ahead of schedule, and communication throughout was excellent.', NULL, 5, 1, 1, '2026-09-18 02:39:53', '2026-09-18 02:39:53'),
(2, 'Priya Shah', 'PixelLabs Agency', 'Product Owner', 'Working with Jaymin was a pleasure. He understood our requirements quickly and translated them into a beautiful, performant product. Highly recommended.', NULL, 5, 2, 1, '2026-09-18 02:39:53', '2026-09-18 02:39:53'),
(3, 'Amit Verma', 'CloudPeak', 'CTO', 'His Laravel expertise is solid. Jaymin handled complex API integrations and database optimizations with ease, and always communicated clearly about progress and trade-offs.', NULL, 4, 3, 1, '2026-09-18 02:39:53', '2026-09-18 02:39:53'),
(4, 'Sneha Patel', 'BrightCode Studio', 'Founder', 'Jaymin rebuilt our entire website and the difference is night and day. Faster, cleaner and easier to manage. He is responsive, detail-oriented and a pleasure to work with.', NULL, 5, 4, 1, '2026-09-18 03:36:27', '2026-09-18 03:36:27'),
(5, 'Vikas Gupta', 'FinTrack Solutions', 'Engineering Manager', 'We needed a reliable developer for our dashboard product and Jaymin delivered. High-quality code, minimal hand-holding, and realistic estimates from day one.', NULL, 5, 5, 1, '2026-09-18 03:36:27', '2026-09-18 03:36:27'),
(6, 'Neha Joshi', 'TravelKart', 'Product Lead', 'Jaymin took our vague idea and shaped it into a polished product. The iteration speed was impressive and he always prioritized what mattered most for users.', NULL, 4, 6, 1, '2026-09-18 03:36:27', '2026-09-18 03:36:27'),
(7, 'Rohan Kulkarni', 'BuildDesk', 'Technical Co-founder', 'Communication was the standout. Jaymin kept us updated at every step, explained technical decisions in plain language, and shipped a rock-solid application on time.', NULL, 5, 7, 1, '2026-09-18 03:36:27', '2026-09-18 03:36:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `last_login_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `is_admin`, `email_verified_at`, `password`, `remember_token`, `last_login_at`, `created_at`, `updated_at`) VALUES
(4, 'Jaymin Panchal', 'jayminpanchal9037@gmail.com', 1, NULL, '$2y$12$Jpk4uIjDq6X2hItq8kYO5O4QxYiEJd2qS17khZnOnwBleZ3DHgTQy', '8BIrJIMHjorD9XwmqzLsqo1bzp37fT90S1RqkGn9TrwxtMtlQ2RsmlwALgSv', '2026-09-26 01:21:00', '2026-09-14 06:59:57', '2026-09-26 01:21:00');

-- --------------------------------------------------------

--
-- Table structure for table `visits`
--

CREATE TABLE `visits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `path` varchar(255) DEFAULT NULL,
  `ip_hash` varchar(64) DEFAULT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `visit_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visits`
--

INSERT INTO `visits` (`id`, `path`, `ip_hash`, `user_agent`, `visit_date`, `created_at`, `updated_at`) VALUES
(101, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/152.0.0.0 Safari/537.36', '2026-09-18', '2026-09-18 05:40:52', '2026-09-18 05:40:52'),
(102, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/152.0.0.0 Safari/537.36', '2026-09-18', '2026-09-18 05:40:59', '2026-09-18 05:40:59'),
(103, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/152.0.0.0 Safari/537.36', '2026-09-18', '2026-09-18 05:41:42', '2026-09-18 05:41:42'),
(104, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/152.0.0.0 Safari/537.36', '2026-09-18', '2026-09-18 05:47:17', '2026-09-18 05:47:17'),
(105, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/152.0.0.0 Safari/537.36', '2026-09-18', '2026-09-18 05:54:50', '2026-09-18 05:54:50'),
(106, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/152.0.0.0 Safari/537.36', '2026-09-18', '2026-09-18 06:01:22', '2026-09-18 06:01:22'),
(107, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/152.0.0.0 Safari/537.36', '2026-09-18', '2026-09-18 06:04:18', '2026-09-18 06:04:18'),
(108, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/152.0.0.0 Safari/537.36', '2026-09-18', '2026-09-18 06:05:32', '2026-09-18 06:05:32'),
(109, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/152.0.0.0 Safari/537.36', '2026-09-18', '2026-09-18 06:07:50', '2026-09-18 06:07:50'),
(110, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/152.0.0.0 Safari/537.36', '2026-09-18', '2026-09-18 06:08:16', '2026-09-18 06:08:16'),
(111, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/152.0.0.0 Safari/537.36', '2026-09-18', '2026-09-18 06:10:32', '2026-09-18 06:10:32'),
(112, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/152.0.0.0 Safari/537.36', '2026-09-18', '2026-09-18 06:15:14', '2026-09-18 06:15:14'),
(113, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/152.0.0.0 Safari/537.36', '2026-09-18', '2026-09-18 06:15:52', '2026-09-18 06:15:52'),
(114, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/152.0.0.0 Safari/537.36', '2026-09-18', '2026-09-18 06:17:23', '2026-09-18 06:17:23'),
(115, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/152.0.0.0 Safari/537.36', '2026-09-18', '2026-09-18 06:17:25', '2026-09-18 06:17:25'),
(116, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/152.0.0.0 Safari/537.36', '2026-09-18', '2026-09-18 06:19:24', '2026-09-18 06:19:24'),
(117, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/152.0.0.0 Safari/537.36', '2026-09-18', '2026-09-18 06:21:15', '2026-09-18 06:21:15'),
(118, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/152.0.0.0 Safari/537.36', '2026-09-18', '2026-09-18 06:22:38', '2026-09-18 06:22:38'),
(119, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/152.0.0.0 Safari/537.36', '2026-09-18', '2026-09-18 06:26:00', '2026-09-18 06:26:00'),
(120, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/152.0.0.0 Safari/537.36', '2026-09-18', '2026-09-18 06:26:39', '2026-09-18 06:26:39'),
(121, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/152.0.0.0 Safari/537.36', '2026-09-18', '2026-09-18 06:30:09', '2026-09-18 06:30:09'),
(122, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/152.0.0.0 Safari/537.36', '2026-09-18', '2026-09-18 06:30:19', '2026-09-18 06:30:19'),
(123, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/152.0.0.0 Safari/537.36', '2026-09-18', '2026-09-18 06:30:26', '2026-09-18 06:30:26'),
(124, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/152.0.0.0 Safari/537.36', '2026-09-18', '2026-09-18 06:31:26', '2026-09-18 06:31:26'),
(125, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/152.0.0.0 Safari/537.36', '2026-09-18', '2026-09-18 06:31:46', '2026-09-18 06:31:46'),
(126, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/152.0.0.0 Safari/537.36', '2026-09-18', '2026-09-18 06:32:41', '2026-09-18 06:32:41'),
(127, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/152.0.0.0 Safari/537.36', '2026-09-18', '2026-09-18 06:44:28', '2026-09-18 06:44:28'),
(128, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/152.0.0.0 Safari/537.36', '2026-09-18', '2026-09-18 06:44:58', '2026-09-18 06:44:58'),
(129, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/152.0.0.0 Safari/537.36', '2026-09-18', '2026-09-18 06:52:44', '2026-09-18 06:52:44'),
(130, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/152.0.0.0 Safari/537.36', '2026-09-18', '2026-09-18 06:53:11', '2026-09-18 06:53:11'),
(131, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/152.0.0.0 Safari/537.36', '2026-09-18', '2026-09-18 06:53:30', '2026-09-18 06:53:30'),
(132, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/152.0.0.0 Safari/537.36', '2026-09-18', '2026-09-18 06:59:25', '2026-09-18 06:59:25'),
(133, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/152.0.0.0 Safari/537.36', '2026-09-18', '2026-09-18 07:05:41', '2026-09-18 07:05:41'),
(134, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/152.0.0.0 Safari/537.36', '2026-09-18', '2026-09-18 07:12:48', '2026-09-18 07:12:48'),
(135, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 06:57:44', '2026-09-20 06:57:44'),
(136, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 06:59:36', '2026-09-20 06:59:36'),
(137, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 07:00:40', '2026-09-20 07:00:40'),
(138, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 07:01:42', '2026-09-20 07:01:42'),
(139, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 07:02:56', '2026-09-20 07:02:56'),
(140, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 07:03:33', '2026-09-20 07:03:33'),
(141, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 07:04:10', '2026-09-20 07:04:10'),
(142, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 07:04:40', '2026-09-20 07:04:40'),
(143, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 07:05:33', '2026-09-20 07:05:33'),
(144, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 07:06:03', '2026-09-20 07:06:03'),
(145, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 07:06:15', '2026-09-20 07:06:15'),
(146, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 07:07:45', '2026-09-20 07:07:45'),
(147, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 07:09:00', '2026-09-20 07:09:00'),
(148, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 07:20:51', '2026-09-20 07:20:51'),
(149, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 07:21:03', '2026-09-20 07:21:03'),
(150, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 07:21:04', '2026-09-20 07:21:04'),
(151, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 07:21:05', '2026-09-20 07:21:05'),
(152, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 07:21:09', '2026-09-20 07:21:09'),
(153, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 07:21:12', '2026-09-20 07:21:12'),
(154, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 07:21:17', '2026-09-20 07:21:17'),
(155, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 07:23:44', '2026-09-20 07:23:44'),
(156, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 07:24:20', '2026-09-20 07:24:20'),
(157, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 07:24:42', '2026-09-20 07:24:42'),
(158, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 07:59:24', '2026-09-20 07:59:24'),
(159, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 08:00:37', '2026-09-20 08:00:37'),
(160, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 08:00:42', '2026-09-20 08:00:42'),
(161, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 08:00:48', '2026-09-20 08:00:48'),
(162, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 08:01:03', '2026-09-20 08:01:03'),
(163, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 08:03:46', '2026-09-20 08:03:46'),
(164, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 08:06:03', '2026-09-20 08:06:03'),
(165, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 08:06:16', '2026-09-20 08:06:16'),
(166, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 08:11:52', '2026-09-20 08:11:52'),
(167, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 08:12:42', '2026-09-20 08:12:42'),
(168, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 08:13:32', '2026-09-20 08:13:32'),
(169, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 08:13:43', '2026-09-20 08:13:43'),
(170, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 08:17:05', '2026-09-20 08:17:05'),
(171, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 08:18:07', '2026-09-20 08:18:07'),
(172, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 08:35:58', '2026-09-20 08:35:58'),
(173, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 08:36:09', '2026-09-20 08:36:09'),
(174, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 08:46:18', '2026-09-20 08:46:18'),
(175, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 08:47:50', '2026-09-20 08:47:50'),
(176, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 09:08:00', '2026-09-20 09:08:00'),
(177, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 09:08:23', '2026-09-20 09:08:23'),
(178, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 09:09:41', '2026-09-20 09:09:41'),
(179, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 09:09:55', '2026-09-20 09:09:55'),
(180, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 09:14:14', '2026-09-20 09:14:14'),
(181, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 09:17:27', '2026-09-20 09:17:27'),
(182, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 09:17:41', '2026-09-20 09:17:41'),
(183, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 09:18:13', '2026-09-20 09:18:13'),
(184, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Symfony', '2026-09-20', '2026-09-20 09:18:25', '2026-09-20 09:18:25'),
(185, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Symfony', '2026-09-20', '2026-09-20 09:18:26', '2026-09-20 09:18:26'),
(186, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 09:18:30', '2026-09-20 09:18:30'),
(187, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 09:25:53', '2026-09-20 09:25:53'),
(188, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 09:32:18', '2026-09-20 09:32:18'),
(189, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Symfony', '2026-09-20', '2026-09-20 09:32:24', '2026-09-20 09:32:24'),
(190, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 09:32:30', '2026-09-20 09:32:30'),
(191, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 09:33:06', '2026-09-20 09:33:06'),
(192, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-20', '2026-09-20 09:37:00', '2026-09-20 09:37:00'),
(193, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-24', '2026-09-24 11:40:50', '2026-09-24 11:40:50'),
(194, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-25', '2026-09-25 11:54:39', '2026-09-25 11:54:39'),
(195, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-25', '2026-09-25 11:55:28', '2026-09-25 11:55:28'),
(196, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-25', '2026-09-25 11:56:43', '2026-09-25 11:56:43'),
(197, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-25', '2026-09-25 11:57:11', '2026-09-25 11:57:11'),
(198, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-25', '2026-09-25 11:58:23', '2026-09-25 11:58:23'),
(199, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-25', '2026-09-25 11:58:45', '2026-09-25 11:58:45'),
(200, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-25', '2026-09-25 11:59:05', '2026-09-25 11:59:05'),
(201, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Symfony', '2026-09-25', '2026-09-25 11:59:27', '2026-09-25 11:59:27'),
(202, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-25', '2026-09-25 11:59:37', '2026-09-25 11:59:37'),
(203, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-25', '2026-09-25 11:59:54', '2026-09-25 11:59:54'),
(204, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', '2026-09-25', '2026-09-25 12:00:52', '2026-09-25 12:00:52'),
(205, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Symfony', '2026-09-25', '2026-09-25 12:01:31', '2026-09-25 12:01:31'),
(206, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', '2026-09-25', '2026-09-25 12:02:28', '2026-09-25 12:02:28'),
(207, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-25', '2026-09-25 12:02:29', '2026-09-25 12:02:29'),
(208, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-25', '2026-09-25 12:03:15', '2026-09-25 12:03:15'),
(209, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', '2026-09-25', '2026-09-25 12:03:16', '2026-09-25 12:03:16'),
(210, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-25', '2026-09-25 12:03:44', '2026-09-25 12:03:44'),
(211, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-25', '2026-09-25 12:04:09', '2026-09-25 12:04:09'),
(212, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Symfony', '2026-09-25', '2026-09-25 12:05:06', '2026-09-25 12:05:06'),
(213, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-25', '2026-09-25 12:05:36', '2026-09-25 12:05:36'),
(214, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Symfony', '2026-09-25', '2026-09-25 12:05:37', '2026-09-25 12:05:37'),
(215, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Symfony', '2026-09-25', '2026-09-25 12:06:01', '2026-09-25 12:06:01'),
(216, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', '2026-09-25', '2026-09-25 12:06:11', '2026-09-25 12:06:11'),
(217, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-25', '2026-09-25 12:06:58', '2026-09-25 12:06:58'),
(218, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-25', '2026-09-25 12:07:12', '2026-09-25 12:07:12'),
(219, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-25', '2026-09-25 12:07:44', '2026-09-25 12:07:44'),
(220, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-25', '2026-09-25 12:08:40', '2026-09-25 12:08:40'),
(221, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Symfony', '2026-09-25', '2026-09-25 12:12:31', '2026-09-25 12:12:31'),
(222, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', '2026-09-25', '2026-09-25 12:12:54', '2026-09-25 12:12:54'),
(223, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-25', '2026-09-25 12:15:18', '2026-09-25 12:15:18'),
(224, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Symfony', '2026-09-25', '2026-09-25 12:15:58', '2026-09-25 12:15:58'),
(225, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Symfony', '2026-09-25', '2026-09-25 12:18:41', '2026-09-25 12:18:41'),
(226, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-25', '2026-09-25 12:19:37', '2026-09-25 12:19:37'),
(227, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-25', '2026-09-25 12:21:08', '2026-09-25 12:21:08'),
(228, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-25', '2026-09-25 12:21:11', '2026-09-25 12:21:11'),
(229, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-25', '2026-09-25 12:22:00', '2026-09-25 12:22:00'),
(230, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Symfony', '2026-09-25', '2026-09-25 12:23:16', '2026-09-25 12:23:16'),
(231, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', '2026-09-25', '2026-09-25 12:23:32', '2026-09-25 12:23:32'),
(232, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', '2026-09-25', '2026-09-25 12:23:37', '2026-09-25 12:23:37'),
(233, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-25', '2026-09-25 12:24:00', '2026-09-25 12:24:00'),
(234, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-25', '2026-09-25 12:24:08', '2026-09-25 12:24:08'),
(235, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-25', '2026-09-25 12:24:32', '2026-09-25 12:24:32'),
(236, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-25', '2026-09-25 12:24:36', '2026-09-25 12:24:36'),
(237, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Symfony', '2026-09-25', '2026-09-25 12:26:30', '2026-09-25 12:26:30'),
(238, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', '2026-09-25', '2026-09-25 12:27:13', '2026-09-25 12:27:13'),
(239, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-25', '2026-09-25 12:28:15', '2026-09-25 12:28:15'),
(240, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-25', '2026-09-25 12:30:10', '2026-09-25 12:30:10'),
(241, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-25', '2026-09-25 12:30:11', '2026-09-25 12:30:11'),
(242, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-25', '2026-09-25 12:30:19', '2026-09-25 12:30:19'),
(243, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', '2026-09-25', '2026-09-25 12:30:49', '2026-09-25 12:30:49'),
(244, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Symfony', '2026-09-25', '2026-09-25 12:30:57', '2026-09-25 12:30:57'),
(245, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9549', '2026-09-25', '2026-09-25 12:32:50', '2026-09-25 12:32:50'),
(246, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-25', '2026-09-25 12:32:52', '2026-09-25 12:32:52'),
(247, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-25', '2026-09-25 12:32:56', '2026-09-25 12:32:56'),
(248, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-25', '2026-09-25 12:32:59', '2026-09-25 12:32:59'),
(249, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Symfony', '2026-09-25', '2026-09-25 12:33:05', '2026-09-25 12:33:05'),
(250, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-25', '2026-09-25 12:33:57', '2026-09-25 12:33:57'),
(251, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Symfony', '2026-09-25', '2026-09-25 12:37:42', '2026-09-25 12:37:42'),
(252, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-26', '2026-09-25 23:59:17', '2026-09-25 23:59:17'),
(253, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-26', '2026-09-26 00:05:05', '2026-09-26 00:05:05'),
(254, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-26', '2026-09-26 00:40:34', '2026-09-26 00:40:34'),
(255, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-26', '2026-09-26 01:19:58', '2026-09-26 01:19:58'),
(256, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-26', '2026-09-26 01:21:32', '2026-09-26 01:21:32'),
(257, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-26', '2026-09-26 01:22:30', '2026-09-26 01:22:30'),
(258, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-26', '2026-09-26 01:22:41', '2026-09-26 01:22:41'),
(259, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-26', '2026-09-26 01:23:54', '2026-09-26 01:23:54'),
(260, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-26', '2026-09-26 01:27:00', '2026-09-26 01:27:00'),
(261, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-26', '2026-09-26 01:27:08', '2026-09-26 01:27:08'),
(262, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-26', '2026-09-26 01:27:32', '2026-09-26 01:27:32'),
(263, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-26', '2026-09-26 01:28:03', '2026-09-26 01:28:03'),
(264, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-26', '2026-09-26 01:28:16', '2026-09-26 01:28:16'),
(265, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-26', '2026-09-26 01:28:20', '2026-09-26 01:28:20'),
(266, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-26', '2026-09-26 01:28:33', '2026-09-26 01:28:33'),
(267, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-26', '2026-09-26 01:29:08', '2026-09-26 01:29:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`),
  ADD KEY `failed_jobs_connection_queue_failed_at_index` (`connection`,`queue`,`failed_at`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meetings`
--
ALTER TABLE `meetings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter_subscribers`
--
ALTER TABLE `newsletter_subscribers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `newsletter_subscribers_email_unique` (`email`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_user_id_foreign` (`user_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `projects_slug_unique` (`slug`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visits`
--
ALTER TABLE `visits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meetings`
--
ALTER TABLE `meetings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `newsletter_subscribers`
--
ALTER TABLE `newsletter_subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `visits`
--
ALTER TABLE `visits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=268;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
