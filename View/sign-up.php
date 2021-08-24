<?php
include '../View/Elements/header.php';
?>

<div class="form-container">
        <form id="form" action="../Controller/AddUserController.php?error=0" method="post">
            <h2>Sign-Up</h2>
            <label for="Information and Settings">
                <h3>Personal information</h3>
                <div class="container">
                    <div class="icon">Email*</div>
                    <input placeholder="exemple@email.com" type="email" name="email">
                </div>
                <div class="container">
                    <div class="icon">Confirm Email*</div>
                    <input type="email" name="emailCheck">
                </div>
                <div class="container">
                    <div class="icon">Password*</div>
                    <input placeholder="MyPassword1234@&" type="password" name="password">
                </div>
                <div class="container">
                    <div class="icon">Confirm Password*</div>
                    <input type="password" name="passwordCheck">
                </div>
                <div class="container">
                    <div class="icon">Birthdate*</div>
                    <input type="date" name="birthdate">
                </div>

                <h3>Settings</h3>
                <div class="container">
                    <div class="icon">Username*</div>
                    <input placeholder="MyUsername" type="text" name="username">
                </div>
                <div class="container">
                    <input type="checkbox"><span class="icon">I have read and agreed with the Terms of use, Rules and the Privacy policy.</span>
                </div>
                <div class="container">
                    <input type="checkbox"><span class="icon">I confirm being 16 or older, or have the permission of my parents to sign up to this website.</span>
                </div>
            </label>
            <input type="submit" value="Submit">
        </form>
</div>

<?php
include '../View/Elements/footer.php';
?>