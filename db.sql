CREATE TABLE `pastes` (
`pasteID` int(4) unsigned zerofill auto_increment NOT NULL,
`typeID` int(4)  zerofill NOT NULL,
`pasteLink` varchar(255) NOT NULL unique,
`pasteTitle` varchar(255) NOT NULL,
`pasteContent` longtext NOT NULL,
`pasteDate` varchar(50) NOT NULL,
PRIMARY KEY(`pasteID`, `pasteLink`)
);

CREATE TABLE `type` (
`typeID` int(4) unsigned zerofill auto_increment NOT NULL,
`typeTitle` varchar(255) NOT NULL,
`typeCode` varchar(255) NOT NULL,
PRIMARY KEY(`typeID`)
);

INSERT INTO `type` (`typeID`, `typeTitle`, `typeCode`) VALUES (0001, 'plain text', 'language-none');
INSERT INTO `type` (`typeID`, `typeTitle`, `typeCode`) VALUES (0002, 'bash', 'language-bash');
INSERT INTO `type` (`typeID`, `typeTitle`, `typeCode`) VALUES (0003, 'c', 'language-c');
INSERT INTO `type` (`typeID`, `typeTitle`, `typeCode`) VALUES (0006, 'c++', 'language-cpp');
INSERT INTO `type` (`typeID`, `typeTitle`, `typeCode`) VALUES (0007, 'c#', 'language-csharp');
INSERT INTO `type` (`typeID`, `typeTitle`, `typeCode`) VALUES (0008, 'css', 'language-css');
INSERT INTO `type` (`typeID`, `typeTitle`, `typeCode`) VALUES (0009, 'html', 'language-markup');
INSERT INTO `type` (`typeID`, `typeTitle`, `typeCode`) VALUES (0010, 'java', 'language-java');
INSERT INTO `type` (`typeID`, `typeTitle`, `typeCode`) VALUES (0011, 'javascript', 'language-javascript');
INSERT INTO `type` (`typeID`, `typeTitle`, `typeCode`) VALUES (0012, 'json', 'language-json');
INSERT INTO `type` (`typeID`, `typeTitle`, `typeCode`) VALUES (0014, 'objective-c', 'language-objectivec');
INSERT INTO `type` (`typeID`, `typeTitle`, `typeCode`) VALUES (0015, 'perl', 'language-perl');
INSERT INTO `type` (`typeID`, `typeTitle`, `typeCode`) VALUES (0016, 'php', 'language-php');
INSERT INTO `type` (`typeID`, `typeTitle`, `typeCode`) VALUES (0017, 'python', 'language-python');
INSERT INTO `type` (`typeID`, `typeTitle`, `typeCode`) VALUES (0018, 'ruby', 'language-ruby');
INSERT INTO `type` (`typeID`, `typeTitle`, `typeCode`) VALUES (0019, 'sql', 'language-sql');
INSERT INTO `type` (`typeID`, `typeTitle`, `typeCode`) VALUES (0020, 'swift', 'language-swift');
