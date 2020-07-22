<form method="post">
    <div class="form-group">
        <label>Math score:</label>
        <input type="number" class="form-control" value="<?php echo $score['maths'] ?>" name="maths">
    </div>
    <div class="form-group">
        <label>Physical score:</label>
        <input type="number" class="form-control" value="<?php echo $score['physical'] ?>" name="physical">
    </div>
    <div class="form-group">
        <label>Chemistry score:</label>
        <input type="number" class="form-control" value="<?php echo $score['chemistry'] ?>" name="chemistry">
    </div>
    <div class="form-group">
        <label>English score:</label>
        <input type="number" class="form-control" value="<?php echo $score['english'] ?>" name="english">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="student_id" value="<?php echo $score['student_id']?>" hidden >
    </div>

    <button type="submit" class="btn btn-primary">UPDATE</button>
    <button onclick="window.history.go(-1); return false;" class="btn btn-secondary">CANCEL</button>
</form>
