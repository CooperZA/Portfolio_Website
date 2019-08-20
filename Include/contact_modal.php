<!-- Modal HTML Markup -->
<div id="ContactForm" class="modal fade">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title text-dark">Send Me a Message</h1>
                </div>
                <div class="modal-body">
                    <form class="formbook" role="form" method="POST" action="booknow.php" autocomplete>
                        <input type="hidden" name="_token" value="">
                        <div class="form-group">
                            <label class="control-label text-body">Name</label>
                            <div>
                                <input type="name" class="form-control" id="name" name="name" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label text-body">Email</label>
                            <div>
                                <input type="email" class="form-control" id="email" name="email" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label text-body" for="message">Message</label>
                            <textarea class="form-control" id="Message" name="message" rows="3" cols="6"></textarea>
                        </div>
                        <div class="form-group">
                            <div>
                                <button type="submit" class="btn btn-info">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->