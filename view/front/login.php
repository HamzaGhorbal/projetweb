<?php
include('../../config.php');
// creation de la session empty
session_start();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	//something was posted
	$email = $_POST['email'];
	$password = $_POST['password'];

	if (!empty($email) && !empty($password) ) {

		//read from database
		$query = "select * from utilisateur where email = '$email' limit 1";
		$db = config::getConnexion();
		try {
			$liste = $db->query($query);
			$u = $liste->fetch();
			if ($u) {
				if ($u['password'] === $password) {
                    // insersion des valeurs mteaa el user fel session 
					$_SESSION['id'] = $u['id'];
					$_SESSION['nom'] = $u['nom'];
					$_SESSION['email'] = $u['email'];
					$_SESSION['prenom'] = $u['prenom'];
					$_SESSION['datedenaissance'] = $u['datedenaissance'];
					$_SESSION['role'] = $u['role'];
					header("Location: home.php");
					die;
				}
			}
		} catch (Exception $e) {
			die('Erreur:' . $e->getMessage());
		}
		echo "wrong email or password!";
	} else {
		echo "wrong email or password!";
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        div {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="email"],
        input[type="password"] {
            width: calc(100% - 10px);
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        input[type="email"]:focus,
        input[type="password"]:focus {
            outline: none;
            border-color: #3498db;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <h2>Login</h2>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>
        <div>
            <input type="submit" value="Login">
            <a href="signup.php">You don't have an account ?</a>
        </div>
    </form>
</body>
</html>
