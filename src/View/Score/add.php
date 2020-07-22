
<form method="post">
    <div class="form-group">
        <label>Math score:</label>
        <input type="number" class="form-control" placeholder="maths score" name="maths">
    </div>
    <div class="form-group">
        <label>Physical score:</label>
        <input type="number" class="form-control" placeholder="physical score" name="physical">
    </div>
    <div class="form-group">
        <label>Chemistry score:</label>
        <input type="number" class="form-control" placeholder="chemistry score" name="chemistry">
    </div>
    <div class="form-group">
        <label>English score:</label>
        <input type="number" class="form-control" placeholder="english score" name="english">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="student_id" value="<?php echo $student['name']?>"  readonly >
    </div>

    <button type="submit" class="btn btn-primary">ADD</button>
    <button onclick="window.history.go(-1); return false;" class="btn btn-secondary">CANCEL</button>
</form>