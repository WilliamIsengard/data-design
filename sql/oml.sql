INSERT INTO profile (profileId, profileActivationToken, profileCurrentEmployer, profileEducation, profileEmail, profileFirstName, profileHash, profileLastName, profileLocation)
VALUES (UNHEX("b8c280001bc74e0ca5c0b47876e0f1fa"), "nananananananananananananananana", "CNM", "Doctor", "test@test.com", "John", "nanananananananananananananananananananananananananananananananananananananananananananananananan", "Doe", "Albuquerque_NM");

INSERT INTO profile (profileId, profileActivationToken, profileCurrentEmployer, profileEducation, profileEmail, profileFirstName, profileHash, profileLastName, profileLocation)
VALUES (UNHEX("4975a09597d64f948b0fc027614cd1ba"), "papapapapapapapapapapapapapapapa", "FatPipe", "Web Developer", "email@test.com", "Whitney", "papapapapapapapapapapapapapapapapapapapapapapapapapapapapapapapapapapapapapapapapapapapapapapapap", "Someone", "Santa Fe NM");

INSERT INTO profile (profileId, profileActivationToken, profileCurrentEmployer, profileEducation, profileEmail, profileFirstName, profileHash, profileLastName, profileLocation)
VALUES (UNHEX("9706d3175c974178a23a1905cffeb071"), "mamamamamamamamamamamamamamamama", "CNM", "Doctor", "test2@test.com", "Jane", "mamamamamamamamamamamamamamamamamamamamamamamamamamamamamamamamamamamamamamamamamamamamamamamamam", "Doeh", "Albuquerque_NM");

INSERT INTO employer (employerId, employerFoundedDate, employerIndustry, employerLocation, employerName, employerType, employerWebsite)
VALUES (UNHEX("6d7065c572b848188d08c2e60d5547b8"), "2013", "Technology", "Albuquerque_NM", "CNM", "Education", "www.cnm.edu")

DELETE FROM profile WHERE profileId = UNHEX("b8c280001bc74e0ca5c0b47876e0f1fa");

INSERT INTO connection (connectionID, connectionSecondProfileId, connectionProfileId, connectionDate)
VALUES (UNHEX("a698d62fd25f448da6b1445d51ed5516"), UNHEX("9706d3175c974178a23a1905cffeb071"), UNHEX("6d7065c572b848188d08c2e60d5547b8"), NOW())


UPDATE profile SET profileCurrentEmployer = "CNM Stemulus" WHERE profileId = UNHEX("b8c280001bc74e0ca5c0b47876e0f1fa");

SELECT profileLastName, profileFirstName, profileEmail from profile WHERE profileId = UNHEX("b8c280001bc74e0ca5c0b47876e0f1fa");

SELECT profileLastName, profileFirstName, profileEducation from profile WHERE profileCurrentEmployer LIKE "%CNM%";