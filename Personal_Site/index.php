  <body class="w3-white w3-animate-top">
    <!---Navbar--->
    <?php include "./includes/navBar.php" ?>

    <!-- Header/Home -->
    <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
      <h1>
        <span class="w3-hide-small"></span>Καλως Ηρθατε Στην Πρωσοπικη Μου
        Σελιδα
      </h1>
    </header>

    <!-- About Section -->
    <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
      <h2 class="w3-text-light-black">Κύρκος Πέτρος</h2>
      <hr style="width: 200px;" class="w3-opacity" />
      <h5>
        Καλώς ήρθατε στην προσωπική μου Ιστοσελίδα. Ονομάζομαι Πέτρος Κύρκος και σπουδάζω στο τμήμα Μηχανικών Πληροφορικής στο 
        Διεθνές Πανεπιστήμιο Ελλάδος (ΔΙΠΑΕ) πρώην Αλεξάνδριο Τεχνολογικό Ίδρυμα Θεσσαλονίκης (ΤΕΙΘΕ).
      </h5>


      

      <!-----------------------------Main Starts------------------------------------------------------------->
      <div class="container">
        <div class="row">
          <div class="col-sm-8">
            <article>
              Η επιστήμη των Ηλεκτρονικών Υπολογιστών με γοήτευσε από μικρή ηλικία. 
              Η περιέργεια μου για το υλικό κομματι τους με έκανε να ασχοληθώ για αρχή με το πως λειτουργεί. 
              Μετά μου ήρθε το μικρόβιο του προγραμματισμου. Αυτό κυρίως ήρθε και από την περιέργειά μου για την 
              δημιουργία ηλεκτρονικών παιχνιδιών.

            </article>
          </div>
          <!----------------------------------Left Side Content---------------------------------------------------->
          <div
            class="sidebar col-sm-4 border bg-light"
            id="sidebar">
            <?php include "./includes/leftSideContent.php" ?>
          </div>
        </div>
      </div>

      <!-- END PAGE CONTENT -->
    </div>
    <!-- Footer -->
    <?php include "./includes/footer.php" ?> 
  </body>
</html>


