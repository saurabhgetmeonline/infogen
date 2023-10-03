-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2023 at 03:20 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infogence`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `about_id` bigint(20) UNSIGNED NOT NULL,
  `header_image` varchar(255) NOT NULL,
  `text` longtext NOT NULL,
  `vision` longtext NOT NULL,
  `mission` longtext NOT NULL,
  `values` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`about_id`, `header_image`, `text`, `vision`, `mission`, `values`, `created_at`, `updated_at`) VALUES
(8, '20230817054358.png', '<p class=\"MsoNormal\"><strong><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Elevate Your Strategy with Unrivaled Market Intelligence: Welcome to Infogence</span></strong></p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">At Infogence, we&rsquo;re not just another market research firm but your strategic partner in business growth and market evolution. As a leading global market research company, we pride ourselves on delivering actionable insights that drive business excellence. We specialize in providing off-the-shelf market reports with robust industry coverage, specifically focusing on new and emerging technologies.</span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\"><strong><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Our Reach: Global Expertise, Local Insights</span></strong></p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Our international reach extends from the US and Europe to APAC and the Middle East. We cover many industries, offering an invaluable lens into emerging markets and niche segments worldwide. Whether you are a startup seeking to carve a niche or a Fortune 500 company aiming for an impactful expansion, our market research reports have empowered organizations to make informed and effective decisions.</span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\"><strong><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Our Approach: Depth, Detail, and Data-Driven</span></strong></p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Our unique strength lies in our comprehensive approach to market research. Our expert team of analysts and researchers go beyond surface-level data to provide in-depth qualitative analysis of your industry. We specialize in key market metrics, including market sizing &amp; and segmentation analysis, market-entry strategies, partner identification, competitive intensity, and technology assessment.</span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\"><strong><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Innovative Custom Methodologies</span></strong></p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">We understand that not all marketing problems have a one-size-fits-all solution. That&rsquo;s why we offer innovative custom methodologies designed to solve complex marketing challenges. Tailoring our research techniques to meet your specific needs, we address critical strategic issues and help formulate expansion blueprints for high-growth markets.</span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\"><strong><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Your Strategic Partner in Growth</span></strong></p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">We don&rsquo;t just deliver reports; we partner with you to address your most pressing business challenges and strategic needs. Our actionable insights serve as a foundation for your tactical and strategic initiatives, from understanding your competitors and identifying potential partners to evaluating emerging technologies and gauging market demand.</span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\"><strong><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Why Choose Infogence?</span></strong></p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<ul>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol; mso-ansi-language: EN-US;\"><span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp; </span></span><strong><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Industry-Leading Expertise</span></strong><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">: Years of experience in delivering high-quality market research reports.</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol; mso-ansi-language: EN-US;\"><span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;</span></span><strong><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Actionable Insights</span></strong><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">: We turn data into practical recommendations that drive business success.</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol; mso-ansi-language: EN-US;\"><span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;</span></span><strong><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Global Coverage</span></strong><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">: Our analysis extends globally, but we provide localized insights to help you succeed in specific markets.</span></li>\r\n<li style=\"text-align: justify;\"><strong><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Innovative Solutions</span></strong><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">: Custom research methodologies tailored to solve your unique challenges.</span></li>\r\n<li style=\"text-align: justify;\"><strong><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Trusted by the Best</span></strong><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">: Our clientele ranges from agile startups to Fortune 500 companies.</span></li>\r\n</ul>\r\n<p class=\"MsoListParagraphCxSpLast\" style=\"text-indent: -.25in; mso-list: l0 level1 lfo1;\">&nbsp;</p>\r\n<p class=\"MsoNormal\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Elevate your business strategy with Infogence, your go-to source for market research that adds value, clarity, and insight into your most crucial business decisions. Contact us today to find out how we can partner with you for unparalleled market success.</span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\"><strong><span style=\"font-family: Montserrat; color: #0070c0; mso-ansi-language: EN-US;\">Contact Us</span></strong><span style=\"font-family: Montserrat; color: #0070c0; mso-ansi-language: EN-US;\"> </span><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">to get started on your journey toward data-driven decision-making and transformative business growth.</span></p>', '<p class=\"MsoNormal\"><strong><span lang=\"EN-IN\" style=\"font-size: 11.5pt; line-height: 107%; font-family: Montserrat; mso-bidi-font-family: \'Times New Roman\'; mso-bidi-theme-font: minor-bidi; color: black; background: white;\">To be a trusted &amp; reliable information &amp; insights provider of choice to companies to enable them make confident decisions.</span></strong></p>', '<p><strong>Phasellus a facilisis elit, eu dapibus velit. Sed elementum nisi quam, eu facilisis justo rhoncus id. Duis vestibulum, est vel venenatis lacinia, urna eros euismod est, et suscipit mauris dolor et ex. Nulla facilisi.</strong></p>', '<p class=\"MsoNormal\" style=\"margin-bottom: 0.1in; margin-left: 51.6pt; text-indent: -0.25in; line-height: normal; background: white;\"><!-- [if !supportLists]--><span lang=\"EN-IN\" style=\"font-size: 10.5pt; font-family: Montserrat; mso-fareast-font-family: Montserrat; mso-bidi-font-family: Montserrat; color: black; mso-font-kerning: 0pt; mso-ligatures: none; mso-fareast-language: EN-IN;\"><span style=\"mso-list: Ignore;\">1.<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><strong><span lang=\"EN-IN\" style=\"font-size: 11.5pt; font-family: Montserrat; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: black; mso-font-kerning: 0pt; mso-ligatures: none; mso-fareast-language: EN-IN;\">Maintain the highest ethical and professional standards</span></strong></p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.1in; margin-left: 51.6pt; text-indent: -0.25in; line-height: normal; background: white;\"><!-- [if !supportLists]--><span lang=\"EN-IN\" style=\"font-size: 10.5pt; font-family: Montserrat; mso-fareast-font-family: Montserrat; mso-bidi-font-family: Montserrat; color: black; mso-font-kerning: 0pt; mso-ligatures: none; mso-fareast-language: EN-IN;\"><span style=\"mso-list: Ignore;\">2.<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><strong><span lang=\"EN-IN\" style=\"font-size: 11.5pt; font-family: Montserrat; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: black; mso-font-kerning: 0pt; mso-ligatures: none; mso-fareast-language: EN-IN;\">Always put client&rsquo;s interests ahead of ours</span></strong></p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.1in; margin-left: 51.6pt; text-indent: -0.25in; line-height: normal; background: white;\"><!-- [if !supportLists]--><span lang=\"EN-IN\" style=\"font-size: 10.5pt; font-family: Montserrat; mso-fareast-font-family: Montserrat; mso-bidi-font-family: Montserrat; color: black; mso-font-kerning: 0pt; mso-ligatures: none; mso-fareast-language: EN-IN;\"><span style=\"mso-list: Ignore;\">3.<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><strong><span lang=\"EN-IN\" style=\"font-size: 11.5pt; font-family: Montserrat; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: black; mso-font-kerning: 0pt; mso-ligatures: none; mso-fareast-language: EN-IN;\">Maintain an independent perspective</span></strong></p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.1in; margin-left: 51.6pt; text-indent: -0.25in; line-height: normal; background: white;\"><!-- [if !supportLists]--><span lang=\"EN-IN\" style=\"font-size: 10.5pt; font-family: Montserrat; mso-fareast-font-family: Montserrat; mso-bidi-font-family: Montserrat; color: black; mso-font-kerning: 0pt; mso-ligatures: none; mso-fareast-language: EN-IN;\"><span style=\"mso-list: Ignore;\">4.<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><strong><span lang=\"EN-IN\" style=\"font-size: 11.5pt; font-family: Montserrat; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: black; mso-font-kerning: 0pt; mso-ligatures: none; mso-fareast-language: EN-IN;\">Deliver more than expected</span></strong></p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.1in; margin-left: 51.6pt; text-indent: -0.25in; line-height: normal; background: white;\"><!-- [if !supportLists]--><span lang=\"EN-IN\" style=\"font-size: 10.5pt; font-family: Montserrat; mso-fareast-font-family: Montserrat; mso-bidi-font-family: Montserrat; color: black; mso-font-kerning: 0pt; mso-ligatures: none; mso-fareast-language: EN-IN;\"><span style=\"mso-list: Ignore;\">5.<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><strong><span lang=\"EN-IN\" style=\"font-size: 11.5pt; font-family: Montserrat; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: black; mso-font-kerning: 0pt; mso-ligatures: none; mso-fareast-language: EN-IN;\">Create a challenging, inclusive, nurturing and diverse environment for our people</span></strong></p>', '2023-08-16 23:39:34', '2023-09-18 04:35:53');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `profile_image`, `fullname`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(14, '20230908130058.png', 'Admin', 'admin', 'admin@admin.com', NULL, '$2y$10$4Dq7343XgQ2EhG3XlrFJWOzCHGTMHUepJGpCFkXVO.Y0jWtwO9vN.', NULL, '2023-09-08 06:38:43', '2023-09-13 23:40:38'),
(17, '20230909095906.png', 'Subadmin', 'men', 'subadmin@subadmin.com', NULL, '$2y$10$Z2mVlee50G7W/Di.Avne/es1A4B9bM/1m/9/GAbq6MuzrDi2Pbcjy', NULL, '2023-09-08 07:51:16', '2023-09-14 02:33:03');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `banner_id` bigint(20) UNSIGNED NOT NULL,
  `banner_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`banner_id`, `banner_image`, `created_at`, `updated_at`) VALUES
