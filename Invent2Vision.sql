-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 09, 2018 at 08:24 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Invent2Vision`
--

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `img_url` varchar(255) CHARACTER SET latin1 NOT NULL,
  `service_title` varchar(40) CHARACTER SET latin1 NOT NULL,
  `service_text` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `img_url`, `service_title`, `service_text`) VALUES
(1, 'img/gif/productDevelopment.gif', 'Product Development', 'From concept to reality we can bring your vision to life. Every project we review starts with a concept or prototype which we use to research and develop into your new product. Our team of engineers and designers will create your product which will be ready for testing followed by mass production.'),
(2, 'img/gif/manufacturing.gif', 'Manufacturing', 'We are able to provide everything from prototype to production, with full-service manufacturing for a wide array of industries. We are available to provide you with samples, assembly, engineering expertise and testing to ensure you will receive high quality products and services.'),
(3, 'img/gif/marketing.gif', 'Marketing', 'Let us help you develop your products marketing and service policies, programs and systems, to best support the strategic direction and alignment with your objectives. Our team is comprised of talented professionals who provide a vast assortment of exceptional skills, cutting-edge creativity, masterful production techniques, and services.'),
(4, 'img/gif/fulfillment.gif', 'Fulfillment', 'I2V can execute all your fulfillment needs. We handle drop shipments direct from the manufacturing plant, individual packages delivered from warehouse, we review each order, hand-pick items, and pack with care. We do the work so you don’t have to.'),
(5, 'img/gif/financialManagement.gif', 'Financial Management', 'The Financial team can maximize the return on financial assets by establishing and enforcing financial policies, procedures, controls, and reporting systems. We help guide you with your financial decisions by establishing and monitoring all procedures by preparing budgets, schedules, analyzing, consolidating financial data, followed by recommending plans.'),
(6, 'img/gif/businessDevelopment.gif', 'Business Development', 'We can advise and assist with the setup of the following business needs; trademark, patent, copyrights, corporate identification, business relationship alliances, website development and design, internal systems development, call center set up, business license, accounting, fulfillment, talent acquisition, business plan development, and much more.');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `title` text CHARACTER SET latin1 NOT NULL,
  `bio` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `title`, `bio`) VALUES
(1, 'Carlos Landazuri', 'Chief Executive Officer', 'Invent2Vision CEO and founder Carlos Landazuri has been developing new businesses internationally for more than 15 years, his vision and catalyst has been an innate instinct since long before he opened the doors of his first business many years ago.\r\n<br><br>\r\nMr. Landazuri has a vast knowledge of engineering products for the construction sector which has prepared him for his latest endeavor Invent2Vision.\r\n<br><br>\r\nThe Invent2Vision company structure is the real-world version of Shark Tank, minus the cruel comments of their élite business panel not to mention eliminating the hot lights of a soundstage that create an overwhelming and almost unapproachable quest for professional support.\r\n<br><br>\r\nMr. Landazuri is very accessible to all of his employees, and he has always been known to mentor people from start to finish, helping others to reach the goals that they desire is his personal aspiration, so Invent2Vision is a very natural business course for him to not only be interested in but to thrive in as he has with every business opportunity he has touched.\r\n<br><br>\r\nMost persons who have achieved the level of personal success as he has in business usually diversify and plan to monopolize for continued personal gain, but this Class Act Entrepreneur wants to change lives by supporting brilliant ideas and helping people to find their own successes.\r\n<br><br>\r\nIt will be many people\'s missions and interest to watch this dynamic innovative gentleman\'s story.'),
(2, 'Jessica Manuel O\'Neal', 'Chief Financial Officer', 'Jessica Manuel-O’Neal serves as the CFO of Invent2Vision. She attended Pacific Coast College to study Journalism. While studying, she worked in a small business and got hands on experience in office administration. Finding work as a writer proved difficult, and her work experience only seemed to open doors for her to work in the accounting field. She started working for a woman owned garment manufacturing company, and her employer quickly became her mentor. She decided to go back to school at LASWC and receive her certification in Business Administration/Bookkeeping.\r\n<br><br>\r\n\r\nShe went on to work for Ernst & Young as an internal auditor. When E&Y merged with Leventhal, her department was relocated to Houston, TX. She decided to stay in California, and Joined Herbalife International. She was promoted within the organization three times. She started in Royalty Overrides, and left as the Sr. Legal Accounts Coordinator, working directly with all active Vice Presidents in each division. She was certified in all Microsoft products and joined the I.M.P.A.C.T team, as the accounting liaison. Her responsibilities included research and analysis used by the IT department to implement the new operating system used worldwide. She received her Database Structure Certification, and when she left Herbalife, started working with some of the top Direct Response Marketers in the industry.\r\n\r\n<br><br>\r\nAs the accounting manager working directly with the CFO, she handled all scopes of accounting. She eventually focused her skills on forensic data analysis creating tools that helped with decision making.\r\n<br><br>\r\n\r\nJessica has served in several results driven positions. Most recently, Jessica served for ten years in the capacity of Corporate Controller. She focused on structure, reorganization, and expansion. She was instrumental in helping organizations grow their revenues four-fold within a short span of time. Overall Jessica has amassed over 25 years of experience, and coupled with her leadership and team building skills, she is the most qualified person to lead this team to success. She has an intricate ability to select the most qualified leaders, develop new talent, and give hands on motivation. Her commitment to each product and idea is unmatched, and her determination to make them come to fruition, creates an environment for everyone to succeed.'),
(3, 'Shelley Scott-Mahoney', 'Chief Marketing Officer', 'As the Chief Marketing Officer for Invent2Vision, Shelley is constantly searching for cutting-edge and exceptional ways to interact with consumers. Her days are filled with reviewing new ideas and systems to bring to the public, as well as, developing digital marketing strategies, she is an information junkie, research whiz, she loves finding new ways to communicate through technology and branding, she earned the moniker as an avid and exceptionally sporting negotiator, as well as, a project management tour de force.\r\n<br><br>\r\nShelley earned a Bachelor\'s Degree in Business Management from UCLA, and a Project Management Certificate, she is now in the process of studying Intellectual Property Law and Practices coursework to better support I2V with Trademark, Patent, Copyright, and Best Practices.\r\n<br><br>\r\nPrior to finding her passion in Business Management and Development, she had dreamt of a career as a fashion and interior design so she attended the very best institutions to help her meet this goal. She completed courses at FIDM, LATTC, and SMC, where she studied Interior Design, Fashion Design and completed coursework in Textile Design and Color Theory.\r\n<br><br>\r\nBefore embarking on her journey with I2V Shelley had been the Co-owner and Senior Designer for Maison Magique a residential investment and renovation design firm, she was responsible for purchasing properties for renovation and resale, along with, management of company and clients projects.\r\n<br><br>\r\nShe and her former husband had previously owned two Art Galleries, one based in Los Angeles California and had served exclusively private art collectors, the other gallery housed a smaller collection available for public access and had been located in Paris France.\r\n<br><br>\r\nDuring Social Media Marketing infancy, Shelley had co-founded a full-service marketing firm which provides services for Universal Music Group and its partners. She has also held a position as the Chief Operations Officer for a multi-divisional direct response company, she was contracted as the Senior Vice President of Marketing for one of the largest global music distribution companies, and had also served as the Senior Project Manager for a Los Angeles based Telecom and Technology company.'),
(4, 'Griselda Leandro-Macias', 'Executive Administrative Assistant', 'Griselda Leandro-Macias is the Executive Administrative Assistant at Invent2Vision. She is currently attending college to further extend her knowledge of business administration to provide the best possible assistant to upper management. She has worked for different companies with various environments. She has worked under the direct orders of a CPA. She performed administrative duties for a property management firm. Her duties ranged from filing legal documents and customer information, to creating a complete filing system that facilitates everyone’s work. She has created the structure for new departments that become crucial for companies.\r\n<br><br>\r\nGriselda is an administrative professional, with years of experience in providing support to senior management. She has excellent time management skills and with a demonstrated ability to prioritize and handle multiple projects in a fast-paced environment. She’s an exceptional planner and problem solver, who adapts well to change. She works both independently or in team to solve any situation, exceed expectations. Her multitasking skills paired wither ability to meet tight deadlines, without compromise, should reassure anyone that they are being handled by best team possible.'),
(5, 'Cory Harris', 'Music Director &\r\n<br>\r\nSocial Media Management', 'Cory Harris is the Social Media manager for Invent2Vision. As the Music Director, he also writes and produces the jingles for each I2V product. Clearly a talented wordsmith, he continues to build his own lane. Along with his digital marketing skills, Cory writes catchy jingles that standout from all the other clutter, thus creating a strong brand voice while delivering an addictive tune people will be humming subconsciously throughout their day.\r\n<br><br>\r\nCory’s passion for music is what makes him stand out. At the early age of 7, he decided that he wanted to pursue music as a career. By the time he turned 11, he was already writing rhymes. Due to his parents break up, he began to use writing as an escape from reality. \"I loved rap music because that’s what my dad was into,\" says Cory \"and when he moved out I felt that if I rapped too, it would eventually bring us closer.\" At 12 years old, he recorded his first song professionally titled “What’s Up Now.” Since then he’s released 4 mixtapes and 1 EP. Cory attended the Art Institute of Los Angeles to pursue his passion and hone his craft by advancing his technical skills while becoming more well-rounded as he entered the business world of music and marketing.\r\n<br><br>\r\nAs the social media manager for I2V, Cory makes each product stand out in its own way. He creates content to post daily and studies analytics to help improve interactions with potential customers. From inspirational quotes to videos showing how to use the products, Cory teams up with Scratch to get the job done! There are several different social media platforms and each one takes a different approach. Its Cory’s job to find out what works. What are people talking about? What keeps people interested? How to gain followers? Etc... He uses programs like Photoshop and Final Cut Pro to create content that’ll keep followers tuned in.\r\n<br><br>\r\nCory’s commitment is undeniable, and his personal goals are motivational. His objective is to hit more than 100,000 followers for each brand that I2V produces by continually being resourceful and developing his digital marketing knowledge. He also loves and will continue to touch people\'s minds and hearts with his addictive jingles that make people smile. He has a plan, now watch him bring that vision into reality.'),
(6, 'Jessica \"Scratch\" Le', 'Graphic Designer', 'Jessica Le is one of the Graphic Designers at Invent2Vision. Everyone calls her Scratch so we do not confuse her with the other Jessica, you know, the main one. She has always been interested in the arts, especially if it involves making anything from “scratch”, hence the nickname.\r\n<br><br>\r\nScratch grew up already having an interest in choosing art as her career path. Having gained knowledge of the fundamentals of arts, silk screening, and a bit of web designing. She attended college at California State University of Los Angeles and graduated with a Bachelor of Arts in Graphic Design & Visual Communication in 2013. She started her career as a Graphic/Web Designer and Photographer for a company working on their websites, handing their social media accounts, editing photos, and taking product photography before moving onto where she is at now at Invent2Vision.\r\n<br><br>\r\nCurrently, she works on various projects that include designing packaging, logo design, content, printed marketing, brand development, product photography, and doing what she can to gain additional knowledge through self-teaching and learning from her peers and team members.\r\n<br><br>\r\nHer knowledge is diverse and includes; the use of most of Adobe Creative Cloud such as Photoshop, Illustrator, Dreamweaver, and InDesign, as well as having her hand in pretty much anything creative that spans from a bunch of traditional media to digital media. Honestly if it involves making something, she probably has tried it before or at least had her hand in it once.\r\n<br><br>\r\nIn her free time, she creates artwork, edits videos, creates content for YouTube, she is an avid gamer, loves music and singing, is busy updating her websites and social media, streaming live art, adores gaming on twitch.tv, staying active by going to the gym or any other relatable active things, and pretty much anything geeky like watching anime.\r\n<br><br>\r\nScratch’s main goal is to be a well-rounded and generally be an interesting person. Scratch hopes to someday open her world of creativity to others by adding smiles to their black, gray, or white world by giving them meaning to every moment with a splash of color in between.'),
(7, 'David Juarez', 'Web & Graphic Designer', 'David Juarez is Invent2Vision\'s Web and Graphic Designer. He graduated from Mt Sierra College with a Bachelor’s degree in Media Arts & Graphic Design. After graduation, he continued to spread his creativity and design skills in the web world as a web designer. He enjoys the challenges that comes with the design and development of modern responsive web applications. He also loves the fact that since technology is always improving, there is always something new to learn.\r\n<br><br>\r\nMost of all, David enjoys the fact that he gets the opportunity to help design and redesign something new from scratch. Being able to create a web application that enables brands to reach out to their customer’s needs and seeing the reaction on their face when they see the final result is one of the best feeling to him.\r\n<br><br>\r\nIf you see him pondering back and forth, or with an earphone on one ear sitting in front of a computer screen, it is most likely that he is on the verge of resolving a bug from his code! When David is not at the desk working on a project, you are most likely to find him sketching on a sketchbook, practicing his coding and programming skills by watching tutorials and building personal projects, or spending time with loved ones. ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
