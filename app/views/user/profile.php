<?php
    require_once __DIR__ . "/../templates/header.php";
    require_once __DIR__ . "/../templates/navbar.php";
?>
<div class="container text-center mt-4">
    <h1>Halaman User</h1><img src="<?= BASE_URL; ?>/img/profile.jpeg" class="rounded-circle shadow">
    <p><?php
        if($data["id"] != NULL){
            echo "Hello user " . $data["id"] . "!";
        }else{
            echo "We cannot find your request, please try again!";
        }
    ?></p>
</div>
<?php require_once __DIR__ . "/../templates/footer.php"; ?>