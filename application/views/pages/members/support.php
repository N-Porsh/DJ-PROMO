<article id="profile_data">
    <header>
        <h2>Support</h2>
        <p>If you have any questions, please contact us</p>
    </header>

    <?php echo form_open('members/support/new_query','class="form-horizontal" id="sup_new_query"'); ?>

        <div class="form-group">
            <label for="support_topic" class="control-label col-xs-4">Topic</label>
            <div class="col-xs-7">
                <select class="form-control" name="support_topic" id="support_topic">
                  <option>Choose topic</option>
                  <option>Service problem</option>
                  <option>Website bug</option>
                  <option>Other</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="support_descr" class="control-label col-xs-4">Description <span class="text-danger">*</span></label>
            <div class="col-xs-7">
                <textarea class="form-control" name="support_descr" id="support_descr" rows="5"></textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="col-xs-offset-4 col-xs-4">
                <button type="submit" class="btn btn-primary">Send</button>
            </div>
        </div>

    <?php echo form_close(); ?>
</article>

<article id="profile_data">
    <header>
        <p>via E-mail</p>
    </header>

    <form class="form-horizontal" >
        <div class="form-group">
            <label class="control-label col-xs-4">E-Mail</label>
            <div class="col-xs-7">
                <p class="form-control-static"><a href="mailto:dj-promo@djpromo.com?subject=support" "dj-promo">dj-promo@djpromo.com</a></p>
            </div>
        </div>
    </form>
</article>