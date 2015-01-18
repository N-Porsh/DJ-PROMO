<article id="profile_data">
    <header>
        <h2>Promote</h2>
        <p>Promote New Release</p>
    </header>

    <!-- Nav tabs -->
    <ul class="nav nav-tabs text-uppercase" role="tablist">
      <li class="active"><a href="#promote" role="tab" data-toggle="tab">promote</a></li>
      <li><a href="#promote_list" role="tab" data-toggle="tab">Promotion list</a></li>
    </ul>
    <div class="tab-content">
    <br>
      <div class="tab-pane fade in active" id="promote">
        <form  class="form-horizontal" >

            <section>

                <div class="row">
                  <div class="col-xs-6">

                    <div class="form-group">
                        <label for="usr_label" class="control-label col-xs-12">Release Artist Name <span class="text-danger">*</span></label>
                        <div class="col-xs-12">
                            <input type="text" class="form-control" id="usr_label" placeholder="Release Artist Name...">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="usr_label" class="control-label col-xs-12">Release Name <span class="text-danger">*</span></label>
                        <div class="col-xs-12">
                            <input type="text" class="form-control" id="usr_label" placeholder="Release Name...">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="usr_country" class="control-label col-xs-12">Record Label</label>
                        <div class="col-xs-12">
                            <select class="form-control" id="usr_country">
                              <option>Choose Record Label...</option>
                              <option>Syndicate Recordings</option>
                              <option>Funny recordings</option>
                              <option>Promo recordings</option>
                              <option>Future JK</option>
                            </select>
                        </div>
                    </div>

                <div class="form-group">
                    <label class="control-label col-xs-12">Release Type</label>
                    <div class="col-xs-12">
                        <label class="radio-inline">
                          <input type="radio" name="art_type" id="art_rad_1" value="1">Single
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="art_type" id="art_rad_2" value="2">EP
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="art_type" id="art_rad_2" value="2">Album
                        </label>
                    </div>
                </div>

                  </div>
                  <div class="col-xs-6">
                    <div class="form-group">
                        <div id="rel_art_example" class="alert alert-warning" role="alert">
                          <strong>Release Artist name</strong><br> Enter the artist / band name of this release including any featuring, presents, versus artists. <br><br> Example : <br> Alhemist feat by Mister Minsk
                        </div>
                    </div>

                  </div>
                </div>

            </section>

            <section>
                <header>
                    <p>Add release details</p>
                </header>
                <div class="row">
                  <div class="col-xs-6">

                    <div class="form-group">
                        <label for="art_soc_myspace" class="control-label col-xs-12">Release Data</label>
                        <div class="col-xs-12">
                            <input type="text" class="form-control" id="art_soc_myspace" placeholder="Release Data...">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="art_soc_myspace" class="control-label col-xs-12">Release Genre</label>
                        <div class="col-xs-12">
                            <input type="text" class="form-control" id="art_soc_myspace" placeholder="Release Genre...">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="art_soc_myspace" class="control-label col-xs-12">Release Duration</label>
                        <div class="col-xs-12">
                            <input type="text" class="form-control" id="art_soc_myspace" placeholder="Release Duration...">
                        </div>
                    </div>

                  </div>
                  <div class="col-xs-6">
                    <div class="form-group">
                        <label for="art_soc_myspace" class="control-label col-xs-12">Release Artists</label>
                        <div class="col-xs-12">
                            <input type="text" class="form-control" id="art_soc_myspace" placeholder="Release Artists...">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="art_soc_myspace" class="control-label col-xs-12">Link to release</label>
                        <div class="col-xs-12">
                            <input type="text" class="form-control" id="art_soc_myspace" placeholder="Link to release...">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputFile"  class="control-label col-xs-12">Upload Music</label>
                        <div  class="col-xs-12">
                            <input id="upl_music" type="file" class="form-control" >
                        </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                    <label for="art_biography" class="control-label col-xs-4">Release description</label>
                    <div class="col-xs-12">
                        <textarea class="form-control" id="art_biography" rows="7"></textarea>
                    </div>
                </div>

                <div class="row">
                  <div class="col-xs-7">
                        <div class="form-group">
                            <label for="exampleInputFile" class="control-label col-xs-5">Release image</label>
                            <div class="col-xs-7">
                                <input type="file" id="exampleInputFile">
                                <p class="help-block">Upload release image </p>
                            </div>
                        </div>
                  </div>
                  <div class="col-xs-4">
                    <img src="../assets/images/profile.jpg" alt="..." class="img-rounded">
                  </div>
                </div>
            </section>

            <div class="form-group">
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary">Promote release</button>
                </div>
            </div>

        </form>
      </div>

      <div class="tab-pane fade" id="promote_list">
        <section>
            <header>
                <p>Add new artist:</p>
            </header>
            <form class="form-horizontal" >
                <div class="form-group">
                    <label for="art_web" class="control-label col-xs-4">E-Mail <span class="text-danger">*</span></label>
                    <div class="col-xs-7">
                        <input type="text" class="form-control" id="art_web" placeholder="Artist E-Mail">
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

                <div class="form-group">
                    <div class="col-xs-offset-4 col-xs-4">
                        <button type="submit" class="btn btn-primary">Add to my List</button>
                    </div>
                </div>
            </form>
        </section>
        <section>
            <header>
                <p>My artists list:</p>
            </header>
            <div class="btn-group btn-group-justified">
                <div class="btn-group">
                <button type="button" class="btn btn-default">Invite All</button>
                </div>
                <div class="btn-group">
                <button type="button" class="btn btn-default">Something else</button>
                </div>
                <div class="btn-group">
                <button type="button" class="btn btn-default">Whot</button>
                </div>
            </div>
            <br>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>E-Mail</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Bixxy</td>
                        <td>Bixxy@gmail.com</td>
                        <td>
                            <a href="" class="label label-default">Invite</a>
                            <a href="" class="label label-primary">Remove</a>
                            <a href="" class="label label-success">Send msg</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>DJ Kan</td>
                        <td>kan.dj-go@truee.com</td>
                        <td>
                            <span class="glyphicon glyphicon-send"></span>
                            <span class="glyphicon glyphicon-remove"></span>
                            <span class="glyphicon glyphicon-envelope"></span>
                        </td>
                    </tr>

                </tbody>
            </table>
        </section>

      </div>
    </div>

</article>