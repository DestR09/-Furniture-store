<?php
session_start();

if (isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];

    // Удаляем товар из сессии
    unset($_SESSION['cart'][$product_id]);

    // Возвращаем сообщение об успешном удалении (можно не возвращать, если не нужно)
    echo "Товар успешно удален из корзины.";
} else {
    // Если product_id не был передан, выведите сообщение об ошибке
    echo "Ошибка: не удалось удалить товар из корзины.";
}
?>
