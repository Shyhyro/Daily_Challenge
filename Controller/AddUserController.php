<?php
require_once "require.php";

if(isset($_GET['error'], $_POST['email'], $_POST['emailCheck'], $_POST['password'], $_POST['passwordCheck'], $_POST['birthdate'], $_POST['username']) && $_GET['error'] === "0")
{
    $email = strip_tags(trim($_POST['email']));
    $emailCheck = strip_tags(trim($_POST['emailCheck']));
    $password = strip_tags(trim($_POST['password']));
    $passwordCheck = strip_tags(trim($_POST['passwordCheck']));
    $birthdate = strip_tags(trim($_POST['birthdate']));
    $username = strip_tags(trim($_POST['username']));

    $user = new UserManager();
    $user = $user->searchUser($username);

    /**
     * Validate password strength
     */
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);

    /**
     * If: Password = Password Check
     */
    if($password !== $passwordCheck)
    {
        header("location: ../View/sign-up.php?error=3");
    }
    else {
        /**
         * If: password no have uppercase, lowercase, number, special chars and 8, no register this
         * Else : registration
         */
        if((!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8))
        {
            header("location: ../View/sign-up.php?error=4");
        }
        else
        {
            if ($email !== $emailCheck) {
                header("location: ../View/sign-up.php?error=5");
            }
            else {
                if($user == null)
                {
                    $new_password = password_hash($_POST['password'], PASSWORD_BCRYPT);
                    $addUser = new UserManager();
                    $addUser = $addUser->addUser($email, $new_password, $birthdate, $username);

                    if ($addUser)
                    {
                        header("location: ../View/sign-up.php?statut=create");
                    }
                    else
                    {
                        header("location: ../View/sign-up.php?error=6");
                    }
                }
                else
                {
                    header("location: ../View/sign-up.php?error=1");
                }
            }
        }
    }
}
else
{
    header("location: ../View/sign-up.php?error=2");
}