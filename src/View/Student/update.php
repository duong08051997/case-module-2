
<form method="post">
    <div class="form-group">
        <label>Name:</label>
        <input type="text" class="form-control" placeholder="name" name="name" value="<?php echo $student['name']?>">
    </div>
    <div class="form-group">
        <label>Age:</label>
        <input type="number" class="form-control" placeholder="age" value="<?php echo $student['age']?>" name="age"  >
    </div>
    <div >
        <label>Gender:</label>
        <input type="radio"  value="male" name="gender" checked>Male
        <input type="radio"  value="female" name="gender">Female
    </div>
    <div class="form-group">
        <label>Address</label>
        <textarea type="text" class="form-control" placeholder="address" name="address"><?php echo $student['address']?></textarea>
    </div>
    <div class="form-group">
        <label>Email:</label>
        <input type="email" class="form-control" placeholder="xxx@gmail.com" name="email" value="<?php echo $student['email']?>">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="class_id" value="<?php echo $student['class_id']?>" hidden>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <button onclick="window.history.go(-1); return false;" class="btn btn-secondary">CANCEL</button>
</form>