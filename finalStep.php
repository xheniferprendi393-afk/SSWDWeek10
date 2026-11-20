<?php
session_start();

include("finalStepHeader.html");

echo "Firstname: " . htmlspecialchars($_SESSION['passengerFN']);
echo "<br>";

echo "Surname: " . htmlspecialchars($_SESSION['passengerSN']);
echo "<br>";

if ($_SESSION['luggage'] == 1) {
    echo "Bags under 10 KG: " . htmlspecialchars($_SESSION['subTenKG']);
    echo "<br>";

    echo "Bags between 10 and 20 KG: " . htmlspecialchars($_SESSION['overTenKG']);
}
?>
</div>
</div>
</h4>

<form method="POST" action="confirm.php">

    <div class="form-group">
        <label class="control-label col-sm-12 text-center">
            Is the above information correct?
        </label>

        <div class="checkbox col-sm-12 text-center">
            <label>
                <input type="checkbox" name="confirm" value="Yes">
                Yes
            </label>
        </div>
    </div>

    <div class="col-sm-12 text-center">
        <button type="submit" class="btn btn-default">
            Continue
        </button>
    </div>

</form>

</body>
</html>
