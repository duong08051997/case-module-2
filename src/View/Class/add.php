
<form method="post">
    <div class="form-group">
        <label>Class Name:</label>
        <input type="text" class="form-control" placeholder="name" name="name">
    </div>
    <div class="form-group">
        <label>Status:</label>
        <textarea type="number" class="form-control" placeholder="status" name="status"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">ADD</button>
    <button onclick="window.history.go(-1); return false;" class="btn btn-secondary">CANCEL</button>
</form>