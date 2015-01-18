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
        <form class="form-horizontal" >

            <section>
                <header>
                    <p>Artist Details:</p>
                </header>
                <div class="form-group">
                    <label for="art_alias" class="control-label col-xs-4">Alias Name <span class="text-danger">*</span></label>
                    <div class="col-xs-7">
                        <input type="text" class="form-control" id="art_alias" placeholder="Enter alias name">
                    </div>
                </div>

                <div class="form-group">
                    <label for="art_web" class="control-label col-xs-4">Website</label>
                    <div class="col-xs-7">
                        <input type="text" class="form-control" id="art_web" placeholder="Your website URL">
                    </div>
                </div>

                 <div class="form-group">
                    <label class="control-label col-xs-4">Type</label>
                    <div class="col-xs-7">
                        <label class="radio-inline">
                          <input type="radio" name="art_type" id="art_rad_1" value="1">Label Artist
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="art_type" id="art_rad_2" value="2">Guest Remixer
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
                        <label for="art_soc_myspace" class="control-label col-xs-5">Myspace</label>
                        <div class="col-xs-12">
                            <input type="text" class="form-control" id="art_soc_myspace" placeholder="Myspace URL">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="art_soc_myspace" class="control-label col-xs-5">Facebook</label>
                        <div class="col-xs-12">
                            <input type="text" class="form-control" id="art_soc_myspace" placeholder="Facebook URL">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="art_soc_myspace" class="control-label col-xs-5">YouTube</label>
                        <div class="col-xs-12">
                            <input type="text" class="form-control" id="art_soc_myspace" placeholder="YouTube URL">
                        </div>
                    </div>

                  </div>
                  <div class="col-xs-6">
                    <div class="form-group">
                        <label for="art_soc_myspace" class="control-label col-xs-5">SoundCloud</label>
                        <div class="col-xs-12">
                            <input type="text" class="form-control" id="art_soc_myspace" placeholder="SoundCloud URL">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="art_soc_myspace" class="control-label col-xs-5">Twitter</label>
                        <div class="col-xs-12">
                            <input type="text" class="form-control" id="art_soc_myspace" placeholder="Twitter URL">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="art_soc_myspace" class="control-label col-xs-5">Blog/RSS</label>
                        <div class="col-xs-12">
                            <input type="text" class="form-control" id="art_soc_myspace" placeholder="Blog/RSS URL">
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
                        <textarea class="form-control" id="art_biography" rows="7"></textarea>
                    </div>
                </div>

                <div class="row">
                  <div class="col-xs-7">
                        <div class="form-group">
                            <label for="exampleInputFile" class="control-label col-xs-5">Artist image</label>
                            <div class="col-xs-7">
                                <input type="file" id="exampleInputFile">
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

        </form>
      </div>

    </div>
</article>