-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2024 at 02:51 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user-registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `access`
--

CREATE TABLE `access` (
  `access_id` int(11) NOT NULL,
  `access_title` varchar(255) NOT NULL,
  `access_description` varchar(10000) NOT NULL,
  `access_image1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `access`
--

INSERT INTO `access` (`access_id`, `access_title`, `access_description`, `access_image1`) VALUES
(1, 'Mehndi Items ', 'Get all the essentials for your Mehndi eventt. ', 'Mehndi.jpg'),
(2, 'Makeup Products', 'Enhance your natural beauty with our makeup products.', 'Makeup.jpg'),
(3, 'Purses', 'Stylish purses to complement your outfit for your events.', 'purse.jpg'),
(4, 'Cakes', 'Delicious cakes to sweeten your celebrations.', 'cake.jpg'),
(5, 'Flowers', 'Beautiful flowers to brighten your events and your special Days.', 'flower.jpg'),
(6, 'Watches', 'Stay on time with our event watches collection.', 'watch.jpg'),
(7, 'Jewelry', 'Elegant jewelry pieces for your special events.', 'jewlery.jpg'),
(8, 'Clothes', 'Discover the latest event fashion trends for your special events.', 'clothe.jpg'),
(9, 'Shoes', 'Explore our stylish collection of event shoes.', 'shoe.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `booking_form`
--

CREATE TABLE `booking_form` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(400) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phno` int(30) NOT NULL,
  `service` varchar(1000) NOT NULL,
  `budget` int(30) NOT NULL,
  `guestlist` int(30) NOT NULL,
  `date` date NOT NULL,
  `text` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_form`
--

INSERT INTO `booking_form` (`id`, `name`, `address`, `email`, `phno`, `service`, `budget`, `guestlist`, `date`, `text`) VALUES
(1, 'qwerty', '', 'ndslk@gmail.com', 2345678, '', 4567, 4523, '2023-10-05', 'sdgfdsjkjfh'),
(2, 'qwerty', '', 'ndslk@gmail.com', 2345678, '', 4567, 4523, '2023-10-05', 'sdgfdsjkjfh'),
(3, 'Faisal Shahzad', '', '49609.cs2@gmail.com', 2345678, '', 4567, 123456789, '2023-10-05', 'asyuio;.,m cghppjcxft80plknvcdr56789oknbcxder678knbvcdr5678ikmnbvcdr5'),
(4, 'Faisal Shahzad', '', '49609.cs2@gmail.com', 2345678, '', 4567, 123456789, '2023-10-05', 'asyuio;.,m cghppjcxft80plknvcdr56789oknbcxder678knbvcdr5678ikmnbvcdr5'),
(5, 'Faisal Shahzad', '', 'm.hamza.30130@gmail.com', 2345678, '', 2147483647, 432, '2023-10-14', 'hgvfecd'),
(6, 'Faisal Shahzad', '', 'm.hamza.30130@gmail.com', 2345678, '', 2147483647, 432, '2023-10-14', 'hgvfecd'),
(7, 'ali', '', 'm.hamza.30130@gmail.com', 2345678, '', 2147483647, 432, '2023-10-14', 'hgvfecd'),
(8, 'Faisal Shahzad', '', 'ndslk@gmail.com', 98765432, '', 7665, 46, '2023-10-05', 'uytrjhgf'),
(9, 'Hamza Abbas', '', 'm.hamza.30130@gmail.com', 2147483647, '', 789, -8, '2024-01-25', 'dfghjdfghjk'),
(10, 'Hamza Abbas', '', 'm.hamza.30130@gmail.com', 2147483647, 'Array', 789, -8, '2024-01-25', 'dfghjdfghjk'),
(11, 'Hamza Abbas', '', 'm.hamza.30130@gmail.com', 2147483647, 'MS-Office,MS-Excel,MS-Power', 789, -8, '2024-01-31', 'fghjknm'),
(12, 'Hamza Abbas', '', 'm.hamza.30130@gmail.com', 2147483647, 'Corporate Events,Cultural Events,Weddings', 789, -8, '0000-00-00', ''),
(13, 'jkhgvcf', '', 'fghjkl@gmail.com', 23456789, 'Corporate Events,Social Gatherings', 34567, 20, '2023-01-14', ''),
(14, '', '', '', 0, '', 0, 0, '0000-00-00', ''),
(15, 'jkhgvcf', 'jdsgfjkdhfk', 'fghjkl@gmail.com', 23456789, 'Corporate Events,Social Gatherings', 34567, 20, '2024-01-16', 'kdjshfdksfh');

-- --------------------------------------------------------

--
-- Table structure for table `corporate`
--

CREATE TABLE `corporate` (
  `corporate_id` int(11) NOT NULL,
  `corporate_title` varchar(255) NOT NULL,
  `corporate_description` varchar(10000) NOT NULL,
  `corporate_image1` varchar(255) NOT NULL,
  `corporate_titlee` varchar(255) NOT NULL,
  `corporate_descriptionn` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `corporate`
--

INSERT INTO `corporate` (`corporate_id`, `corporate_title`, `corporate_description`, `corporate_image1`, `corporate_titlee`, `corporate_descriptionn`) VALUES
(1, ' The Bridge Buiding Conference', 'Organise your perfect conference at The Bridge Buiding. The buildings industrial vibes are sure to complement the professional tone of your meeting. From the location to the catering, with everything taken care of, you just have to worry about your agenda.', 'c1.jpg', 'Event Detail -', 'Location - The Qaser Ambala, Sargodha, Pakistan; Catering - Olive Garden; Decoration - Livspace; COST - PKR 50,000'),
(2, 'Creative Seminar', 'Whether it is for your employees, clients or public, organise a perfect seminar with Hendecagon Event Planners. We will take care of all the work, leaving to only to worry about your stage fear. With flexible seeting arrangements have your audience participate as much or as little as you wish.', 'c2.jpg', 'Event Detail -', 'Location - The Qaser Ambala, Sargodha, Pakistan; Catering - Olive Garden; Decoration - Livspace; COST - PKR 50,000'),
(3, 'Professional Board Meeting', 'With Hendecagon Event Planners, make sure that nobody calls your board meetings, BOARD meetings, With our team planning your board meeting, you dont have to worry about anything and can focus on pitching your ideas to the board members.', 'c3.jpg', 'Event Detail -', 'Location - The Qaser Ambala, Sargodha, Pakistan; Catering - Olive Garden; Decoration - Livspace; COST - PKR 50,000'),
(4, 'Super Employee Workshop', 'Everyday is a school day, Organise employee workshops with Hendecagon Event Planners and encourage your employees to learn new skills. Make your employees understand company goals and needs of customers to create a distinct impact.', 'c4.jpg', 'Event Detail -', 'Location - The Qaser Ambala, Sargodha, Pakistan; Catering - Olive Garden; Decoration - Livspace; COST - PKR 50,000'),
(5, 'Give Back To Community Charity Event', 'Organise your perfect conference at The Bridge Buiding. The buildings industrial vibes are sure to complement the professional tone of your meeting.Organise your perfect conference at The Bridge Buiding. The buildings industrial vibes are sure to complement the professional tone of your meeting.', 'c5.jpg', 'Event Detail -', 'Location - The Qaser Ambala, Sargodha, Pakistan; Catering - Olive Garden; Decoration - Livspace; COST - PKR 50,000'),
(6, 'Team Building Event', 'Organise your perfect conference at The Bridge Buiding. The buildings industrial vibes are sure to complement the professional tone of your meeting.Organise your perfect conference at The Bridge Buiding. The buildings industrial vibes are sure to complement the professional tone of your meeting.', 'c6.jpg', 'Event Detail -', 'Location - The Qaser Ambala, Sargodha, Pakistan; Catering - Olive Garden; Decoration - Livspace; COST - PKR 50,000'),
(7, 'Impressive Product Launch', 'Organise your perfect product launch at The Bridge Buiding. The buildings industrial vibes are sure to complement the professional tone of your launch. From the location to the catering, with everything taken care of, you just have to worry about your agenda.', 'c7.jpg', 'Event Detail -', 'Location - The Qaser Ambala, Sargodha, Pakistan; Catering - Olive Garden; Decoration - Livspace; COST - PKR 50,000'),
(8, 'Networking Event ', 'Thinking of a merrger? Or partnering up with a business? Are you not sure if your emplyees will work together? Throwing a college mixer? Hendecagon has you covered. Plan the perfect Networking event with us and watch how partnrships grow. ', 'c8.jpg', 'Event Detail - ', 'Location - The Qaser Ambala, Sargodha, Pakistan; Catering - Olive Garden; Decoration - Livspace; COST - PKR 50,000 ');

-- --------------------------------------------------------

--
-- Table structure for table `culture`
--

CREATE TABLE `culture` (
  `culture_id` int(11) NOT NULL,
  `culture_title` varchar(255) NOT NULL,
  `culture_description` varchar(10000) NOT NULL,
  `culture_image1` varchar(255) NOT NULL,
  `culture_titlee` varchar(255) NOT NULL,
  `culture_descriptionn` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `culture`
--

INSERT INTO `culture` (`culture_id`, `culture_title`, `culture_description`, `culture_image1`, `culture_titlee`, `culture_descriptionn`) VALUES
(1, 'Festive Events', 'Organise your perfect festive event at The Bridge BuiLding. From the location to decoration to catering to entertainment, with everything taken care of, you dont have to worry about anything other than having fun.', 'e00667cc33627cae560ebd8142d7d30d.jpg', 'Event Detail -', 'Location - The Qaser Ambala, Sargodha, Pakistan; Catering - Olive Garden; Decoration - Livspace; COST - PKR 50,000'),
(2, 'Country-based Events', 'Organise your perfect country-based event at The Bridge Buiding. From authentic locations to decorations to catering to entertainment, with everything taken care of, you dont have to worry about anything other than having fun.', 'images.jpeg', 'Event Detail -', 'Location - The Qaser Ambala, Sargodha, Pakistan; Catering - Olive Garden; Decoration - Livspace; COST - PKR 50,000'),
(3, 'Dance and Music Events', 'Whether for entertainment or to find talent, organise dance and music events at The Bridge Buiding. From location to decorations to catering, with everything taken care of, you dont have to worry about anything other than having fun!', 'images32.jpeg', 'Event Detail -', 'Location - The Qaser Ambala, Sargodha, Pakistan; Catering - Olive Garden; Decoration - Livspace; COST - PKR 50,000'),
(4, 'Sports Events', 'Whether for entertainment or to find talent, organise sports events at The Bridge Buiding. From location to decorations to catering, with everything taken care of, you dont have to worry about anything other than having fun.', 'jonathan-chng-751342-unsplash-e1554138342999.jpg', 'Event Detail -', 'Location - The Qaser Ambala, Sargodha, Pakistan; Catering - Olive Garden; Decoration - Livspace; COST - PKR 50,000'),
(5, 'Prose and Poetry Events', 'Whether for entertainment or to find talent, organise prose and poetry events at The Bridge Buiding. From location to decorations to catering, with everything taken care of, you dont have to worry about anything other than having fun.', 'images4.jpeg', 'Event Detail -', 'Location - The Qaser Ambala, Sargodha, Pakistan; Catering - Olive Garden; Decoration - Livspace; COST - PKR 50,000'),
(6, 'Pottery and Ceramics', 'Organise your perfect pottery and ceramics workshop at The Bridge Buiding. From location to materials to tutor, with everything taken care of you dont have to worry about anything other than perfecting the art of creating masterpeices.', 'istockphoto-936353584-612x612.jpg', 'Event Detail -', 'Location - The Qaser Ambala, Sargodha, Pakistan; Catering - Olive Garden; Decoration - Livspace; COST - PKR 50,000'),
(7, 'Art Workshops', 'Organise your perfect art workshop at The Bridge BuiLdings gardens. From location to materials to tutor, with everything taken care of you dont have to worry about anything other than perfecting the art of creating masterpeices.', 'gettyimages-1072979420-612x612.jpg', 'Event Detail -', 'Location - The Qaser Ambala, Sargodha, Pakistan; Catering - Olive Garden; Decoration - Livspace; COST - PKR 50,000'),
(8, 'Woodworking Workshop ', 'Organize your perfect woodworking workshop at The Bridge Buildings gardens. From location to materials to tutor, with everything taken care of you dont have to worry about anything other than perfecting the art of creating masterpeices. ', 'images43.jpeg', 'Event Detail - ', 'Location - The Qaser Ambala, Sargodha, Pakistan; Catering - Olive Garden; Decoration - Livspace; COST - PKR 50,000 ');

-- --------------------------------------------------------

--
-- Table structure for table `gatherings`
--

CREATE TABLE `gatherings` (
  `gatherings_id` int(20) NOT NULL,
  `gatherings_title` text NOT NULL,
  `gatherings_description` text NOT NULL,
  `gatherings_image1` varchar(2555) NOT NULL,
  `gatherings_titlee` text NOT NULL,
  `gatherings_descriptionn` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gatherings`
--

INSERT INTO `gatherings` (`gatherings_id`, `gatherings_title`, `gatherings_description`, `gatherings_image1`, `gatherings_titlee`, `gatherings_descriptionn`) VALUES
(1, 'Birthdays', 'Organise your perfect birthday party at The Bridge Buiding. From invites to location to decoration to catering and enetertainment. With everything taken care of the only thing you have to worry about is turning a year older.', 's1.jpg', 'Event Detail -', 'Location - The Qaser Ambala, Sargodha, Pakistan; Catering - Olive Garden; Decoration - Livspace; COST - PKR 50,000'),
(2, 'Personal Milestones', 'Organize a party celebrating personal milestones at The Bridge Building. From invites to location to decoration to catering and entertainment, with everything taken care of the only thing you have to worry about is having fun.', 's2.jpg', 'Event Detail -', 'Location - The Qaser Ambala, Sargodha, Pakistan; Catering - Olive Garden; Decoration - Livspace; COST - PKR 50,000'),
(3, 'Baby Shower', 'Organise the baby shower of your dreams with Hendecagon Event Planners. From invites to location to decoration to catering and enetertainment, with everything taken care of the only thing you have to worry about is having fun!', 'photo-1625990462521-a09e6b880d50.jpeg', 'Event Detail -', 'Location - The Qaser Ambala, Sargodha, Pakistan; Catering - Olive Garden; Decoration - Livspace; COST - PKR 50,000'),
(4, 'Gender Reveal Party', 'Organise the gender reveal of your dreams with Hendecagon Event Planners. From invites to location to decoration to catering and enetertainment, with everything taken care of the only thing you have to worry about is having fun!', 'istockphoto-1459347703-170667a.webp', 'Event Detail -', 'Location - The Qaser Ambala, Sargodha, Pakistan; Catering - Olive Garden; Decoration - Livspace; COST - PKR 50,000'),
(5, 'Family Reunions ', 'Organise the family reunion of your dreams with Hendecagon Event Planners. From invites to location to decoration to catering and enetertainment, with everything taken care of the only thing you have to worry about is catching up with everyone.', 'istockphoto-1339173364-170667a.webp', 'Event Detail -', 'Location - The Qaser Ambala, Sargodha, Pakistan; Catering - Olive Garden; Decoration - Livspace; COST - PKR 50,000'),
(6, 'School and College Reunions', 'Organise the school and college reunion of your dreams with Hendecagon Event Planners. From invites to location to decoration to catering and entertainment, with everything taken care of the only thing you have to worry about is catching up with everyone.', 'istockphoto-1157236802-170667a.webp', 'Event Detail -', 'Location - The Qaser Ambala, Sargodha, Pakistan; Catering - Olive Garden; Decoration - Livspace; COST - PKR 50,000'),
(7, 'Holiday Parties', 'Organise the holiday party of your dreams with Hendecagon Event Planners. From invites to location to decoration to catering and enetertainment, with everything taken care of the only thing you have to worry about is having fun.', 'SGimg1.jpg', 'Event Detail -', 'Location - The Qaser Ambala, Sargodha, Pakistan; Catering - Olive Garden; Decoration - Livspace; COST - PKR 50,00'),
(8, 'Seasonal Events ', 'Organize the seasonal party of your dreams with Hendecagon Event Planners. From invites to location to decoration to catering and enetertainment, with everything taken care of the only thing you have to worry about is having fun. ', 'istockphoto-945885714-170667a.webp', 'Event Detail - ', 'Location - The Qaser Ambala, Sargodha, Pakistan; Catering - Olive Garden; Decoration - Livspace; COST - PKR 50,000 ');

-- --------------------------------------------------------

--
-- Table structure for table `joinus`
--

CREATE TABLE `joinus` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `cv` varchar(255) NOT NULL,
  `skills` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `joinus`
--

INSERT INTO `joinus` (`id`, `name`, `email`, `phone_no`, `qualification`, `cv`, `skills`) VALUES
(1, 'Hamza Abbas', 'm.hamza.30130@gmail.com', '', 'matric', 'wepik-streamlining-ecommerce-deployment-optimizing-the-path-from-development-to-launch-202312181531040JgE.pdf', 'nlknsdkjcsbckjsbcj'),
(2, 'Hamza Abbas', 'm.hamza.30130@gmail.com', '', 'matric', 'wepik-streamlining-ecommerce-deployment-optimizing-the-path-from-development-to-launch-202312181531040JgE.pdf', 'nlknsdkjcsbckjsbcj'),
(3, 'Hamza Abbas', 'm.hamza.30130@gmail.com', 'phone_no', 'matric', 'wepik-streamlining-ecommerce-deployment-optimizing-the-path-from-development-to-launch-202312181531040JgE.pdf', 'nlknsdkjcsbckjsbcj'),
(4, 'Hamza Abbas', 'm.hamza.30130@gmail.com', '', 'matric', 'wepik-streamlining-ecommerce-deployment-optimizing-the-path-from-development-to-launch-202312181531040JgE.pdf', 'nlknsdkjcsbckjsbcj'),
(5, 'Hamza Abbas', 'm.hamza.30130@gmail.com', '923424086828', 'matric', 'DBA PRESENTATION GROUPS.pdf', 'nzkxnkljznxkjzklxjnzkljxnzkjx'),
(6, 'Hamza Abbas', 'm.hamza.30130@gmail.com', '923424086828', 'matric', 'DBA PRESENTATION GROUPS.pdf', 'nzkxnkljznxkjzklxjnzkljxnzkjx'),
(7, 'Hamza Abbas', 'm.hamza.30130@gmail.com', '923424086828', 'matric', 'DBA PRESENTATION GROUPS.pdf', 'nzkxnkljznxkjzklxjnzkljxnzkjx'),
(8, 'Hamza Abbas', 'm.hamza.30130@gmail.com', '+92923424086828', 'matric', 'resume (1).pdf', 'hamxasxj'),
(9, 'Hamza Abbas', 'm.hamza.30130@gmail.com', '+92923424086828', 'matric', 'resume (1).pdf', 'hamxasxj'),
(10, 'Hamza Abbas', 'm.hamza.30130@gmail.com', '+92923424086828', 'matric', 'Subhan CV.pdf', 'hjdsajdjsahdadkla'),
(11, 'Hamza Abbas', 'm.hamza.30130@gmail.com', '+92923424086828', 'matric', 'Subhan CV.pdf', 'hjdsajdjsahdadkla');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(11) NOT NULL,
  `service_title` varchar(255) NOT NULL,
  `service_description` varchar(10000) NOT NULL,
  `service_image1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `service_title`, `service_description`, `service_image1`) VALUES
(1, 'Photography', 'At Elite Event Planner, we pride the service of photography that captures the joy, love, and emotion of your special day. Our team of skilled photographers combines a blend of traditional and photojournalistic styles to create a beautifully diverse collection of images that tell the story of your event.', 'photog.jpg'),
(2, 'Catering', 'At Elite Event Planner, We are providing catering services offers a comprehensive solution for clients. They curate menus based on the event type and client preferences, considering dietary restrictions and special requests. They ensure high-quality food preparation, presentation, and service, creating a memorable dining experience.', 'cater.jpg'),
(3, 'Entertainment', 'An Elite Event Planner company offering entertainment services curates a diverse range of options to keep guests entertained. They provide talented performers, such as live bands, DJs, or magicians, who can engage the audience and create a lively atmosphere. The event planner coordinates logistics, sound systems, and stage setup to ensure a seamless entertainment experience.', 'enter.jpg'),
(4, 'Transportation', 'At Elite Event Planner, We are providing Transportation services offering transportation services specializes in seamlessly coordinating transportation logistics for upscale events, ensuring VIP comfort and privacy. They manage budgets, vendor relationships, and logistics, prioritizing a luxurious and hassle-free experience for clients and their guests.', 'trans.jpg'),
(5, 'Venue Selection', 'An Elite Event Planner company offering Venue Selection services in curating exceptional event locations tailored to clients needs. They leverage their extensive network and expertise to secure prestigious venues that match the events style and scale, all while adhering to budget constraints. These planners prioritize unique and memorable.', 'venue.jpg'),
(6, 'Invitations', 'At Elite Event Planner, We are providing Invitations services offers a crafts exquisite and personalized invitations that set the tone for upscale events. They work closely with clients to design bespoke invitations, incorporating unique themes, high quality materials, and intricate details. These planners excel in creating a sense of anticipation and exclusivity.', 'kjsdajkh.jpg'),
(7, 'Security', 'An Elite Event Planner company offering Security services prioritizes the safety and privacy of high profile clients and their guests. They collaborate with professional security firms to develop comprehensive security plans, including crowd control, access management, and threat assessment. These planners are experienced in discreetly blending security measures into the events ambiance.', 'secu.jpg'),
(8, 'Decoration   ', 'An Elite Event Planner can designning the theme, selecting decorations, and coordinating their setup. They create a cohesive design plan, considering factors like the venue and client preferences. On the day of the event, they oversee the installation and ensure the decor aligns with the overall vision.There are many designs are available.   ', 'decore.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `weading`
--

CREATE TABLE `weading` (
  `weading_id` int(11) NOT NULL,
  `weading_title` varchar(255) NOT NULL,
  `weading_description` varchar(10000) NOT NULL,
  `weading_image1` varchar(255) NOT NULL,
  `weading_titlee` varchar(255) NOT NULL,
  `weading_descriptionn` varchar(2550) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `weading`
--

INSERT INTO `weading` (`weading_id`, `weading_title`, `weading_description`, `weading_image1`, `weading_titlee`, `weading_descriptionn`) VALUES
(1, 'Bridal Showers', 'Organise the bridal shower of your dreams with Elite Event Planners. From invites to location to decoration to catering and enetertainment, with everything taken care of the only thing you have to worry about is having fun!', 'brideshower.jpg', 'Event detail -', 'Location - The Qaser Ambala, Sargodha, Pakistan;  Catering - Olive Garden; Decoration - Livspace; COST - pkr 50,000'),
(2, 'Engagement Party', 'Organise the engagement party of your dreams with Elite Event Planners. From invites to location to decoration to catering and enetertainment, with everything taken care of the only thing you have to worry about is having fun!', 'engagement.jpg', 'Event detail -', 'Location - The Qaser Ambala, Sargodha, Pakistan;  Catering - Olive Garden; Decoration - Livspace; COST - pkr 50,000'),
(3, 'Bachelor Party', 'Organise the bachelor party of your dreams with Elite Event Planners. From invites to location to decoration to catering and enetertainment, with everything taken care of the only thing you have to worry about is having fun!', 'bachelor.jpg', 'Event detail -', 'Location - The Qaser Ambala, Sargodha, Pakistan;  Catering - Olive Garden; Decoration - Livspace; COST - pkr 50,000'),
(4, 'Bachelorette Party', 'Organise the bachelorette party of your dreams with Elite Event Planners. From invites to location to decoration to catering and enetertainment, with everything taken care of the only thing you have to worry about is having fun!', 'bchlrti.jpg', 'Event detail -', 'Location - The Qaser Ambala, Sargodha, Pakistan;  Catering - Olive Garden; Decoration - Livspace; COST - pkr 50,000'),
(5, 'Rehearsal Dinner', 'Organise the rehearsal dinner of your dreams with Elite Event Planners. From invites to location to decoration to catering and enetertainment, with everything taken care of the only thing you have to worry about is having fun!', 'Dinner.jpg', 'Event detail -', 'Location - The Qaser Ambala, Sargodha, Pakistan;  Catering - Olive Garden; Decoration - Livspace; COST - pkr 50,000'),
(6, 'Vow Renewal', 'Organise the wedding and reception of your dreams with Elite Event Planners. From invites to location to decoration to catering and enetertainment, with everything taken care of the only thing you have to worry about is having fun!', 'Renewl.jpg', 'Event detail -', 'Location - The Qaser Ambala, Sargodha, Pakistan;  Catering - Olive Garden; Decoration - Livspace; COST - pkr 50,000'),
(7, 'Destination Wedding', 'Organise the destination wedding of your dreams with Elite Event Planners. From invites to location to decoration to catering and enetertainment, with everything taken care of the only thing you have to worry about is having fun!', 'destinationweding.jpg', 'Event detail -', 'Location - The Qaser Ambala, Sargodha, Pakistan;  Catering - Olive Garden; Decoration - Livspace; COST - pkr 50,000'),
(8, 'Ceremony and Reception', 'Organise the wedding and reception of your dreams with Elite Event Planners. From invites to location to decoration to catering and enetertainment, with everything taken care of the only thing you have to worry about is having fun!', 'Cimg6.jpg', 'Event detail -', 'Location - The Qaser Ambala, Sargodha, Pakistan;  Catering - Olive Garden; Decoration - Livspace; COST - pkr 50,000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access`
--
ALTER TABLE `access`
  ADD PRIMARY KEY (`access_id`);

--
-- Indexes for table `booking_form`
--
ALTER TABLE `booking_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corporate`
--
ALTER TABLE `corporate`
  ADD PRIMARY KEY (`corporate_id`);

--
-- Indexes for table `culture`
--
ALTER TABLE `culture`
  ADD PRIMARY KEY (`culture_id`);

--
-- Indexes for table `gatherings`
--
ALTER TABLE `gatherings`
  ADD PRIMARY KEY (`gatherings_id`);

--
-- Indexes for table `joinus`
--
ALTER TABLE `joinus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weading`
--
ALTER TABLE `weading`
  ADD PRIMARY KEY (`weading_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `access`
--
ALTER TABLE `access`
  MODIFY `access_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `booking_form`
--
ALTER TABLE `booking_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `corporate`
--
ALTER TABLE `corporate`
  MODIFY `corporate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `culture`
--
ALTER TABLE `culture`
  MODIFY `culture_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gatherings`
--
ALTER TABLE `gatherings`
  MODIFY `gatherings_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `joinus`
--
ALTER TABLE `joinus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `weading`
--
ALTER TABLE `weading`
  MODIFY `weading_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
