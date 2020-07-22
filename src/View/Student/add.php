<form method="post">
    <div class="form-group">
        <label>Name:</label>
        <input type="text" class="form-control" placeholder="name" name="name">
    </div>
    <div class="form-group">
        <label>Age:</label>
        <input type="number" class="form-control" placeholder="age" name="age">
    </div>
    <div >
        <label>Gender:</label>
        <input type="radio"  value="male" name="gender">Male
        <input type="radio"  value="female" name="gender">Female
    </div>
    <div class="form-group">
        <label>Address</label>
        <textarea type="text" class="form-control" placeholder="address" name="address"></textarea>
    </div>
    <div class="form-group">
        <label>Email:</label>
        <input type="email" class="form-control" placeholder="xxx@gmail.com" name="email">
    </div>
    <div class="form-group">
        <label>Class:</label>
        <input type="text" class="form-control" name="class_id" value="<?php echo $class['name'] ?>" readonly>
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
    <button onclick="window.history.go(-1); return false;" class="btn btn-secondary">CANCEL</button>
</form>