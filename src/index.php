<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Такси-сервис</title>
</head>
<body>
    <h1> Такси</h1>
    
    <form action="process.php" method="POST">

        <fieldset>
            <legend>Данные о водителе</legend>
            <label for="driver_name">Имя водителя:</label>
            <input type="text" name="driver_name" id="driver_name" required>
            <br><br>

            <label for="driver_phone">Телефон:</label>
            <input type="text" name="driver_phone" id="driver_phone" required>
            <br><br>

            <label for="driver_experience">Стаж вождения (лет):</label>
            <input type="number" name="driver_experience" id="driver_experience" min="0" required>
        </fieldset>

        <br>

        <fieldset>
            <legend>Данные о заказе</legend>
            <label for="start_point">Пункт отправления:</label>
            <input type="text" name="start_point" id="start_point" required>
            <br><br>

            <label for="end_point">Пункт назначения:</label>
            <input type="text" name="end_point" id="end_point" required>
            <br><br>

            <label for="order_date">Дата и время заказа:</label>
            <input type="datetime-local" name="order_date" id="order_date" required>
        </fieldset>

        <br>

        <fieldset>
            <legend>Тариф</legend>
            <label for="tariff_type">Тип тарифа:</label>
            <select name="tariff_type" id="tariff_type" required>
                <option value="econom">Эконом</option>
                <option value="comfort">Комфорт</option>
                <option value="business">Бизнес</option>
            </select>
            <br><br>

            <label for="base_price">Базовая цена (руб):</label>
            <input type="number" name="base_price" id="base_price" min="0" required>
            <br><br>

            <label for="price_per_km">Цена за км (руб/км):</label>
            <input type="number" name="price_per_km" id="price_per_km" min="0" required>
        </fieldset>

        <br>

        <input type="submit" value="Отправить">
    </form>
</body>
</html>
