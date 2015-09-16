<div class="main col-sm-6">
    <h2><?php echo $title ?></h2>

    <?php echo validation_errors(); ?>

    <?php echo form_open('news/create') ?>
        <div class="form-group">
            <label for="inputTitle" class="control-label">Title</label>
            <input id="inputTitle" class="name-box form-control" type="text" name="title" value="<?php echo set_value('title'); ?>" required>
        </div>
        <div class="form-group">
            <label for="inputText" class="control-label">Text</label>
            <textarea id="inputText" class="un-box form-control" type="text" name="text" ><?php echo set_value('text'); ?></textarea>
        </div>
        <div class="form-group">
            <input type="submit" id="submit_signup" name="submit" class="btn btn-primary" value="Create news item">
        </div>
    </form>
</div>