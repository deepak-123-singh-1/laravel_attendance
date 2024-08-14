-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2022 at 05:59 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_company_attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `itsAdmin` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0 = its admin',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `user_role`, `phone`, `email`, `password`, `profile`, `itsAdmin`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Suraj Singh', 'Super admin', '9315646009', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', NULL, '1', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `emp_id` int(11) NOT NULL,
  `year` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `month` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_1` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_3` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_4` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_5` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_6` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_7` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_8` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_9` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_10` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_11` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_12` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_13` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_14` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_15` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_16` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_17` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_18` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_19` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_20` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_21` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_22` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_23` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_24` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_25` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_26` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_27` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_28` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_29` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_30` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_31` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attendance_status` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '1=show in notification & 0= cant show',
  `status` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '1=active & 0=Not active',
  `created_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delete_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'date add when delete'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendances`
--

INSERT INTO `attendances` (`id`, `emp_id`, `year`, `month`, `date_1`, `date_2`, `date_3`, `date_4`, `date_5`, `date_6`, `date_7`, `date_8`, `date_9`, `date_10`, `date_11`, `date_12`, `date_13`, `date_14`, `date_15`, `date_16`, `date_17`, `date_18`, `date_19`, `date_20`, `date_21`, `date_22`, `date_23`, `date_24`, `date_25`, `date_26`, `date_27`, `date_28`, `date_29`, `date_30`, `date_31`, `attendance_status`, `status`, `created_at`, `updated_at`, `delete_at`) VALUES
(3, 14, '2022', '05', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'HD', 'P', '', '', '1', '1', '2022-05-28 00:00:00', '2022-05-29', ''),
(4, 9, '2022', '05', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'A', 'P', '', '', '1', '1', '2022-05-28 00:00:00', '2022-05-29', '');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` int(11) NOT NULL COMMENT 'Admin id',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `interview_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `joining_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_fields` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'IT, account and etc.',
  `employee_role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'project manajer, developer and etc.',
  `employee_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'fresher or experience',
  `joining_base` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'traning, internship or direct work and etc.',
  `work_experience` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'month, year',
  `bank_details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `previous_salary` int(11) NOT NULL COMMENT 'previous company salary',
  `joining_salery` int(11) NOT NULL,
  `resume_copy` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `experience_copy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salery_sleep_copy` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `itsEmployee` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1 = employee',
  `email_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'date of birth',
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marital_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualification_details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT 'all qualification details',
  `aadhar_copy` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `pan_card_copy` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `full_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'storage main folder',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '1=active & 0=Not active',
  `created_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delete_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'date add when delete'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `admin_id`, `name`, `employee_pic`, `employee_id`, `interview_date`, `joining_date`, `employee_fields`, `employee_role`, `employee_type`, `joining_base`, `work_experience`, `bank_details`, `previous_salary`, `joining_salery`, `resume_copy`, `experience_copy`, `salery_sleep_copy`, `itsEmployee`, `email_id`, `phone`, `password`, `birth_date`, `gender`, `marital_status`, `qualification_details`, `aadhar_copy`, `pan_card_copy`, `full_address`, `path`, `status`, `created_at`, `updated_at`, `delete_at`) VALUES
(3, 1, 'deepak', 'storage/app/public/emp_documents/deepak_1652941558/profile_pic.jpg', '23423423', '2022-05-16', '2022-05-25', 'Data entery', 'Web designer', 'Experience', 'Direct joine', '1', 'f werwe rwe', 12, 123, 'storage/app/public/emp_documents/deepak_1652941558/resume.jpg', 'storage/app/public/emp_documents/deepak_1652941558/experience_latter.png', 'storage/app/public/emp_documents/deepak_1652941558/salery_sleep_copy.jpg', '2', 'deepak@gmail.com', '234234234', '498b5924adc469aa7b660f457e0fc7e5', '2022-05-25', 'Female', 'Un-married', 'awwe wew ew', 'storage/app/public/emp_documents/deepak_1652941558/adhar_card_copy.jpg', 'storage/app/public/emp_documents/deepak_1652941558/pan_card_copy.jpg', 'qe w3e 3243 432', 'public/emp_documents/deepak_1652941558', '1', '2022-05-19 06:25:58', '2022-05-19 07:50:38', '1'),
(4, 1, 'Surya', 'public/emp_documents/surya_1652951610/profile_pic.jpg', '234324', '2022-05-10', '2022-05-23', 'IT', 'Backend developer', 'Experience', 'Direct joine', '1', 'asdw wer wer', 1, 12, 'storage/app/public/emp_documents/surya_1652951610/resume.jpg', 'storage/app/public/emp_documents/surya_1652951610/experience_latter.png', 'storage/app/public/emp_documents/surya_1652951610/salery_sleep_copy.jpg', '2', 'surya@gmail.com', '123123213', '4dd49f4f84e4d6945e3bc6d14812004e', '2022-05-10', 'Female', 'Un-married', 'qe ewr er ewr', 'storage/app/public/emp_documents/surya_1652951610/adhar_card_copy.jpg', 'storage/app/public/emp_documents/surya_1652951610/pan_card_copy.jpg', 'wre ey 65y56 y54', 'public/emp_documents/surya_1652951610', '1', '2022-05-19 09:13:30', '2022-05-19 10:01:54', '1'),
(5, 1, 'Raju', 'storage/app/public/emp_documents/raju_1652955376/profile_pic.jpg', '23423c423', '2022-05-10', '2022-05-17', 'IT', 'Backend developer', 'Experience', 'Enternship', '1', 'qewq we wew ew t ty', 1, 12, '', '', '', '2', 'raju@gmail.com', '242343232', '03c017f682085142f3b60f56673e22dc', '2022-05-23', 'Female', 'Un-married', 'q wr er4 54', '', '', 'w 6y 6u76 i8tdf', 'storage/app/public/emp_documents/raju_1652955376', '1', '2022-05-19 10:16:16', '2022-05-19 10:16:16', '1'),
(6, 1, 'Singh', 'storage/app/public/emp_documents/singh_1652956086/profile_pic.jpg', '45654', '2022-05-02', '2022-05-02', 'Data entery', 'Data entery', 'Fresher', 'Direct joine', '0', 'w r e 54t54 54 ee rer', 0, 12000, 'storage/app/public/emp_documents/singh_1652956086/resume.png', '', '', '2', 'singh@gmail.com', '12323232', '2865a5b14e5a70273a7d311bfc150f4f', '2022-05-16', 'Female', 'Un-married', 'wdewwe', 'storage/app/public/emp_documents/singh_1652956086/adhar_card_copy.png', '', 'sfds f df', 'storage/app/public/emp_documents/singh_1652956086', '1', '2022-05-19 10:28:06', '2022-05-19 10:28:06', '1'),
(7, 1, 'Dipanshu', 'storage/app/public/emp_documents/dipanshu_1652956326/profile_pic.png', '4565765', '2022-05-10', '2022-05-02', 'IT', 'Web designer', 'Fresher', 'Enternship', '0', 'ryt u y4er3wr w343 45 54', 0, 3000, 'storage/app/public/emp_documents/dipanshu_1652956326/resume.png', '', '', '2', 'dipanshu@gmail.com', '4554654', '38db32233fb682a1531370bc069c67a6', '2022-05-03', 'Male', 'Un-married', 'w 4t 576 43r423', '', '', '6u87 i564t4', 'storage/app/public/emp_documents/dipanshu_1652956326', '1', '2022-05-19 10:32:06', '2022-05-19 10:32:06', '1'),
(8, 1, 'Dhasmana', 'storage/app/public/emp_documents/dhasmana_1652956469/profile_pic.jpeg', '6786765', '2022-05-02', '2022-05-01', 'Data entery', 'Data entery', 'Fresher', 'Direct joine', '0', '654 64 23 2q32 32', 0, 10000, 'storage/app/public/emp_documents/dhasmana_1652956469/resume.jpg', '', '', '2', 'dhasmana@gmail.com', '56765757', 'f85a6d21a068cba12900d9e8e1c3ff7b', '2022-05-10', 'Female', 'Married', 'rt yry 67i867 34 t34', '', '', '7i87 i43 3r 23', 'storage/app/public/emp_documents/dhasmana_1652956469', '1', '2022-05-19 10:34:29', '2022-05-19 10:34:29', '1'),
(9, 1, 'Deepak Singh', 'storage/app/public/emp_documents/deepak_singh_1652957072/profile_pic.jpg', '86868564', '2022-05-09', '2022-05-24', 'IT', 'Backend developer', 'Fresher', 'Direct joine', 're re we', 't54 54 e2 e3r43 r', 0, 5000, 'storage/app/public/emp_documents/deepak_singh_1652957072/resume.png', 'storage/app/public/emp_documents/deepak_singh_1652957072/experience_latter.png', 'storage/app/public/emp_documents/deepak_singh_1652957072/salery_sleep_copy.jpg', '2', 'deepak@gmail.com', '3454354', '498b5924adc469aa7b660f457e0fc7e5', '2022-05-18', 'Male', 'Un-married', '54y 679 8o8 85', 'storage/app/public/emp_documents/deepak_singh_1652957072/adhar_card_copy.jpg', 'storage/app/public/emp_documents/deepak_singh_1652957072/pan_card_copy.jpg', '5 y8o yt4res y6 y 455 64 43535 6u 7j r', 'storage/app/public/emp_documents/deepak_singh_1652957072', '1', '2022-05-19 10:44:32', '2022-05-19 10:53:56', '1'),
(10, 1, 'surya singh', 'storage/app/public/emp_documents/surya_singh_1652958302/profile_pic.jpg', '4543543', '2022-05-23', '2022-05-24', 'IT', 'Backend developer', 'Experience', 'Enternship', '2', '3 34 43 35 sdf rgtr hr', 1, 1222, 'storage/app/public/emp_documents/surya_singh_1652958302/resume.png', 'storage/app/public/emp_documents/surya_singh_1652958302/experience_latter.jpg', 'storage/app/public/emp_documents/surya_singh_1652958302/salery_sleep_copy.jpg', '2', 'surya@gmail.com', '34332432', 'aff8fbcbf1363cd7edc85a1e11391173', '2022-05-17', 'Female', 'Married', 'rtytu 75 4353', 'storage/app/public/emp_documents/surya_singh_1652958302/adhar_card_copy.png', 'storage/app/public/emp_documents/surya_singh_1652958302/pan_card_copy.jpg', 's ret ryt6 u6u 45643t', 'public/emp_documents/surya_singh_1652958302', '1', '2022-05-19 11:05:02', '2022-05-19 11:56:09', '1'),
(11, 1, 'Gaurav Singh', 'storage/app/public/emp_documents/gaurav_1652961592/profile_pic.jpg', 'w454543', '2022-05-10', '2022-05-16', 'Data entery', 'Backend developer', 'Experience', 'Enternship', '423', 'we r4t 5t4t 34', 1, 1, '', 'storage/app/public/emp_documents/gaurav_1652961592/experience_latter.jpg', '', '2', 'gaurav@gmail.com', '234234', '29be54a52396750258d886abc5417fda', '2022-05-02', 'Female', 'Un-married', 'w r5y6 65tr3 43 45yk2 435', 'storage/app/public/emp_documents/gaurav_1652961592/adhar_card_copy.jpg', '', '3 45435 43532 234 32 sdf tre', 'public/emp_documents/gaurav_1652961592', '1', '2022-05-19 11:59:52', '2022-05-19 12:07:09', '1'),
(12, 1, 'Chahat', 'storage/app/public/emp_documents/chahat_1652962846/profile_pic.jpeg', '345435', '2021-01-01', '2021-01-02', 'Data entery', 'Data entery', 'Fresher', 'Direct joine', '0', 'HDFC Bank', 0, 8000, 'storage/app/public/emp_documents/chahat_1652962846/resume.png', '', '', '2', 'chahat@gmail.com', '5465643532', '36b811403c15bf2ee504c45e2faa1083', '2022-05-10', 'Female', 'Married', 'weh yry 3e', '', '', 'lk whiiw e8wye', 'public/emp_documents/chahat_1652962846', '1', '2022-05-19 12:20:46', '2022-05-19 12:20:46', '1'),
(13, 1, 'Pawan Singh', 'storage/app/public/emp_documents/pawan_singh_1652963225/profile_pic.jpg', '11111111', '2020-01-01', '2020-01-03', 'IT', 'Backend developer', 'Experience', 'Direct joine', '5 years', 'HDFC BANK', 80000, 90000, 'storage/app/public/emp_documents/pawan_singh_1652963225/resume.png', 'storage/app/public/emp_documents/pawan_singh_1652963225/experience_latter.png', 'storage/app/public/emp_documents/pawan_singh_1652963225/salery_sleep_copy.png', '1', 'pawan@gmail.com', '1111111111', '40eb95572d967a62183292ef5f78bf9a', '1995-06-13', 'Male', 'Married', 'BCA, MCA', 'public/emp_documents/pawan_singh_1652963225/adhar_card_copy.png', '', 'Noida', 'public/emp_documents/pawan_singh_1652963225', '1', '2022-05-19 12:27:05', '2022-05-19 12:27:05', '1'),
(14, 1, 'Rajesh', 'storage/app/public/emp_documents/rajesh_1652963519/profile_pic.png', '22222222', '2020-02-07', '2020-02-10', 'IT', 'Web developer', 'Experience', 'Direct joine', '5 year', 'ICIC BANK', 50000, 60000, 'storage/app/public/emp_documents/rajesh_1652963519/resume.png', '', 'storage/app/public/emp_documents/rajesh_1652963519/salery_sleep_copy.jpg', '2', 'rajesh@gmail.com', '2222222', 'e360bc13bcba071f4746adbb334cd78e', '1995-03-28', 'Male', 'Married', 'BCA & MCA', 'public/emp_documents/rajesh_1652963519/adhar_card_copy.jpg', '', 'Noida', 'public/emp_documents/rajesh_1652963519', '1', '2022-05-19 12:31:59', '2022-05-19 12:31:59', '1');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_07_163604_create_admins_table', 1),
(6, '2022_03_20_075140_create_employees_table', 1),
(7, '2022_05_20_182851_create_attendances_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
