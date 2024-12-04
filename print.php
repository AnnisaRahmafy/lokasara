<?php
session_start();

// Cek apakah detail pemesanan tersedia
if (!isset($_SESSION['booking_details'])) {
    echo "No booking details found!";
    exit;
}

$booking = $_SESSION['booking_details'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Print Booking Details</title>
   <style>
   @media print {
      body {
         font-size: 12px;
      }
      button {
         display: none; /* Sembunyikan tombol Print saat mencetak */
      }
      .booking-details {
         border: none;
         margin: 0;
      }
   }
</style>

   <style>
      body {
         font-family: Arial, sans-serif;
         margin: 20px;
         padding: 20px;
      }
      .booking-details {
         max-width: 600px;
         margin: auto;
         border: 1px solid #ddd;
         padding: 20px;
         border-radius: 5px;
      }
      h2 {
         text-align: center;
         color: #333;
      }
      table {
         width: 100%;
         border-collapse: collapse;
         margin-top: 20px;
      }
      table th, table td {
         text-align: left;
         padding: 10px;
         border-bottom: 1px solid #ddd;
      }
      button {
         display: block;
         margin: 20px auto;
         padding: 10px 20px;
         background-color: #007BFF;
         color: white;
         border: none;
         cursor: pointer;
         border-radius: 5px;
      }
      button:hover {
         background-color: #0056b3;
      }
   </style>
</head>
<body>

<div class="booking-details">
   <h2>Booking Confirmation</h2>
   <table>
      <tr>
         <th>Name</th>
         <td><?php echo $booking['name']; ?></td>
      </tr>
      <tr>
         <th>Email</th>
         <td><?php echo $booking['email']; ?></td>
      </tr>
      <tr>
         <th>Phone</th>
         <td><?php echo $booking['phone']; ?></td>
      </tr>
      <tr>
         <th>Address</th>
         <td><?php echo $booking['address']; ?></td>
      </tr>
      <tr>
         <th>Location</th>
         <td><?php echo $booking['location']; ?></td>
      </tr>
      <tr>
         <th>Guests</th>
         <td><?php echo $booking['guests']; ?></td>
      </tr>
      <tr>
         <th>Arrivals</th>
         <td><?php echo $booking['arrivals']; ?></td>
      </tr>
      <tr>
         <th>Leaving</th>
         <td><?php echo $booking['leaving']; ?></td>
      </tr>
   </table>
   <button
