-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2015 at 07:12 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grand_app_career`
--

-- --------------------------------------------------------

--
-- Table structure for table `job_application`
--

CREATE TABLE `job_application` (
  `id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `mobile` int(15) NOT NULL,
  `url_resume` text NOT NULL,
  `url_github` varchar(100) CHARACTER SET utf8 NOT NULL,
  `url_behance` varchar(100) CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `resume_path` varchar(100) CHARACTER SET utf8 NOT NULL,
  `remark` text CHARACTER SET utf8 NOT NULL,
  `status` int(1) NOT NULL COMMENT '1=>applied,2=>in review,3=>rejected',
  `applied_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



--
-- Table structure for table `job_description`
--

CREATE TABLE `job_description` (
  `id` int(11) NOT NULL,
  `job_title` varchar(50) CHARACTER SET utf8 NOT NULL,
  `job_kind` varchar(50) CHARACTER SET utf8 NOT NULL,
  `job_category` varchar(100) CHARACTER SET utf8 NOT NULL,
  `job_description_details` text CHARACTER SET utf8 NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0->inactive,1->active',
  `created_on` datetime NOT NULL,
  `update_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_description`
--

INSERT INTO `job_description` (`id`, `job_title`, `job_kind`, `job_category`, `job_description_details`, `status`, `created_on`, `update_on`) VALUES
(1, 'title', 'freelance-or-consulting', 'mobile', 'description', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Creative Kwel Graphics Designer', 'short-term-contract', 'graphic-design', '\r\n\r\nWe develop products that change how thousands of businesses interact with their customers.\r\n\r\nAt WizRocket we handle ~800 million incoming HTTP requests per day, send 25M notifications a day out and we are just getting started. \r\n\r\nTo help scale, manage and keep the servers responding with 200 OK, we are looking for a talented DevOps engineer to join our team. We are built from ground up with a configuration management system that keeps us from doing repetitive tasks - each day is something new and exciting. \r\n\r\nDo you love your sleep? Does the idea of automated fixes to monitoring alerts make sense? If your answer to both of our questions is ''yes'', then read on. \r\n\r\nAt least 3 years of experience in the following - \r\n\r\n1. Deep understanding of filesystem hierarchy for at least one modern GNU+Linux distributions \r\n2. Solid understanding of one package management system (yum, dpkg etc) - Must be able to build/recompile packages \r\n3. Strong understanding of one GNU+Linux distribution (CentOS, Ubuntu, Fedora, Redhat etc) \r\n4. Strong understanding of one configuration management system (Puppet or Chef) - Must have contributed to at least one open-source/publicly available Puppet module or Chef cookbook \r\n5. Must be able to write code is one programming language (Ruby, PHP or Java) \r\n6. Strong understanding of running at least one web server on a JVM (Tomcat, Jetty, Resin) at production scale \r\n7. Solid understanding of one role based access control system (SELinux or AppArmor) \r\n9. Sharp eye for details \r\n10. Deep understanding of one open source monitoring system (Nagios, Sensu etc) - Must have setup and managed monitoring end-to-end \r\n11. Experience in running servers on AWS at production scale \r\n12. Complete understanding of HTTP protocol \r\n13. Must be obsessed with metric collection and optimization\r\n\r\nPrior startup experience will give you brownie points.\r\n\r\nWe''re backed by two of the best VC firms - Sequoia and Accel. \r\n', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'hello', 'short-term-contract', 'interaction-design', '<p>jsdhfkj hksjdhf kjsdha</p>', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'hello123', 'short-term-contract', 'interaction-design', '<p>sdkfjsad jfljs dlkj</p>', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `job_application`
--
ALTER TABLE `job_application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_description`
--
ALTER TABLE `job_description`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `job_title` (`job_title`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job_application`
--
ALTER TABLE `job_application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `job_description`
--
ALTER TABLE `job_description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
