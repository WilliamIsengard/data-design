<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<title>Conceptual Model</title>
	</head>
	<body>
		<h1>Data Design Project</h1>
			<h2>Conceptual Model</h2>
				<h3>Entities & Attributes</h3>
					<h4>Profile</h4>
						<ul>
							<li>profileId (Primary Key)</li>
							<li>profileActivationToken</li>
							<li>profileCurrentEmployer</li>
							<li>profileConnectionId</li>
							<li>profileEducation</li>
							<li>profileEmail</li>
							<li>profileEmployeeId</li>
							<li>profileFirstName</li>
							<li>profileHash</li>
							<li>profileLastName</li>
							<li>profileLocation</li>
						</ul>
					<h4>Employer</h4>
						<ul>
							<li>employerId (Primary Key)</li>
							<li>employerFoundedDate</li>
							<li>employerIndustry</li>
							<li>employerLocation</li>
							<li>employerName</li>
							<li>employerType</li>
							<li>employerWebsite</li>
						</ul>
					<h4>Connection</h4>
						<ul>
							<li>connectionId (Primary Key)</li>
							<li>connectionProfileConnectionId (Foreign Key)</li>
							<li>connectionProfileID (Foreign Key)</li>
							<li>connectionDate</li>
						</ul>
					<h4>Employee</h4>
						<ul>
							<li>employeeId (Primary Key)</li>
							<li>employeeIdProfileEmployeeId (Foreign Key)</li>
							<li>employeeIdDate</li>
						</ul>
				<h3>Relationships</h3>
					<ul>
						<li>One <strong>Profile</strong> can have many <strong>Employers -(1 to n)</strong></li>
						<li>one <strong>Employer</strong> can have many <strong>Employees -(1 to n)</strong></li>
						<li>Relationship</li>
						<li>Relationship</li>
					</ul>
			<a href="./index.php">Home Page</a>
	</body>
</html>