<form method="POST">
    <input type="hidden"  name="Driver_id" value="<?php echo $driver[0]['Driver_id'] ?>"/>
    <br />
    F_name
    <input type="text"  name="F_name" value="<?php echo $driver[0]['F_name'] ?>"/>
    <br />
    L_name
    <input type="text"  name="L_name" value="<?php echo $driver[0]['L_name'] ?>"/>
    <br />
<!--    Gender-->
<!--    <input type="text"  name="Gender" />-->
    Gender
<!--    <input type="text"  name="Gender"/>-->
    <br />
    <select name="Gender" >
        <option value="<?php echo $driver[0]['Gender'] ?>"><?php echo $driver[0]['Gender'] ?></option>
        <option value="Male">Male</option>
        <option value="FeMale">FeMale</option>
    </select>
    <br />
    Conatct_no
    <input type="text"  name="Conatct_no" value="<?php echo $driver[0]['Conatct_no'] ?>"/>
    <br />
    Rating
    <input type="number"  name="Rating" value="<?php echo $driver[0]['Rating'] ?>"/>
    <br />
    Age
    <input type="number"  name="Age" value="<?php echo $driver[0]['Age'] ?>"/>
    <br />
    Experience
    <input type="text"  name="Experience" value="<?php echo $driver[0]['Experience'] ?>"/>
    <br />
    <input type="submit" value="Update" />
</form>