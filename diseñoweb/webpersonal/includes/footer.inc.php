<div class="footer-container">
            <footer class="wrapper">
                <h3>&copy;
				  <?php
				  $startYear = 2011;
				  $thisYear = date('y');
				  if ($startYear == $thisYear) {
				    echo $startYear;
				  } else {
				    echo "{$startYear}&#8211;{$thisYear}";
				  }
				  ?>
				  Abelabs</h3>
            </footer>
        </div>