(1, '20230810113511.png', '2023-08-10 04:42:52', '2023-08-10 06:05:11'),
(2, '20230810134041.png', '2023-08-10 04:52:16', '2023-08-10 08:10:41'),
(3, '20230810134130.png', '2023-08-10 04:53:30', '2023-08-10 08:11:30'),
(6, '20230810134142.png', '2023-08-10 05:38:10', '2023-08-10 08:11:42'),
(8, '20230810134154.png', '2023-08-10 05:44:27', '2023-08-10 08:11:54');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `career_id` bigint(20) UNSIGNED NOT NULL,
  `position` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `job_type` varchar(255) NOT NULL,
  `location_type` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `summary` varchar(1000) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`career_id`, `position`, `slug`, `company_name`, `date`, `location`, `job_type`, `location_type`, `description`, `summary`, `created_at`, `updated_at`) VALUES
(8, 'Search Engine Optimization Executive', 'search-engine-optimization-executive', 'Infogence Global Research', '2023-08-15', 'Pune, Maharashtra, India', 'Full Time', 'On-site', 'Lorem ipsum dolor sit amet consectetur. Quis id nullam rutrum sit. Et lacinia sed tortor non aliquam tempor porttitor sit mauris. Odio condimentum et felis lacus. Morbi dui massa volutpat pulvinar diam faucibus eget. Consectetur diam a odio lobortis et eu. Morbi velit felis non phasellus eget tellus eget.Lorem ipsum dolor sit amet consectetur. Quis id nullam rutrum sit. Et lacinia sed tortor non aliquam tempor porttitor sit mauris. Odio condimentum et felis lacus. Morbi dui massa volutpat pulvinar diam faucibus eget. Consectetur diam a odio lobortis et eu. Morbi velit felis non phasellus eget tellus eget.', 'Lorem ipsum dolor sit amet consectetur. Quis id nullam rutrum sit. Et lacinia sed tortor non aliquam tempor porttitor sit mauris. Odio condimentum et felis lacus.', '2023-08-14 23:35:53', '2023-09-18 05:31:40'),
(9, 'Market Research Intern', 'market-research-intern', 'Infogence Global Research', '2023-08-15', 'Pune, Maharashtra, India', 'Full Time', 'On-site', 'Lorem ipsum dolor sit amet consectetur. Quis id nullam rutrum sit. Et lacinia sed tortor non aliquam tempor porttitor sit mauris. Odio condimentum et felis lacus. Morbi dui massa volutpat pulvinar diam faucibus eget. Consectetur diam a odio lobortis et eu. Morbi velit felis non phasellus eget tellus eget.Lorem ipsum dolor sit amet consectetur. Quis id nullam rutrum sit. Et lacinia sed tortor non aliquam tempor porttitor sit mauris. Odio condimentum et felis lacus. Morbi dui massa volutpat pulvinar diam faucibus eget. Consectetur diam a odio lobortis et eu. Morbi velit felis non phasellus eget tellus eget.', 'Lorem ipsum dolor sit amet consectetur. Quis id nullam rutrum sit. Et lacinia sed tortor non aliquam tempor porttitor sit mauris. Odio condimentum et felis lacus.', '2023-08-14 23:36:59', '2023-08-14 23:36:59');

-- --------------------------------------------------------

--
-- Table structure for table `career_page`
--

