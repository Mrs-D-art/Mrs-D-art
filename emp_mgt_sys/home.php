<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--stylesheet css-->
    <link rel="stylesheet" href="css/style.css">
</head>
<body >
    <!--sidebar starts-->
            <div class="sidebar">
                <div class="top">
                    <div class="logo">                        
                        <img src="images/MTN-Logo.png" alt="" width="40" height="40" class="logo-img"></img>
                        <span class="logo-name">WorkHub</span>
                          </div>
                          <i class="bx bx-menu"id="btn"></i>
                </div>
               
               
                <ul class="nav-list">
                    <li class="profile-text">
                        <div class="profile-details">
                            <img src="images/img5.jpg" alt="profile image">
                            <div class="name">
                                John Doe
                            </div>
                            
                        </div>
                        <div class="designation">
                            Admin
                        </div>
                       
                    </li>
                    <li>                        
                            <i class="bx bx-search "></i>
                            <input type="text" placeholder="search...">
                            <span class="tooltip">Search</span>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-solid fa-sliders"></i>
                            <span class="link_name">Dashboard</span>
                        </a>
                        <span class="tooltip">Dashboard</span>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-solid fa-users"></i>
                            <span class="link_name">Employees</span>
                        </a>
                        <span class="tooltip">Employees</span>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-solid fa-sitemap"></i>
                            <span class="link_name">Department</span>
                        </a>
                        <span class="tooltip">Department</span>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-solid fa-location-dot"></i>
                            <span class="link_name">Address</span>
                        </a>
                        <span class="tooltip">Address</span>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-solid fa-calculator"></i>
                            <span class="link_name">payroll</span>
                        </a>
                        <span class="tooltip">payroll</span>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-solid fa-calendar-minus"></i>
                            <span class="link_name">Leave</span>
                        </a>
                        <span class="tooltip">Leave</span>
                    </li>
                    <li>
                        <a href="#">
                            <i class='bx bxs-bar-chart-alt-2' ></i>
                            <span class="link_name">Reports</span>
                        </a>
                        <span class="tooltip">Reports</span>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-solid fa-gear"></i>
                            <span class="link_name">Settings</span>
                        </a>
                        <span class="tooltip">Settings</span>
                    </li>
                    <li class="profile">
                        <div class="profile-details">
                            <div class="name">
                                Logout
                            </div>
                            
                        </div>
                        <i class="bx bx-log-out" id="log-out"></i>
                    </li>
                  </ul>
               
            </div>
<section class="home-section">
    <div class="head-wrap">
        <div class="head-nav">
            <div class="text">Dashboard</div>
        </div>
        <div class="user-info">
            <div class="search-box">
                <i class="bx bx-search "></i>
                <input type="text" placeholder="search...">
            </div>
            <i class="fa-solid fa-bell"></i>
                <img src="images/img5.jpg" alt="profile image">
            </div>
        </div>
    </div>
    <div class="display-container">
        <h3 class="display-title">Today's data</h3>
        <div class="display-wrapper">
            <div class="display-box light-blue">
                <div class="display-header">
                    <i class="fa-solid fa-users  blue"></i>
                    <div class="count">
                        <span class="title">Employee</span>
                        <span class="count-value">5</span>
                    </div>
                   
                </div>
            </div>

            <div class="display-box light-yellow">
                <div class="display-header">
                    <i class="fa-solid fa-sitemap yellow"></i>
                    <div class="count">
                        <span class="title">Department</span>
                        <span class="count-value">5</span>
                    </div>
                    
                </div>
            </div>

            <div class="display-box light-red">
                <div class="display-header">
                    <i class="fa-solid fa-calculator red"></i>
                    <div class="count">
                        <span class="title">Payroll</span>
                        <span class="count-value">5</span>
                    </div>
                    
                </div>
            </div>

            <div class="display-box light-green">
                <div class="display-header">
                    <i class="fa-solid fa-calendar-minus green"></i>
                    <div class="count">
                        <span class="title">Time-off</span>
                        <span class="count-value">5</span>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>

    <div class="table-wrapper">
        <h3 class="table-name">Report</h3>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Employee ID</th>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Job title</th>
                        <th>Salary (FRW)</th>
                        <th>Email</th>
                        <th>Phone number</th>
                        <th>Hire date</th>
                        <th>Time-off(days)</th>
                        <th>action</th>
                    </tr>


                    <tbody>
                        <tr>
                            <td>001</td>
                            <td> Jean Marie</td>
                            <td> networking</td>
                            <td> network admin</td>
                            <td>700,000</td>
                            <td>Jeanmarie@gmail.com</td>
                            <td> +250*********77</td>
                            <td>2022-01-19</td>
                            <td>3</td>
                            <td>
                                Edit
                                <i class="fa-solid fa-pen"></i> 
                            </td>
                        </tr>
                        <tr>
                            <td>002</td>
                            <td> Jean Marie</td>
                            <td> networking</td>
                            <td> network admin</td>
                            <td>700,000</td>
                            <td>Jeanmarie@gmail.com</td>
                            <td> +250*********77</td>
                            <td>2022-01-19</td>
                            <td>3</td>
                            <td>
                                Edit
                                <i class="fa-solid fa-pen"></i> 
                            </td>
                        </tr>
                        
                        <tr>
                            <td>003</td>
                            <td> Jean Marie</td>
                            <td> networking</td>
                            <td> network admin</td>
                            <td>700,000</td>
                            <td>Jeanmarie@gmail.com</td>
                            <td> +250*********77</td>
                            <td>2022-01-19</td>
                            <td>3</td>
                            <td>
                                Edit
                                <i class="fa-solid fa-pen"></i> 
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="10">Total salary paid: 11,045,000</td>
                        </tr>
                    </tfoot>
                </thead>
            </table>
        </div>
    </div>
   
</section>
            <!--sidebar ends-->
       








   <script src="css/js/main.js"></script>         
</body>
</html>
