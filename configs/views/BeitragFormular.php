<form method="put" action="api/beitrag/">

    <div class="form-group">
        <label for="beitrag">Beitrag</label>
        <input type="text" name="beitrag" class="form-control" id="beitrag" value="<?php echo $this->beitrag; ?>">
    </div>

    <input type="hidden" name="category" value="<?php echo $this->category; ?>">
    <input type="hidden" name="id" id="id" value="<?php echo $this->id; ?>">

</form>