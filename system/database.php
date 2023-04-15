<?php
session_start();


$host = 'localhost';
$db = 'dbpos';
$user = 'billy';
$passwords = 'root';

$dsn = "mysql:host=$host;dbname=$db";


try {
    $dbh = new PDO($dsn, $user, $passwords);
} catch (PDOException $e) {
    $e->getMessage();
    die();
}


function setFlashMessage($message, $status = 'success')
{
    $_SESSION['flash_message'] = ['message' => $message, 'status' => $status];
}


/** 
 * * Menampilkan Pesan notification dari session flash message
 */
function getFlashMessage()
{
    if (isset($_SESSION['flash_message'])) {
        $flashMessage = $_SESSION['flash_message'];
        unset($_SESSION['flash_message']);
        echo '<div class="alert alert-' . $flashMessage['status'] . ' alert-dismissible fade show" role="alert">
      ' . $flashMessage['message'] . '
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
    }
}
