<?php
//connection to the database
// تفعيل عرض الأخطاء
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// إنشاء الاتصال
$conn = new mysqli('localhost', 'root',''.'tshirtdesignmaker');


