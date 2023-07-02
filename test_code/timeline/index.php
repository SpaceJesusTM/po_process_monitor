<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Socle PO Process Dashboard</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
<link href="bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="timeline.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Socle PO Process Dashboard</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home"></span>
              Dashboard
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
          <a class="link-secondary" href="#" aria-label="Add a new report">
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

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <!-- Get the client and order variables passed by the button in dashboard.php -->
      <!-- PN is equal to the row in the csv file (or index $pn - 1) -->
      <!-- CAUTION PN SHOULD BE ID, ALL REFERENCES USING $pn need to be changed to $id -->
      <!-- ID is the true use of the variable. -->
      <?php
        $client = $_GET['client'];
        $order = $_GET['order'];
        $pn = $_GET['pn'];
      ?>
      <!-- Subheader (same as dashboard.php, different title) -->
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Order Details | <?php echo $client; ?> | <?php echo $order; ?> | ID: <?php echo $pn; ?></h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>
    </main>

    <!-- Button to return back to Dashboard page -->
    <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <a href="../dashboard.php" class="btn btn-back">Back to Dashboard</a>
    </div>
    <style>
      .btn-back {
        background-color: white;
        color: grey;
        border: 1px solid grey;
        border-radius: 5px;
        padding: 5px 10px;
      }
    </style>

    <!-- Timeline Template, Need to make it responsive and based on csv data -->
    <!-- <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="timeline">
        <div class="outer">
          <div class="card">
            <div class="info">
              <h3 class="title complete">CUST</h3>
              <p>YYYY/MM/DD</p>
              <p>客戶: RK<br>訂單: RKE/OE/008</p>
            </div>
          </div>
          <div class="card">
            <div class="info">
              <h3 class="title complete">CSR</h3>
              <p>YYYY/MM/DD</p>
              <p>內部訂單: 229-111030001<br>請購: 313-111060017</p>
            </div>
          </div>
          <div class="card">
            <div class="info">
              <h3 class="title ipr">PR</h3>
              <p>YYYY/MM/DD</p>
              <p>採購: 331-111060011</p>
            </div>
          </div>
          <div class="card">
            <div class="info">
              <h3 class="title">CSR</h3>
              <p>*TT (NET 30)</p>
            </div>
          </div>
          <div class="card">
            <div class="info">
              <h3 class="title">CUST</h3>
              <p>需與財務確認到帳訊息</p>
            </div>
          </div>
          <div class="card">
            <div class="info">
              <h3 class="title">LOGISTIC/CSR</h3>
              <p>YYYY/MM/DD</p>
              <p>進貨驗收</p>
              <p>(採購單號)<br>331-111060011 : 349-111060007<br>331-111060012 : 349-111070009<br>331-111060013 : 349-111070009</p>
            </div>
          </div>
          <div class="card">
            <div class="info">
              <h3 class="title">PR</h3>
              <p>YYYY/MM/DD</p>
              <p>內部請款付款予供應商</p>
              <p>(採購單號)<br>331-111060011 : 710-111060027<br>331-111060012  : 710-111070043<br>331-111060013 : 710-111070043</p>
            </div>
          </div>
          <div class="card">
            <div class="info">
              <h3 class="title">LOGISTIC/CSR</h3>
              <p>YYYY/MM/DD</p>
              <p>出貨 (*Invoice)</p>
              <p>(內部訂單單號)<br>229-111030001 : 239-111060030<br>229-111030001  : 239-111070025<br>229-111030001 : 239-111070025</p>
            </div>
          </div>
          <div class="card">
            <div class="info">
              <h3 class="title">CUST</h3>
              <p>匯款請與財務確認</p>
              <p>(內部訂單單號)   (應該是看發票號碼)<br>I2022061301<br>I2022062002<br>I2022071401</p>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <!-- PHP implementation of above template. -->
    <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="timeline">
        <div class="outer">
        <!-- Using php go to the line of the data specified by $pn and retrerive the data. -->
          <?php		
            function csvToArray($csvFile){
              $file_to_read = fopen($csvFile, 'r');
              while (!feof($file_to_read) ) {
                $lines[] = fgetcsv($file_to_read, 1000, ',');
              }
              fclose($file_to_read);
              return $lines;
            }
            //read the csv file into an array
            $csvFile = 'data_formate2.csv';
            $csv = csvToArray($csvFile);
            
            // Read all variables from the line $pn
            $客戶代號 = $csv[$pn][0];
            $客戶簡稱 = $csv[$pn][1];
            $訂單日期 = $csv[$pn][2];
            $客戶訂單單號 = $csv[$pn][3];
            $內部訂單單號 = $csv[$pn][4];
            $請購日期 = $csv[$pn][5];
            $請購單號 = $csv[$pn][6];
            $採購日期 = $csv[$pn][7];
            $採購單號 = $csv[$pn][8];
            $進貨驗收日期 = $csv[$pn][9];
            $進貨驗收單 = $csv[$pn][10];
            $應付憑單單號 = $csv[$pn][11];
            $出貨日期 = $csv[$pn][12];
            $出貨單號 = $csv[$pn][13];
            $發票號碼日期 = $csv[$pn][14];
            $發票號碼 = $csv[$pn][15];

            // Find all lines in the CSV with the same company and order number
            $採購單號list = array();
            $進貨驗收單list = array();
            $應付憑單單號list = array();
            $內部訂單單號list = array();
            $出貨單號list = array();
            $發票號碼日期list = array();
            $發票號碼list = array();
            // Add the current line variables to the corresponding lists
            $採購單號list[] = $採購單號;
            $進貨驗收單list[] = $進貨驗收單;
            $應付憑單單號list[] = $應付憑單單號;
            $內部訂單單號list[] = $內部訂單單號;
            $出貨單號list[] = $出貨單號;
            $發票號碼日期list[] = $發票號碼日期;
            $發票號碼list[] = $發票號碼;
            // Note: invoice number 發票號碼 should be prefaced with an I. This is not done in the CSV file.

            // Find all lines in the CSV with the same company and order number
            // When line is found add all the variables to the corresponding lists
            // Make sure the current line is not added to the list a second time
            for ($i = 0; $i < count($csv); $i++) {
              if ($csv[$i][1] == $客戶簡稱 && $csv[$i][3] == $客戶訂單單號 && $i != $pn) {
                if ($csv[$i][8] == "") {
                  $採購單號list[] = "N/A";
                } 
                else {
                  $採購單號list[] = $csv[$i][8];
                }
                if ($csv[$i][10] == "") {
                  $進貨驗收單list[] = "N/A";
                } 
                else {
                  $進貨驗收單list[] = $csv[$i][10];
                }
                if ($csv[$i][11] == "") {
                  $應付憑單單號list[] = "N/A";
                } 
                else {
                  $應付憑單單號list[] = $csv[$i][11];
                }
                if ($csv[$i][4] == "") {
                  $內部訂單單號list[] = "N/A";
                } 
                else {
                  $內部訂單單號list[] = $csv[$i][4];
                }
                if ($csv[$i][13] == "") {
                  $出貨單號list[] = "N/A";
                } 
                else {
                  $出貨單號list[] = $csv[$i][13];
                }
                if ($csv[$i][14] == "") {
                  $發票號碼日期list[] = "N/A";
                } 
                else {
                  $發票號碼日期list[] = $csv[$i][14];
                }
                if ($csv[$i][15] == "") {
                  $發票號碼list[] = "N/A";
                } 
                else {
                  $發票號碼list[] = $csv[$i][15];
                }
              }
            }

          ?>
          <div class="timeline">
            <div class="outer">
            <?php
              echo "<div class='card'>";
                echo "<div class='info'>";
                  // echo "<h3 class='title complete'>CUST</h3>";
                  // // Test printing all elements in each list
                  // for ($i = 0; $i < count($採購單號list); $i++) {
                  //   echo "<p>" . $採購單號list[$i] . "</p>";
                  // }
                  if ($訂單日期 == "") {
                    echo '<h3 class="title ipr">CUST</h3>';
                    echo' <p>目前正在進行中...</p>';
                  } 
                  else {
                    echo '<h3 class="title complete">CUST</h3>';
                    echo '<p>' . $訂單日期 . '</p>';
                    echo '<p>客戶: ' . $客戶簡稱 . '<br>訂單: ' . $客戶訂單單號 . '</p>';
                  }
                  // echo '<h3 class="title complete">CUST</h3>';
                  // echo '<p>YYYY/MM/DD</p>';
                  // echo' <p>客戶: RK<br>訂單: RKE/OE/008</p>';
                echo "</div>";
              echo "</div>";

              echo "<div class='card'>";
                echo "<div class='info'>";
                // If the order date and buy date are both empty...
                if ($訂單日期 == "") {
                  echo '<h3 class="title">CSR</h3>';
                  echo '<p>信息不可用。上一步正在進行中...</p>';
                }
                // If only buy date is empty...
                else if ($請購日期 == "") {
                  echo '<h3 class="title ipr">CSR</h3>';
                  echo '<p>目前正在進行中...</p>';
                }
                else {
                  echo '<h3 class="title complete">CSR</h3>';
                  echo '<p>' . $請購日期 . '</p>';
                  echo '<p>內部訂單: ' . $內部訂單單號 . '<br>請購: ' .  $請購單號 . '</p>';
                }
                echo "</div>";
              echo "</div>";

              echo "<div class='card'>";
                echo "<div class='info'>";
                  if ($請購日期 == "") {
                    echo '<h3 class="title">PR</h3>';
                    echo '<p>信息不可用。上一步正在進行中...</p>';
                  }
                  else if ($採購日期 == "") {
                    echo '<h3 class="title ipr">PR</h3>';
                    echo '<p>目前正在進行中...</p>';
                  }
                  else {
                    echo '<h3 class="title complete">PR</h3>';
                    echo '<p>' . $採購日期 . '</p>';
                    echo '<p>採購: ' . $採購單號 . '</p>';
                  }
                echo "</div>";
              echo "</div>";

              echo "<div class='card'>";
                echo "<div class='info'>";
                  if ($請購日期 == "") {
                    echo '<h3 class="title">CSR</h3>';
                    echo '<p>信息不可用。上一步正在進行中...</p>';
                  }
                  else if ($採購日期 == "") {
                    echo '<h3 class="title ipr">CSR</h3>';
                    echo '<p>目前正在進行中...</p>';
                  }
                  else {
                    echo '<h3 class="title complete">CSR</h3>';
                    echo '<p>*TT (NET 30)</p>';
                  }
                echo "</div>";
              echo "</div>";

              echo "<div class='card'>";
                echo "<div class='info'>";
                  if ($請購日期 == "") {
                    echo '<h3 class="title">CUST</h3>';
                    echo '<p>信息不可用。上一步正在進行中...</p>';
                  }
                  else if ($採購日期 == "") {
                    echo '<h3 class="title ipr">CUST</h3>';
                    echo '<p>目前正在進行中...</p>';
                  }
                  else {
                    echo '<h3 class="title complete">CUST</h3>';
                    echo '<p>需與財務確認到帳訊息</p>';
                  }
                echo "</div>";
              echo "</div>";

              echo "<div class='card'>";
                echo "<div class='info'>";
                  if ($採購日期 == "") {
                    echo '<h3 class="title">LOGISTIC/CSR</h3>';
                    echo '<p>信息不可用。上一步正在進行中...</p>';
                  }
                  else if ($進貨驗收日期 == "") {
                    echo '<h3 class="title ipr">LOGISTIC/CSR</h3>';
                    echo '<p>目前正在進行中...</p>';
                  }
                  else {
                    echo '<h3 class="title complete">LOGISTIC/CSR</h3>';
                    echo '<p>' . $進貨驗收日期 . '</p>';
                    echo '<p>進貨驗收</p>';
                    echo '<p>(採購單號)';
                    for ($i = 0; $i < count($採購單號list); $i++) {
                      echo '<br>' . $採購單號list[$i];
                      echo ' : ' . $進貨驗收單list[$i];
                    }
                    echo '</p>';
                  }
                echo "</div>";
              echo "</div>";

              echo "<div class='card'>";
                echo "<div class='info'>";
                  if ($採購日期 == "") {
                    echo '<h3 class="title">PR</h3>';
                    echo '<p>信息不可用。上一步正在進行中...</p>';
                  }
                  else if ($進貨驗收日期 == "") {
                    echo '<h3 class="title ipr">PR</h3>';
                    echo '<p>目前正在進行中...</p>';
                  }
                  else {
                    echo '<h3 class="title complete">PR</h3>';
                    echo '<p>' . $進貨驗收日期 . '</p>';
                    echo '<p>內部請款付款予供應商</p>';
                    echo '<p>(採購單號)';
                    for ($i = 0; $i < count($採購單號list); $i++) {
                      echo '<br>' . $採購單號list[$i];
                      echo ' : ' . $應付憑單單號list[$i];
                    }
                    echo '</p>';
                  }
                echo "</div>";
              echo "</div>";

              echo "<div class='card'>";
                echo "<div class='info'>";
                  if ($進貨驗收日期 == "") {
                    echo '<h3 class="title">LOGISTIC/CSR</h3>';
                    echo '<p>信息不可用。上一步正在進行中...</p>';
                  }
                  else if ($出貨日期 == "") {
                    echo '<h3 class="title ipr">LOGISTIC/CSR</h3>';
                    echo '<p>目前正在進行中...</p>';
                  }
                  else {
                    echo '<h3 class="title complete">LOGISTIC/CSR</h3>';
                    echo '<p>' . $出貨日期 . '</p>';
                    echo '<p>出貨 (*Invoice)</p>';
                    echo '<p>(內部訂單單號)';
                    for ($i = 0; $i < count($內部訂單單號list); $i++) {
                      echo '<br>' . $內部訂單單號list[$i];
                      echo ' : ' . $出貨單號list[$i];
                    }
                    echo '</p>';
                  }
                echo "</div>";
              echo "</div>";

              echo "<div class='card'>";
                echo "<div class='info'>";
                  if ($出貨日期 == "") {
                    echo '<h3 class="title">CUST</h3>';
                    echo '<p>信息不可用。上一步正在進行中...</p>';
                  }
                  else if ($發票號碼日期 == "") {
                    echo '<h3 class="title ipr">CUST</h3>';
                    echo '<p>目前正在進行中...</p>';
                  }
                  else {
                    echo '<h3 class="title complete">CUST</h3>';
                    echo '<p>匯款請與財務確認</p>';
                    echo '<p>';
                    echo $發票號碼日期list[0];
                    echo ' : I' . $發票號碼list[0];
                    for ($i = 1; $i < count($發票號碼日期list); $i++) {
                      echo '<br>' . $發票號碼日期list[$i];
                      echo ' : I' . $發票號碼list[$i];
                    }
                    echo '</p>';
                  }
                echo "</div>";
              echo "</div>";
            ?>
            </div>
          </div>
        </div>

        </div>
      </div>
    </div>

    <!-- Timeline Styles -->
    <style>    
    /* Timeline Container */
    .timeline {
      background: var(--primary-color);
      margin: 20px auto;
      padding: 20px;
    }

    /* Outer Layer with the timeline border */
    .outer {
      border-left: 2px solid #333;
    }

    /* Card container */
    .card {
      position: relative;
      margin: 0 0 20px 20px;
      padding: 10px;
      background: #333;
      color: white;
      border-radius: 8px;
      max-width: 400px;
    }

    /* Information about the timeline */
    .info {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    /* Title of the card */
    .title {
      color: orange;
      position: relative;
    }

    /* Make title complete green */
    .title.complete {
      color: lightgreen;
    }

    /* Make title ipr green */
    .title.ipr {
      color: lightblue;
    }

    /* Timeline dot  */
    .title::before {
      content: "";
      position: absolute;
      width: 15px;
      height: 15px;
      background: orange;
      border-radius: 999px;
      left: -39px;
      border: 3px solid grey;
    }
    .title.complete::before {
      content: "";
      position: absolute;
      width: 15px;
      height: 15px;
      background: lightgreen;
      border-radius: 999px;
      left: -39px;
      border: 3px solid grey;
    }
    .title.ipr::before {
      content: "";
      position: absolute;
      width: 15px;
      height: 15px;
      background: lightblue;
      border-radius: 999px;
      left: -38.5px;
      border: 3px solid grey;
    }
    </style>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="timeline.js"></script>
  </body>
</html>
