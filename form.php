<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipment Rental Form</title>
</head>
<body>
    <fieldset>
    <legend>Construction Equipment Rental Form</legend>
    <form action="action_page.php" method="post">
        <table border="1" cellpadding="10">
            <tr>
                <td><label for="provider_name">Provider Name:</label></td>
                <td><input type="text" id="provider_name" name="provider_name" required></td>
            </tr>
            <tr>
                <td><label for="company_name">Company Name:</label></td>
                <td><input type="text" id="company_name" name="company_name" size="50" required></td>
            </tr>
            <tr>
                <td><label for="equipment_name">Equipment Name:</label></td>
                <td><input type="text" id="equipment_name" name="equipment_name"  size="6"required></td>
            </tr>
            <tr>
                <td><label for="equipment_type">Equipment Type:</label></td>
                <td><input type="text" id="equipment_type" name="equipment_type" required></td>
            </tr>
            <tr>
                <td><label for="rental_price">Rental Price (per day):</label></td>
                <td><input type="number" id="rental_price" name="rental_price" required></td>
            </tr>
            <tr>
                <td><label for="rental_duration">Rental Duration (days):</label></td>
                <td><input type="number" id="rental_duration" name="rental_duration" required></td>
            </tr>
            <tr>
                <td><label for="equipment_condition">Equipment Condition:</label></td>
                <td>
                    <select id="equipment_condition" name="equipment_condition" required>
                        <option value="new">New</option>
                        <option value="good">Good</option>
                        <option value="used">Used</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="availability">Availability:</label></td>
                <td>
                    <select id="availability" name="availability" required>
                        <option value="available">Available</option>
                        <option value="unavailable">Unavailable</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="location">Location:</label></td>
                <td><input type="text" id="location" name="location" required></td>
            </tr>
            <tr>
                <td><label for="contact">Contact Number:</label></td>
                <td><input type="tel" id="contact" name="contact" required></td>
            </tr>
            <tr>
                <td><label for="email">Email:</label></td>
                <td><input type="email" id="email" name="email" required></td>
            </tr>
            <tr>
                <td><label for="additional_notes">Additional Notes:</label></td>
                <td><textarea id="additional_notes" name="additional_notes" rows="4" cols="30"></textarea></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <button type="submit">Submit</button>
                    <button type="reset">Reset</button>
                </td>
            </tr>
        </table>
    </form>
</fieldset>
</body>
</html>

