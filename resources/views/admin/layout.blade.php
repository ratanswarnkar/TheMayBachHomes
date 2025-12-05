<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <link rel="stylesheet" href="{{ asset('admin/layout.css') }}">
</head>
<body>

<div class="layout">

  <!-- Sidebar -->
  <aside class="sidebar">
    <h2 class="logo">🏠 RealEstate Admin</h2>

    <nav>
      <a href="#" class="active">Dashboard</a>
      <a href="#">Users</a>
      <a href="#">Properties</a>
      <a href="#">Clients</a>
      <a href="#">Bookings</a>
      <a href="#">Reports</a>
      <a href="#">Settings</a>
    </nav>
  </aside>

  <!-- Main Content -->
  <main class="main">

    <!-- Top Bar -->
    <header class="topbar">
      <input type="text" placeholder="Search..." class="search-input">
      <div class="top-right">
        <span class="icon">✉</span>
        <img src="https://randomuser.me/api/portraits/men/32.jpg" class="profile-img">
        <span class="username">Sanjeev</span>
      </div>
    </header>

    <!-- Page Content -->
    <section class="content">
      <h1 class="page-title">Property Listings</h1>

      <div class="table-wrapper">
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Property</th>
              <th>Type</th>
              <th>Status</th>
              <th>Date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>#101</td>
              <td>Luxury Villa</td>
              <td>Villa</td>
              <td><span class="badge green">Approved</span></td>
              <td>01/12/2025</td>
              <td><button class="btn">Edit ✏</button></td>
            </tr>
            <tr>
              <td>#102</td>
              <td>Dubai Apartment</td>
              <td>Apartment</td>
              <td><span class="badge yellow">Pending</span></td>
              <td>04/12/2025</td>
              <td><button class="btn">Edit ✏</button></td>
            </tr>
          </tbody>
        </table>
      </div>

    </section>

  </main>
</div>

</body>
</html>
