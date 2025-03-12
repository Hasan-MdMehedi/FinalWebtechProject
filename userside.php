
<html>
<head>
    <title>User Equipment Rental Form</title>
</head>
<body>
    <h2 > Welcome to Construction Equipment Rental Management System </h2>
    <fieldset>
        <legend>User Login</legend>
        <form action="usersubmission.php" method="post">
            <table>
                <tr>
                    <td><label for="username">Username:</label></td>
                    <td><input type="text" id="username" name="username" required></td>
                </tr>
                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="password" id="password" name="password" required></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit">Login</button>
                        <button type="reset">Reset</button>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
     <hr>
    
    <fieldset>
        <legend>Equipment Rental Request Form</legend>
        <form action="userside.php" method="post">
            <table cellpadding="10">
                <tr>
                    <td><label for="full_name">Full Name:</label></td>
                    <td><input type="text" id="full_name" name="full_name" required></td>
                </tr>
                <tr>
                    <td><label for="email">Email:</label></td>
                    <td><input type="email" id="email" name="email" required></td>
                </tr>
                <tr>
                    <td><label for="contact">Contact Number:</label></td>
                    <td><input type="tel" id="contact" name="contact" required></td>
                </tr>
                <tr>
                    <td><label for="equipment_needed">Equipment Needed:</label></td>
                    <td><input type="text" id="equipment_needed" name="equipment_needed" required></td>
                </tr>
                <tr>
                    <td><label for="rental_duration">Rental Duration (days):</label></td>
                    <td><input type="number" id="rental_duration" name="rental_duration" required></td>
                </tr>
                <tr>
                    <td><label for="pickup_date">Pickup Date:</label></td>
                    <td><input type="date" id="pickup_date" name="pickup_date" required></td>
                </tr>
                <tr>
                    <td><label for="dropoff_date">Dropoff Date:</label></td>
                    <td><input type="date" id="dropoff_date" name="dropoff_date" required></td>
                </tr>
                <tr>
                    <td><label for="location">Preferred Pickup Location:</label></td>
                    <td><input type="text" id="location" name="location" required></td>
                </tr>
                <tr>
                    <td><label for="payment_method">Payment Method:</label></td>
                    <td>
                    <select id="payment_method" name="payment_method" required>
                            <option value="credit_card">Credit Card</option>
                            <option value="Bkash">Bkash</option>
                            <option value="bank_transfer" selected>Bank Transfer</option>
                            <option value="cash_on_delivery">Cash on Delivery</option>
                            <option value="Nogod"> Nogod </option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="additional_notes">Additional Notes:</label></td>
                    <td><textarea id="additional_notes" name="additional_notes" rows="4" cols="30"></textarea></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit">Submit Rental Request</button>
                        <button type="reset">Reset</button>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>
