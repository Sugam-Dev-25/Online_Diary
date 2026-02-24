
 Database: `diary`



 Table structure for table `user`


CREATE TABLE `user` (
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



 Table structure for table `usernote`

CREATE TABLE `usernote` (
  `noteID` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `uploadDate` datetime NOT NULL,
  `title` varchar(60) NOT NULL,
  `noteBody` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



 Dumping data for table `usernote`


INSERT INTO `usernote` (`noteID`, `email`, `uploadDate`, `title`, `noteBody`) VALUES

 Indexes for dumped tables



Indexes for table `user`

ALTER TABLE `user`
  ADD PRIMARY KEY (`Email`);


 Indexes for table `usernote`

ALTER TABLE `usernote`
  ADD PRIMARY KEY (`noteID`),
  ADD KEY `usernote` (`email`);


 AUTO_INCREMENT for dumped tables



 AUTO_INCREMENT for table `usernote`

ALTER TABLE `usernote`
  MODIFY `noteID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;




 Constraints for table `usernote`

ALTER TABLE `usernote`
  ADD CONSTRAINT `usernote` FOREIGN KEY (`email`) REFERENCES `user` (`Email`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
