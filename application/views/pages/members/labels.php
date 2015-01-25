<article id="profile_data">
    <header>
        <h2>My labels</h2>
        <p>Add / Edit your label</p>
    </header>

        <?php echo form_open( 'members/labels/upload_file',  'id="upload_title" class="form-horizontal"'); ?>

        <div class="form-group">
            <label for="label_title" class="control-label col-xs-4">Label name <span class="text-danger">*</span></label>
            <div class="col-xs-7">
                <input type="text" class="form-control" name="label_title" id="label_title" placeholder="Your label name...">
            </div>
        </div>

        <div class="form-group">
            <label for="labelPicture" class="control-label col-xs-4">Label picture</label>
            <div class="col-xs-7">
                <input type="file" name="labelPicture" id="labelPicture">
                <p class="help-block">Example block-level help text here.</p>
            </div>

        </div>

        <div class="form-group">
            <div class="col-xs-offset-4 col-xs-4">
                <button type="submit" class="btn btn-primary">Add label</button>
            </div>
        </div>

    <?php echo form_close(); ?>
    <h4>files:</h4>
     <div id="files"></div>

    <?php
    if (isset($files) && count($files))
    {
        ?>
            <ul>
                <?php
                foreach ($files as $file)
                {
                    ?>
                    <li class="image_wrap">
                        <a href="#" class="delete_file_link" data-file_id="<?php echo $file['id']?>">Delete</a>
                        <strong><?php echo $file['title']?></strong>
                        <br />
                        <?php echo $file['filename']?>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </form>
        <?php
    }
    else
    {
        ?>
        <p>No Files Uploaded</p>
        <?php
    }
    ?>
</article>