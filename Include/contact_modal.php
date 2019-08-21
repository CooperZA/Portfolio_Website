<!-- Modal HTML Markup -->
<div id="ContactForm" class="modal fade">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title text-dark">Send Me a Message</h1>
                </div>
                <div class="modal-body">
                    <form class="contactform" role="form" method="POST" action="sendemail.php" autocomplete>
                        <input type="hidden" name="_token" value="">
                        <div class="form-group">
                            <label for="name" class="control-label text-body">Name</label>
                            <div>
                                <input type="text" class="form-control" id="name" name="name" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="control-label text-body">Email</label>
                            <div>
                                <input type="email" class="form-control" id="email" name="email" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message" class="control-label text-body">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="4" cols="6"></textarea>
                        </div>
                        <div class="form-group">
                            <div>
                                <!-- <button type="submit" class="btn btn-info">Submit</button> -->
                                <input type="submit" value="Submit" class="btn btn-info">
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->