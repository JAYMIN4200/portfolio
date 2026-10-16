-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2026 at 08:20 AM
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
('jaymin-panchal-cache-setting_contact_email', 's:27:\"jayminpanchal9037@gmail.com\";', 1792141952),
('jaymin-panchal-cache-setting_favicon', 's:53:\"settings/MctUW6nzslMNpUAgbXMQ7YqXVBm8xHk13Cf0pMlE.png\";', 1792138874),
('jaymin-panchal-cache-setting_footer_text', 's:20:\"All rights reserved.\";', 1792141952),
('jaymin-panchal-cache-setting_hero_words', 'N;', 1792141952),
('jaymin-panchal-cache-setting_meta_description', 's:143:\"Portfolio of Jaymin Panchal, a Full-Stack Web Developer specializing in Laravel, PHP, and modern web technologies. Based in Ahmedabad, Gujarat.\";', 1792141952),
('jaymin-panchal-cache-setting_meta_keywords', 's:99:\"Jaymin Panchal, web developer, full-stack developer, portfolio, laravel, javascript, php, Ahmedabad\";', 1792141952),
('jaymin-panchal-cache-setting_session_lifetime', 's:2:\"30\";', 1792138874),
('jaymin-panchal-cache-setting_signature_image', 's:53:\"settings/9eG10g5q054hViUcDV21cXtapbGV2rxk5dE4lNpY.png\";', 1792138874),
('jaymin-panchal-cache-setting_site_description', 's:147:\"Full-Stack Web Developer with 2.5+ years of experience building modern, performant web applications using Laravel and modern JavaScript frameworks.\";', 1792141952),
('jaymin-panchal-cache-setting_site_tagline', 's:24:\"Full-Stack Web Developer\";', 1792141952),
('jaymin-panchal-cache-setting_site_title', 's:14:\"Jaymin Panchal\";', 1792141952);

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
(29, '2026_09_20_135221_create_clients_table', 12),
(30, '2026_10_15_035511_create_payments_table', 13),
(31, '2026_10_15_035512_create_tasks_table', 13);

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED DEFAULT NULL,
  `amount` decimal(12,2) NOT NULL,
  `payment_date` date NOT NULL,
  `method` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'received',
  `reference` varchar(255) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(2, 4, 'Full-Stack Web Developer', 'I am a Full-Stack Web Developer with 2.5+ years of experience building modern web applications. I specialize in Laravel, PHP, JavaScript, and love crafting clean, scalable solutions. Based in Ahmedabad, Gujarat.', 'avatars/E1BXkQ7sXDxWecdcKuRpmgIXdodpKIerscXTNdJM.jpg', 'avatars/KQTyViDXc01O8ldmZUn0nYULKFCZgse2cXoNMvwP.png', 'avatars/B42TJcVjBrPBXwN8ZkNWkAxOBy0kRBj6jzV6G0Ps.png', 'resumes/rc4t7REepCWjhqAFiqD09xq01cRV3QRUhl9Nc4Vk.pdf', 3, '+919558166838', '+919558166838', NULL, 'Naroda, Ahmedabad, Gujarat 382330, India', 'https://github.com/JAYMIN4200', 'https://linkedin.com/in/jaymin4200', NULL, 'https://instagram.com/jaymin_4200', NULL, NULL, 'dancing-script', '2026-09-14 06:59:57', '2026-10-16 01:40:40');

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
('lJmR9SPMutR58JsvABsWa0szOz4LVE6Eiwe8txRt', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', 'eyJfdG9rZW4iOiJZNElwTGI0Z0N2elM2eWhjYWVYUUwxZ0h6NWNVWkFWbkZ4U1lpekRkIiwiX2ZsYXNoIjp7Im5ldyI6W10sIm9sZCI6W119LCJfcHJldmlvdXMiOnsidXJsIjoiaHR0cDpcL1wvMTI3LjAuMC4xOjgwMDBcL2Jvb2stbWVldGluZyIsInJvdXRlIjoibWVldGluZ3MuYm9vayJ9LCJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI6NCwiX3Nlc3Npb25fbGlmZXRpbWUiOjMwLCJfbGFzdF9hY3Rpdml0eSI6MTc5MjEzODcxMn0=', 1792138715);

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
('session_lifetime', '30'),
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
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `priority` varchar(255) NOT NULL DEFAULT 'medium',
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `due_date` date DEFAULT NULL,
  `completed_at` timestamp NULL DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `user_id`, `title`, `category`, `description`, `priority`, `status`, `due_date`, `completed_at`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 4, 'Consequatur sit qui', 'Maintenance', 'Id inventore magna i', 'high', 'in_progress', '1974-07-19', NULL, 1, '2026-10-15 23:57:11', '2026-10-16 01:51:14');

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
(4, 'Jaymin Panchal', 'jayminpanchal9037@gmail.com', 1, NULL, '$2y$12$Jpk4uIjDq6X2hItq8kYO5O4QxYiEJd2qS17khZnOnwBleZ3DHgTQy', '1CQiUFkroVhEvs2BMdB0K6MBRVvTEZnGakntLIJwCprDLzejRaVPRhkDarjj', '2026-10-16 00:34:33', '2026-09-14 06:59:57', '2026-10-16 00:34:33');

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
(267, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', '2026-09-26', '2026-09-26 01:29:08', '2026-09-26 01:29:08'),
(268, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-14', '2026-10-14 11:14:47', '2026-10-14 11:14:47'),
(269, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:158.0) Gecko/20100101 Firefox/158.0', '2026-10-15', '2026-10-14 21:07:16', '2026-10-14 21:07:16'),
(270, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-15', '2026-10-14 21:40:19', '2026-10-14 21:40:19'),
(271, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-15', '2026-10-14 21:47:00', '2026-10-14 21:47:00'),
(272, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-15', '2026-10-14 22:47:09', '2026-10-14 22:47:09'),
(273, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-15', '2026-10-15 09:52:23', '2026-10-15 09:52:23'),
(274, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-15', '2026-10-15 09:53:40', '2026-10-15 09:53:40'),
(275, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-15', '2026-10-15 09:53:48', '2026-10-15 09:53:48'),
(276, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-15', '2026-10-15 10:17:43', '2026-10-15 10:17:43'),
(277, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-15', '2026-10-15 10:18:12', '2026-10-15 10:18:12'),
(278, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-15', '2026-10-15 10:39:47', '2026-10-15 10:39:47'),
(279, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 22:09:38', '2026-10-15 22:09:38'),
(280, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 22:09:42', '2026-10-15 22:09:42'),
(281, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 22:10:39', '2026-10-15 22:10:39'),
(282, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 22:11:24', '2026-10-15 22:11:24'),
(283, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 22:12:05', '2026-10-15 22:12:05'),
(284, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 22:12:12', '2026-10-15 22:12:12'),
(285, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 22:13:09', '2026-10-15 22:13:09'),
(286, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 22:20:06', '2026-10-15 22:20:06'),
(287, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 22:22:46', '2026-10-15 22:22:46'),
(288, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9711', '2026-10-16', '2026-10-15 22:22:49', '2026-10-15 22:22:49'),
(289, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9711', '2026-10-16', '2026-10-15 22:22:54', '2026-10-15 22:22:54'),
(290, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 22:28:02', '2026-10-15 22:28:02'),
(291, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 22:32:15', '2026-10-15 22:32:15'),
(292, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 22:35:29', '2026-10-15 22:35:29'),
(293, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 22:39:32', '2026-10-15 22:39:32'),
(294, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 22:42:40', '2026-10-15 22:42:40'),
(295, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9711', '2026-10-16', '2026-10-15 22:47:51', '2026-10-15 22:47:51'),
(296, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9711', '2026-10-16', '2026-10-15 22:48:27', '2026-10-15 22:48:27'),
(297, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9711', '2026-10-16', '2026-10-15 22:48:46', '2026-10-15 22:48:46'),
(298, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 22:48:54', '2026-10-15 22:48:54'),
(299, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 22:50:40', '2026-10-15 22:50:40'),
(300, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 22:51:44', '2026-10-15 22:51:44'),
(301, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 22:52:22', '2026-10-15 22:52:22'),
(302, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 22:52:53', '2026-10-15 22:52:53'),
(303, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 22:54:23', '2026-10-15 22:54:23'),
(304, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9711', '2026-10-16', '2026-10-15 22:54:57', '2026-10-15 22:54:57'),
(305, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 23:00:22', '2026-10-15 23:00:22');
INSERT INTO `visits` (`id`, `path`, `ip_hash`, `user_agent`, `visit_date`, `created_at`, `updated_at`) VALUES
(306, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9711', '2026-10-16', '2026-10-15 23:00:36', '2026-10-15 23:00:36'),
(307, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 23:00:41', '2026-10-15 23:00:41'),
(308, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 23:01:25', '2026-10-15 23:01:25'),
(309, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9711', '2026-10-16', '2026-10-15 23:02:52', '2026-10-15 23:02:52'),
(310, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 23:03:37', '2026-10-15 23:03:37'),
(311, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 23:03:51', '2026-10-15 23:03:51'),
(312, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9711', '2026-10-16', '2026-10-15 23:04:59', '2026-10-15 23:04:59'),
(313, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 23:05:09', '2026-10-15 23:05:09'),
(314, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9711', '2026-10-16', '2026-10-15 23:05:47', '2026-10-15 23:05:47'),
(315, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9711', '2026-10-16', '2026-10-15 23:05:54', '2026-10-15 23:05:54'),
(316, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 23:06:13', '2026-10-15 23:06:13'),
(317, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9711', '2026-10-16', '2026-10-15 23:06:38', '2026-10-15 23:06:38'),
(318, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9711', '2026-10-16', '2026-10-15 23:06:50', '2026-10-15 23:06:50'),
(319, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9711', '2026-10-16', '2026-10-15 23:07:05', '2026-10-15 23:07:05'),
(320, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9711', '2026-10-16', '2026-10-15 23:14:52', '2026-10-15 23:14:52'),
(321, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9711', '2026-10-16', '2026-10-15 23:15:35', '2026-10-15 23:15:35'),
(322, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9711', '2026-10-16', '2026-10-15 23:16:38', '2026-10-15 23:16:38'),
(323, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9711', '2026-10-16', '2026-10-15 23:17:11', '2026-10-15 23:17:11'),
(324, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 23:17:31', '2026-10-15 23:17:31'),
(325, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 23:19:45', '2026-10-15 23:19:45'),
(326, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9711', '2026-10-16', '2026-10-15 23:21:05', '2026-10-15 23:21:05'),
(327, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9711', '2026-10-16', '2026-10-15 23:22:03', '2026-10-15 23:22:03'),
(328, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9711', '2026-10-16', '2026-10-15 23:22:06', '2026-10-15 23:22:06'),
(329, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9711', '2026-10-16', '2026-10-15 23:22:59', '2026-10-15 23:22:59'),
(330, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9711', '2026-10-16', '2026-10-15 23:23:30', '2026-10-15 23:23:30'),
(331, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9711', '2026-10-16', '2026-10-15 23:23:43', '2026-10-15 23:23:43'),
(332, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9711', '2026-10-16', '2026-10-15 23:23:52', '2026-10-15 23:23:52'),
(333, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9711', '2026-10-16', '2026-10-15 23:24:01', '2026-10-15 23:24:01'),
(334, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 23:25:10', '2026-10-15 23:25:10'),
(335, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 23:25:28', '2026-10-15 23:25:28'),
(336, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 23:26:27', '2026-10-15 23:26:27'),
(337, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 23:26:37', '2026-10-15 23:26:37'),
(338, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 23:28:14', '2026-10-15 23:28:14'),
(339, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 23:28:27', '2026-10-15 23:28:27'),
(340, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 23:29:15', '2026-10-15 23:29:15'),
(341, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9711', '2026-10-16', '2026-10-15 23:29:21', '2026-10-15 23:29:21'),
(342, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 23:29:24', '2026-10-15 23:29:24'),
(343, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 23:29:28', '2026-10-15 23:29:28'),
(344, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9711', '2026-10-16', '2026-10-15 23:29:30', '2026-10-15 23:29:30'),
(345, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9711', '2026-10-16', '2026-10-15 23:29:35', '2026-10-15 23:29:35'),
(346, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9711', '2026-10-16', '2026-10-15 23:30:07', '2026-10-15 23:30:07'),
(347, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 23:31:23', '2026-10-15 23:31:23'),
(348, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 23:31:29', '2026-10-15 23:31:29'),
(349, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 23:32:08', '2026-10-15 23:32:08'),
(350, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9711', '2026-10-16', '2026-10-15 23:32:10', '2026-10-15 23:32:10'),
(351, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 23:33:47', '2026-10-15 23:33:47'),
(352, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT; Windows NT 10.0; en-IN) WindowsPowerShell/5.1.26100.9711', '2026-10-16', '2026-10-15 23:36:49', '2026-10-15 23:36:49'),
(353, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 23:37:57', '2026-10-15 23:37:57'),
(354, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 23:39:29', '2026-10-15 23:39:29'),
(355, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 23:39:45', '2026-10-15 23:39:45'),
(356, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 23:40:42', '2026-10-15 23:40:42'),
(357, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 23:42:33', '2026-10-15 23:42:33'),
(358, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 23:43:09', '2026-10-15 23:43:09'),
(359, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'curl/8.21.0', '2026-10-16', '2026-10-15 23:45:58', '2026-10-15 23:45:58'),
(360, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36 Edg/155.0.0.0', '2026-10-16', '2026-10-15 23:46:49', '2026-10-15 23:46:49'),
(361, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36 Edg/155.0.0.0', '2026-10-16', '2026-10-15 23:47:04', '2026-10-15 23:47:04'),
(362, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'curl/8.21.0', '2026-10-16', '2026-10-15 23:47:58', '2026-10-15 23:47:58'),
(363, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 23:48:02', '2026-10-15 23:48:02'),
(364, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 23:48:15', '2026-10-15 23:48:15'),
(365, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'curl/8.21.0', '2026-10-16', '2026-10-15 23:49:09', '2026-10-15 23:49:09'),
(366, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 23:49:09', '2026-10-15 23:49:09'),
(367, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'curl/8.21.0', '2026-10-16', '2026-10-15 23:49:35', '2026-10-15 23:49:35'),
(368, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 23:51:17', '2026-10-15 23:51:17'),
(369, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 23:55:43', '2026-10-15 23:55:43'),
(370, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-15 23:58:07', '2026-10-15 23:58:07'),
(371, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-16 00:01:43', '2026-10-16 00:01:43'),
(372, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-16 00:01:59', '2026-10-16 00:01:59'),
(373, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-16 00:14:35', '2026-10-16 00:14:35'),
(374, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-16 00:23:43', '2026-10-16 00:23:43'),
(375, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-16 00:26:06', '2026-10-16 00:26:06'),
(376, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-16 01:33:10', '2026-10-16 01:33:10'),
(377, '/', '12ca17b49af2289436f303e0166030a21e525d266e209267433801a8fd4071a0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', '2026-10-16', '2026-10-16 01:39:46', '2026-10-16 01:39:46');

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
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_client_id_foreign` (`client_id`);

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
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tasks_user_id_foreign` (`user_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

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
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=378;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
