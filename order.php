

<form action="submit.order.php" method="POST">
    Name: <input type="text" name="name" required><br>
    Phone: <input type="text" name="phone" required><br>
    Address: <textarea name="address" required></textarea><br>
    Size: 
    <select name="size" required>
        <option value="S">S</option>
        <option value="M">M</option>
        <option value="L">L</option>
        <option value="XL">XL</option>
    </select><br>
    <input type="submit" value="Place Order">
</form>
