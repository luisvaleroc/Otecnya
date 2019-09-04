<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Otecnya - @yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                            <div class="sidebar-sticky">
                              <ul class="nav flex-column">
                                <li class="nav-item">
                                  <a class="nav-link active" href="#">
                                    <span data-feather="home"></span>
                                    Dashboard <span class="sr-only">(current)</span>
                                  </a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#">
                                    <span data-feather="file"></span>
                                    Orders
                                  </a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#">
                                    <span data-feather="shopping-cart"></span>
                                    Products
                                  </a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#">
                                    <span data-feather="users"></span>
                                    Customers
                                  </a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#">
                                    <span data-feather="bar-chart-2"></span>
                                    Reports
                                  </a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#">
                                    <span data-feather="layers"></span>
                                    Integrations
                                  </a>
                                </li>
                              </ul>
                      
                              <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                                <span>Saved reports</span>
                                <a class="d-flex align-items-center text-muted" href="#">
                                  <span data-feather="plus-circle"></span>
                                </a>
                              </h6>
                              <ul class="nav flex-column mb-2">
                                <li class="nav-item">
                                  <a class="nav-link" href="#">
                                    <span data-feather="file-text"></span>
                                    Current month
                                  </a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#">
                                    <span data-feather="file-text"></span>
                                    Last quarter
                                  </a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#">
                                    <span data-feather="file-text"></span>
                                    Social engagement
                                  </a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#">
                                    <span data-feather="file-text"></span>
                                    Year-end sale
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </nav>
                      
            </div>
            <div class="col-sm-10">
              @yield('content') 
            </div>
        </div>
    </div>

</body>
</html>

