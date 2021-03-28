<section class = "banner">
            <h2>BOOK YOUR TABLE NOW</h2>
            <div class = "card-container">
                <div class = "card-img">
                    <!-- image here -->
                </div>

                <div class = "card-content">
                    <h3>Reservation</h3>
                    <form action="../preorder.php">
                        <div class = "form-row">
                            <input type = "date" placeholder="Select Date">

                            <select name = "hours">
                                <option value = "session-select">Select Session</option>
                                <option value = "1">Breakfast</option>
                                <option value = "1">Lunch</option>
                                <option value = "1">Dinner</option>
                            </select>
                        </div>

                        <div class = "form-row">
                            <input type = "number" placeholder="How Many Persons?" min = "1">
                            <button onclick="myFunction()" class="reserve-button pulsate" type="" href="../preorder.php" name="submit">Reserve a Table</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <script>
            function myFunction() {
                if (confirm("Do you want to preorder?")){
                    form.action = 'preorder.php';
                } else {
                    form.action = 'success.php';
                }
            }
        </script>


