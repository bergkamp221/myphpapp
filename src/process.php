<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";

$driverName = $_POST['driver_name'] ?? '';
$driverPhone = $_POST['driver_phone'] ?? '';
$driverExp = $_POST['driver_experience'] ?? '';

$startPoint = $_POST['start_point'] ?? '';
$endPoint = $_POST['end_point'] ?? '';
$orderDate = $_POST['order_date'] ?? '';

$tariffType = $_POST['tariff_type'] ?? '';
$basePrice = $_POST['base_price'] ?? '';
$pricePerKm = $_POST['price_per_km'] ?? '';


$dataRow = [
    $driverName,
    $driverPhone,
    $driverExp,
    $startPoint,
    $endPoint,
    $orderDate,
    $tariffType,
    $basePrice,
    $pricePerKm
];

$csvFile = fopen('orders.csv', 'a'); 

fputcsv($csvFile, $dataRow, ';'); 

fclose($csvFile);

echo "<h3>Данные сохранены в orders.csv</h3>";

echo "<h2>Полученные данные:</h2>";
echo "Водитель: $driverName, тел: $driverPhone, стаж: $driverExp лет<br>";
echo "Заказ: из $startPoint в $endPoint, дата и время: $orderDate<br>";
echo "Тариф: $tariffType, базовая цена: $basePrice руб, цена за км: $pricePerKm руб/км<br>";