CREATE TABLE `career_page` (
  `career_page_id` bigint(20) UNSIGNED NOT NULL,
  `header_image` varchar(255) NOT NULL,
  `image_text` longtext NOT NULL,
  `text` longtext NOT NULL,
  `career_title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `career_page`
--

INSERT INTO `career_page` (`career_page_id`, `header_image`, `image_text`, `text`, `career_title`, `created_at`, `updated_at`) VALUES
(1, '20230918120705.png', '<p id=\"carrers-section-banner-text-para\">CAREER AT INFOGENCE</p>\r\n<h2 class=\"carrers-section-banner-text-heading\">Be a part of</h2>\r\n<h2 class=\"carrers-section-banner-text-heading\">something great</h2>', '<p class=\"MsoNormal\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Elevating a career in any field is an ambitious endeavor, but when that field is as dynamic, complex, and integral to business success as market research, the journey becomes exponentially rewarding. At Infogence, we recognize that the cornerstone of our reputation as a leading global market research firm isn\'t merely the invaluable data we curate or the meticulously detailed reports we produce; the talented individuals&mdash;the brilliant minds&mdash;that form the backbone of our world-class research capabilities.</span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\"><strong><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">The Journey of Growth</span></strong></p>\r\n<p class=\"MsoNormal\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">The path to personal and professional growth at Infogence is mapped out but far from linear. We understand that growth doesn\'t follow a one-size-fits-all model. From day one, team members are encouraged to explore multiple avenues: quantitative research, qualitative analysis, technology assessment, or client management. With a diverse range of industries we serve&mdash;from emerging technologies and healthcare to consumer goods and manufacturing&mdash;there is no dearth of specialization and vertical movement opportunities.</span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">What distinguishes us is our belief in &lsquo;growing together.&rsquo; As the company scales new heights, we want each member to ascend. Performance reviews are not just metrics-based evaluations but comprehensive assessments where individual aspirations are aligned with organizational goals. Our mentorship programs are designed to identify strengths, hone skills, and remove bottlenecks in your career progression.</span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><strong><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Collaboration: The Lifeblood of Our Success</span></strong></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">While individual contributions are highly valued, the essence of our work lies in collaborative endeavors. Market research is multidimensional, requiring a blend of expertise in data science, behavioral economics, cultural nuances, and industry-specific knowledge. Our work environment is a melting pot of this diverse skill set, where interdepartmental projects are the norm rather than the exception.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">We promote a culture where team members can openly share their ideas, critique processes, and collectively arrive at solutions. Internal forums and platforms are regularly used for brainstorming sessions, knowledge sharing, and constructive feedback. This collaborative spirit extends beyond the company walls as we often engage in joint ventures and partnerships with other industry stakeholders.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><strong><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Valuing the Individual</span></strong></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Valuing each team member as a unique individual with distinct skills and perspectives is a practice we hold dear. Unlike many organizations where you might be just another cog in the machine, at Infogence, you matter. Your voice is heard, your contributions are recognized, and your well-being is a priority.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Work-life balance isn&rsquo;t just a phrase in the employee handbook; it&rsquo;s a policy we actively enforce. Flexible working hours, remote work options, and understanding personal commitments are integral to our HR policies. We offer robust health and wellness programs, including gym memberships, mental health resources, and regular health check-ups, acknowledging that a healthy team is productive.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><strong><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Nurturing Potential</span></strong></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Nurturing the potential of our team members is a commitment that we don\'t take lightly. It starts with an inclusive and robust onboarding process where new joiners are familiar with their roles and the company culture, mission, and ethos. Orientation programs are designed to offer a comprehensive understanding of how each cog in the wheel contributes to the bigger picture.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">From there, it&rsquo;s a continual process of skill development, performance reviews, and, most importantly, creating opportunities for real-world application of skills. Scholarships for further education, sabbaticals for research projects, and participation in industry conferences are just a few ways we help you realize your full potential.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><strong><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">How to Apply</span></strong></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">If you\'re ready to make an impact in the fast-paced world of market research, click on your desired job opening for detailed information. Follow the application procedure outlined to submit your credentials. Our hiring team will review your application and reach out for the next steps. We can&rsquo;t wait for you to be part of our dynamic and ever-growing team!</span></p>', 'Current Opening', '2023-09-18 06:30:17', '2023-09-18 07:03:05');

-- --------------------------------------------------------

--
-- Table structure for table `consulties`
--

CREATE TABLE `consulties` (
  `consultancy_id` bigint(20) UNSIGNED NOT NULL,
  `bullet_description` longtext NOT NULL,
  `description` varchar(1000) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `consulties`
--

INSERT INTO `consulties` (`consultancy_id`, `bullet_description`, `description`, `created_at`, `updated_at`) VALUES
(1, '<p class=\"MsoNormal\" style=\"margin-top: 12pt; text-align: left;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Why Choose Our Consulting Services:</span></p>\r\n<ul>\r\n<li><span style=\"font-family: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol; mso-ansi-language: EN-US;\"><span style=\"mso-list: Ignore;\"><span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;</span></span></span><!--[endif]--><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Tailor-Made Solutions: We design our research methodologies around your unique challenges and questions.</span></li>\r\n<li><span style=\"font-family: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol; mso-ansi-language: EN-US;\"><span style=\"mso-list: Ignore;\"><span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;</span></span></span><!--[endif]--><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">In-depth Analysis: Beyond surface-level findings, we dig deeper to provide you with a nuanced understanding of your market.</span></li>\r\n<li><span style=\"font-family: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol; mso-ansi-language: EN-US;\"><span style=\"mso-list: Ignore;\"><span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;</span></span></span><!--[endif]--><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Strategic Guidance: Our services go beyond research; we offer strategic advice to help you implement our findings.</span></li>\r\n<li><span style=\"font-family: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol; mso-ansi-language: EN-US;\"><span style=\"mso-list: Ignore;\"><span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;</span></span></span><!--[endif]--><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Ongoing Support: We\'re with you every step of the way, from initial consultation to post-project implementation.</span></li>\r\n</ul>', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates officia exercitationem similique odit harum quo? Delectus nulla praesentium, distinctio veniam repudiandae impedit necessitatibus ut nostrum corporis accusantium enim provident quas eaque magni. Corrupti ullam cupiditate hic est architecto repellendus sapiente ex, doloribus veniam ab! Dignissimos atque autem repellendus facilis voluptate?', '2023-08-13 23:34:58', '2023-09-18 07:21:21');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `faq_id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`faq_id`, `heading`, `description`, `created_at`, `updated_at`) VALUES
(3, 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, quibusdam! Voluptate nobis, beatae tempora praesentium, illum quis illo, maiores quod similique placeat, saepe mollitia dolor officiis aspernatur deleniti debitis commodi!', '2023-08-25 01:33:39', '2023-08-25 01:33:39'),
(4, 'Dolor sit amet', 'Dolor sit amet\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit quos, accusamus! Enim labore totam dicta quibusdam?', '2023-08-25 01:33:56', '2023-08-25 01:33:56'),
(5, 'Consectetur adipisicing elit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit quos, accusamus! Enim labore totam dicta quibusdam? Eveniet quis asperiores reprehenderit eaque atque in iure voluptate, explicabo, placeat, id earum architecto!', '2023-08-25 01:34:08', '2023-08-25 01:34:08');

-- --------------------------------------------------------

--
-- Table structure for table `gdpr_policies`
--

CREATE TABLE `gdpr_policies` (
  `gdpr_policy_id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gdpr_policies`
--

INSERT INTO `gdpr_policies` (`gdpr_policy_id`, `description`, `created_at`, `updated_at`) VALUES
(2, '<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><strong><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Introduction</span></strong></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Infogence is committed to ensuring the privacy and security of your personal data. This GDPR Policy outlines our responsibilities and your rights under the General Data Protection Regulation (GDPR) that applies within the European Union and European Economic Area.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><strong><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">What This Policy Covers</span></strong></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">This policy covers how we collect, use, disclose, and manage your personal data.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><strong><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Data We Collect</span></strong></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">We may collect data such as:</span></p>\r\n<p class=\"MsoListParagraphCxSpFirst\" style=\"margin-top: 12.0pt; mso-add-space: auto; text-indent: -.25in; mso-list: l2 level1 lfo1;\"><!-- [if !supportLists]--><span style=\"font-family: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol; mso-ansi-language: EN-US;\"><span style=\"mso-list: Ignore;\">&middot;<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Contact Information: Name, Email, Phone Number</span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-top: 12.0pt; mso-add-space: auto; text-indent: -.25in; mso-list: l2 level1 lfo1;\"><!-- [if !supportLists]--><span style=\"font-family: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol; mso-ansi-language: EN-US;\"><span style=\"mso-list: Ignore;\">&middot;<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Professional Information: Company Name, Job Title</span></p>\r\n<p class=\"MsoListParagraphCxSpLast\" style=\"margin-top: 12.0pt; mso-add-space: auto; text-indent: -.25in; mso-list: l2 level1 lfo1;\"><!-- [if !supportLists]--><span style=\"font-family: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol; mso-ansi-language: EN-US;\"><span style=\"mso-list: Ignore;\">&middot;<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Technical Data: IP Address, Browser Type</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><strong><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">How We Use Your Data</span></strong></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">We may use your data for purposes like:</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><strong><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Providing and improving our services</span></strong></p>\r\n<p class=\"MsoListParagraphCxSpFirst\" style=\"margin-top: 12.0pt; mso-add-space: auto; text-indent: -.25in; mso-list: l0 level1 lfo2;\"><!-- [if !supportLists]--><span style=\"font-family: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol; mso-ansi-language: EN-US;\"><span style=\"mso-list: Ignore;\">&middot;<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Customer support</span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-top: 12.0pt; mso-add-space: auto; text-indent: -.25in; mso-list: l0 level1 lfo2;\"><!-- [if !supportLists]--><span style=\"font-family: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol; mso-ansi-language: EN-US;\"><span style=\"mso-list: Ignore;\">&middot;<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Marketing and promotional activities</span></p>\r\n<p class=\"MsoListParagraphCxSpLast\" style=\"margin-top: 12.0pt; mso-add-space: auto; text-indent: -.25in; mso-list: l0 level1 lfo2;\"><!-- [if !supportLists]--><span style=\"font-family: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol; mso-ansi-language: EN-US;\"><span style=\"mso-list: Ignore;\">&middot;<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Data Storage and Security</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">We use secure, encrypted systems to store your data. Only authorized personnel have access to this information.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><strong><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Your Rights</span></strong></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Under GDPR, you have several rights including:</span></p>\r\n<p class=\"MsoListParagraphCxSpFirst\" style=\"margin-top: 12.0pt; mso-add-space: auto; text-indent: -.25in; mso-list: l1 level1 lfo3;\"><!-- [if !supportLists]--><span style=\"font-family: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol; mso-ansi-language: EN-US;\"><span style=\"mso-list: Ignore;\">&middot;<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">The right to access: You can ask for a copy of your personal data.</span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-top: 12.0pt; mso-add-space: auto; text-indent: -.25in; mso-list: l1 level1 lfo3;\"><!-- [if !supportLists]--><span style=\"font-family: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol; mso-ansi-language: EN-US;\"><span style=\"mso-list: Ignore;\">&middot;<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">The right to rectification: You can ask us to correct or complete your personal data.</span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-top: 12.0pt; mso-add-space: auto; text-indent: -.25in; mso-list: l1 level1 lfo3;\"><!-- [if !supportLists]--><span style=\"font-family: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol; mso-ansi-language: EN-US;\"><span style=\"mso-list: Ignore;\">&middot;<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">The right to erasure: You can ask us to delete your personal data.</span></p>\r\n<p class=\"MsoListParagraphCxSpLast\" style=\"margin-top: 12.0pt; mso-add-space: auto; text-indent: -.25in; mso-list: l1 level1 lfo3;\"><!-- [if !supportLists]--><span style=\"font-family: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol; mso-ansi-language: EN-US;\"><span style=\"mso-list: Ignore;\">&middot;<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">The right to data portability: You can ask us to transfer your personal data to another organization.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><strong><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Data Retention</span></strong></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">We retain your data for as long as necessary for the purposes stated in this policy, in line with our legal obligations.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><strong><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Third-Party Sharing</span></strong></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">We do not sell or share your data with third parties for their marketing purposes without your explicit consent.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><strong><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Updates to This Policy</span></strong></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">We reserve the right to update this policy from time to time, and we will provide you with the updated version on our website.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><strong><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Contact Us</span></strong></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">For more information or to exercise your data protection rights, you can contact us at:</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">contact@infogenceglobalresearch.com</span></p>', '2023-08-16 05:56:48', '2023-09-18 07:34:17');

-- --------------------------------------------------------

--
-- Table structure for table `home_first_section`
--

CREATE TABLE `home_first_section` (
  `home_first_section_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `text` longtext NOT NULL,
  `button_text` varchar(255) NOT NULL,
  `button_url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_first_section`
--

INSERT INTO `home_first_section` (`home_first_section_id`, `image`, `text`, `button_text`, `button_url`, `created_at`, `updated_at`) VALUES
(2, '20230918072720.png', '<div>\r\n<h1><span style=\"font-size: 24pt;\">Unlocking <span style=\"color: rgb(0, 70, 154);\">Business&nbsp;</span>Potential</span></h1>\r\n<h1><span style=\"font-size: 24pt;\">Through <span style=\"color: rgb(0, 70, 154);\">Insightful</span></span></h1>\r\n<h1><span style=\"font-size: 24pt;\">Research</span></h1>\r\n<div>&nbsp;</div>\r\n<div>Leading the way in global market research, Infogence delivers actionable insights for informed decisions. Dive deep with us and shape your industry\'s future.</div>\r\n<div>&nbsp;</div>\r\n</div>', 'Know More', 'https://youtube.com/', '2023-09-18 01:50:06', '2023-09-18 23:54:02');

-- --------------------------------------------------------

--
-- Table structure for table `industries`
--

CREATE TABLE `industries` (
  `industry_id` bigint(20) UNSIGNED NOT NULL,
  `bullet_description` longtext NOT NULL,
  `description` varchar(1000) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `industries`
--

INSERT INTO `industries` (`industry_id`, `bullet_description`, `description`, `created_at`, `updated_at`) VALUES
(5, '<p class=\"MsoNormal\" style=\"margin-top: 12pt; text-align: left;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Why Choose Our Syndicated Reports:</span></p>\r\n<ul>\r\n<li><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Comprehensive Industry Coverage: Our reports span multiple sectors, including technology, healthcare, consumer goods, and more.</span></li>\r\n<li><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Actionable Insights: Each report is filled with data-driven findings that you can directly apply to your decision-making process.</span></li>\r\n<li><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Global Reach: We offer insights that are relevant both locally and globally, enabling you to see the bigger picture.</span></li>\r\n<li><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Affordability: By sharing the cost of these reports among multiple clients, we offer high-quality research at a more accessible price point.</span></li>\r\n</ul>', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates officia exercitationem  similique odit harum quo? Delectus nulla praesentium, distinctio veniam repudiandae impedit necessitatibus ut nostrum corporis accusantium enim provident quas eaque magni. Corrupti ullam cupiditate hic est architecto repellendus sapiente ex, doloribus veniam ab! Dignissimos atque autem repellendus facilis voluptate?', '2023-08-13 23:26:47', '2023-09-18 07:21:36');

-- --------------------------------------------------------

--
-- Table structure for table `insights`
--

CREATE TABLE `insights` (
  `insight_id` bigint(20) UNSIGNED NOT NULL,
  `header_image` varchar(255) NOT NULL,
  `small_image` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `insights`
--

INSERT INTO `insights` (`insight_id`, `header_image`, `small_image`, `heading`, `description`, `created_at`, `updated_at`) VALUES
(2, '20230822055144.png', '20230822055144.png', 'Lorem ipsum dolor sit amet consectetur.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo exercitationem eius, ex ipsa assumenda suscipit facere unde placeat voluptatibus deleniti repellat ullam in ad facilis laboriosam nostrum dolore deserunt repellendus, quia ipsam aliquam dignissimos quo? In eius cumque, aperiam quam illum deleniti consequuntur tenetur ex! Deserunt autem cum neque quae!', '2023-08-22 00:21:44', '2023-08-22 00:21:44');

-- --------------------------------------------------------

--
-- Table structure for table `insight_categories`
--

CREATE TABLE `insight_categories` (
  `insight_category_id` bigint(20) UNSIGNED NOT NULL,
  `insight_category_name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `insight_categories`
--

INSERT INTO `insight_categories` (`insight_category_id`, `insight_category_name`, `slug`, `created_at`, `updated_at`) VALUES
(2, 'Automative and Transportation', 'automative-and-transportation', '2023-08-22 01:36:17', '2023-08-22 01:45:57'),
(3, 'Food and Beverage', 'food-and-beverage', '2023-08-22 01:46:07', '2023-08-22 01:46:07'),
(5, 'Chemicals & Additives', 'chemicals-additives', '2023-08-22 01:46:39', '2023-08-22 01:46:39');

-- --------------------------------------------------------

--
-- Table structure for table `insight_posts`
--

CREATE TABLE `insight_posts` (
  `insight_post_id` bigint(20) UNSIGNED NOT NULL,
  `thumbnail_image` varchar(255) NOT NULL,
  `featured_image` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `report_code` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `sort_description` varchar(255) NOT NULL,
  `page` varchar(255) NOT NULL,
  `published_on` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `text` varchar(1000) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_tags` varchar(255) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `insight_posts`
--

INSERT INTO `insight_posts` (`insight_post_id`, `thumbnail_image`, `featured_image`, `heading`, `report_code`, `slug`, `sort_description`, `page`, `published_on`, `category`, `text`, `meta_title`, `meta_description`, `meta_tags`, `meta_keywords`, `created_at`, `updated_at`) VALUES
(1, '20230913062801.png', '20230913062801.png', 'Lorem ipsum dolor sit amet consectetur.', 'INF-1111', 'lorem-ipsum-dolor-sit-amet-consectetur', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi, distinctio.', '111', '2023-08-28', 'Automative and Transportation', '<p>Donec tincidunt leo nec magna gravida varius. Suspendisse felis orci, egestas ac sodales quis, venenatis et neque.</p>', 'Lorem ipsum dolor sit amet consectetur.', 'Lorem ipsum dolor sit amet consectetur.', 'Lorem,ipsum,dolor,sit', 'Lorem,ipsum,dolor,sit,amet,consectetur.', '2023-08-27 23:47:08', '2023-09-13 00:59:25'),
(2, '20230913063411.png', '20230828055709.png', 'Aenean Pulvinar Gravida Sem Nec', 'any-code -2222', 'aenean-pulvinar-gravida-sem-nec', 'You can browse different tags such as multi-page, resume, video, etc. to see', '222', '2023-08-21', 'Food and Beverage', '<p>more CSS templates. Sed hendrerit rutrum arcu, non malesuada nisi. Sed id facilisis turpis. Donec justo elit, dapibus vel ultricies in, molestie sit amet risus. In nunc augue, rhoncus sed libero et, tincidunt tempor nisl. Donec egestas</p>', 'Aenean Pulvinar Gravida Sem Nec', 'Aenean Pulvinar Gravida Sem Nec', 'Aenean,Pulvinar,Gravida,Sem', 'Aenean,Pulvinar,Gravida,Sem,Nec', '2023-08-28 00:25:46', '2023-09-13 01:04:11'),
(3, '20230913063427.png', '20230828055822.jpg', 'unc augue, rhoncus sed libero et, tincidunt tempor nisl. Do', 'INF-3333', 'unc-augue-rhoncus-sed-libero-et-tincidunt-tempor-nisl-do', 'i non pulvinar lacinia. Ut lacinia finibus lorem vel porttitor. Suspendisse et metus nec libero ultrices varius eget in risus. Cras id nibh a', '333', '2023-08-17', 'Chemicals & Additives', '<ul>\r\n	<li>\r\n	<p>Fusce ornare mollis eros. Duis et diam vitae justo fringilla condimentum eu quis leo. Vestibulum id turpis porttitor sapien facilisis scelerisque. Curabitur a nisl eu lacus convallis eleifend posuere id tellus.</p>\r\n	</li>\r\n</ul>', 'unc augue, rhoncus sed libero et, tincidunt tempor nisl. Do', 'unc augue, rhoncus sed libero et, tincidunt tempor nisl. Do', 'unc,augue,rhoncus', 'unc,augue,rhoncus,sed,libero.et', '2023-08-28 00:27:16', '2023-09-13 01:04:27'),
(4, '20230913063504.png', '20230828055951.png', 'Vestibulum id turpis porttitor sapien facilisis scelerisque', 'INF-4444', 'vestibulum-id-turpis-porttitor-sapien-facilisis-scelerisque', ', rhoncus sed libero et, tincidunt tempor nisl. Donec egestas,', '444', '2023-08-10', 'Food and Beverage', '<ul>\r\n	<li>\r\n	<p>odales quis, venenatis et neque. Vivamus facilisis dignissim arcu et blandit. Maecenas finibus dui non pulvinar lacinia. Ut lacinia fini</p>\r\n	</li>\r\n</ul>', 'Vestibulum id turpis porttitor sapien facilisis scelerisque', 'Vestibulum id turpis porttitor sapien facilisis scelerisque', 'Vestibulum,id,turpis', 'Vestibulum,id,turpis,porttitor', '2023-08-28 00:28:42', '2023-09-13 01:05:04'),
(5, '20230913063548.png', '20230828060214.jpg', 'Suspendisse et metus nec libero ultrices varius eget in risus', 'INF-5555', 'suspendisse-et-metus-nec-libero-ultrices-varius-eget-in-risus', 'cenas finibus dui non pulvinar lacinia. Ut lacinia finibu', '5555', '2023-08-09', 'Chemicals & Additives', '<ul>\r\n	<li>\r\n	<p>unc augue, rhoncus sed libero et, tincidunt tempor nisl. Donec egestas, quam eu rutrum ultrices, sapien ante posuer</p>\r\n	</li>\r\n</ul>', 'Suspendisse et metus nec libero ultrices varius eget in risus', 'Suspendisse et metus nec libero ultrices varius eget in risus', 'Suspendisse \',et,metus', 'Suspendisse,et,metus,nec', '2023-08-28 00:30:44', '2023-09-13 01:05:48'),
(6, '20230913063618.png', '20230828060438.jpg', 'Swag hella echo park leggings, shaman cornhole ethical coloring', 'INF-6666', 'swag-hella-echo-park-leggings-shaman-cornhole-ethical-coloring', 'sodales quis, venenatis et neque. Vivamus facilisis dignissim arcu et blandit. Maecenas finibus dui non pulvinar lacinia.', '6666', '2023-08-03', 'Chemicals & Additives', '<ul>\r\n	<li>\r\n	<p>Nullam nec pharetra nibh. Cras tortor nulla, faucibus id tincidunt in, ultrices eget ligula. Sed vitae suscipit ligula. Vestibulum id turpis volutpat, lobortis turpis ac, molestie nibh.</p>\r\n	</li>\r\n</ul>', 'Swag hella echo park leggings, shaman cornhole ethical coloring', 'Swag hella echo park leggings, shaman cornhole ethical coloring', 'Swag,hella,echo', 'Swag,hella,echo,park,leggings', '2023-08-28 00:32:17', '2023-09-13 01:06:18'),
(10, '20230913063641.png', '20230828080301.png', 'Industry Reports', 'INF-7777', 'industry-reports', 'Aenean Pulvinar Gravida Sem Nec', '7777', '2023-08-28', 'Automative and Transportation', '<p>Aenean Pulvinar Gravida Sem Nec</p>', 'Industry Reports', 'Industry Reports', 'Industry,Reports', 'Industry,Reports', '2023-08-28 02:33:01', '2023-09-13 01:06:41'),
(13, '20230913063704.png', '20230828080301.png', 'Industry Reports', 'INF-8888', 'industry-reports-2', 'Aenean Pulvinar Gravida Sem Nec', '8888', '2023-08-28', 'Automative and Transportation', '<p>Aenean Pulvinar Gravida Sem Nec</p>', 'Industry Reports', 'Aenean Pulvinar Gravida Sem Nec', 'Industry,Aenean,Gravida', 'Aenean,Pulvinar.Gravida', '2023-08-29 02:45:39', '2023-09-13 01:07:04'),
(14, '20230913063735.png', '20230828051708.png', 'Lorem ipsum dolor sit amet consectetur.', 'INF-9999', 'lorem-ipsum-dolor-sit-amet-consectetur-2', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi, distinctio.', '9999', '2023-08-28', 'Automative and Transportation', '<p>Donec tincidunt leo nec magna gravida varius. Suspendisse felis orci, egestas ac sodales quis, venenatis et neque.</p>', 'Lorem ipsum dolor sit amet consectetur.', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi, distinctio.', 'Lorem,ipsum,dolor,sit', 'Lorem,ipsum, dolor,sit', '2023-08-29 02:45:45', '2023-09-13 01:07:35'),
(15, '20230913063758.png', '20230828080301.png', 'Market Segmentation', 'INF3232', 'market-segmentation', 'Aenean Pulvinar Gravida Sem Nec', '32232', '2023-08-28', 'Automative and Transportation', '<p>Aenean Pulvinar Gravida Sem Nec</p>', 'Market Segmentation', 'Aenean Pulvinar Gravida Sem Nec', 'Aenean,Pulvinar', 'Aenean,Pulvinar,Gravida', '2023-09-01 11:20:57', '2023-09-13 01:07:58');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_10_094714_create_banners_table', 1),
(6, '2023_08_10_115031_create_progress_table', 2),
(7, '2023_08_10_124527_create_progress_table', 3),
(8, '2023_08_10_125029_create_progress_table', 4),
(9, '2023_08_11_044458_create_reports_table', 5),
(10, '2023_08_11_055023_create_categories_table', 6),
(11, '2023_08_11_062251_create_services_table', 7),
(12, '2023_08_12_045259_create_services_table', 8),
(13, '2023_08_12_050019_create_bullets_table', 9),
(14, '2023_08_12_051923_create_bullets_table', 10),
(15, '2023_08_12_071223_create_industries_table', 11),
(16, '2023_08_12_071329_create_consulties_table', 11),
(17, '2023_08_14_093238_create_careers_table', 12),
(18, '2023_08_14_122341_add_columns_to_careers_table', 13),
(19, '2023_08_14_133512_add_columns_to_careers_table', 14),
(20, '2023_08_15_074140_create_report_categaries_table', 15),
(21, '2023_08_15_074721_create_report_categaries_table', 16),
(22, '2023_08_16_101156_create_term_conditions_table', 17),
(23, '2023_08_16_101650_create_privacy_policies_table', 17),
(24, '2023_08_16_101710_create_gdpr_policies_table', 17),
(25, '2023_08_16_115120_create_abouts_table', 18),
(26, '2023_08_17_122231_create_report_categories_table', 19),
(27, '2023_08_18_065916_create_report_views_table', 20),
(28, '2023_08_18_081512_create_report_views_table', 21),
(29, '2023_08_22_050200_create_insights_table', 22),
(30, '2023_08_22_064304_create_insight_categories_table', 23),
(31, '2023_08_25_064229_create_faqs_table', 24),
(32, '2023_08_25_094745_add_columns_to_report_views_table', 25),
(33, '2023_08_25_094956_add_columns_to_report_views_table', 26),
(34, '2023_08_27_072957_create_insight_posts_table', 27),
(35, '2023_08_27_074722_add_columns_to_insight_posts_table', 27),
(36, '2023_08_28_094956_create_insight_post_comments_table', 28),
(37, '2023_08_28_101516_add_columns_to_insight_post_comments_table', 29),
(38, '2023_09_04_093116_add_columns_to_report_categories_table', 30),
(39, '2023_09_04_123716_add_columns_to_report_views_table', 31),
(40, '2023_09_04_130735_add_columns_to_insight_posts_table', 32),
(41, '2023_09_05_114509_create_admins_table', 33),
(42, '2023_09_06_065105_create_admins_table', 34),
(43, '2023_09_09_053549_add_columns_to_admins_table', 35),
(44, '2023_09_09_060001_create_permissions_table', 36),
(45, '2023_09_09_063853_create_roles_table', 37),
(46, '2023_09_09_113142_create_payment_details_table', 38),
(47, '2023_09_11_114351_create_permission_tables', 39),
(48, '2023_09_13_060921_add_columns_to_insight_posts_table', 40),
(49, '2023_09_13_062012_add_columns_to_insight_posts_table', 41),
(50, '2023_09_13_070516_create_why_choose_us_table', 42),
(51, '2023_09_18_061050_create_home_first_section_table', 43),
(52, '2023_09_18_102446_add_columns_to_careers_table', 44),
(53, '2023_09_18_111021_create_career_page_table', 45),
(54, '2023_09_19_115638_create_payment_details_table', 46);

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
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `report_category` varchar(255) NOT NULL,
  `report_view_slug` varchar(255) NOT NULL,
  `license_type` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `payment_order_id` varchar(255) NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `privacy_policies`
--

CREATE TABLE `privacy_policies` (
  `privacy_policy_id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privacy_policies`
--

INSERT INTO `privacy_policies` (`privacy_policy_id`, `description`, `created_at`, `updated_at`) VALUES
(2, '<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><strong><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Introduction</span></strong></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Welcome to Infogence. By using our services, you are agreeing to comply with and be bound by the following terms and conditions. Please review them carefully. If you do not agree with these terms, you should not use this website or purchase our services.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><strong><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Acceptance of Terms</span></strong></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">By accessing this website, you are agreeing to be bound by these terms and conditions, all applicable laws, and regulations, and agree that you are responsible for compliance with any applicable local laws.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><strong><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Use of Site and Service</span></strong></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Intellectual Property: All contents of this website are copyrighted material of Infogence and may not be duplicated, reproduced, or redistributed without our written consent.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><strong><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">License</span></strong><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">: Upon purchasing any of our Syndicated Reports or Consulting Services, Infogence grants you a non-exclusive, non-transferable license to use the purchased material, subject to the terms herein.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><strong><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Modifications and Updates</span></strong></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Infogence reserves the right to modify or discontinue any product or service, and to update these Terms and Conditions at any time.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><strong><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Payments</span></strong></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">All payments for Infogence services must be made in advance through the payment methods listed on our website.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><strong><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Refund Policy</span></strong></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Due to the nature of the services, refunds are not generally provided except in exceptional circumstances, and at the sole discretion of Infogence.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><strong><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Liability Limitation</span></strong></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Infogence shall not be liable for any indirect, special, consequential, or incidental damages including, but not limited to, loss of profits or revenue, business interruption, or data loss arising from the use or inability to use our products or services.</span></p>', '2023-08-16 05:48:46', '2023-09-18 07:32:34');

-- --------------------------------------------------------

--
-- Table structure for table `progress`
--

CREATE TABLE `progress` (
  `progress_id` bigint(20) UNSIGNED NOT NULL,
  `progress_image` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `progress`
--

INSERT INTO `progress` (`progress_id`, `progress_image`, `heading`, `description`, `created_at`, `updated_at`) VALUES
(1, '20230810131053.png', 'Define a Problem', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia culpa consequuntur ad earum aspernatur, aliquid delectus esse quibusdam ut labore.', '2023-08-10 07:25:40', '2023-09-13 05:30:01'),
(2, '20230810125812.png', 'Define a Problem', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia culpa consequuntur ad earum aspernatur, aliquid delectus esse quibusdam ut labore.', '2023-08-10 07:28:12', '2023-08-10 07:28:12'),
(3, '20230810125834.png', 'Define a Problem', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia culpa consequuntur ad earum aspernatur, aliquid delectus esse quibusdam ut labore.', '2023-08-10 07:28:34', '2023-08-10 07:28:34');

-- --------------------------------------------------------

--
-- Table structure for table `report_categories`
--

CREATE TABLE `report_categories` (
  `report_category_id` bigint(20) UNSIGNED NOT NULL,
  `report_category_image` varchar(255) NOT NULL,
  `report_category_name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `report_categories`
--

INSERT INTO `report_categories` (`report_category_id`, `report_category_image`, `report_category_name`, `slug`, `created_at`, `updated_at`) VALUES
(13, '20230904095551.png', 'Aerospace & Defence', 'aerospace-defence', '2023-08-22 02:13:28', '2023-09-04 04:25:51'),
(14, '20230904095605.png', 'Automotive and Transportation', 'automotive-and-transportation', '2023-08-22 02:13:38', '2023-09-04 04:26:05'),
(15, '20230904095616.png', 'Chemicals & Additives', 'chemicals-additives', '2023-08-22 02:13:45', '2023-09-04 04:26:16'),
(16, '20230904095625.png', 'Electronics & Electricals', 'electronics-electricals', '2023-08-22 02:13:51', '2023-09-04 04:26:25'),
(17, '20230904095636.png', 'Food and Beverage', 'food-and-beverage', '2023-08-22 02:13:57', '2023-09-04 04:26:36'),
(18, '20230904095646.png', 'General Engineering', 'general-engineering', '2023-08-22 02:14:04', '2023-09-04 04:26:46'),
(19, '20230904095703.png', 'Healthcare', 'healthcare', '2023-08-22 02:14:15', '2023-09-04 04:27:03'),
(20, '20230904095713.png', 'ICT', 'ict', '2023-08-22 02:14:22', '2023-09-04 05:18:31'),
(21, '20230904095725.png', 'Packaging & Printing', 'packaging-printing', '2023-08-22 02:14:29', '2023-09-04 04:27:25'),
(22, '20230904095800.png', 'Pharmaceutical', 'pharmaceutical', '2023-08-22 02:14:36', '2023-09-04 04:28:00'),
(23, '20230904095747.png', 'Smart Manufacturing', 'smart-manufacturing', '2023-08-22 02:14:42', '2023-09-04 04:27:47');

-- --------------------------------------------------------

--
-- Table structure for table `report_views`
--

CREATE TABLE `report_views` (
  `report_view_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(20) DEFAULT NULL,
  `heading` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `report_code` varchar(255) NOT NULL,
  `published_on` varchar(255) NOT NULL,
  `featured_image` varchar(255) NOT NULL,
  `thumbnail_image` varchar(255) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `page` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `default_description` longtext NOT NULL,
  `request_description` longtext NOT NULL,
  `table_of_content` longtext NOT NULL,
  `methodology` longtext NOT NULL,
  `single_user_license` varchar(255) NOT NULL,
  `multi_user_license` varchar(255) NOT NULL,
  `enterprise_user_license` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_tags` varchar(255) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `report_views`
--

INSERT INTO `report_views` (`report_view_id`, `category_id`, `heading`, `slug`, `report_code`, `published_on`, `featured_image`, `thumbnail_image`, `short_description`, `page`, `category`, `default_description`, `request_description`, `table_of_content`, `methodology`, `single_user_license`, `multi_user_license`, `enterprise_user_license`, `meta_title`, `meta_description`, `meta_tags`, `meta_keywords`, `created_at`, `updated_at`) VALUES
(1, 13, 'Global Autonomous Cars Market (2021-2026) by Type, Vehicle Type and Geography, IGR Competitive Analysis, Impact of Covid-19, Ansoff Analysis', 'global-autonomous-cars-market-2021-2026-by-type-vehicle-type-and-geography-igr-competitive-analysis-impact-of-covid-19-ansoff-analysis', 'INF-2-2022-369', '2023-07-26', '20230819062650.png', '20230913065513.png', 'Global Industry Analysis, Size, Share, Growth, Trends and Forecast, 2020 - 2030', '186', 'Aerospace & Defence', '<h2>Market Dynamics</h2>\r\n\r\n<p>Market dynamics are forces that impact the prices and behaviors of the Global Automotive Radar Market stakeholders. These forces create pricing signals which result from the changes in the supply and demand curves for a given product or service. Forces of Market Dynamics may be related to macro-economic and micro-economic factors. There are dynamic market forces other than price, demand, and supply. Human emotions can also drive decisions, influence the market, and create price signals. As the market dynamics impact the supply and demand curves, decision-makers aim to determine the best way to use various financial tools to stem various strategies for speeding the growth and reducing the risks.</p>', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus qui error ab mollitia natus veritatis vitae illo provident exercitationem aut ullam quia labore totam recusandae aliquam, id quasi itaque perspiciatis cupiditate optio quis ratione impedit eos? Temporibus dolorem tempora corporis natus repellendus iusto cum? Numquam exercitationem sed quae unde quos ipsa, eaque earum dignissimos eligendi harum optio id tempore ipsam facilis repellendus pariatur ducimus amet suscipit.</p>', '<ol>\r\n	<li>Report Description\r\n	<ol>\r\n		<li>Study Objectives</li>\r\n		<li>Market Definition</li>\r\n		<li>Currency</li>\r\n		<li>Years Considered</li>\r\n		<li>Language</li>\r\n		<li>Key Stakeholders</li>\r\n	</ol>\r\n	</li>\r\n	<li>\r\n	<ol>\r\n		<li>Research Process\r\n		<ul>\r\n			<li>Secodory Research</li>\r\n			<li>Primary Research</li>\r\n			<li>IGR Models</li>\r\n		</ul>\r\n		</li>\r\n		<li>Market Size Estimation\r\n		<ul>\r\n			<li>Secodory Research</li>\r\n			<li>Primary Research</li>\r\n			<li>IGR Models</li>\r\n		</ul>\r\n		</li>\r\n		<li>Research Assumptions</li>\r\n		<li>Limitations</li>\r\n	</ol>\r\n	</li>\r\n</ol>', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore perspiciatis quam ducimus nihil, expedita nostrum! Distinctio animi corporis consequuntur aliquid quia, ab quaerat minus mollitia beatae illum cum, magnam adipisci quis doloribus repudiandae, illo culpa hic fuga ea. Nam maxime assumenda dolore voluptate tempora inventore debitis, ipsum possimus, ipsa laudantium delectus perferendis tempore vel impedit nobis quia cupiditate, quisquam cumque esse illum ipsam. Similique, quaerat nihil?</p>', '1', '2', '3', 'Global Autonomous Cars Market (2021-2026) by Type, Vehicle Type and Geography, IGR Competitive Analysis, Impact of Covid-19, Ansoff Analysis', 'Global Industry Analysis, Size, Share, Growth, Trends and Forecast, 2020 - 2030', 'Global,Industry,Analysis', 'Global,Autonomous,Analysis', '2023-09-12 06:17:29', '2023-09-19 01:33:28'),
(2, 14, 'Global Autonomous Cars Market', 'global-autonomous-cars-market', 'INF-2-2022-123', '2023-08-19', '20230819063120.png', '20230819063120.png', 'Global Industry Analysis', '123', 'Automotive and Transportation', '<h2>Market Segmentation</h2>\n\n<ul>\n	<li>Infogence Global Research follows a robust research methodology to determine a</li>\n	<li>specific market&#39;s potential size and revenue opportunity. It helps businesses assess the</li>\n	<li>overall market potential for their products or services and make informed decisions</li>\n	<li>regarding their market entry strategy, pricing, and resource allocation.</li>\n</ul>', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus qui error ab mollitia natus veritatis vitae illo provident exercitationem aut ullam quia labore totam recusandae aliquam</p>', '<ol>\n	<li>Market Dynamics\n	<ol>\n		<li>Impact Analysis</li>\n		<li>Drivers\n		<ul>\n			<li>Increasing Vehicle Sales and the Growing Automotive Industry</li>\n			<li>Growing Awareness of Road Safety and the Importance of Tire Maintenance</li>\n			<li>Rising Demand for Convenient and Time-Saving Tire Maintenance Solutions</li>\n		</ul>\n		</li>\n		<li>Restraints\n		<ul>\n			<li>Limited Availability of High-Quality Sealants for Larger Punctures or Damages</li>\n			<li>Adhering to Stringent Quality and Safety Regulations</li>\n		</ul>\n\n		<ul>\n			<li>Limited Availability of High-Quality Sealants for Larger Punctures or Damages</li>\n			<li>Adhering to Stringent Quality and Safety Regulations</li>\n		</ul>\n		</li>\n		<li>Challenges\n		<ul>\n			<li>Limited Availability of High-Quality Sealants for Larger Punctures or Damages</li>\n			<li>Adhering to Stringent Quality and Safety Regulations</li>\n		</ul>\n		</li>\n	</ol>\n	</li>\n</ol>', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore perspiciatis quam ducimus nihil, expedita nostrum! Distinctio animi corporis consequuntur aliquid quia, ab quaerat minus mollitia beatae illum cum, magnam adipisci quis doloribus repudiandae</p>', '100', '200', '300', 'Global Autonomous Cars Market', 'Global Industry Analysis', 'Global,Industry,Cars', 'Global,Industry,Analysis', '2023-09-12 06:17:29', '2023-09-12 06:17:29'),
(3, 13, 'Lorem ipsum dolor sit amet.', 'lorem-ipsum-dolor-sit-amet', 'INF-2-2023-456', '2023-08-14', '20230821063220.png', '20230819063120.png', 'Global Industry Analysis', '123', 'Aerospace & Defence', '<h2>Market Segmentation</h2>\n\n<ul>\n	<li>Infogence Global Research follows a robust research methodology to determine a</li>\n	<li>specific market&#39;s potential size and revenue opportunity. It helps businesses assess the</li>\n	<li>overall market potential for their products or services and make informed decisions</li>\n	<li>regarding their market entry strategy, pricing, and resource allocation.</li>\n</ul>', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus qui error ab mollitia natus veritatis vitae illo provident exercitationem aut ullam quia labore totam recusandae aliquam</p>', '<ol>\n	<li>Market Dynamics\n	<ol>\n		<li>Impact Analysis</li>\n		<li>Drivers\n		<ul>\n			<li>Increasing Vehicle Sales and the Growing Automotive Industry</li>\n			<li>Growing Awareness of Road Safety and the Importance of Tire Maintenance</li>\n			<li>Rising Demand for Convenient and Time-Saving Tire Maintenance Solutions</li>\n		</ul>\n		</li>\n		<li>Restraints\n		<ul>\n			<li>Limited Availability of High-Quality Sealants for Larger Punctures or Damages</li>\n			<li>Adhering to Stringent Quality and Safety Regulations</li>\n		</ul>\n\n		<ul>\n			<li>Limited Availability of High-Quality Sealants for Larger Punctures or Damages</li>\n			<li>Adhering to Stringent Quality and Safety Regulations</li>\n		</ul>\n		</li>\n		<li>Challenges\n		<ul>\n			<li>Limited Availability of High-Quality Sealants for Larger Punctures or Damages</li>\n			<li>Adhering to Stringent Quality and Safety Regulations</li>\n		</ul>\n		</li>\n	</ol>\n	</li>\n</ol>', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore perspiciatis quam ducimus nihil, expedita nostrum! Distinctio animi corporis consequuntur aliquid quia, ab quaerat minus mollitia beatae illum cum, magnam adipisci quis doloribus repudiandae</p>', '100', '200', '300', 'Lorem ipsum dolor sit amet.', 'Lorem ipsum dolor sit amet.', 'ipsum,Lorem,dolor,amet', 'Lorem,ipsum,dolor,sit,amet.', '2023-09-12 06:17:29', '2023-09-12 06:17:29'),
(4, 13, 'Market Segmentation', 'market-segmentation', 'INF-2-2023-879', '2023-08-14', '20230904082155.png', '20230904082155.png', 'Market Dynamics', '258', 'Chemicals & Additives', '<h2>Market Segmentation</h2>\n\n<ul>\n	<li>Infogence Global Research follows a robust research methodology to determine a</li>\n	<li>specific market&#39;s potential size and revenue opportunity. It helps businesses assess the</li>\n	<li>overall market potential for their products or services and make informed decisions</li>\n	<li>regarding their market entry strategy, pricing, and resource allocation.</li>\n</ul>', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus qui error ab mollitia natus veritatis vitae illo provident exercitationem aut ullam quia labore totam recusandae aliquam</p>', '<ol>\n	<li>Market Dynamics\n	<ol>\n		<li>Impact Analysis</li>\n		<li>Drivers\n		<ul>\n			<li>Increasing Vehicle Sales and the Growing Automotive Industry</li>\n			<li>Growing Awareness of Road Safety and the Importance of Tire Maintenance</li>\n			<li>Rising Demand for Convenient and Time-Saving Tire Maintenance Solutions</li>\n		</ul>\n		</li>\n		<li>Restraints\n		<ul>\n			<li>Limited Availability of High-Quality Sealants for Larger Punctures or Damages</li>\n			<li>Adhering to Stringent Quality and Safety Regulations</li>\n		</ul>\n\n		<ul>\n			<li>Limited Availability of High-Quality Sealants for Larger Punctures or Damages</li>\n			<li>Adhering to Stringent Quality and Safety Regulations</li>\n		</ul>\n		</li>\n		<li>Challenges\n		<ul>\n			<li>Limited Availability of High-Quality Sealants for Larger Punctures or Damages</li>\n			<li>Adhering to Stringent Quality and Safety Regulations</li>\n		</ul>\n		</li>\n	</ol>\n	</li>\n</ol>', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore perspiciatis quam ducimus nihil, expedita nostrum! Distinctio animi corporis consequuntur aliquid quia, ab quaerat minus mollitia beatae illum cum, magnam adipisci quis doloribus repudiandae</p>', '200', '100', '400', 'Market Segmentation', 'Market Segmentation', 'Market,Segmentation', 'Market,Segmentation', '2023-09-12 06:17:29', '2023-09-12 06:17:29'),
(5, 13, 'Market Methodology', 'market-methodology', 'INF-2-2023-879', '2023-08-14', '20230904105016.png', '20230904105016.png', 'Market Dynamics', '258', 'ICT', '<h2>Market Segmentation</h2>\r\n\r\n<ul>\r\n	<li>Infogence Global Research follows a robust research methodology to determine a</li>\r\n	<li>specific market\'s potential size and revenue opportunity. It helps businesses assess the</li>\r\n	<li>overall market potential for their products or services and make informed decisions</li>\r\n	<li>regarding their market entry strategy, pricing, and resource allocation.</li>\r\n</ul>', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus qui error ab mollitia natus veritatis vitae illo provident exercitationem aut ullam quia labore totam recusandae aliquam</p>', '<ol>\r\n	<li>Market Dynamics\r\n	<ol>\r\n		<li>Impact Analysis</li>\r\n		<li>Drivers\r\n		<ul>\r\n			<li>Increasing Vehicle Sales and the Growing Automotive Industry</li>\r\n			<li>Growing Awareness of Road Safety and the Importance of Tire Maintenance</li>\r\n			<li>Rising Demand for Convenient and Time-Saving Tire Maintenance Solutions</li>\r\n		</ul>\r\n		</li>\r\n		<li>Restraints\r\n		<ul>\r\n			<li>Limited Availability of High-Quality Sealants for Larger Punctures or Damages</li>\r\n			<li>Adhering to Stringent Quality and Safety Regulations</li>\r\n		</ul>\r\n\r\n		<ul>\r\n			<li>Limited Availability of High-Quality Sealants for Larger Punctures or Damages</li>\r\n			<li>Adhering to Stringent Quality and Safety Regulations</li>\r\n		</ul>\r\n		</li>\r\n		<li>Challenges\r\n		<ul>\r\n			<li>Limited Availability of High-Quality Sealants for Larger Punctures or Damages</li>\r\n			<li>Adhering to Stringent Quality and Safety Regulations</li>\r\n		</ul>\r\n		</li>\r\n	</ol>\r\n	</li>\r\n</ol>', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore perspiciatis quam ducimus nihil, expedita nostrum! Distinctio animi corporis consequuntur aliquid quia, ab quaerat minus mollitia beatae illum cum, magnam adipisci quis doloribus repudiandae</p>', '200', '100', '400', 'Market Methodology', 'Market Dynamics', 'Market,Dynamics,Methodology', 'Market ,Methodology,Dynamics', '2023-09-12 06:17:29', '2023-09-21 01:08:39');

-- --------------------------------------------------------

--
-- Table structure for table `term_conditions`
--

CREATE TABLE `term_conditions` (
  `term_condition_id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `term_conditions`
--

INSERT INTO `term_conditions` (`term_condition_id`, `description`, `created_at`, `updated_at`) VALUES
(2, '<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><strong><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Introduction</span></strong></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Welcome to Infogence. By using our services, you are agreeing to comply with and be bound by the following terms and conditions. Please review them carefully. If you do not agree with these terms, you should not use this website or purchase our services.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><strong><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Acceptance of Terms</span></strong></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">By accessing this website, you are agreeing to be bound by these terms and conditions, all applicable laws, and regulations, and agree that you are responsible for compliance with any applicable local laws.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><strong><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Use of Site and Service</span></strong></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Intellectual Property: All contents of this website are copyrighted material of Infogence and may not be duplicated, reproduced, or redistributed without our written consent.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><strong><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">License</span></strong><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">: Upon purchasing any of our Syndicated Reports or Consulting Services, Infogence grants you a non-exclusive, non-transferable license to use the purchased material, subject to the terms herein.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><strong><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Modifications and Updates</span></strong></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Infogence reserves the right to modify or discontinue any product or service, and to update these Terms and Conditions at any time.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><strong><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Payments</span></strong></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">All payments for Infogence services must be made in advance through the payment methods listed on our website.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><strong><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Refund Policy</span></strong></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Due to the nature of the services, refunds are not generally provided except in exceptional circumstances, and at the sole discretion of Infogence.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><strong><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Liability Limitation</span></strong></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Infogence shall not be liable for any indirect, special, consequential, or incidental damages including, but not limited to, loss of profits or revenue, business interruption, or data loss arising from the use or inability to use our products or services.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\">&nbsp;</p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><strong><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Privacy Policy</span></strong></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><a href=\"../../privacy\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Your use of the website is also governed by our Privacy Policy, which can be found at<span style=\"color: red;\">.</span></span></a></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><strong><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Governing Law</span></strong></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">These terms and conditions are governed by the laws of Pune, India and any disputes will be subject to the exclusive jurisdiction of the courts in Pune, India.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><strong><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">Contact Information</span></strong></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt;\"><span style=\"font-family: Montserrat; mso-ansi-language: EN-US;\">For any questions or concerns about these terms and conditions, please contact us at </span><span class=\"MsoHyperlink\"><strong><span lang=\"EN-IN\" style=\"font-size: 12.0pt; line-height: 107%; font-family: Montserrat; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; mso-font-kerning: 0pt; mso-ligatures: none; mso-fareast-language: EN-IN;\"><a href=\"mailto:contact@infogenceglobalresearch.com\">contact@infogenceglobalresearch.com</a></span></strong></span></p>', '2023-08-16 05:23:44', '2023-09-18 07:39:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Saurabh', 'saurabh@gmail.com', NULL, '$2y$10$aUFlTOSQFh3MV8hCcYqxaeShm65bDx9eqvMuXVKSTX0L6OHINdsuq', NULL, '2023-09-11 07:49:56', '2023-09-11 07:49:56');

-- --------------------------------------------------------

--
-- Table structure for table `why_choose_us`
--

CREATE TABLE `why_choose_us` (
  `why_choose_us_id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` varchar(300) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `why_choose_us`
--

INSERT INTO `why_choose_us` (`why_choose_us_id`, `heading`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Lowest Price', 'Lorem ipsum dolor sit amet consectetur.', '2023-09-13 01:59:57', '2023-09-13 02:10:02'),
(2, 'Client Focussed', 'Lorem ipsum dolor sit amet consectetur.', '2023-09-13 02:00:08', '2023-09-13 02:00:08'),
(3, 'Source & Quality', 'Lorem ipsum dolor sit amet consectetur.', '2023-09-13 02:00:20', '2023-09-13 02:00:20'),
(4, 'Market Segment', 'Lorem ipsum dolor sit amet consectetur.', '2023-09-13 02:00:30', '2023-09-13 02:00:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_username_unique` (`username`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`career_id`),
  ADD UNIQUE KEY `careers_slug_unique` (`slug`);

--
-- Indexes for table `career_page`
--
ALTER TABLE `career_page`
  ADD PRIMARY KEY (`career_page_id`);

--
-- Indexes for table `consulties`
--
ALTER TABLE `consulties`
  ADD PRIMARY KEY (`consultancy_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `gdpr_policies`
--
ALTER TABLE `gdpr_policies`
  ADD PRIMARY KEY (`gdpr_policy_id`);

--
-- Indexes for table `home_first_section`
--
ALTER TABLE `home_first_section`
  ADD PRIMARY KEY (`home_first_section_id`);

--
-- Indexes for table `industries`
--
ALTER TABLE `industries`
  ADD PRIMARY KEY (`industry_id`);

--
-- Indexes for table `insights`
--
ALTER TABLE `insights`
  ADD PRIMARY KEY (`insight_id`);

--
-- Indexes for table `insight_categories`
--
ALTER TABLE `insight_categories`
  ADD PRIMARY KEY (`insight_category_id`),
  ADD UNIQUE KEY `insight_categories_slug_unique` (`slug`);

--
-- Indexes for table `insight_posts`
--
ALTER TABLE `insight_posts`
  ADD PRIMARY KEY (`insight_post_id`),
  ADD UNIQUE KEY `insight_posts_slug_unique` (`slug`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `privacy_policies`
--
ALTER TABLE `privacy_policies`
  ADD PRIMARY KEY (`privacy_policy_id`);

--
-- Indexes for table `progress`
--
ALTER TABLE `progress`
  ADD PRIMARY KEY (`progress_id`);

--
-- Indexes for table `report_categories`
--
ALTER TABLE `report_categories`
  ADD PRIMARY KEY (`report_category_id`);

--
-- Indexes for table `report_views`
--
ALTER TABLE `report_views`
  ADD PRIMARY KEY (`report_view_id`);

--
-- Indexes for table `term_conditions`
--
ALTER TABLE `term_conditions`
  ADD PRIMARY KEY (`term_condition_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `why_choose_us`
--
ALTER TABLE `why_choose_us`
  ADD PRIMARY KEY (`why_choose_us_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `about_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `banner_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `career_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `career_page`
--
ALTER TABLE `career_page`
  MODIFY `career_page_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `consulties`
--
ALTER TABLE `consulties`
  MODIFY `consultancy_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `faq_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gdpr_policies`
--
ALTER TABLE `gdpr_policies`
  MODIFY `gdpr_policy_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home_first_section`
--
ALTER TABLE `home_first_section`
  MODIFY `home_first_section_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `industries`
--
ALTER TABLE `industries`
  MODIFY `industry_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `insights`
--
ALTER TABLE `insights`
  MODIFY `insight_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `insight_categories`
--
ALTER TABLE `insight_categories`
  MODIFY `insight_category_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `insight_posts`
--
ALTER TABLE `insight_posts`
  MODIFY `insight_post_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `privacy_policies`
--
ALTER TABLE `privacy_policies`
  MODIFY `privacy_policy_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `progress`
--
ALTER TABLE `progress`
  MODIFY `progress_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `report_categories`
--
ALTER TABLE `report_categories`
  MODIFY `report_category_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `report_views`
--
ALTER TABLE `report_views`
  MODIFY `report_view_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `term_conditions`
--
ALTER TABLE `term_conditions`
  MODIFY `term_condition_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `why_choose_us`
--
ALTER TABLE `why_choose_us`
  MODIFY `why_choose_us_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
