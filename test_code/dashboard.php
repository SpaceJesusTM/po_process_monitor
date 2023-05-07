<!-- This is a comment-->
<!--Tasks: align search bar + table, move table lower, order rows by date, add search feature-->
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
      table.table-bordered{
        vertical-align: middle;
        padding-left: 15px;
        height: 60px;
      }
      table.table-bordered > thead > tr > th{
        vertical-align: middle;
        padding-left: 15px;
        height: 60px;
      }
      table.table-bordered > tbody > tr > td{
        vertical-align: middle;
        padding-left: 15px;
        height: 60px;
      }
      td:last-child {
        text-align: center;
      }
      .gfg {
        border-collapse:separate;
        border-spacing:0 7px;
      }
      .SearchBar {
        height: 40px;
        width: 600px;        
        padding-left: 15px;
      }
      .btn-size{
        width: 42px;
        height: 42px;
      }
      .container {
			  position: relative;
			  padding: 15px;
		  }
      .btnDesign {
        background-color: white;
        color: grey;
        border: 1px solid grey;
        border-radius: 5px;
        padding: 5px 10px;
      }
      

    </style>
    <!-- edit above later does this go in this file or the css file... olivia-->
    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Socle PO Process Dashboard</a>
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
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
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

      <!--search bar for database table-->
<<<<<<< HEAD
      <!-- Can remove the button, or remove onekeyup="tableSearch()" depending on wanted usage -->
      <form onsubmit="tableSearch(); return false;">
      <div class="SearchBar input-group col-md-4">
        <input class="form-control py-2" type="search" placeholder="Search" id="example-search-input"/>
          <span class="input-group-append">
          <button class="btn btn-outline-secondary btn-size" type="submit">
=======
      <!--should the search be fixed and scrollable-->
      
      <!-- Can remove the button, or remove onekeyup="tableSearch()" depending on wanted usage -->
      <div class="SearchBar input-group col-md-4">
        <input class="form-control py-2" type="search" placeholder="Search" id="example-search-input" onkeyup="tableSearch()"/>
          <span class="input-group-append">
          <button class="btn btn-outline-secondary btn-size" type="button" onclick="tableSearch()">
>>>>>>> 78448a5ebe8a8116149c68757d30c35f8edd5cf5
            <i data-feather="search"></i>
          </button>
        </span>
      </div>
    </form>

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
			$csvFile = 'data_formate.csv';
			$csv = csvToArray($csvFile);
      
		  ?>
		  <!--need to order by name when date is the same-->
      <!--design is kind bad but change later-->
      <div class="container">
        <button class = "btnDesign" onclick="sortArray('name', 'ascend')">Sort by Name (A-Z)</button>
	      <button class = "btnDesign" onclick="sortArray('name', 'descend')">Sort by Name (Z-A)</button>
	      <button class = "btnDesign" onclick="sortArray('date', 'ascend')">Sort Oldest to Newest</button>
	      <button class = "btnDesign" onclick="sortArray('date', 'descend')">Sort by Newest to Oldest</button>
	    </div>
      
      <table id="myTable" class="table table-dark table-hover table-fixed table-bordered gfg">
        <tbody>	
			  <?php		           
           if (isset($_POST['sort_type']) && isset($_POST['sort_order'])) {
            $sortType = $_POST['sort_type'];
            $sortOrder = $_POST['sort_order'];
            //remove header to sort the remaining table
            $header = array_shift($csv); 
            
            usort($csv, function($a, $b) use ($sortType, $sortOrder) {
              if ($sortType == 'name') {
                $result = strcmp($a[1], $b[1]);
              } else {
                $dateA = strtotime($a[2]);
                $dateB = strtotime($b[2]);
                $result = ($dateA < $dateB) ? -1 : 1;
              }
              return ($sortOrder == 'descend') ? -$result : $result;
            });
            //append header back 
            array_unshift($csv, $header);
          }

				  for ( $i=0 ; $i<count($csv)-1 ; $i++ ) {
					  echo "<tr>";
						  echo "<td>";
                if(isset($csv[$i+1][2])) {
                  echo $csv[$i+1][2] ;
                }
						  echo "</td>";
						  echo "<td>";
                if(isset($csv[$i+1][1])) {
                  echo "客戶: ";
                  echo $csv[$i+1][1] ;
                }
						  echo "</td>";
						  echo "<td>";
                if(isset($csv[$i+1][3])) {
                  echo "訂單: ";
                  echo $csv[$i+1][3] ;
                }
						  echo "</td>";
              echo "<td>";            
                echo "PN: ";                
						  echo "</td>";
              echo '<td><button type="button" class="btn btn-sm btn-outline-secondary">| 詳細 |</button></td>'; 
            echo "</tr>";
				  }
			  ?>      
        </tbody>
      </table>
    </main>
  </div>
</div>   

  <script>
	  function sortArray(sortType, sortOrder) {
    $.ajax({
      type: "POST",
      url: "dashboard.php",
      data: { sort_type: sortType, sort_order: sortOrder },
      success: function(data) {
        var $tableData = $(data);
        $("#myTable tbody").replaceWith($tableData.find("#myTable tbody"));
      }
    });
    // To check button response
    // console.log(sortType, sortOrder);
  }
  </script> 
  <!-- Script to search table, for now make it print to console to check funtioanilty -->
  <script>
    function tableSearch() {
      let input, filter, found, table, tr, td, i, j;

      // Initialize variables
      input = document.getElementById("example-search-input");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");

      for(i = 0; i < tr.length; i++) {
        // Searching all columns
        td = tr[i].getElementsByTagName("td");
        for(j = 0; j < td.length; j++) {
          if(td[j].innerHTML.toUpperCase().indexOf(filter) > -1) {
            found = true;
          }
        }
        if(found) {
          tr[i].style.display = "";
          found = false;
        } else {
          tr[i].style.display = "none";
        }

        // Search by name, which is the second column
        // td = tr[i].getElementsByTagName("td")[1];
        // if(td) {
        //   txtValue = td.textContent || td.innerText;
        //   if(txtValue.toUpperCase().indexOf(filter) > -1) {
        //     tr[i].style.display = "";
        //   } else {
        //     tr[i].style.display = "none";
        //   }
        // }
      }

      // To check button/textbox response
      // console.log("searching");
    }
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>