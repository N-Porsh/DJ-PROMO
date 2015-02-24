<article id="profile_data">
    <header>
        <h2>Artists</h2>
        <p>Add / Edit artist</p>
    </header>


    <!-- Nav tabs -->
    <ul class="nav nav-tabs text-uppercase" role="tablist">
      <li class="active"><a href="#artists" role="tab" data-toggle="tab">Artists</a></li>
      <li><a href="#new_artist" role="tab" data-toggle="tab">New artist</a></li>
    </ul>

    <div class="tab-content">
        <br>
      <div class="tab-pane fade in active" id="artists">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Artist name</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Bixxy</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Frik</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Tiesto</td>
                </tr>
            </tbody>
        </table>

      </div>
      <div class="tab-pane fade" id="new_artist">

        <?php echo form_open('members/artists/add_artist',  'id="add_artist" class="form-horizontal"'); ?>
            <section>
                <header>
                    <p>Artist Details:</p>
                </header>
                <div class="form-group">
                    <label for="art_alias" class="control-label col-xs-4">Alias Name <span class="text-danger">*</span></label>
                    <div class="col-xs-7">

                        <?php echo form_input('art_alias', '', 'class="form-control" id="art_alias" placeholder="Enter alias name"'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="art_web" class="control-label col-xs-4">Website</label>
                    <div class="col-xs-7">
                        <?php echo form_input('art_web', '', 'class="form-control" id="art_web" placeholder="Website URL"'); ?>
                    </div>
                </div>

                 <div class="form-group">
                    <label class="control-label col-xs-4">Type</label>
                    <div class="col-xs-7">
                        <label class="radio-inline">
                          <?php echo form_radio('art_type', 1, FALSE, 'id="art_type"'); ?>Label Artist
                        </label>
                        <label class="radio-inline">
                          <?php echo form_radio('art_type', 2, FALSE, 'id="art_type"'); ?>Guest Remixer
                        </label>
                    </div>
                </div>
            </section>

            <section>
                <header>
                    <p>Social Networking Links:</p>
                </header>
                <div class="row">
                  <div class="col-xs-6">

                    <div class="form-group">
                        <label for="art_myspace" class="control-label col-xs-5">Myspace</label>
                        <div class="col-xs-12">
                            <?php echo form_input('art_myspace', '', 'class="form-control" id="art_myspace" placeholder="Myspace URL"'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="art_fb" class="control-label col-xs-5">Facebook</label>
                        <div class="col-xs-12">
                            <?php echo form_input('art_fb', '', 'class="form-control" id="art_fb" placeholder="Facebook URL"'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="art_youtube" class="control-label col-xs-5">YouTube</label>
                        <div class="col-xs-12">
                            <?php echo form_input('art_youtube', '', 'class="form-control" id="art_youtube" placeholder="YouTube URL"'); ?>
                        </div>
                    </div>

                  </div>
                  <div class="col-xs-6">
                    <div class="form-group">
                        <label for="art_sc" class="control-label col-xs-5">SoundCloud</label>
                        <div class="col-xs-12">
                            <?php echo form_input('art_sc', '', 'class="form-control" id="art_sc" placeholder="SoundCloud URL"'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="art_tw" class="control-label col-xs-5">Twitter</label>
                        <div class="col-xs-12">
                            <?php echo form_input('art_tw', '', 'class="form-control" id="art_tw" placeholder="Twitter URL"'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="art_rss" class="control-label col-xs-5">Blog/RSS</label>
                        <div class="col-xs-12">
                            <?php echo form_input('art_rss', '', 'class="form-control" id="art_rss" placeholder="Blog/RSS URL"'); ?>
                        </div>
                    </div>
                  </div>
                </div>

            </section>
            <section>
                <header>
                    <p>Artist Information:</p>
                </header>
                <div class="form-group">
                    <label for="art_biography" class="control-label col-xs-4">biography</label>
                    <div class="col-xs-12">
                        <?php echo form_textarea('art_bio', '', 'class="form-control" id="art_bio"'); ?>
                    </div>
                </div>

                <div class="row">
                  <div class="col-xs-7">
                        <div class="form-group">
                            <label for="art_img" class="control-label col-xs-5">Artist image</label>
                            <div class="col-xs-7">
                                <input type="file" name="art_img" id="art_img">
                                <p class="help-block">Upload artist image (optional)</p>
                            </div>
                        </div>
                  </div>
                  <div class="col-xs-4">
                    <img src="../assets/images/profile.jpg" alt="..." class="img-rounded">
                  </div>
                </div>
            </section>

            <div class="form-group">
                <div class=" col-xs-12">
                    <button type="submit" class="btn btn-primary">Save new Artist</button>
                </div>
            </div>

        <?php echo form_close(); ?>
      </div>

    </div>
</article>