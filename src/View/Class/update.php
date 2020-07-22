<!--<form action="" method="post">-->
<!--    <input type="text" name="name" value="--><?php //echo $class['name']?><!--" placeholder="Class name">-->
<!--    <input type="text" name="status" value="--><?php //echo $class['status']?><!--" placeholder="Class status">-->
<!--    <input type="submit" value="UPDATE">-->
<!--</form>-->
<form method="post">
    <div class="form-group">
        <label>Class Name:</label>
        <input type="text" class="form-control" value="<?php echo $class['name']?>"  name="name">
    </div>
    <div class="form-group">
        <label>Status:</label>
        <textarea type="number" class="form-control" value="<?php echo $class['status']?>" name="status"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">UPDATE</button>
    <button onclick="window.history.go(-1); return false;" class="btn btn-secondary">CANCEL</button>
</form>