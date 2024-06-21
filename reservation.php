<?php
    include_once 'headerreguser.php';
    ?>
    <br>
    
    <div>
    <div class="form" >
            <form method="post" id="reserveForm" action="insert_reservation.php">
            <h1>Book Your Day !!</h1>

                <input type="hidden" name="res_ID" >
                <input type="hidden" name="userID" value = "<?php echo isset($_SESSION['userID']) ? $_SESSION['userID'] : ''; ?>">

                <label for="firstName" style="width:500px; margin-left:35px" >Full Name : </label>
                <input type="text" id="firstName" name="firstName" value = "<?php echo isset($_SESSION['userN']) ? $_SESSION['userN'] : ''; ?>" style="width:500px; margin-left:35px"><br>
                
                <label for="nic" style="margin-left:25px;"> Select Package : </label>
            
                <select name="nic" style="width:500px; margin-left:35px">

                <option value="Adventure Package">Adventure Package</option>
                <option value="Beach Getaway">Beach Getaway</option>
                <option value="City Exploration">City Exploration</option>
                <option value="Ski Trip">Ski Trip</option>
                <option value="Luxury Cruise">Luxury Cruise</option>

            </select>

                
                <label for="email" style="width:500px; margin-left:35px" >E-mail : </label>
                <input type="text" id="email" name="email" value = "<?php echo isset($_SESSION['userE']) ? $_SESSION['userE'] : ''; ?>" style="width:500px; margin-left:35px"><br>
                
                <label for="phoneNo" style="width:500px; margin-left:35px">Phone Number : </label>
                <input type="text" id="phoneNo" name="phoneNo" value = "<?php echo isset($_SESSION['userTP']) ? $_SESSION['userTP'] : ''; ?>" style="width:500px; margin-left:35px"><br>
                
                <label for="checkIn" style="width:500px; margin-left:35px">Check-In : </label>
                <input type="date" id="checkIn" name="checkIn" style="width:500px; margin-left:35px"  required><br>
                
                <label for="checkOut" style="width:500px; margin-left:35px">Check-Out : </label>
                <input type="date" id="checkOut" name="checkOut" style="width:500px; margin-left:35px" required><br>
                
                <label for="noOfAdults" style="width:500px; margin-left:35px">No of adults : </label>
                <input type="number" id="noOfAdults" name="noOfAdults"style="width:500px; margin-left:35px"required><br>
                
                <label for="noOfChildren" style="width:500px; margin-left:35px">No of children : </label>
                <input type="number" id="noOfChildren" name="noOfChildren" style="width:500px; margin-left:35px" required><br>
                
                <label for="remark" style="width:500px; margin-left:35px" >Remark : </label>
                <input type="text" id="remark" name="remark" style="width:500px; margin-left:35px"><br>
                
                <center>
                <input type="submit" style="width:500px; margin-left:-25px">
                </center>
            </form>
    </div>
</div>
   
    <br>
    <?php
    include_once 'footer.php';
    ?>


 