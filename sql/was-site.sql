-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2015 at 07:05 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `was-site`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `company` varchar(255) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contact_id`, `name`, `address`, `phone`, `email`, `message`, `company`) VALUES
(1, 'Anandaperumal Rajendran', 'Lake area', '+919750004621', 'ananda+df@gmail.com', 'Fzgdxhfdjh', 'SSSSS'),
(2, 'Harish', 'Fdgfd', '35436745754', 'ananda+df@gmail.com', 'asgdfh\r\nfhfdj\r\ndhfdj\r\n', 'SSS');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `title`, `description`, `image`, `status`) VALUES
(1, 'School Management System', '<p class="ver-space">WAS school management solution efficiently developed in php platform to suite the educational institution needs. It is a user-friendly, flexible and competitive tool. With this, we can manage the overall activities of the institution and have control over its day to day activities. It has wide range of features for management, teachers and students. We can also customize the module as per your requirement. Built-in features allows you to generate various reports viz.fees paid ,unpaid list, class wise student details, attendance details etc.</p>\r\n                    \r\n                    <div class="clearfix">\r\n<h3>Features:</h3>\r\n<ul class="disc-list span16 unstyled">\r\n    <li>\r\n        Modest , powerful , affordable and complete solution to manage schools\r\n    </li>\r\n    <li>\r\n        Best tool for school, teachers, parents & students interactions\r\n    </li> \r\n    <li>\r\n        Handle  curriculum , time  table, homework , exams etc. effectively\r\n    </li> \r\n    <li>\r\n        Fees Tracking facility, SMS & Mail alerts to parents\r\n    </li> \r\n</ul>\r\n\r\n\r\n<h3>Administration:</h3>\r\n<ul class="disc-list span16 unstyled">\r\n    <li>\r\n         	Teacher and student details \r\n    </li>\r\n    <li>\r\n         	Pre and post admission management\r\n    </li> \r\n    <li>\r\n         	Syllabus and time table planner\r\n    </li> \r\n    <li>\r\n         	Fees management\r\n    </li> \r\n    <li>\r\n         	Cash-flow Management\r\n    </li>\r\n    <li>\r\n         	 	Library Management\r\n    </li> \r\n    <li>\r\n         	Dashboard management\r\n    </li> \r\n    <li>\r\n         	Leave management\r\n    </li> \r\n    <li>\r\n         	Message box â€“ To interact with parent /teacher/Students\r\n    </li> \r\n</ul>\r\n\r\n<h3>Students:</h3>\r\n<ul class="disc-list span16 unstyled">\r\n    <li>\r\n         	Attendance \r\n    </li>\r\n    <li>\r\n         	Term wise syllabus to be taken\r\n    </li> \r\n    <li>\r\n         	Time Table\r\n    </li> \r\n    <li>\r\n         	Homework\r\n    </li> \r\n    <li>\r\n         	Term wise Examination schedule\r\n    </li>\r\n    <li>\r\n         	Score card and performance update\r\n    </li> \r\n    <li>\r\n         	Get SMS & Mail alerts \r\n    </li> \r\n    <li>\r\n         	Message box â€“ To interact with teacher and management\r\n    </li> \r\n</ul>\r\n\r\n<h3>Teachers:</h3>\r\n<ul class="disc-list span16 unstyled">\r\n    <li>\r\n         	360Â° view of student Management \r\n            <ul class="disc-list span16 unstyled">\r\n                <li>\r\n                    a)	Attendance\r\n                </li>\r\n                <li>\r\n                    b)	Syllabus\r\n                </li>\r\n                <li>\r\n                    c)	Time-Table \r\n                </li>\r\n            </ul>\r\n    </li>\r\n    <li>\r\n         	Preparing Question paper\r\n    </li> \r\n    <li>\r\n         	Term wise Examination schedule\r\n    </li> \r\n    <li>\r\n         	Mark list for students\r\n    </li> \r\n    <li>\r\n         	Get SMS & Mail alerts \r\n    </li>\r\n    <li>\r\n         	Leave management\r\n    </li> \r\n    <li>\r\n         	Message box â€“ To interact with parent ,student and management\r\n    </li> \r\n</ul>\r\n\r\n\r\n<h3>Parents:</h3>\r\n<ul class="disc-list span16 unstyled">\r\n    <li>\r\n        Comprehensive view of Online  information on\r\n            <ul class="disc-list span16 unstyled">\r\n                <li>\r\n                    a)	Childâ€™s performance, viz. Homework , Examination performance ,report card etc\r\n                </li>\r\n                <li>\r\n                    b)	Fees, Syllabus, Attendance\r\n                </li>\r\n                <li>\r\n                    c)	School dashboard applicable to students\r\n                </li>\r\n            </ul>\r\n    </li>\r\n    <li>\r\n         	Get SMS & Mail alerts \r\n    </li> \r\n    <li>\r\n         	Message box â€“ To interact with teacher and management\r\n    </li> \r\n</ul>\r\n                    </div>', 'school.jpg', 'active'),
(2, 'E-Commerce', '<p class="ver-space">WAS cart robustly developed to meet the current business requirements. We have developed the tool which is capable of managing all the aspects of shopping, right from product cataloguing to order delivery.. WAS cart creates a great online experience to its customers and management as well Our shopping cart designed in a way that can be customized to suite any business. </p>\r\n                    \r\n                    <div class="clearfix">\r\n<h3>Was cart Features:</h3>\r\n<ul class="disc-list span16 unstyled">\r\n<li>User friendly search engine</li>\r\n<li>Product segmentation</li>\r\n<li>Listing features</li>\r\n<li>product catalogue with segmented navigation</li>\r\n<li>Exclusive Filters</li>\r\n<li>Comprehensive image display of the Products</li>\r\n<li>Marketing features â€“Product & Dealer recommendations</li>\r\n<li>Online chat or support</li>\r\n<li>New Product updates</li>\r\n<li>Seamless service integration</li>\r\n<li>Shopping cart </li>\r\n<li>Transaction Life cycle Tracking </li>\r\n<li>Social recommendations</li>\r\n<li>Logistics and shipping integration</li>\r\n<li>Payment gateway integrations</li>\r\n<li>Order Tracking</li>\r\n</ul>\r\n                    </div>', 'e-commerce.jpg', 'active'),
(3, 'HR & PAYROLL Management System', '<p class="ver-space">WAS Payroll is a best of solution for payroll processing and has range of features. It has been designed to suite the dynamic business needs. Its functionalities help you to handle the most complex problems. HR management & attendance tracking system can be integrated. We can also integrate the biometric system with our payroll tool as per the clientâ€™s requirement. Each segment is inter connected with each other, seamlessly work together and deliver results. Its suits to any type of industry and best way to store and track the Payroll and HR related details. Different level of access can be created as per the requirement. It can manage multiple pay periods. WAS payroll system enable you to have the payroll processing in house</p>\r\n\r\n<p class="ver-space">It has specialized business intelligence features viz.detailed reporting, schedule reporting etc. Our reports feature allows you to select the required report that you need during pay period.</p>\r\n                    \r\n                    <div class="clearfix">\r\n<h3>Features</h3>\r\n<ul class="disc-list span16 unstyled">\r\n<li>Employee Management</li>\r\n<li>Corporate Management</li>\r\n<li>HR Management (Appraisal)</li>\r\n<li>Attendance maintenance</li>\r\n<li>Salary Process and management</li>\r\n<li>Allowances & Deductions</li>\r\n<li>Tax Management</li>\r\n<li>Payslip & statutory reports</li>\r\n<li>Leave Management</li>\r\n<li>Reimbursement claim</li>\r\n<li>Annual Increment</li>\r\n<li>Employee Exit(Full & Final settlement)</li>\r\n</ul>\r\n                    </div>', 'payroll.jpg', 'active'),
(4, 'Point of sale (WAS-POS)', '<p class="ver-space">POS is robust system which is suitable for all retail operations irrespective of its size. Easy accessibility for both front & back end users. Look and Feel of the tool will be appealing and it has user-friendly operation. It ensures bill collector charges only the selling price fixed by the retailer, updates the payment collected and prints receipts. POS integrates several activities reduce customer wait time.POS records each transaction with its respective date & time. This facilitate tracking sales, orders, stock, returns etc . Its features allow you to have better control over the business. It gives you various analytical data which will be helpful to determine best business time, seasonal product etc, basis which we can organise product display, goods availability according to the requirement. Reports help to do promotional activities</p>\r\n\r\n                    \r\n                    <div class="clearfix">\r\n<h3>Features</h3>\r\n<ul class="disc-list span16 unstyled">\r\n<li>Product Management</li>\r\n<li>Tracking profit</li>\r\n<li>Sales management</li>\r\n<li>Stock re-order reminder </li>\r\n<li>Stock management</li>\r\n<li>Purchase Order management </li>\r\n<li>Customer Transaction History</li>\r\n<li>Supplier Transaction History</li>\r\n<li>Update product information</li>\r\n<li>CRM</li>\r\n<li>Business Intelligence</li>\r\n<li>Product Promotion</li>\r\n</ul>\r\n                    </div>', 'pos.jpg', 'active'),
(5, 'Students Tracking and Notification system (STANS)', '<p class="ver-space">Students Tracking and Notification system: STANS is an application that helps the parents in tracking their childâ€™s activity in the school. STANS can be accessed in Web/Tablets/Smart & Non-Smart phone.</p> \r\n\r\n<div class="clearfix">\r\n<ul class="disc-list span16 unstyled">\r\n<li>Web/Tablets: The app is viewed in any web browser also an email is sent to the registered email id.</li>\r\n<li>Smart Phone: STANS is downloaded from the play store and can be used.\r\n<li>Non Smart Phone: Alerts & Notification will be sent on Short Message Service (SMS). SMS Alerts is also sent â€œOn Requestâ€ basis by sending SMS in a defined format from the registered mobile number.\r\n</ul>\r\n\r\n<ul class="disc-list span16 unstyled">\r\n<h3>Web/Tablets/Smart phone Feature</h3>\r\n<li>Dashboard: User preferred dashboard which has Attendance, Notification, Alerts, Results\r\n<li>Fees: Parents can \r\n<ul>\r\n    <li>view the fee payment schedule and can set their own reminders, </li>\r\n    <li>Make payment through credit card/debit card, etc</li>\r\n    <li>Fees receipts </li>\r\n    <li>Students canteen wallet </li>\r\n</ul>\r\n<li>Calendar \r\n<li>Class schedule (regular/special)\r\n<li>Exam schedule\r\n<li>Events (School day/sports day/cultural) \r\n</ul>\r\n\r\n<ul class="disc-list span16 unstyled">\r\n<h3>Diary</h3>\r\n<li>Home work/Assignments\r\n<li>Syllabus\r\n<li>Time table\r\n<li>Exam Results\r\n<h3>Cab</h3>\r\n<li>Route Wise cab availability with timings\r\n<li>Cab tracking\r\n<h3>Attendance: Daily/Weekly/Monthly view of attendance</h3>\r\n<h3>Gallery: Pictures and video of the school events </h3>\r\n<h3>Library:</h3>\r\n<li>Populates list of books available in the library with details like Title, Author/Table of content/Hire period/When it will be available\r\n<li>Hired Book details\r\n<li>Advance booking request with queue position\r\n</ul>\r\n\r\n<ul class="disc-list span16 unstyled">\r\n<h3>Downloads</h3>\r\n<li>Model Question Papers\r\n<li>Payment receipts\r\n<li>Time table\r\n<li>Exam schedule\r\n<li>Syllabus \r\n<li>Mark sheets \r\n</ul>\r\n\r\n<ul class="disc-list span16 unstyled">\r\n<h3>Inbox:  A communication channel for interacting between Parents, Faculty & school management.</h3>\r\n</ul>\r\n\r\n<ul class="disc-list span16 unstyled">\r\n<h3>Notification/Alerts</h3>\r\n<li>Alerting parents for delayed school buses-Alert messages triggered by the school admin or transport operators to the parents whose children travel through the school bus or van if there is a delay, cancellation or any other disruption of service.</li>\r\n<li>Alert parent of children illness-Messages immediately sent to the parents in the given contact number if the child falls sick inside the school premises</li>\r\n<li>Homework alert-Daily homework details of the class students sent to the parents and if any irregularity observed in terms of non-completion or error in work, same notified through short messaging services</li>\r\n<li>Alerts to parents if children are absent/late to school-Messages sent to the parents in the event of absence or late reporting.</li>\r\n<li>Emergency alerts - Parents or guardians of students will be Informed regarding early closure of schools due to unexpected disaster or natural calamity</li>\r\n<li>Unplanned holiday- Information messages sent to parents about school closure in case of heavy rain or cyclone, with the request to pick up children</li>\r\n<li>Event notifications-Info on events like parents meet,open day after exams, sports day,annual day celebrations, cultural fest  etc.. were sent to the parents with timings. Certain cases parents presence is required and in other cases students attendance is must , messages passed on to the parents accordingly.</li>\r\n<li>Teacher meeting schedule-Management or admin trigger messages to all the teachers in the event of any teacher meet is organised.</li>\r\n<li>Notifications and alerts to school staff regularly- Messages triggered to the teaching staff on cancellation or rescheduling of classes</li>\r\n<li>Notification sent to parents on studentâ€™s performance-Students performance in curriculum & non-curriculum were sent to parents. Lack of concentration, poor performance, area of improvement will also be informed to the students. Studentâ€™s Best performance also informed to the respective parent</li>\r\n<li>Students Attendance Status-Students turnout ratio is informed to their parents.In case of student having poor attendance, number of days he should mandatorily attend school to qualify for examination, promotion etc. is also informed to the particular parents as message.</li>\r\n<li>Students Marks on every mid term/Qtly/Hlfly/Model/Annual- Marks scored in each subject of all examinations is triggered to the parents. Notification on issuing mark list is also notified to parents.</li>\r\n<li>Broadcasting Exam time table-Students examination schedule sent to the respective parents.</li>\r\n<li>Education tour details- Details on proposed tour with schedule, fees and the last date to enrol is sent to the parents via message</li>\r\n<li>Alerts of parents of fees dues reminder and payment receipt details-Alert on fees due sent to the parents with amount and last date to pay. Payment receipt or acknowledgement is triggered to the parents given number once the fees is received.</li>\r\n<li>Birthday wishes to the children â€“ Birthday wishes of the respective child triggered to the parents on the day of their birthdays</li>\r\n<li>Schools achievements, awards, recognitions were messaged to the parents</li>\r\n<li>Students achievements- Achievement both in curriculum and  non-curriculum triggered to the respective parents with appreciation.</li>\r\n</ul>\r\n</div>', 'stans.jpg', 'active');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;