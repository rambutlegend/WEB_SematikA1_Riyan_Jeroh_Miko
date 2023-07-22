
<?php require "../functions.php"; 
session_start();
?>
<h1>Halaman Profile</h1>

<div class="form-group"></div>
<div class="row">
    <div class="col-sm-3">
        <label for="">Username</label>
        <input type="text" value="<?= $_SESSION["username"]; ?>"
        class="form-control" disabled>
    </div>
<div class="col-sm-4">
    <label for="">Nama Lengkap</label>
    <input type="text" class="form-control" value=" <?= user_username_satu ($_SESSION["username"], "nama"); ?>" disabled >
</div>
<div class="col-sm-4">
    <label for="">Login</label>
    <input type="text" class="form-control" value=" <?= date("d/m/Y, H:i", strtotime(user_username_satu ($_SESSION["username"], "login"))); ?>" disabled >
</div>
</div>