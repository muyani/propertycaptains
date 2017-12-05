<?php


$dbImages="select * from properties where featured='yes'";
$dbForsale ="select * from properties where transaction_type_='for sale'";
$dbTorent ="select * from properties where transaction_type_='to rent'";
$dbForsaleHouse ="select * from properties where transaction_type_='for sale' AND property_type != 'plot'";
$dbForsalePlot ="select * from properties where transaction_type_='for sale' AND property_type = 'plot'";
$dbToRentFurnished ="select * from properties where transaction_type_='to rent' AND property_type = 'Furnished Apartment'";
$dbToRentHouse ="select * from properties where transaction_type_='to rent' AND property_type NOT IN ('Furnished Apartment','office')";
$dbToRentOffice ="select * from properties where transaction_type_='to rent' AND property_type ='office'";






?>