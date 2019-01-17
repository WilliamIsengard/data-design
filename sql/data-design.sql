ALTER DATABASE "data-design.sql" CHARACTER SET utf8 COLLATE utf8_unicode_ci;

DROP TABLE IF EXISTS connection;
DROP TABLE IF EXISTS employer;
DROP TABLE IF EXISTS profile;

CREATE TABLE profile (
	profileId BINARY(16) NOT NULL,
	profileActivationToken CHAR(32),
	profileFriends CHAR(97) NOT NULL,
	profileCurrentEmployer VARCHAR(32),
	profileEducation VARCHAR(128),
	profileEmail VARCHAR(128),
	profileFirstName VARCHAR(128) NOT NULL,
	profileHash CHAR(97) NOT NULL,
	profileLastName VARCHAR(128) NOT NULL,
	profileLocation VARCHAR(128) NOT NULL,
	UNIQUE(profileId),
	UNIQUE(profileEmail),
	PRIMARY KEY(profileId)
);

CREATE TABLE employer (
	employerId BINARY(16) NOT NULL,
	employerFoundedDate DATETIME(6) NOT NULL,
	employerIndustry VARCHAR(32) NOT NULL,
	employerLocation VARCHAR(128) NOT NULL,
	employerName VARCHAR(128) NOT NULL,
	employerType VARCHAR(128) NOT NULL,
	employerWebsite VARCHAR(128),
	UNIQUE(employerId),
	UNIQUE(employerName),
	PRIMARY KEY(employerId)
);

CREATE TABLE connection (
	connectionSecondProfileID BINARY(16) NOT NULL,
	connectionProfileId BINARY(16) NOT NULL,
	connectionDate DATETIME(6) NOT NULL,
	FOREIGN KEY(connectionProfileId) REFERENCES profile(profileId),
	FOREIGN KEY(connectionSecondProfileID) REFERENCES profile(profileId)
);