<?

	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];

	$dbh = new PDO('mysql:host=localhost;dbname=**********', '*********', '*********');

	$q = "INSERT INTO orders(`time`, name, phone, email) VALUES(NOW(), :name, :phone, :email)";
	$sth = $dbh->prepare($q);
	$sth->bindParam(':name', $name, PDO::PARAM_STR);
	$sth->bindParam(':phone', $phone, PDO::PARAM_STR);
	$sth->bindParam(':email', $email, PDO::PARAM_STR);
	$sth->execute();
	
	echo "1";